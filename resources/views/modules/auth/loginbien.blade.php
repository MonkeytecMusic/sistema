<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>

<body
    style="background: rgb(18,222,205);
background: linear-gradient(90deg, rgba(18,222,205,1) 0%, rgba(0,169,219,0.6124649688977153) 79%);">
    <div class="container">
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">LOGIN</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('logear') }}" method="post">
                            @csrf
                            <label for="name">Usuario</label>
                            <input type="text" class="form-control" name="name">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password">
                            <button class="btn btn-primary mt-3">Entrar</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>