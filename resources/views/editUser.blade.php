@extends('layouts.layout')
@section('title', 'Editar User')
@section('content')
    <x-dashboard.navbar/>
    <div class="container w-75">
        <div class="row mt-5 shadow-lg">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form action="/update/user" class="mt-5 mb-2" method="post">
                    <h1 class="display-6 m-5 text-center">Editar Usuario</h1>
                        @csrf
                        <label for="name" class="form-label">Nome do Usuario</label>
                        <input type="hidden" name="name" >
                        <input class="form-control form-control-lg" value="{{$list->name}}" type="text" aria-label=".form-control-lg example"/>

                        <label for="name" class="form-label mt-3">Email</label>
                        <input type="hidden" name="">
                        <input class="form-control form-control-lg" value="{{$list->email}}" type="email" aria-label=".form-control-lg example"/>

                        <label for="name" class="form-label mt-3">Senha</label>
                        <input type="hidden" name="">
                        <input class="form-control form-control-lg mb-3" type="password" aria-label=".form-control-lg example"/>   
                                
                    <button type="submit" class="btn btn-warning text-white fs-3 ">Editar</button>
                </form>
            </div>
        </div>
    </div>
@endsection