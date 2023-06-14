<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <h1 class="m-0">NextEducation</h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto py-0">
            <a href="{{ route('home') }}" class="nav-item nav-link">Inicio</a>
            <a href="{{ route('front.courses') }}" class="nav-item nav-link">Cursos</a>
            <a href="{{ route('front.plans') }}" class="nav-item nav-link">Planes</a>

            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categorias
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Desarrollo web</a>
                    <a class="dropdown-item" href="#">Arquitectura de Redes</a>
                    <a class="dropdown-item" href="#">Administración de base de datos</a>
                    <a class="dropdown-item" href="#">Protección de sistemas</a>
                    <a class="dropdown-item" href="#">Analisis de big data</a>
                    <a class="dropdown-item" href="#">Comercio electrónicos</a>
                    <a class="dropdown-item" href="#">Desarrollo de apps moviles</a>
                    <a class="dropdown-item" href="#">Implementación de servidores</a>
                </div>
            </div> 
        </div>
        @if (Route::has('login'))
        @auth
        <a href="{{ route('dashboard') }}" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Panel</a>
        @else
        <a href="{{ route('login') }}" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Iniciar sesion</a>    
        @endauth
        
        @endif
    </div>
</nav>
