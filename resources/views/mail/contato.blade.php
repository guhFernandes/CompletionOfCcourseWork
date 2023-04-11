@extends('layouts.layout')
@section('title', 'Sobre nós')
@section('content')

<h1>Envio do email HighFashion</h1>
<p>Meu nome: <strong>{{$nome}}</strong>
<br>
Meu email: <i>{{$email}} </i>
</p>
<p>Assunto: <i> {{$assunto}} </i></p>
<p><strong>Minha mensagem: </strong>{{$mensagem}} </p>

@endsection