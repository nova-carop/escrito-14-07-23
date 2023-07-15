@extends('layouts.app')

@section('content')
    <h1>Iniciar sesión</h1>

    <form action="{{ route('authors.login') }}" method="POST">
        @csrf
        <div>
            <label for="email">Correo electrónico</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" required>
        </div>
        <button type="submit">Iniciar sesión</button>
    </form>
@endsection
