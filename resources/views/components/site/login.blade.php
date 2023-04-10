<!-- Modal de login -->
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Bem Vindo !</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <label for="email" class="form-label">Email</label>
                    <x-text-input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="text-danger  mt-2" />

                    <label for="password" class="form-label mt-3">Senha</label>
                    <x-text-input id="password" class="form-control form-control-lg" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="text-danger  mt-2" />
            </div>
            <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Log in</button>
                </form>
            </div>
        </div>
    </div>
</div>