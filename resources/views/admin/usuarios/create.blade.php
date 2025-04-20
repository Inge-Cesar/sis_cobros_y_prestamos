@extends('adminlte::page')

@section('content_header')
<h1><b>Registrar nuevo Usuario</b></h1>
<hr>
@stop

@section('content')
<div class="row">
    <div class="col-md-5">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Llene los datos del formulario</h3>
            </div>

            <div class="card-body">
                <form action="{{url('admin/usuarios/create')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Rol <span style="color: red;">*</span></label>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                                    </div>
                                    <select name="rol" id="" class="form-control" required>
                                        @foreach ($roles as $role)
                                            <option value="{{$role->name}}">{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('rol')
                                <small style="color: red; font-size: 12px;">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nombre del usuario <span style="color: red;">*</span></label>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="name" placeholder="Escribe aquí..." required>
                                </div>
                                @error('name')
                                <small style="color: red; font-size: 12px;">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Email <span style="color: red;">*</span></label>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="email" class="form-control" name="email" placeholder="Escribe aquí..." required>
                                </div>
                                @error('email')
                                <small style="color: red; font-size: 12px;">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Contraseña <span style="color: red;">*</span></label>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" name="password" placeholder="Escribe aquí..." required>
                                </div>
                                @error('password')
                                <small style="color: red; font-size: 12px;">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Repetir la contraseña <span style="color: red;">*</span></label>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Escribe aquí..." required>
                                </div>
                                @error('password_confirmation')
                                <small style="color: red; font-size: 12px;">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <a href="{{url('/admin/usuarios')}}" class="btn btn-secondary">Cancelar</a>
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
