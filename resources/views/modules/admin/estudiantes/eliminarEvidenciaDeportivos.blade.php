@extends('layouts/layoutPrincipalAdmin')
@extends('shared/navbar')
@section('contenidoPrincipal')
    <div class="container">
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Eliminar evidencia</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <a href="{{route('deportivos')}}" class="btn btn-primary">Regresar</a>
                            </div>
                        </div>
                        <form action="{{route('destroyEvidencia',$item->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <div class="row text-center">
                                <div class="col-12">
                                    <b class="text-center">Eliminar evidencia de participacion</b>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-12">
                                    <b>Archivo: </b>{{$item->nombreArchivo}}
                                </div>
                            </div>      
                            <div class="row mt-4 d-flex justify-content-center">
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