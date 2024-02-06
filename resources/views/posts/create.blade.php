<!-- resources/views/posts/create.blade.php -->

@extends('layout')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts.index') }}"><i class="fas fa-list"></i> All Posts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@section('content')
    <div class="container">
        <h1>Create New Blog Post</h1>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea class="form-control" id="content" name="content" rows="6" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>
@endsection
@section('javascriptfunctions')
  <script>
    tinymce.init({
        selector: '#post_content'
    });
  </script>
@endsection
