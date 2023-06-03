@extends('layouts/layoutAdmin')
@extends('layouts/layoutPrincipalAdmin')
@extends('shared/navbar')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="#" class="btn btn-primary">Agregar documentos</a>
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
                            <th>No de control</th>
                            <th>Evidencia</th>
                            <th>Hrs. del evento</th>
                            <th>Subir documentos</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{ $item->nombreAlumno }}</td>
                                <td>{{ $item->paternoAlumno }}</td>
                                <td>{{ $item->maternoAlumno }}</td>
                                <td>{{ $item->NoDeControl }}</td>
                                <td>{{ $item->nombreArchivo }}</td>
                                <td>{{ $item->hrsEvento }}</td>
                                <td><a href="#" class="btn btn-warning">Subir documentos</a></td>
                                <td><a href="#" class="btn btn-danger">Eliminar documentos</a></td>
                            </tr>
                            
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
