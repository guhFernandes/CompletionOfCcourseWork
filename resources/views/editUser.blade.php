@extends('layouts.layout')
@section('title', 'Editar Usuario')
@section('content')
    <x-dashboard.navbar/>
    <div class="container w-75">
        <div class="row mt-5">
            <div class="col-lg-12 col-md-12 col-sm-12">

                <form method="post" action="{{ route('profile.update') }}" class="shadow p-3 mb-4">
                    <h3>Informação do Perfil</h3>
                    <p>Atualize as informações de perfil e o endereço de e-mail da sua conta.</p>
                    @csrf
                    @method('patch')

                    <label for="name" class="form-label">Nome do Usuario</label>
                    <x-text-input id="name" name="name" type="text" class="form-control form-control-lg" :value="old('name', $list->name )" required autofocus autocomplete="name" />
                    
                    <label for="email" class="form-label">Email</label>
                    <x-text-input id="email" name="email" type="email" class="form-control form-control-lg" :value="old('email', $list->email )" required autocomplete="username" />
                    
                    <button type="submit" class="btn btn-warning text-white mt-3">Editar</button>
                </form>

                <form method="post" action="{{ route('password.update') }}"  class="shadow p-3">
                    @csrf
                    @method('put')
                    <h3>Atualizar senha</h3>
                    <p>Certifique-se de que sua conta esteja usando uma senha longa e aleatória para se manter segura.</p>
                   

                    

                    <label for="current_password" class="form-label">Senha Atual</label>
                    <x-text-input id="current_password" name="current_password" type="password" class="form-control form-control-lg" autocomplete="current-password" />

                    <label for="current_password" class="form-label">Nova Senha</label>
                    <x-text-input id="password" name="password" type="password" class="form-control form-control-lg" autocomplete="new-password" />

                    <label for="current_password" class="form-label">Confirmar Senha</label>
                    <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="form-control form-control-lg" autocomplete="new-password" />

                    <button type="submit" class="btn btn-warning text-white mt-3">Editar</button>
                </form>
            </div>
        </div>
    </div>
@endsection