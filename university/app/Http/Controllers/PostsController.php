<?php

namespace App\Http\Controllers;

use App\Post;
use Faker\Factory;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(Post $post)
    {
        $posts = $post->paginate(5);

        return view('post-overview.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);

        return view('post-overview.show', compact('post'));
    }


}
