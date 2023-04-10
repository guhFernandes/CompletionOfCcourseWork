@extends('layouts.layout')
@section('title', 'Dashboard')
@section('content')

<x-dashboard.navbar />

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

@endsection