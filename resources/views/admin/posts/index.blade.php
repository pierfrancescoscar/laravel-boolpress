@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Blog Posts</h1>

            @if($posts ->isEmpty())
            <p>No post found yet.</p>
            @else
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th colspan="3">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>Show</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
    </div>
@endsection