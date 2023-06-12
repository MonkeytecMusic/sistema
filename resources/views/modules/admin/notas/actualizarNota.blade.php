@extends('layouts/layoutPrincipalAdmin')
@extends('shared/navbar')
@section('contenidoPrincipal')
    <div class="container">
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-8">
                <div class="card" style="height: 400px; width: 100%">
                    <div class="card-header">
                        <h2 class="text-center">Actualizar nota</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <a href="{{ route('notas') }}" class="btn btn-danger">Regresar</a>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <form action="{{route('updateNota',$items->id)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="name">Horas del evento</label>
                                            <input type="number" class="form-control" name="horas" value="{{$items->horas}}" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="name">Nombre del evento</label>
                                            <input type="text" class="form-control" name="evento" value="{{$items->evento}}" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="estudiante">Estudiante</label>
                                            <select name="estudiante" id="" class="form-select">
                                                @foreach ($estudiantes as $estudiante)
                                                    <option value="{{ $estudiante->id }}">{{ $estudiante->nombre }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-2">
                                            <button class="btn btn-warning mt-3">Actualizar</button>
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
