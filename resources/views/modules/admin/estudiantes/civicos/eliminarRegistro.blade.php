@extends('layouts/layoutPrincipalAdmin')
@extends('shared/navbar')
@section('contenidoPrincipal')
    <div class="container">
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Eliminar registro completo</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <a href="{{route('civicos')}}" class="btn btn-primary">Regresar</a>
                            </div>
                        </div>
                        <form action="{{route('destroyCivicos', $items->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <div class="row d-flex text-center mt-4">
                                <div class="col-12">
                                    <b>Eliminar registro permanentemente! :(</b>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center mt-4">
                                <div class="col-2">
                                    <button class="btn btn-danger">Borrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection