<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Alumnos') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                <!-- agregar rutas-->
                <li>
                    <a class="nav-link" href="{{ route('grados.index') }}">Grados</a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('alumnos.index') }}">Alumnos</a>
                </li>
                <li>
                    <a class="nav-link" href="">Profesores</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Navbar -->

