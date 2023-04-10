@extends('layouts.layout')
@section('title', 'High Fashion')
@section('content')

    <x-site.navbar />

    <x-site.login/>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('storage/imagem/banner/banner-1.png') }}" alt="" height="100%" width="100%">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('storage/imagem/banner/banner-2.png') }}" alt="" height="100%" width="100%">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>




    <!-- Fim do carrossel -->

    <h1 class="display-6 m-5 text-navy text-center">Produtos</h1>

    <!-- Inicio Cards Moved -->
    <div id="carouselExampleControls" class="carousel slide mt-3" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="d-flex justify-content-evenly container-sm">
                    <div class="card overflow-hidden rounded-4 shadow-lg" style="width: 18rem;">
                        <img src="{{ asset('storage/imagem/roupa/bermuda.jpg') }}" class="img-card" alt="">
                        <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                            <ul class=" list-unstyled mt-auto">
                                <li class="text-center">
                                    <a class="btn-navy fs-5" href="#" role="button">Bermuda</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card h-100 overflow-hidden rounded-4 shadow-lg" style="width: 18rem;">
                        <img src="{{ asset('storage/imagem/roupa/blazer.jpg') }}" class="img-card" alt="">
                        <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                            <ul class=" list-unstyled mt-auto">
                                <li class="text-center">
                                    <a class=" btn-navy fs-5" href="#" role="button">Blazer</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card h-100 overflow-hidden rounded-4 shadow-lg" style="width: 18rem;">
                        <img src="{{ asset('storage/imagem/roupa/blusa.jpg') }}" class="img-card" alt="">
                        <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                            <ul class=" list-unstyled mt-auto">
                                <li class="text-center">
                                    <a class="btn-navy fs-5" href="#" role="button">Blusa</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card h-100 overflow-hidden rounded-4 shadow-lg" style="width: 18rem;">
                        <img src="{{ asset('storage/imagem/roupa/body.jpg') }} " class="img-card" alt="">
                        <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                            <ul class=" list-unstyled mt-auto">
                                <li class="text-center">
                                    <a class="btn-navy fs-5" href="#" role="button">Body</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class=" d-flex justify-content-evenly container-sm">
                    <div class="card h-100 overflow-hidden rounded-4 shadow-lg" style="width: 18rem;">
                        <img src="{{ asset('storage/imagem/roupa/bolsa.jpg') }}" class="img-card" alt="">
                        <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                            <ul class=" list-unstyled mt-auto">
                                <li class="text-center">
                                    <a class="btn-navy fs-5" href="#" role="button">Bolsa</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card h-100 overflow-hidden rounded-4 shadow-lg" style="width: 18rem;">
                        <img src="{{ asset('storage/imagem/roupa/calca.jpg') }}" class="img-card" alt="">
                        <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                            <ul class=" list-unstyled mt-auto">
                                <li class="text-center">
                                    <a class="btn-navy fs-5" href="#" role="button">Calça</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card h-100 overflow-hidden rounded-4 shadow-lg" style="width: 18rem;">
                        <img src="{{ asset('storage/imagem/roupa/colete.jpg') }}" class="img-card" alt="">
                        <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                            <ul class=" list-unstyled mt-auto">
                                <li class="text-center">
                                    <a class="btn-navy fs-5" href="#" role="button">Colete</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card h-100 overflow-hidden rounded-4 shadow-lg" style="width: 18rem;">
                        <img src="{{ asset('storage/imagem/roupa/jaqueta.jpg') }} " class="img-card" alt="">
                        <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                            <ul class=" list-unstyled mt-auto">
                                <li class="text-center">
                                    <a class="btn-navy fs-5" href="#" role="button">Jaqueta</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class=" d-flex justify-content-evenly container-sm">
                    <div class="card h-100 overflow-hidden rounded-4 shadow-lg" style="width: 18rem;">
                        <img src="{{ asset('storage/imagem/roupa/jardineira.jpg') }}" class="img-card" alt="">
                        <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                            <ul class=" list-unstyled mt-auto">
                                <li class="text-center">
                                    <a class="btn-navy fs-5" href="#" role="button">Jardineira</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card h-100 overflow-hidden rounded-4 shadow-lg" style="width: 18rem;">
                        <img src="{{ asset('storage/imagem/roupa/macacao.jpg') }}" class="img-card" alt="">
                        <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                            <ul class=" list-unstyled mt-auto">
                                <li class="text-center">
                                    <a class="btn-navy fs-5" href="#" role="button">Macacão</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card h-100 overflow-hidden rounded-4 shadow-lg" style="width: 18rem;">
                        <img src="{{ asset('storage/imagem/roupa/sandali.jpg') }}" class="img-card" alt="">
                        <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                            <ul class=" list-unstyled mt-auto">
                                <li class="text-center">
                                    <a class="btn-navy fs-5" href="#" role="button">Sandalia</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card h-100 overflow-hidden rounded-4 shadow-lg" style="width: 18rem;">
                        <img src="{{ asset('storage/imagem/roupa/short.jpg ') }}" class="img-card" alt="">
                        <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                            <ul class=" list-unstyled mt-auto">
                                <li class="text-center">
                                    <a class="btn-navy fs-5" href="#" role="button">Short</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-navy p-4 rounded-4 " aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon bg-navy  p-4 rounded-4" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Fim Cards Moved -->

    <h1 class="display-6 m-5 text-navy text-center">Produtos em destaque</h1>

    <!--Inicio Cards Fixed-->



    <div class="container" id="custom-cards">
        <div class="row align-items-stretch g-3 ">
            @foreach ($result as $k)
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <a href="/produto" style="text-decoration:none;">
                        <div class="card h-100 overflow-hidden rounded-4 shadow-lg">
                            <img src="{{ Storage::url($k->patch) }}" class="img-card" alt="">
                            <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                                <ul class=" list-unstyled mt-auto">
                                    <li class="text-dark">
                                        <h4 class="text-navy fs-4">{{ $k->name }}</h4>
                                        <p class="card-text text-navy fs-4">R${{ $k->price }},00</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <!--Fim Cards Fixed-->


    <div class="container">
        <x-site.dicas-moda/>
        <x-site.institucional/>
    </div>


    <x-site.footer />
    <!-- Fim do Footer -->

@endsection
