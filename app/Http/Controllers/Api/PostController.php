<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    // Post Archive
    public function index() {
        
        // $posts = Post::all();

        // With pagination

        $posts = Post::paginate(3);

        return response()->json($posts);

    }

    // Post Details
    public function show ($slug) {
        $post = Post::where('slug', $slug)->with(['category', 'tags'])->first();

        return response()->json($post);
    }
}
