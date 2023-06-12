@extends('layouts/layoutAdmin')
@extends('layouts/layoutPrincipalAdmin')
@extends('shared/navbar')
@section('contenido')
    <div class="container" style="color: white">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Usuarios registrados</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="{{ route('nuevoUsuario')}}" class="btn btn-primary">Ingresar nuevo usuario</a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <table id="example" class="table table-striped table-bordered nowrap" style="width:100%; color:white;">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido paterno</th>
                            <th>Apellido materno</th>
                            <th>E-mail</th>
                            <th>Usuario</th>
                            <th>Contrasena</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td style="color: white;">{{ $item->name }}</td>
                                <td style="color: white;">{{ $item->paterno }}</td>
                                <td style="color: white;">{{ $item->materno }}</td>
                                <td style="color: white;">{{ $item->email }}</td>
                                <td style="color: white;">{{ $item->user }}</td>
                                <td style="color: white;">{{ $item->passwordOriginal }}</td>
                                <td style="color: white;"><a href="{{ route('actualizar', $item->id) }}" class="btn btn-warning">&nbsp;&nbsp;Editar&nbsp;&nbsp;</a></td>
                                <td style="color: white;"><a href="{{ route('showUsuario', $item->id) }}" class="btn btn-danger">Eliminar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
