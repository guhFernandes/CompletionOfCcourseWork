@extends('layouts.layout')
@section('title', 'Editar Roupa')
@section('content')

    <x-dashboard.navbar />
    <div class="container">
        <div class="row mt-5 shadow-lg">
            <div class="col-lg-5 col-md-12 col-sm-12">
                <img src="src/imagem/roupa/blazer.jpg" class="card-img" alt="blazer">
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12">
                <form action="editar/roupa" class="mt-5 mb-2" method="post">
                    @csrf

                    <input type="hidden" name="id" value="{{$list->id}}">

                    <h1 class="display-6 m-5 text-center">Editar Roupa</h1>
                            
                    <label for="reference" class="form-label">Referencia do produto</label>
                    <input class="form-control form-control-lg" value="{{$list->refence}}" name="reference" type="number" aria-label=".form-control-lg example">

                    <label for="name" class="form-label">Descrição da roupa</label>
                    <input class="form-control form-control-lg" name="name" type="text" value="{{$list->name}}" aria-label=".form-control-lg example">
                            
                            
                    <label for="name" class="form-label">Coleção</label>
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected disabled>Escolha...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                            
                    
                    <label for="name" class="form-label">Tipo</label>
                    <input type="hidden" name="">
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected disabled>Escolha...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    
                    
                    <label for="formFileLg" class="form-label">Imagem do produto</label>
                    <input class="form-control form-control-lg mb-5" id="formFileLg" type="file">

                    {{-- <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="hidden" name="patch" value="{{$list->patch}}">
                            <input type="file" class="custom-file-input" id="inputGroupFile01" name="imagem" aria-describedby="inputGroupFileAddon01">
                            <label for="inputGroupFile01" class="custom-file-label">Choose file</label>
                        </div>
                    </div> --}}





                                
                    <button type="submit" class="btn btn-warning text-white fs-3 ">Editar</button>
                </form>
            </div>
        </div>
    </div>
@endsection