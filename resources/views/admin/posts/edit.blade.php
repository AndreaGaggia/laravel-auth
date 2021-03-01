@extends('layouts.dashboard')

@section('content')
    <h1>Edit view</h1>

    <form action="{{ route('admin.posts.update', ['post' => $post->slug]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <input type="text" class="form-control" name="body" id="body" value="{{ $post->body }}">
        </div>
        <button type="submit" class="btn btn-secondary">Edit</button>
    </form>
@endsection
