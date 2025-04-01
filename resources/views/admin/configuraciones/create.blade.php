@extends('adminlte::page')

@section('content_header')
<h1><b>Registrar nueva configuracion</b></h1>
<hr>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Llene los datos del formulario</h3>
            </div>

            <div class="card-body">
                <form action="{{url('admin/configuraciones/create')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-grup">
                                        <label for="">Nombre de la empresa <span style="color: red;">*</span></label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-home"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="nombre" placeholder="Escribe aqui.." required>
                                        </div>
                                        @error('nombre')
                                        <small style="color: red; font-size: 12px;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-grup">
                                        <label for="">Descripcion de la empresa <span style="color: red;">*</span></label>
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-university"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="descripcion" placeholder="Escribe aqui.." required>
                                        </div>
                                        @error('descripcion')
                                        <small style="color: red; font-size: 12px;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-grup">
                                        <label for="">Direccion <span style="color: red;">*</span></label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-map-marked"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="direccion" placeholder="Escribe aqui.." required>
                                        </div>
                                        @error('direccion')
                                        <small style="color: red; font-size: 12px;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-grup">
                                        <label for="">Teléfono <span style="color: red;">*</span></label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="telefono" placeholder="Escribe aqui.." required>
                                        </div>
                                        @error('telefono')
                                        <small style="color: red; font-size: 12px;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-grup">
                                        <label for="">Email <span style="color: red;">*</span></label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                            </div>
                                            <input type="email" class="form-control" name="email" placeholder="Escribe aqui.." required>
                                        </div>
                                        @error('email')
                                        <small style="color: red; font-size: 12px;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-grup">
                                        <label for="">Pagina web</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pager"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="web" placeholder="Escribe aqui.." >
                                        </div>
                                        @error('web')
                                        <small style="color: red; font-size: 12px;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-grup">
                                        <label for="">Moneda <span style="color: red;">*</span></label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-coins"></i></span>
                                            </div>
                                            <select name="moneda" id="" required>
                                                <option value="usd">Dolar Estadounidense (USD)</option>
                                                <option value="eur">Euro (EUR)</option>
                                                <option value="gbp">Libra Esterlina (GBP)</option>
                                                <option value="jpy">Yen Japonés (JPY)</option>
                                                <option value="Bs">Bolivianos (BS)</option>
                                            </select>
                                        </div>
                                        @error('moneda')
                                        <small style="color: red; font-size: 12px;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="logo">Logo <span style="color: red;">*</span></label>
                            <input type="file" id="logo" name="logo" accept=".jpg, .jpeg, .png" class="form-control" >
                            @error('logo')
                            <small style="color: red; font-size: 12px;">{{ $message }}</small>
                            @enderror
                            <br>
                            <center><output id="list"></output></center>
                            <script>
                                function archivo(evt) {
                                    var files = evt.target.files; // FileList object
                                    // Obtenemos la imagen del campo "file".
                                    for (var i = 0, f; f = files[i]; i++) {
                                        //Solo admitimos imágenes.
                                        if (!f.type.match('image.*')) {
                                            continue;
                                        }
                                        var reader = new FileReader();
                                        // Read the image file as a data URL.
                                        reader.onload = (function(theFile) {
                                            return function(e) {
                                                // Insertamos el img en el div con id = "list"
                                                document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,
                                                    '" width="70%" title="', escape(theFile.name), '"/>'
                                                ].join('');
                                            };
                                        })(f);
                                        reader.readAsDataURL(f);
                                    }
                                }
                                document.getElementById('logo').addEventListener('change', archivo, false);
                            </script>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{url('/admin/configuraciones')}}" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
<style>

</style>
@stop

@section('js')
<script>

</script>
@stop