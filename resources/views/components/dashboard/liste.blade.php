<form action="/search/{{$service}}" method="post" class="container d-flex form-inline mt-2 justify-content-center">
    @csrf
    <div class="input-group w-75 mb-3">
        <input name="search" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Pesquise o produto...">
        <div class="input-group-append">
            <button class="btn-navy" type="submit"><img src="{{ asset('storage/imagem/icon/lupa.png') }}" alt="lupa"></button>
        </div>
    </div> 
</form>
@if (isset($result))
    <div class="container">
        <div class="row g-4">
            @foreach ($result as $key)
                @if ($service == 'category')

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card shadow-lg" style="margin: auto;">
                            <div class="card-body">
                                <h4 class="fs-5 text-uppercase">{{ $service }} {{ $key->id }}</h4>
                                <p class="fs-5">{{ $key->name }}</p>
                            </div>
                            <div class="d-flex justify-content-between card-footer">
                                <form action="/editar/{{ $service }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $key->id }}">
                                    <button type="submit" class="btn"><img src="{{ asset('storage/imagem/icon/editar.png') }}" width="45"height="45" alt="editar"></button>
                                </form>
                                <form action="/deletar/{{ $service }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $key->id }}">
                                    <button type="submit" class="btn"><img
                                            src="{{ asset('storage/imagem/icon/excluir.png') }}" width="45"
                                            height="45" alt="excluir"></button>
                                </form>
                            </div>
                        </div>
                    </div>
                @elseif($service == 'collection')
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card shadow-lg" style="margin: auto;">
                            <div class="card-body">
                                <h4 class="fs-5 text-uppercase">{{ $service }} {{ $key->id }}</h4>
                                <p class="fs-5">{{ $key->description}}</p>
                            </div>
                            <div class="d-flex justify-content-between card-footer">
                                <form action="/editar/{{ $service }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $key->id }}">
                                    <button type="submit" class="btn"><img src="{{ asset('storage/imagem/icon/editar.png') }}" width="45"height="45" alt="editar"></button>
                                </form>
                                <form action="/deletar/{{ $service}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $key->id }}">
                                    <button type="submit" class="btn"><img src="{{ asset('storage/imagem/icon/excluir.png') }}" width="45" height="45" alt="excluir"></button>
                                </form>
                            </div>
                        </div>
                    </div>
                @elseif($service == 'clothing')
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card text-center shadow-lg" style="width: 16rem; margin: auto;">
                            <div class="card-body">
                                <h4>#{{$key->reference}}</h4>
                                <img src="{{Storage::url($key->patch)}}" class="h-100 card-img mb-2" alt="{{$key->patch}}">
                                <p class="fs-5">{{$key->name}}</p>
                                <h4>R${{$key->price}},00</h4>
                            </div>
                            <div class="d-flex justify-content-between card-footer">
                                <form action="/editar/{{ $service }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $key->id }}">
                                    <button type="submit" class="btn"><img src="{{ asset('storage/imagem/icon/editar.png') }}" width="45"height="45" alt="editar"></button>
                                </form>
                                <form action="/deletar/{{ $service }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $key->id }}">
                                    <button type="submit" class="btn"><img src="{{ asset('storage/imagem/icon/excluir.png') }}" width="45" height="45" alt="excluir"></button>
                                </form>
                            </div>
                        </div>
                    </div>
                @elseif($service == 'user')

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card shadow-lg" style="width: 16rem; margin: auto;">
                            <div class="card-header">
                                <h4 class="text-center">Usuario #{{$key->id}}</h4>
                            </div>
                            <div class="card-body">
                                <h4>{{$key->name}} </h4>
                                <p class="fs-5">{{$key->email}}</p>
                            </div>
                            <div class="d-flex justify-content-center card-footer">
                                <form action="/deletar/{{ $service }}" class="" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $key->id }}">
                                    <button type="submit" class="btn "><img src="{{ asset('storage/imagem/icon/excluir.png') }}" width="45" height="45" alt="excluir"></button>
                                </form>
                            </div>
                        </div>
                    </div>



                @endif          
            @endforeach
        </div>
    </div>
@endif
