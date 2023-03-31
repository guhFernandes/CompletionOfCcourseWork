@extends('layouts.layout')
@section('title', 'Deshboard')
@section('content')

    <!-- Inicio do nav-admin -->
    <nav class="navbar navbar-expand-lg bg-primary py-4">
        <div class="container-fluid ">
            <a href="index.html" class="me-5"><img src="{{asset('storage/imagem/logo.png') }}" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
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
                            Tipo
                        </a>
                        <ul class="dropdown-menu text-center">
                            <li><button type="button" class="dropdown-item" data-bs-toggle="modal"
                                    data-bs-target="#tipo">Adicionar</button></li>
                            <li><a class="dropdown-item" href="#">Listar</a></li>
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
                            <li><a class="dropdown-item" href="#">Listar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item text-center dropdown">
                        <a class="nav-link dropdown-toggle text-white fs-4" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Usuario
                        </a>
                        <ul class="dropdown-menu text-center">
                            <li><button type="button" class="dropdown-item" data-bs-toggle="modal"
                                    data-bs-target="#novousuario">Adicionar</button></li>
                            <li><a class="dropdown-item" href="#">Listar</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="col-lg-2 col-sm-12 nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white text-center fs-4" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu text-center">
                        <li data-toggle="dropdown" ><a class="dropdown-item" href="#">Informação</a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link style="color: rgb(0,0,0); text-decoration: none;" :href="route('logout')"
                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Fim do nav-admin -->
    <form action="#" method="post" class="form-inline mt-2 container-sm">
        <!-- @csrf -->
        <div class="input-group mb-3">
            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Pesquise o produto...">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit"><img src="{{ asset('storage/imagem/icon/lupa.png') }}"
                        alt="lupa"></button>
            </div>
        </div>
    </form>
    <!--Inicio Card da tela de admin -->
    @if ($x == 'list')
        <x-dashboard.liste :result="$list" :service="$type"/>
    @else
    @endif
    {{-- <div class="container">
        <div class="row g-3 mt-3">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card text-center shadow-lg" style="width: 18rem; margin: auto;">
                    <div class="card-body">
                        <h4>#12312</h4>
                        <img src="src/imagem/roupa/blazer.jpg" class="h-100 card-img mb-2" alt="roupa">
                        <p class="fs-5">Blazer Social Casaquinho</p>
                        <p class="fs-5">Verão | Feminino</p>
                        <h4>R$ 99,99</h4>
                    </div>
                    <div class="d-flex justify-content-between card-footer">
                        <form action="#" method="post">

                            <input type="hidden" name="id" value="{{ $key->id }}">
                            <button type="submit" class="btn"><img src="src/imagem/icon/editar.png"
                                    width="45" height="45" alt="editar"></button>
                        </form>
                        <form action="#" method="post">

                            <input type="hidden" name="id" value="{{ $key->id }}">
                            <button type="submit" class="btn"><img src="src/imagem/icon/excluir.png"
                                    width="45" height="45" alt="excluir"></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Fim Card da tela de admin -->

    <!-- Modal Categoria -->
    <div class="modal fade" id="categoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar Categoria</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-body-tertiary">
                    <form action="/add/category" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="description" class="form-label">Descrição</label>
                        <textarea name="name" class="form-control" id="description" rows="6"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Tipo -->
    <div class="modal fade" id="tipo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar Tipo de Roupa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <label for="name" class="form-label">Nome</label>
                        <input name="" class="form-control form-control-lg" type="text" id="name"
                            aria-label=".form-control-lg example" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Produto -->
    <div class="modal fade" id="produto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar Produto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <label for="name" class="form-label">Codigo do produto</label>
                                    <input class="form-control form-control-lg" type="number"
                                        aria-label=".form-control-lg example">
                                </div>
                                <div class="col-12">
                                    <label for="name" class="form-label">Referencia do produto</label>
                                    <input class="form-control form-control-lg" type="text"
                                        aria-label=".form-control-lg example">
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <label for="name" class="form-label">Coleção</label>
                                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                        <option selected disabled>Escolha...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <label for="name" class="form-label">Tipo</label>
                                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                        <option selected disabled>Escolha...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="formFileLg" class="form-label">Imagem do produto</label>
                                    <input class="form-control form-control-lg" id="formFileLg" type="file">
                                </div>
                                <div class="col-12">
                                    <label for="formFileLg" class="form-label">Cadastrado por</label>
                                    <!-- select ou um input text ? -->
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Usuario -->
    <div class="modal fade" id="novousuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar Novo Usuário</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <label for="name" class="form-label">Nome do Usuario</label>
                        <input class="form-control form-control-lg" type="text"
                            aria-label=".form-control-lg example" />
                        <label for="name" class="form-label">Email</label>
                        <input class="form-control form-control-lg" type="email"
                            aria-label=".form-control-lg example" />
                        <label for="name" class="form-label">Senha</label>
                        <input class="form-control form-control-lg" type="password"
                            aria-label=".form-control-lg example" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
