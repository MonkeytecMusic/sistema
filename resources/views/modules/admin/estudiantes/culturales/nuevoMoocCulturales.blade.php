@extends('layouts/layoutPrincipalAdmin')
@extends('shared/navbar')
@section('contenidoPrincipal')
    <div class="container">
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-12">
                <div class="card" style="height: 400px; width: 100%">
                    <div class="card-header">
                        <h2 class="text-center">Registrar MOOC</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <a href="{{route('culturales')}}" class="btn btn-danger">Regresar</a>
                            </div>
                        </div>
                        <form action="{{ route('editarMoocCultural', $items->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mt-4">
                                <div class="col-12">
                                    <label for="mooc">Ingresa constancia del mooc</label>
                                    <input type="file" name="mooc" id="" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12">
                                    <label for="nombreArchivo">Ingresa el nombre del archivo</label>
                                    <input type="text" name="nombreArchivo" id="" class="form-control" required>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center mt-4">
                                <div class="col-1">
                                    <button class="btn btn-primary">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
