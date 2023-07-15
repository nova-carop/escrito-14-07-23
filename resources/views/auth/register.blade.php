@extends('layouts.app')

@section('content')
    <h1>Registro de Autor</h1>

    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="email">Correo electrónico</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" required>
        </div>
        <button type="submit">Registrarse</button>
    </form>
@endsection
