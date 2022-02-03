@extends ('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-5">{{ $category->name }}</h1>
    </div>
    
    @foreach ($category->posts as $post) 
    <article>
        <h2>{{ $post->title }}</h2>
        <a class="btn btn-success" href="{{ route('admin.posts.show', $post->slug) }}">Show</a>
        <a class="btn btn-alert" href="{{ route('admin.posts.edit', $post->slug) }}">Edit</a>
    </article>
    @endforeach

@endsection