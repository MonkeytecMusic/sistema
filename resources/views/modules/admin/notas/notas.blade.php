@extends('layouts/layoutAdmin')
@extends('layouts/layoutPrincipalAdmin')
@extends('shared/navbar')
@section('contenido')
<div class="container" style="color: white">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center">Notas</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="{{route('nuevaNota')}}" class="btn btn-primary">Nueva nota</a>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <table id="example" class="table table-bordered nowrap" style="width:100%; color:white;">
                <thead>
                    <tr>
                        <th>Horas</th>
                        <th>Evento</th>
                        <th>Estudiante</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td style="color: white;">{{ $item->horas }}</td>
                            <td style="color: white;">{{ $item->evento}}</td>
                            <td style="color: white;">{{ $item->noDeControl }}</td>
                            <td style="color: white;"><a href="{{route('vistaEditarNota',$item->id)}}" class="btn btn-warning">&nbsp;&nbsp;Editar&nbsp;&nbsp;</a></td>
                            <td style="color: white;"><a href="{{route('showNota',$item->id)}}" class="btn btn-danger">Eliminar</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection