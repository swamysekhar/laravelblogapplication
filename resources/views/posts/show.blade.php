<!-- resources/views/posts/show.blade.php -->

@extends('layout')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts.index') }}"><i class="fas fa-list"></i> All Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts.create') }}"><i class="fas fa-plus"></i> Create Post</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@section('content')
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
        <!--<p>Publication Date: {{ $post->publication_date }}</p>-->
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit Post</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete Post</button>
        </form>
    </div>
@endsection
