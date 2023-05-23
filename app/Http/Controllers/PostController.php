<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('blogs.posts', [
            'title' => 'Informasi Desa',
            'posts' => Post::latest()->filter(request(['search', 'category']))->paginate(9)->withQueryString()
        ]);
    }

    public function show(Post $blog)
    {
        return view('blogs.show', [
            'title' => 'Informasi Desa',
            'post' => $blog,
            'posts' => Post::latest()->take(3)->get()
        ]);
    }
}
