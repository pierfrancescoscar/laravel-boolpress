@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-5">{{ $post->title }}</h1>

        <div class="mb-5">
            <a class="btn btn-warning" href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
            <a class="btn btn-danger" href="{{ route('admin.posts.index', $post->id) }}">Back to archive</a>
        </div>

        <div class="row">
            <div class="col-6">
                {!! $post->content !!}
            </div>

            <div class="col-6">
                Here goes image
            </div>
        </div>
    </div>
@endsection