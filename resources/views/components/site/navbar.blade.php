<!-- Inicio do nav -->
<nav class="navbar navbar-expand-lg bg-navy py-4">
    <div class="container-fluid ">
        <a href="/" class="me-5"><img src="{{ asset('storage/imagem/logo.png') }}" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <img src="{{ asset('storage/imagem/icon/menu-hamburguer.png') }}" alt="menu-hamburguer">
        </button>
        <div class="row collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="col-lg-10 navbar-nav">
                <li class="nav-item text-center">
                    <a class="nav-link text-white fs-4" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link text-white fs-4" aria-current="page" href="/produtos">Produtos</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link text-white fs-4" href="/about">Sobre nós</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link text-white fs-4" href="/dicas">Dica de Moda</a>
                </li>
            </ul>
            <ul class="col-lg-2 navbar-nav">
                @auth
                    <li class="nav-item text-center">
                        <a href="{{ url('/dashboard') }}" class="btn-navy text-white fs-4">Dashboard</a>
                    </li>
                @else
                    <li class="nav-item text-center">
                        <button type="button" class="btn-navy text-white fs-4" data-bs-toggle="modal" data-bs-target="#login">
                            Login
                        </button>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<!-- Fim do nav -->