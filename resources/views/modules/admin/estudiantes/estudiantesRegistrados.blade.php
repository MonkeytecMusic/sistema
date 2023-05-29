@extends('layouts/layoutAdmin')
@extends('layouts/layoutPrincipalAdmin')
@extends('shared/navbar')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{ route('nuevoEstudiante') }}" class="btn btn-primary">Registrar estudiante</a>
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
                            <th>No. de control</th>
                            <th>Telefono</th>
                            <th>Carrera</th>
                            <th>Fecha de nacimiento</th>
                            <th>Escuela de procedencia(Preparatoria)</th>
                            <th>Fecha de ingreso a ITMA 2</th>
                            <th>C. Deportivos</th>
                            <th>C. Civicos</th>
                            <th>C. Culturales</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->paterno }}</td>
                                <td>{{ $item->materno }}</td>
                                <td>{{ $item->noDeControl }}</td>
                                <td>{{ $item->telefono }}</td>
                                <td>{{ $item->carrera }}</td>
                                <td>{{ $item->fechaNacimiento }}</td>
                                <td>{{ $item->preparatoria }}</td>
                                <td>{{ $item->ingresoITMA2 }}</td>
                                <td><a href="{{ route('deportivos', $item) }}" class="btn btn-danger">{{$item->deportivos}}</a> Hrs. Registradas {{$item->hrsDeportivos}}</td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="btn btn-danger">{{$item->civicos}}</div> Hrs. Registradas {{$item->hrsCivicos}}</td>
                                <td>&nbsp;<div class="btn btn-danger">{{$item->culturales}}</div> Hrs. Registradas {{$item->hrsCulturales}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
