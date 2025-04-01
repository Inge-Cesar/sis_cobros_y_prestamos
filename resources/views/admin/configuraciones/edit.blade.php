@extends('adminlte::page')

@section('content_header')
<h1><b>Editar configuración</b></h1>
<hr>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-success">
            <div class="card-header">
                <h3 class="card-title">Actualice los datos del formulario</h3>
            </div>

            <div class="card-body">
                <form action="{{ url('admin/configuraciones', $configuracion->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
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
                                            <input type="text" class="form-control" name="nombre" value="{{ $configuracion->nombre }}" placeholder="Escribe aqui.." required>
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
                                            <input type="text" class="form-control" name="descripcion" value="{{ $configuracion->descripcion }}" placeholder="Escribe aqui.." required>
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
                                            <input type="text" class="form-control" name="direccion" value="{{ $configuracion->direccion }}" placeholder="Escribe aqui.." required>
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
                                            <input type="text" class="form-control" name="telefono" value="{{ $configuracion->telefono }}" placeholder="Escribe aqui.." required>
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
                                            <input type="email" class="form-control" name="email" value="{{ $configuracion->email }}" placeholder="Escribe aqui.." required>
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
                                            <input type="text" class="form-control" name="web" value="{{ $configuracion->web }}" placeholder="Escribe aqui..">
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
                                                <option value="usd" {{ $configuracion->moneda == 'usd' ? 'selected' : '' }}>Dolar Estadounidense (USD)</option>
                                                <option value="eur" {{ $configuracion->moneda == 'eur' ? 'selected' : '' }}>Euro (EUR)</option>
                                                <option value="gbp" {{ $configuracion->moneda == 'gbp' ? 'selected' : '' }}>Libra Esterlina (GBP)</option>
                                                <option value="jpy" {{ $configuracion->moneda == 'jpy' ? 'selected' : '' }}>Yen Japonés (JPY)</option>
                                                <option value="Bs" {{ $configuracion->moneda == 'Bs' ? 'selected' : '' }}>Bolivianos (BS)</option>
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
                            <input type="file" id="file" name="logo" accept=".jpg, .jpeg, .png" class="form-control">
                            @error('logo')
                            <small style="color: red; font-size: 12px;">{{ $message }}</small>
                            @enderror
                            <br>
                            <center>
                                <output id="list">
                                    <img src="{{ asset('storage/' . $configuracion->logo) }}" alt="imagen" width="70%">
                                </output>
                            </center>
                            <script>
                                function archivo(evt) {
                                    var files = evt.target.files; // FileList object
                                    for (var i = 0, f; f = files[i]; i++) {
                                        if (!f.type.match('image.*')) {
                                            continue;
                                        }
                                        var reader = new FileReader();
                                        reader.onload = (function(theFile) {
                                            return function(e) {
                                                document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,
                                                    '" width="70%" title="', escape(theFile.name), '"/>'
                                                ].join('');
                                            };
                                        })(f);
                                        reader.readAsDataURL(f);
                                    }
                                }
                                document.getElementById('file').addEventListener('change', archivo, false);
                            </script>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{ url('/admin/configuraciones') }}" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-success">Modificar</button>
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