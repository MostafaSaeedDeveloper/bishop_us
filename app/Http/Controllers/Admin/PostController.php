<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View { return view('admin.posts.index', ['posts' => Post::latest()->paginate(10)]); }
    public function create(): View { return view('admin.posts.create'); }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'title' => 'required|string|max:255', 'slug' => 'nullable|string|max:255|unique:posts,slug',
            'featured_image' => 'nullable|image|max:4096', 'content' => 'nullable|string',
        ]);
        $data['slug'] = $data['slug'] ?? Str::slug($data['title']);
        $data['featured_image'] = $request->file('featured_image')?->store('posts', 'public');
        Post::create($data);
        return redirect()->route('admin.posts.index')->with('success', 'Post created.');
    }

    public function edit(Post $post): View { return view('admin.posts.edit', compact('post')); }

    public function update(Request $request, Post $post): RedirectResponse
    {
        $data = $request->validate([
            'title' => 'required|string|max:255', 'slug' => 'nullable|string|max:255|unique:posts,slug,'.$post->id,
            'featured_image' => 'nullable|image|max:4096', 'content' => 'nullable|string',
        ]);
        $data['slug'] = $data['slug'] ?? Str::slug($data['title']);
        if ($request->hasFile('featured_image')) {
            Storage::disk('public')->delete($post->featured_image);
            $data['featured_image'] = $request->file('featured_image')->store('posts', 'public');
        }
        $post->update($data);
        return redirect()->route('admin.posts.index')->with('success', 'Post updated.');
    }

    public function destroy(Post $post): RedirectResponse
    {
        Storage::disk('public')->delete($post->featured_image);
        $post->delete();
        return back()->with('success', 'Post deleted.');
    }
}
