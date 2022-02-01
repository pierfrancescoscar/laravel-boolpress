@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-5">Create a new post</h1>

        <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf

            <div class="mb-5">
                <label class="form-label" for="title">Title</label>
                <input class="form-control" type="text" name="title" id="title">
            </div>
        </form>
    </div>
@endsection