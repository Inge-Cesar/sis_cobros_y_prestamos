@extends('adminlte::page')

@section('content_header')
<h1><b>Editar Usuario</b></h1>
<hr>
@stop

@section('content')
<div class="row">
    <div class="col-md-5">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Modifique los datos necesarios</h3>
            </div>

            <div class="card-body">
                <form action="{{ url('admin/usuarios/'.$usuario->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Rol <span style="color: red;">*</span></label>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                                    </div>
                                    <select name="rol" class="form-control" required>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->name }}" {{ $usuario->roles->contains('name', $role->name) ? 'selected' : '' }}>
                                                {{ $role->name }}
                                            </option>
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
                                    <input type="text" class="form-control" name="name" value="{{ $usuario->name }}" required>
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
                                    <input type="email" class="form-control" name="email" value="{{ $usuario->email }}" required>
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
                                <label for="">Contraseña (dejar en blanco si no desea cambiarla)</label>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" name="password" placeholder="Nueva contraseña (opcional)">
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
                                <label for="">Repetir la contraseña</label>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmar nueva contraseña">
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
                                <a href="{{ url('/admin/usuarios') }}" class="btn btn-secondary">Cancelar</a>
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
