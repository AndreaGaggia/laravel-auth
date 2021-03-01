@extends('layouts.app')

@section('content')
    <div class="d-flex flex-wrap justify-content-center">
        @foreach ($posts as $post)
            <div class="card m-2 shadow-sm" style="width: 18rem;">
                <img class="card-img-top" src="https://dummyimage.com/300x150/576dd9/fff&text=LARAVEL-AUTH"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">
                        {{ $post->body }}
                    </p>
                    <a href="#" class="btn btn-primary">Go nowhere</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
