@extends('layouts.dashboard')

@section('content')
    <div class="mb-2">
        <a href="{{ route('admin.posts.create') }}" class="btn btn-lg btn-outline-dark">Create a new post</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td class="d-flex">
                        <a href="{{ route('admin.posts.show', ['post' => $post->slug]) }}"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('admin.posts.edit', ['post' => $post->slug]) }}" class="text-secondary ml-2"><i
                                class="far fa-edit"></i></a>
                        <a href="#" class="text-danger ml-2"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
