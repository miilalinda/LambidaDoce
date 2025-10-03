@extends('layouts.admin')

@section('conteudo')
<h1>Criar novo Usuário</h1>

<form action="{{ route('user.store')}}" method="POST">
    @csrf

    <div>
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div>
        <label for="email">Emailk:</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div>
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>
    </div>

    <div>
        <button type="submit">Criar Usuário</button>
    </div>
</form>

@endsection
