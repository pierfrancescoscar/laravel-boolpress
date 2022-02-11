<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
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

        // if(! $post) {
        //     abort(404);
        // } else {
        //     $post['dateFormatted'] = $post('created_at')->format('l d/m/y');
        // }

        $post['dateFormatted'] = $post['created_at']->format('l d/m/y');
       

        return response()->json($post);
    }
}
