@extends('layouts.dashboard')

@section('content')
    <h1>Create view</h1>

    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                value="{{ old('title') }}">
            @error('title')
                <span class="invalid-feedback">Il campo title è obbligatorio</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <input type="text" class="form-control @error('body') is-invalid @enderror" name="body" id="body"
                value="{{ old('body') }}">
            @error('body')
                <span class="invalid-feedback">Il campo body è obbligatorio</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-secondary">Create</button>
    </form>
@endsection
