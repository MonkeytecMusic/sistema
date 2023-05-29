@extends('layouts/layoutPrincipalAdmin')
@extends('shared/navbar')
@section('contenidoPrincipal')
    <div class="container">
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-6">
                <div class="card" style="height: 600px">
                    <div class="card-header">
                        <h2 class="text-center">Nuevo usuario</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <a href="/admin/registroUsuario" class="btn btn-danger">Regresar</a>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <form action="/admin/store" method="post">
                                    @csrf
                                    @method('POST')
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="name">Nombre</label>
                                            <input type="text" class="form-control" name="name" required>
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
                                        <div class="col-12">
                                            <label for="name">Correo</label>
                                            <input type="email" class="form-control" name="email" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="name">Usuario</label>
                                            <input type="text" class="form-control" name="user" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="password">Contrasena</label>
                                            <input type="password" class="form-control" name="password" required>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-3">
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
