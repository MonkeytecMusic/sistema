@extends('layouts/layoutPrincipalAdmin')
@extends('shared/navbar')
@section('contenidoPrincipal')
    <div class="container">
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-6">
                <div class="card" style="height: 580px">
                    <div class="card-header">
                        <h2 class="text-center">Actualizar usuario</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <a href="/admin/registroUsuario" class="btn btn-danger">Regresar</a>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <form action="{{ route('update', $items->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="name">Nombre</label>
                                            <input type="text" class="form-control" name="name"
                                                value="{{ $items->name }}" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="name">Apellido paterno</label>
                                            <input type="text" class="form-control" name="paterno"
                                                value="{{ $items->paterno }}" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="name">Apellido materno</label>
                                            <input type="text" class="form-control" name="materno"
                                                value="{{ $items->materno }}" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="name">Correo</label>
                                            <input type="email" class="form-control" name="email"
                                                value="{{ $items->email }}" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="name">Usuario</label>
                                            <input type="text" class="form-control" name="user"
                                                value="{{ $items->user }}" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="password">Contrasena</label>
                                            <input type="text" class="form-control" name="password"
                                                value="{{ $items->passwordOriginal }}" required>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-2">
                                            <button class="btn btn-warning mt-3">Editar</button>
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
