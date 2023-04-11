@if (isset($result))
    <div class="container">
        <div class="row mt-lg-5 shadow-sm">

            @if ($service == 'clothing')
                <div class="col-lg-6 col-md-12 col-sm-12 mt-3 mb-3">
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
