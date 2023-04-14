<!-- Inicio do nav-admin -->
<nav class="navbar navbar-expand-lg bg-navy py-4">
    <div class="container-fluid ">
        <a href="/" class="me-5"><img src="{{asset('storage/imagem/logo.png') }}" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <img src="{{asset('storage/imagem/icon/menu-hamburguer.png')}}" alt="menu-hamburguer">
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class=" col-lg-10 col-sm-12 navbar-nav">
                <li class="nav-item text-center">
                    <a class="nav-link text-white fs-4" aria-current="page" href="/dashboard">Home</a>
                </li>
                <li class="nav-item text-center dropdown">
                    <a class="nav-link dropdown-toggle text-white fs-4" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categoria
                    </a>
                    <ul class="dropdown-menu text-center">
                        <li><button type="button" class="dropdown-item" data-bs-toggle="modal"
                                data-bs-target="#categoria">Adicionar</button></li>
                        <li><a class="dropdown-item" href="/list/category">Listar</a></li>
                    </ul>
                </li>
                <li class="nav-item text-center dropdown">
                    <a class="nav-link dropdown-toggle text-white fs-4" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Coleção
                    </a>
                    <ul class="dropdown-menu text-center">
                        <li><button type="button" class="dropdown-item" data-bs-toggle="modal"
                                data-bs-target="#tipo">Adicionar</button></li>
                        <li><a class="dropdown-item" href="/list/collection">Listar</a></li>
                    </ul>
                </li>
                <li class="nav-item text-center dropdown">
                    <a class="nav-link dropdown-toggle text-white fs-4" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Produto
                    </a>
                    <ul class="dropdown-menu text-center">
                        <li><button type="button" class="dropdown-item" data-bs-toggle="modal"
                                data-bs-target="#produto">Adicionar</button></li>
                        <li><a class="dropdown-item" href="/list/clothing">Listar</a></li>
                    </ul>
                </li>
                <li class="nav-item text-center dropdown">
                    <a class="nav-link dropdown-toggle text-white fs-4" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Usuario
                    </a>
                    <ul class="dropdown-menu text-center">
                        <li><button type="button" class="dropdown-item" data-bs-toggle="modal"
                                data-bs-target="#user">Adicionar</button></li>
                        <li><a class="dropdown-item" href="/list/user">Listar</a></li>
                    </ul>
                </li>
            </ul>
            <div class="col-lg-2 col-sm-12 nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white text-center fs-4" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu text-center">
                    <li data-toggle="dropdown-item" ><a class="dropdown-item" href="/profile">Configuração</a></li>
                    <li data-toggle="dropdown-item" ><a class="dropdown-item" href="/help">Help</a></li>
                    <li data-toggle="dropdown-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link class="dropdown-item" :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Sair') }}
                            </x-dropdown-link>
                        </form>
                    </li>    
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- Fim do nav-admin -->