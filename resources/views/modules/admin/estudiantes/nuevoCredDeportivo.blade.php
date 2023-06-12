@extends('layouts/layoutPrincipalAdmin')
@extends('shared/navbar')
@section('contenidoPrincipal')
    <div class="container">
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-12">
                <div class="card" style="height: 400px; width: 100%">
                    <div class="card-header">
                        <h2 class="text-center">Nuevo registro</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <a href="{{route('deportivos')}}" class="btn btn-danger">Regresar</a>
                            </div>
                        </div>
                        <form action="{{ route('nuevoDeportivo') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="row mt-4">
                                <div class="col-6">
                                    <label for="">Carpeta oficina</label>
                                    <input type="text" name="oficina" id="" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label for="">Estudiante</label>
                                    <select name="estudiante" id="" class="form-select">
                                        @foreach ($items as $item)
                                            <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                                        @endforeach
                                    </select>
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
