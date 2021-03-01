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
                        {{-- <a href="#" class="text-danger ml-2"><i class="fas fa-trash-alt"></i></a> --}}
                        <!-- Button trigger modal -->
                        <a class="text-danger ml-2" data-toggle="modal" data-target="#delete-{{ $post->slug }}"
                            role="button">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" id="delete-{{ $post->slug }}" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Will delete
                                            <em class="font-weight-bold">"{{ $post->title }}"</em>
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        This is irreverisible. Are you sure?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Nooooo</button>
                                        <form action="{{ route('admin.posts.destroy', ['post' => $post->slug]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Yeah, Delete" class="btn btn-danger">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
