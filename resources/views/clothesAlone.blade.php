@extends('layouts.layout')
@section('title', 'Produto')
@section('content')

<x-site.navbar />

@if ($x == 'list')
<x-site.lista :result="$list" :service="$type" :cat="$cat" :col="$col" />
@else
@endif

<x-site.footer />


@endsection