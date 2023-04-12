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


    <x-site.card-moved-desktop/>

    <x-site.card-moved-mobile/> 


    <h1 class="display-6 m-5 text-navy text-center">Produtos em destaque</h1>

    <!--Inicio Cards Fixed-->



    <div class="container" id="custom-cards">
        <div class="row align-items-stretch g-3 ">
            @foreach ($result as $k)
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <a href="{{url('/produto/'.$k->id)}}" style="text-decoration:none;">
                        <div class="card h-100 overflow-hidden rounded-4 shadow-lg">
                            <img src="{{ Storage::url($k->patch) }}" class="img-card" alt="{{ $k->name }}">
                            <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                                <ul class=" list-unstyled mt-auto">
                                    <li class="text-navy">
                                        <h4 class="fs-4">{{ $k->name }}</h4>
                                        <p class="card-text fs-4">R${{ $k->price }},00</p>
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
