@extends('layouts.layout')
@section('title', 'Editar Roupa')
@section('content')

    <x-dashboard.navbar />

    <div class="container">
        <div class="row mt-5 shadow-lg">
            <div class="col-lg-5 col-md-12 col-sm-12">
                <img src="{{ Storage::url($list->patch) }}" class="card-img mt-4" alt="blazer">
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12">
                <form action="/update/clothing" class="mt-5 mb-2" method="post" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id" value="{{ $list->id }}">

                    <h1 class="display-6  text-center">Editar Roupa</h1>

                    <label for="reference" class="form-label">Referencia do produto</label>
                    <input class="form-control form-control-lg" value="{{ $list->reference }}" name="reference"
                        type="number" aria-label=".form-control-lg example">

                    <label for="name" class="form-label">Nome da roupa</label>
                    <input class="form-control form-control-lg" name="name" type="text" value="{{ $list->name }}"
                        aria-label=".form-control-lg example">

                    <label for="name" class="form-label">Descrição da roupa</label>
                    <input class="form-control form-control-lg" name="description" type="text"
                        value="{{ $list->description }}" aria-label=".form-control-lg example">

                    <label for="name" class="form-label">Valor da roupa</label>
                    <input class="form-control form-control-lg" name="price" type="number" value="{{ $list->price }}"
                        aria-label=".form-control-lg example">



                    <label for="name" class="form-label">Categoria</label>
                    <select class="form-select form-select-lg mb-3" name="category_id" aria-label=".form-select-lg example">
                        <option selected value="{{$cat->id}}">{{ $cat->name }}</option>
                        @foreach ($category as $key)
                            <option value="{{ $key->id }}">{{ $key->name }}</option>
                        @endforeach
                    </select>


                    <label for="name" class="form-label">Coleção</label>
                    <select class="form-select form-select-lg mb-3" name="collection_id"
                        aria-label=".form-select-lg example">
                        <option selected value="{{$col->id}}">{{ $col->description }}</option>
                        @foreach ($collection as $key)
                            <option value="{{ $key->id }}">{{ $key->description }}</option>
                        @endforeach
                    </select>


                    <input type="hidden" name="patch" value="{{ $list->patch }}">
                    <label for="formFileLg" class="form-label">Imagem do produto</label>
                    <input class="form-control form-control-lg mb-2" id="formFileLg" name="imagem" type="file">

                    <div class="col-12 mt-1 mb-3">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->name }}">
                    </div>

                    <button type="submit" class="btn btn-warning text-white fs-3 ">Editar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
