@extends('layouts.dashboard')

@section('content')
    <div class="card shadow-sm">
        <div class="card-header lead font-weight-bold">
            #{{ $post->id }} - {{ $post->title }}
        </div>
        <div class="card-body">
            {{ $post->body }}
        </div>
    </div>
@endsection
