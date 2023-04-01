<div class="modal fade" id="produto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar Produto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="post">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <label for="name" class="form-label">Referencia da roupa</label>
                                <input class="form-control form-control-lg" type="number"
                                    aria-label=".form-control-lg example">
                            </div>
                            <div class="col-12">
                                <label for="name" class="form-label">Descrição da roupa</label>
                                <input class="form-control form-control-lg" type="text"
                                    aria-label=".form-control-lg example">
                            </div>
                            <div class="col-12">
                                <label for="name" class="form-label">Descrição da roupa</label>
                                <input class="form-control form-control-lg" type="text"
                                    aria-label=".form-control-lg example">
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <label for="name" class="form-label">Coleção</label>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option selected disabled>Escolha...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <label for="name" class="form-label">Tipo</label>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option selected disabled>Escolha...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="formFileLg" class="form-label">Imagem do produto</label>
                                <input class="form-control form-control-lg" id="formFileLg" type="file">
                            </div>
                            <div class="col-12 mt-1">
                                <label for="formFileLg" class="form-label">Cadastrado por</label>
                                <input class="form-control form-control-lg" type="text" value="{{ Auth::user()->name }}" disabled aria-label=".form-control-lg example">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Adicionar</button>
                </form>
            </div>
        </div>
    </div>
</div>