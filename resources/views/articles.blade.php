@extends('layouts.app')

@section('content')

    <h1>Liste de Posts</h1>

    @if ($posts->count() > 0)
        @foreach ($posts as $post)
            <h3  class="mx-auto container">
                <a href="{{ route('posts.show', ['id' => $post->id]) }}">
                    - {{ $post->content }}
                </a>
            </h3>
        @endforeach
    @else
        <p>Il n'y a aucun post dans votre base de données</p>
    @endif

@endsection
