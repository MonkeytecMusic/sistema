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
                                            <img src="{{asset('img/logo.jpg')}}"
                                                style="width: 185px;" alt="logo">
                                            <h4 class="mt-1 mb-5 pb-1">Acesso al sistema ITMA II</h4>
                                        </div>
                                        <form action="{{ route('logear') }}" method="post">
                                            @csrf
                                            <label for="user">Usuario</label>
                                            <input type="text" class="form-control" name="user">
                                            <label for="password">Contrasena</label>
                                            <input type="password" class="form-control" name="password">
                                            <button class="btn btn-primary mt-3">Entrar</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                        <h4 class="mb-4 text-center">Historia</h4>
                                        <p class="small mb-0 text-center">El origen de los Institutos Tecnológicos se remonta a finales
                                            de la década de los 50’s, pero en la CDMX los Institutos tecnológicos nacieron
                                            por decreto presidencial el 24 de julio de 2014 por el presidente Enrique Peña
                                            Nieto constituyendose así el Tecnológico Nacional de México (TNM) que tiene
                                            adscritos a 266 Institutos Tecnológicos, unidades y centros de investigación,
                                            docencia y desarrollo de educación superior tecnológica.</p>
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
