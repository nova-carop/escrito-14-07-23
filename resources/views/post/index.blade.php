
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Posts</h1>

        @foreach ($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p class="card-text">Autor: {{ $post->author->name }}</p>
                    <p class="card-text">Fecha de publicación: {{ $post->created_at }}</p>
                    <p class="card-text">{{ $post->body }}</p>
                </div>
            </div>
        @endforeach

        {{ $posts->links() }}
    </div>
@endsection