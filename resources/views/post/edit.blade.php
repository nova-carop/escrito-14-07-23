@extends('layouts.app')

@section('content')
    <h1>Editar Post</h1>

    @if (session('error'))
        <div>{{ session('error') }}</div>
    @endif

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Título</label>
            <input type="text" name="title" id="title" value="{{ $post->title }}" required>
        </div>
        <div>
            <label for="body">Contenido</label>
            <textarea name="body" id="body" rows="5" required>{{ $post->body }}</textarea>
        </div>
        <button type="submit">Actualizar</button>
    </form>
@endsection
