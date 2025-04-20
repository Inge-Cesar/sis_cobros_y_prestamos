@extends('adminlte::page')

@section('content_header')
<h1><b>Detalles del Usuario</b></h1>
<hr>
@stop

@section('content')
<div class="row">
    <div class="col-md-5">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Información del usuario</h3>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Rol:</label>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                                </div>
                                <input type="text" class="form-control" value="{{ $usuario->roles->pluck('name')->implode(', ') }}" disabled>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Nombre del usuario:</label>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" value="{{ $usuario->name }}" disabled>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Correo electrónico:</label>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                </div>
                                <input type="email" class="form-control" value="{{ $usuario->email }}" disabled>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <a href="{{url('/admin/usuarios')}}" class="btn btn-secondary">Volver</a>
                        </div>
                    </div>
                </div>
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
