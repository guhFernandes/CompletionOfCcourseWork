<div class="modal fade" id="user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar Novo Usuário</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <label for="name" class="form-label">Nome do Usuario</label>
                    <x-text-input id="name" class="form-control form-control-lg" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <label for="name" class="form-label">Email</label>
                    <x-text-input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <label for="name" class="form-label">Senha</label>
                    <x-text-input id="password" class="form-control form-control-lg" type="password" name="password" required autocomplete="new-password" />
                    <label for="name" class="form-label">Confirmar Senha</label>
                    <x-text-input id="password_confirmation" class="form-control form-control-lg" type="password" name="password_confirmation" required autocomplete="new-password" />

            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                </form>
            </div>
        </div>
    </div>
</div>