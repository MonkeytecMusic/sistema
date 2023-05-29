@extends('layouts/layout')
@section('contenido')
<body class="h-100 gradient-form" style="background-color: #eee;">

    <section>
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                                            style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">Acesso al sistema ITMA II</h4>
                                    </div>
                                    <form action="{{ route('logear') }}" method="post">
                                        @csrf
                                        <label for="name">Nombre</label>
                                        <input type="text" class="form-control" name="name">
                                        <label for="name">Apellido paterno</label>
                                        <input type="text" class="form-control" name="paterno">
                                        <label for="name">Apellido materno</label>
                                        <input type="text" class="form-control" name="materno">
                                        <label for="name">Correo</label>
                                        <input type="email" class="form-control" name="email">
                                        <label for="name">Usuario</label>
                                        <input type="text" class="form-control" name="user">
                                        <label for="password">Contrasena</label>
                                        <input type="password" class="form-control" name="password">
                                        <button class="btn btn-primary mt-3">Entrar</button>
                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">We are more than just a company</h4>
                                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                        do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>
@endsection
