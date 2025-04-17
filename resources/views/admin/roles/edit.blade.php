@extends('adminlte::page')

@section('content_header')
<h1><b>Editar rol</b></h1>
<hr>
@stop

@section('content')
<div class="row">
    <div class="col-md-5">
        <div class="card card-outline card-success">
            <div class="card-header">
                <h3 class="card-title">Actualice los datos del formulario</h3>
            </div>

            <div class="card-body">
                <form action="{{ url('admin/roles/' . $rol->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nombre del rol <span style="color: red;">*</span></label>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="name" value="{{ old('name', $rol->name) }}" placeholder="Escribe aquí..." required>
                                </div>
                                @error('name')
                                <small style="color: red; font-size: 12px;">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <a href="{{ url('/admin/roles') }}" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-success">Actualizar</button>
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
