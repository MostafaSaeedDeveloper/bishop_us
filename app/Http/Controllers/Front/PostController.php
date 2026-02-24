<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View { return view('front.blog.index', ['posts' => Post::latest()->paginate(9)]); }
    public function show(Post $post): View { return view('front.blog.show', compact('post')); }
}
