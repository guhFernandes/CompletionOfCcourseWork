@extends('layouts.layout')
@section('title', 'Dashboard')
@section('content')

    <x-dashboard.navbar/>
    
    <!--Inicio Card da tela de admin -->
    @if ($x == 'list')
        <x-dashboard.liste :result="$list" :service="$type"/>
    @else
    @endif
    
    <!-- Fim Card da tela de admin -->
    <x-dashboard.category/>
    
    <!-- Modal Tipo -->
    <x-dashboard.collection/>
    
    <!-- Modal Produto -->
    
    <x-dashboard.clothing :collection="$collection" :category="$category"/>
    
    <!-- Modal Usuario -->
    <x-dashboard.user/>



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