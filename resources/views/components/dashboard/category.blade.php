<!-- Modal Categoria -->
<div class="modal fade" id="categoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar Categoria</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-body-tertiary">
                <form action="/add/category" onsubmit=" voltarPaginaAnterior() " method="post"  enctype="multipart/form-data">
                    @csrf
                    <label for="category" class="form-label">Descrição</label>
                    <input class="form-control form-control-lg" name="name" type="text" id="category" aria-label=".form-control-lg example" required />
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" onclick="validateField('category')" class="btn-navy">Adicionar</button>
                </form>
            </div>
        </div>
    </div>
</div>