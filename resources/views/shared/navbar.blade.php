<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarCenteredExample"
            aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
            <!-- Left links -->
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('admin_index') }}"><img
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Pok%C3%A9_Ball_icon.svg/1200px-Pok%C3%A9_Ball_icon.svg.png"
                            width="40px" height="40px" alt=""></a>
                </li>
                <li class="nav-item mt-2">
                    <a class="nav-link" href="{{ route('registros') }}">Usuarios</a>
                </li>
                <li class="nav-item mt-2">
                    <a class="nav-link" href="{{ route('estudiantesIndex') }}">Estudiantes</a>
                </li>
                <li class="nav-item mt-2">
                    <a class="nav-link" href="{{ route('notas') }}">Notas</a>
                </li>
                <li class="nav-item dropdown mt-2">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Creditos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('civicos')}}">Civicos</a></li>
                        <li><a class="dropdown-item" href="{{route('culturales')}}">Culturales</a></li>
                        <li><a class="dropdown-item" href="{{route('deportivos')}}">Deportivos</a></li>
                    </ul>
                </li>
                <li class="nav-item mt-2">
                    <a class="nav-link" href="{{ route('logout') }}">Salir</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
