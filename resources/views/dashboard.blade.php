@extends('layouts.layout')
@section('title', 'Dashboard')
@section('content')
    
    <x-dashboard.navbar />
    <div id="loadingDash">
        <img src="{{ asset('storage/imagem/banner/loading.gif') }}" alt="loadingDash">
    </div>
    <div id="contentDash">
        <!--Inicio Card da tela de admin -->
        @if ($x == 'list')
            <x-dashboard.liste :result="$list" :service="$type" />
        @else
        @endif

        <!-- Fim Card da tela de admin -->
        <x-dashboard.category />

        <!-- Modal Tipo -->
        <x-dashboard.collection />

        <!-- Modal Produto -->

        <x-dashboard.clothing :collection="$collection" :category="$category" />

        <!-- Modal Usuario -->
        <x-dashboard.user />
        
        @if (@empty($list))

        @else{
            <div class="col-12 mt-5">
                {{ $list->links() }}
            </div>    
        }
        @endif
    </div>

@endsection
