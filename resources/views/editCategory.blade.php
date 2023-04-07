@extends('layouts.layout')
@section('title', 'Editar Categoria')
@section('content')

    <x-dashboard.navbar />
    <div class="container w-75">
        <div class="row mt-5 shadow-lg">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form action="/update/category" class="mt-5 mb-2" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$list->id}}">

                    <h1 class="display-6 m-5 text-center">Editar Categoria</h1>

                    <label for="name" class="form-label">Descrição do id: {{$list->id}}</label>
                    <input class="form-control form-control-lg mb-4" name="name" type="text" value="{{$list->name}}" aria-label=".form-control-lg example">

                    <button type="submit" class="btn btn-warning text-white fs-3 ">Editar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
