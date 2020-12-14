<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Resources\Post as PostResource;

class PostsController extends Controller {

    public function index() {
        return new PostResource(Post::orderBy('id', 'desc')->paginate(10));
    }
}
