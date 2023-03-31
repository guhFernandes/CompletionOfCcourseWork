@if (isset($result))
<div class="row">
    @foreach ($result as $key)
        <div class="card" style="width: 18rem; margin:20px;">
            <div class="card-body">
                <h5 class="card-title" style="text-transform: uppercase; color: rgb(33,36,41);">{{$service}}</h5>
                
                @if ($service == 'category')
                <p class="card-text">ID: {{$key->id}}</p>
                <p class="card-text">{{$key->name}}</p>  
                @elseif($service == 'colletion')
                    <p class="card-text">{{$key->description}}</p>
                @elseif($service == 'clothing')
                    <p class="card-text">{{$key->name}}</p>
                    <p class="card-text">{{$key->description}}</p>
                @elseif($service == 'user_email')
                    <p class="card-text">{{$key->name}}</p>
                    <p class="card-text">{{$key->email}}</p>
                @endif
                
                <form action="/editar/{{$service}}" method="post" style="float: left; margin-right: 10%;">
                    @csrf
                    <input type="hidden" name="id" value="{{$key->id}}">
                    <button type="submit" class="btn btn-dark">Editar</button>
                </form>
                <form action="/deletar/{{$service}}" method="post" >
                    @csrf
                    <p></p>
                    <input type="hidden" name="id" value="{{$key->id}}">
                    <button type="submit" class="btn btn-dark">Remover</button>
                </form>
            </div>
        </div>
        <br>
    @endforeach
</div>
@endif

