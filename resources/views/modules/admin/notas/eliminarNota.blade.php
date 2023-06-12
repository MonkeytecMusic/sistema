@extends('layouts/layoutPrincipalAdmin')
@extends('shared/navbar')
@section('contenidoPrincipal')
    <div class="container">
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-6">
                <div class="card" style="height: 350px">
                    <div class="card-header">
                        <h2 class="text-center" style="color: red">Eliminar nota</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <a href="{{route('notas')}}" class="btn btn-primary">Regresar</a>
                            </div>
                        </div>
                        <form action="{{route('destroyNota',$item->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <div class="row mt-4">
                                <div class="col-12" style="color: red">
                                    Se borrara permanentemente el registro con la siguiente informacion!!
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <b>Horas del evento: </b>{{$item->horas}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <b>Nombre del evento: </b>{{$item->evento}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <b>No. de control del estudiante: </b>{{$item->noDeControl}}
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center mt-4">
                                <div class="col-2">
                                    <button class="btn btn-danger">Eliminar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection