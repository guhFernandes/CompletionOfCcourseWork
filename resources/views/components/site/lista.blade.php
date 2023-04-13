@if (isset($result))
    <div class="container">
        <div class="row mt-lg-5 shadow-sm">

            @if ($service == 'clothing')
                <div class="col-lg-6 col-md-12 col-sm-12 mt-3 mb-3">
                    <nav aria-label="breadcrumb ">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item fs-5">
                                <a class="text-navy link-underline link-underline-opacity-0 icon-link"  href="/">
                                    <img src="{{ asset('storage/imagem//icon/home.png') }}" class="bi" aria-hidden="true" alt=""> 
                                    Home
                                </a>
                            </li>
                            <li class="breadcrumb-item fs-5 active" aria-current="page">{{ $result->name }}</li>
                        </ol>
                    </nav>
                    <img src="{{ Storage::url($result->patch) }}" class="card-img" alt="{{ $result->name }}">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h1 class="mt-lg-5 text-navy">{{ $result->name }}</h1>
                    <p class="fs-6 text-navy">Ref: #{{ $result->reference }}</p>

                    <p class="fs-4 mt-lg-5 text-navy"><strong>Descrição</strong></p>
                    <p class="fs-4 text-navy">{{ $result->description }} </p>

                    
                    <p class="fs-4 mt-lg-5 text-navy">Categoria: {{$cat->name}}</p>
                    

                    
                    <p class="fs-4 text-navy">Coleção: {{ $col->description }}</p>
                    


                    


                    <h2 class="fs-1 mt-lg-5 text-navy">R$ {{ $result->price }},00</h2>

                </div>
            @else
            @endif

        </div>
    </div>
@endif
