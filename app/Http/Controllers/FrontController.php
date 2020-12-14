<?php

namespace App\Http\Controllers;

use App\Models\Post;

class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index() {

        $posts = Post::whereNull('content')->inRandomOrder()->limit(5)->get();

        return view('index', compact('posts'));
    }

    public function post($id) {

        $post = Post::findOrFail($id);

        $posts = Post::inRandomOrder()->limit(5)->get();

        return view('post', compact('post', 'posts'));
    }
}
