@extends('layouts/layoutPrincipalAdmin')
@extends('shared/navbar')
@section('contenidoPrincipal')
    <div class="container">
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-8">
                <div class="card" style="height: 400px; width: 100%">
                    <div class="card-header">
                        <h2 class="text-center">Nueva nota</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <a href="{{ route('notas') }}" class="btn btn-danger">Regresar</a>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <form action="{{route('guardarNota')}}" method="post">
                                    @csrf
                                    @method('POST')
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="name">Horas del evento</label>
                                            <input type="number" class="form-control" name="horas" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="name">Nombre del evento</label>
                                            <input type="text" class="form-control" name="evento" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="estudiante">Estudiante</label>
                                            <select name="estudiante" id="" class="form-select">
                                                @foreach ($items as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-1">
                                            <button class="btn btn-primary mt-3">Guardar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
