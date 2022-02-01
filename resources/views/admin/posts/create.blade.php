@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-5">Create a new post</h1>

        <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf

            {{-- Title --}}
            <div class="mb-5">
                <label class="form-label" for="title">Title*</label>
                <input class="form-control" type="text" name="title" id="title">
            </div>
            {{-- Content --}}
            <div class="mb-5">
                <label class="form-label" for="content">Content*</label>
                <textarea class="form-control" type="text" name="content" id="content" rows="6"></textarea>
            </div>
            {{-- Submit --}}
            
            <button class="btn btn-primary" type="submit">Create Post</button>

        </form>
    </div>
@endsection