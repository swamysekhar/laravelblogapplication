<!-- resources/views/posts/index.blade.php -->

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
        <h1>List of Blog Posts</h1>
        @foreach ($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">Publication Date: {{ $post->updated_at->format('Y/m/d H:i:s') }}</p>
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">View Post</a>
                </div>
            </div>
        @endforeach
        <nav>
            {{ $posts->links('pagination::bootstrap-4') }}
        </nav>
        
    </div>
@endsection
