@extends('layouts.app')

@section('content')
    <h1>Nuevo Post</h1>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Título</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="body">Contenido</label>
            <textarea name="body" id="body" rows="5" required></textarea>
        </div>
        <button type="submit">Guardar</button>
    </form>
@endsection
