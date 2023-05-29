@extends('layouts/layoutAdmin')
@extends('layouts/layoutPrincipalAdmin')
@extends('shared/navbar')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{ route('nuevoUsuario')}}" class="btn btn-primary">Ingresar nuevo usuario</a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
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
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->paterno }}</td>
                                <td>{{ $item->materno }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->user }}</td>
                                <td>{{ $item->passwordOriginal }}</td>
                                <td><a href="{{ route('actualizar', $item->id) }}" class="btn btn-warning">&nbsp;&nbsp;Editar&nbsp;&nbsp;</a></td>
                                <td><a href="{{ route('show', $item->id) }}" class="btn btn-danger">Eliminar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
