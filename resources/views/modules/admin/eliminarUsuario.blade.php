@extends('layouts/layoutPrincipalAdmin')
@extends('shared/navbar')
@section('contenidoPrincipal')
    <div class="container">
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-6">
                <div class="card" style="height: 400px">
                    <div class="card-header text-center">
                        <h2>Eliminar usuario</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <a href="/admin/registroUsuario" class="btn btn-primary">Regresar</a>
                            </div>
                        </div>
                        <form action="{{ route('destroy', $items->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <div class="row">
                                <div class="col-12">
                                    <b>Nombre: </b>{{ $items->name }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <b>Apellido paterno: </b>{{ $items->paterno }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <b>Apellido materno: </b>{{ $items->materno }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <b>E-mail: </b>{{ $items->email }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <b>Usuario: </b>{{ $items->user }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <b>Contrasena: </b>{{ $items->password }}
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-3">
                                    <button class="btn btn-danger">Eliminar</button>
                                </div>
                            </div>
                        </form>
                        <div class="row d-flex text-center">
                            <div class="col-12">
                                <p style="color: red;">Es imposible volver a utilizar el usuario</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
