@extends('layouts/layoutPrincipalAdmin')
@extends('shared/navbar')
@section('contenidoPrincipal')
    <div class="container">
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="content">
                        <div class="back">
                            <div class="back-content">
                                <img src="https://www.pngmart.com/files/21/Admin-Profile-PNG-Clipart.png" width="70px"
                                    height="70px" alt="">
                                <strong>Usuarios</strong>
                            </div>
                        </div>
                        <div class="front">

                            <div class="img">
                                <div class="circle">
                                </div>
                                <div class="circle" id="right">
                                </div>
                                <div class="circle" id="bottom">
                                </div>
                            </div>

                            <div class="front-content">
                                <small class="badge">Gestion de usuarios</small>
                                <div class="description">
                                    <p class="card-footer">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-6 d-flex justify-content-center">
                                            <a href="{{ route('registros') }}" class="btn btn-primary">Registros</a>
                                        </div>
                                        <div class="col-6 d-flex justify-content-center">
                                            <a href="{{ route('nuevoUsuario') }}" class="btn btn-danger">Agregar</a>
                                        </div>
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="content">
                        <div class="back">
                            <div class="back-content">
                                <img src="https://www.pngmart.com/files/21/Admin-Profile-Vector-PNG-Clipart.png"
                                    width="70px" height="70px" alt="">
                                <strong>Estudiantes</strong>
                            </div>
                        </div>
                        <div class="front">
                            <div class="img">
                                <div class="circle">
                                </div>
                                <div class="circle" id="right">
                                </div>
                                <div class="circle" id="bottom">
                                </div>
                            </div>

                            <div class="front-content">
                                <small class="badge">Gestion de estudiantes</small>
                                <div class="description">
                                    <p class="card-footer">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-6 d-flex justify-content-center">
                                            <a href="{{ route('estudiantesIndex') }}" class="btn btn-primary">Registros</a>
                                        </div>
                                        <div class="col-6 d-flex justify-content-center">
                                            <a href="{{ route('nuevoEstudiante') }}" class="btn btn-danger">Agregar</a>
                                        </div>
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center mt-4">
            <div class="col-6">
                <div class="card">
                    <div class="content">
                        <div class="back">
                            <div class="back-content">
                                <img src="https://static.vecteezy.com/system/resources/previews/010/160/299/non_2x/document-file-icon-paper-doc-sign-free-png.png"
                                    width="70px" height="70px" alt="">
                                <strong>Creditos</strong>
                            </div>
                        </div>
                        <div class="front">
                            <div class="img">
                                <div class="circle">
                                </div>
                                <div class="circle" id="right">
                                </div>
                                <div class="circle" id="bottom">
                                </div>
                            </div>

                            <div class="front-content">
                                <small class="badge">Gestion de creditos</small>
                                <div class="description">
                                    <p class="card-footer">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-4 d-flex justify-content-center">
                                            <a href="{{ route('civicos') }}" class="btn btn-primary">Civicos</a>
                                        </div>
                                        <div class="col-4 d-flex justify-content-center">
                                            <a href="{{ route('culturales') }}" class="btn btn-warning">Culturales</a>
                                        </div>
                                        <div class="col-4 d-flex justify-content-center">
                                            <a href="{{ route('deportivos') }}" class="btn btn-danger">Deportivos</a>
                                        </div>
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
