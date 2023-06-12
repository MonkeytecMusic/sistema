@extends('layouts/layoutAdmin')
@extends('layouts/layoutPrincipalAdmin')
@extends('shared/navbar')
@section('contenido')
    <div class="container" style="color: white;">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Estudiantes registrados</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="{{ route('nuevoEstudiante') }}" class="btn btn-primary">Registrar estudiante</a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <table id="example" class="table table-bordered nowrap" style="width:100%; color:white;">
                    <thead>
                        <tr>
                            <th>No de control</th>
                            <th>Nombre</th>
                            <th>Apellido paterno</th>
                            <th>Apellido materno</th>
                            <th>Telefono</th>
                            <th>Carrera</th>
                            <th>Fecha de nacimiento</th>
                            <th>Escuela de procedencia(Preparatoria)</th>
                            <th>Fecha de ingreso a ITMA 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td style="color: white;">{{ $item->id }}</td>
                                <td style="color: white;">{{ $item->nombre }}</td>
                                <td style="color: white;">{{ $item->paterno }}</td>
                                <td style="color: white;">{{ $item->materno }}</td>
                                <td style="color: white;">{{ $item->telefono }}</td>
                                <td style="color: white;">{{ $item->carrera }}</td>
                                <td style="color: white;">{{ $item->fechaNacimiento }}</td>
                                <td style="color: white;">{{ $item->preparatoria }}</td>
                                <td style="color: white;">{{ $item->ingresoITMA2 }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
