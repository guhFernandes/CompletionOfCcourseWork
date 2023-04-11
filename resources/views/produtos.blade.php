@extends('layouts.layout')
@section('title', 'High Fashion')
@section('content')

    <x-site.navbar-prod />
    <x-site.login/>

    <form action="" method="post" class="container d-flex form-inline mt-2 justify-content-center">
        @csrf
        <div class="input-group w-75 mb-3">
            <input name="search" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Pesquise o produto...">
            <div class="input-group-append">
                <button class="btn-navy" type="submit"><img src="{{ asset('storage/imagem/icon/lupa.png') }}" alt="lupa"></button>
            </div>
        </div> 
    </form>
    <!--Inicio Cards Fixed-->
    <div class="container" id="custom-cards">
        <h1 class="display-6 m-5 text-center">Bermuda</h1>
        <div class="row align-items-stretch g-3 ">
            @foreach ($result as $k)
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <a href="{{url('/produto/'.$k->id)}}" style="text-decoration:none;">
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
            <div class="col-12 justify-content-center align-items-center">
                {{ $result->onEachSide(5)->links() }}
            </div>
        </div>
    </div>

    <!--Fim Cards Fixed-->
    <x-site.footer />
    <!-- Fim do Footer -->

@endsection