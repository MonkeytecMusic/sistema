@extends('layouts/layoutPrincipalAdmin')
@extends('shared/navbar')
@section('contenidoPrincipal')
    <div class="container">
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-12">
                <div class="card" style="height: 650px; width: 100%">
                    <div class="card-header">
                        <h2 class="text-center">Nuevo estudiante</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <a href="/admin/estudiantes/estudiantesRegistrados" class="btn btn-danger">Regresar</a>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <form action="/admin/estudiantes/store" method="post">
                                    @csrf
                                    @method('POST')
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="name">Nombre</label>
                                            <input type="text" class="form-control" name="nombre" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="name">Apellido paterno</label>
                                            <input type="text" class="form-control" name="paterno" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="name">Apellido materno</label>
                                            <input type="text" class="form-control" name="materno" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="name">No. de control</label>
                                            <input type="number" class="form-control" name="noDeControl" required>
                                        </div>
                                        <div class="col-6">
                                            <label for="name">Telefono</label>
                                            <input type="tel" class="form-control" name="telefono" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="password">Carrera</label>
                                            <input type="text" class="form-control" name="carrera" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="password">Fecha de nacimiento</label>
                                            <input type="date" class="form-control" name="fechaNacimiento" required>
                                        </div>
                                        <div class="col-6">
                                            <label for="password">fecha de ingreso a ITMA 2</label>
                                            <input type="date" class="form-control" name="ingresoITMA2" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="password">Preparatoria de procedencia</label>
                                            <input type="text" class="form-control" name="preparatoria" required>
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
