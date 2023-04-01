@extends('layouts.layout')
@section('title', 'Editar Coleção')
@section('content')

    <x-dashboard.navbar />
    <div class="container w-25">
        <div class="row mt-5 shadow-lg">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form action="/update/collection" class="mt-5 mb-2" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$list->id}}">

                    <h1 class="display-6 m-5 text-center">Editar Coleção</h1>
                    
                    <label for="description" class="form-label">Descrição do id: {{$list->id}}</label>
                    <input name="description" value="{{$list->description}}" class="form-control form-control-lg mb-3" type="text" aria-label=".form-control-lg example" />   
                                
                    <button type="submit" class="btn btn-warning text-white fs-3 ">Editar</button>
                </form>
            </div>
        </div>
    </div>
@endsection