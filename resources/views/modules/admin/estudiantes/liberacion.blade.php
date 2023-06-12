@extends('layouts/layoutPrincipalAdmin')
@extends('shared/navbar')
@section('contenidoPrincipal')
    <div class="container">
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-12">
                <div class="card" style="height: 400px; width: 100%">
                    <div class="card-header">
                        <h2 class="text-center">Liberacion de credito</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <a href="{{ route('deportivos') }}" class="btn btn-danger">Regresar</a>
                            </div>
                        </div>
                        <form action="{{ route('actualizarLiberacion', $items->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mt-4">
                                <div class="col-12">
                                    <label for="liberacion">Subir documento</label>
                                    <input type="file" name="liberacion" id="" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12">
                                    <label for="">Nombre del archivo</label>
                                    <input type="text" name="nombreArchivo" id="" class="form-control" required>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center mt-4">
                                <div class="col-1">
                                    <button class="btn btn-primary">Subir documento</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
