@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-5">Edit {{ $post->title }}</h1>

            {{-- If Errors --}}
            @if ($errors->any())

            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

            @endif
            {{-- End If Errors --}}

        <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PATCH')

            {{-- Title --}}
            <div class="mb-5">
                <label class="form-label" for="title">Title*</label>
                <input class="form-control" type="text" name="title" id="title" value="{{ $post->title }}">
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            {{-- Content --}}
            <div class="mb-5">
                <label class="form-label" for="content">Content*</label>
                <textarea class="form-control" type="text" name="content" id="content" rows="6">{{ $post->content }}</textarea>
                @error('content')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- Categories --}}

            <div class="mb-5">
                <label for="category_id">Category</label>
                <select class="form-control" name="category_id" id="category_id">
                    <option value="">Uncategorized</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}"  @if ($category->id == old('category_id', $post->category_id)) selected @endif>
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>
                {{-- Message Error --}}
                    @error('category_id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
            </div>

            {{-- Submit --}}
            <button class="btn btn-primary" type="submit">Update Post</button>

        </form>
    </div>
@endsection