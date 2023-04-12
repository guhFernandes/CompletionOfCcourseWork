<div class="modal fade" id="produto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar Produto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/add/clothing" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <label for="reference" class="form-label">Referencia do produto</label>
                                <input class="form-control form-control-lg" id="reference" name="reference" type="text"
                                    aria-label=".form-control-lg example">
                            </div>
                            <div class="col-12">
                                <label for="name-two" class="form-label">Nome do produto</label>
                                <input class="form-control form-control-lg" type="text"
                                    aria-label=".form-control-lg example" id="name-two" onkeyup="toLimit('name-two')" name="name" require />
                            </div>
                            <div class="col-12">
                                <label for="description-two" class="form-label">Descrição do produto</label>
                                <input class="form-control form-control-lg" type="text"
                                    aria-label=".form-control-lg example" id="description-two" name="description" require/>
                            </div>
                            <div class="col-12">
                                <label for="price" class="form-label">Valor do produto</label>
                                <input class="form-control form-control-lg" min="0" max="1000" id="price" name="price" type="number"
                                    aria-label=".form-control-lg example" require/>
                            </div>
                            
                            <div class="col-lg-6 col-sm-12">
                                <label for="name" class="form-label">Categoria</label>
                                <select class="form-select form-select-lg mb-3" name="category_id" aria-label=".form-select-lg example">
                                    <option selected disabled>Escolha...</option>
                                    @foreach($category as $key)
                                    <option value="{{$key->id}}">{{$key->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <label for="name" class="form-label">Coleção</label>
                                <select class="form-select form-select-lg mb-3" name="collection_id" aria-label=".form-select-lg example">
                                    <option selected disabled>Escolha...</option>
                                    @foreach($collection as $key)
                                    <option value="{{$key->id}}">{{$key->description}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="formFileLg" class="form-label">Imagem do produto</label>
                                <input type="file" class="form-control form-control-lg" name="imagem"  onchange="loadFile(event)"/>
                                <img id="output"/>

                                <script>
                                    var loadFile = function(event) {
                                        var output = document.getElementById('output');
                                        output.src = URL.createObjectURL(event.target.files[0]);
                                        output.className = 'card-img mt-3';
                                    }; 
                                </script>
                            </div>
                            <div class="col-12 mt-1" >
                                <label for="formFileLg" class="form-label">Cadastrado por</label>
                                <input class="form-control form-control-lg" name="" type="text" value="{{ Auth::user()->name }}" disabled aria-label=".form-control-lg example">
                                <input type="hidden" name="user_id" value="{{ Auth::user()->name }}">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" onclick="validateField('name-two, description-two')" class="btn-navy">Adicionar</button>
                </form>
            </div>
        </div>
    </div>
</div>