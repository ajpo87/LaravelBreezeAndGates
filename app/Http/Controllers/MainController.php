<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class MainController extends Controller
{
    public function index()
    {
        // get all posts and data of the user who created each post
        $posts = Post::with('user')->get();
        return view('dashboard', ['posts' => $posts]);
    }
}
