@extends('adminlte::page')

@section('content_header')
<h1><b>Listado de Usuarios</b></h1>
<hr>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Usuarios Registrados</h3>

                <div class="card-tools">
                    <a href="{{url('/admin/usuarios/create')}}" class="btn btn-primary">Crear nuevo usuario</a>
                </div>
            </div>

            <div class="card-body">
                <table id="table1" class="table table-bordered table-striped table-sm">
                    <thead style="text-align: center;">
                        <tr>
                            <th>Nro</th>
                            <th>Rol del usuario</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php    
                            $contador = 1;
                        @endphp
                        @foreach ($usuarios as $usuario)
                        <tr style="text-align: center;">
                            <td>{{$contador++}}</td>
                            <td>{{$usuario->roles->pluck('name')->implode(', ')}}</td>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->email}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{url('/admin/usuarios/'.$usuario->id)}}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                                    <a href="{{url('/admin/usuarios/'.$usuario->id.'/edit')}}" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                    <form action="{{url('/admin/usuarios/'.$usuario->id)}}" method="POST" style="display: inline;" id="n1Formulario{{$usuario->id}}" onsubmit="preguntar{{$usuario->id}}(event)">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                    </form>
                                </div>
                                <script>
                                    function preguntar{{$usuario->id}}(event) {
                                        event.preventDefault();
                                        Swal.fire({
                                            title: '¿Está seguro de eliminar este usuario?',
                                            text: "¡No podrás revertir esto!",
                                            icon: 'question',
                                            showCancelButton: true,
                                            confirmButtonText: 'Eliminar',
                                            confirmButtonColor: '#a5161d',
                                            cancelButtonText: 'Cancelar',
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                document.getElementById('n1Formulario{{$usuario->id}}').submit();
                                            }
                                        });
                                    }
                                </script>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
<style>
    #table1_wrapper .dt-buttons {
        background-color: transparent;
        box-shadow: none;
        border: none;
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-bottom: 15px;
    }

    #table1_wrapper .btn {
        color: #fff;
        border-radius: 4px;
        padding: 5px 15px;
        font-size: 14px;
    }

    .btn-danger {
        background-color: #dc3545;
        border: none;
    }

    .btn-success {
        background-color: #28a745;
        border: none;
    }

    .btn-info {
        background-color: #17a2b8;
        border: none;
    }

    .btn-warning {
        background-color: #ffc107;
        color: #212529;
        border: none;
    }

    .btn-primary {
        background-color: #6e7176;
        color: #212529;
        border: none;
    }
</style>
@stop

@section('js')
<script>
    $(function() {
        $('#table1').DataTable({
            "pageLength": 5,
            "lengthMenu": [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "Todos"]
            ],
            "language": {
                "lengthMenu": "Mostrar _MENU_ usuarios",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
                "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
                "infoFiltered": "(filtrado de _MAX_ total usuarios)",
                "search": "Buscar:",
                "zeroRecords": "No se encontraron resultados",
                "paginate": {
                    "first": "Primero",
                    "last": "Último",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,
            buttons: [{
                    text: '<i class="fas fa-copy"></i> COPIAR',
                    extend: 'copy',
                    className: 'btn btn-info',
                    exportOptions: {
                        columns: ':not(:last-child)' // ✅ Excluye la última columna (Acciones)
                    }
                },
                {
                    text: '<i class="fas fa-file-excel"></i> EXCEL',
                    extend: 'excel',
                    className: 'btn btn-success',
                    exportOptions: {
                        columns: ':not(:last-child)' // ✅ Excluye la última columna (Acciones)
                    }
                },
                {
                    text: '<i class="fas fa-file-pdf"></i> PDF',
                    extend: 'pdf',
                    className: 'btn btn-danger',
                    exportOptions: {
                        columns: ':not(:last-child)' // ✅ Excluye la última columna (Acciones)
                    }
                },
                {
                    text: '<i class="fas fa-print"></i> IMPRIMIR',
                    extend: 'print',
                    className: 'btn btn-warning',
                    exportOptions: {
                        columns: ':not(:last-child)' // ✅ Excluye la última columna (Acciones)
                    }
                }
            ]
        }).buttons().container().appendTo('#table1_wrapper .col-md-6:eq(0)');

    });
</script>
@stop
