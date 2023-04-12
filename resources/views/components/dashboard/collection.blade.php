<div class="modal fade" id="tipo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar Coleção de Roupa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/add/collection" method="post" name="formulario">
                    @csrf
                    <label for="name" class="form-label">Nome</label>
                    <input name="description" class="form-control form-control-lg" type="text" id="name"
                        aria-label=".form-control-lg example" required/>
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" onclick="validateField('name')" class="btn-navy">Adicionar</button>
                </form>
            </div>
        </div>
    </div>
</div>