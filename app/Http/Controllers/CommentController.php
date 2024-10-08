<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return inertia()->render('Comments/index', [
            "greeting" => "Hello world",
            "post" => $post,
        ]);
    }
}
