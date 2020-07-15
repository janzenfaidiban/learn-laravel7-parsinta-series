<?php

namespace App\Http\Controllers;
use App\{Category, Post, Tag};
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->paginate(6),
        ]);
    }

    public function show(Post $post) 
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create', [
            'post' => new Post(),
            'categories' => Category::get(),
            'tags' => Tag::get(),
            ]);
    }

    public function store(PostRequest $request)
    {
        $attr = $request->all();
        $attr['slug'] = \Str::slug(request('title'));
        $attr['category_id'] = request('category');
        // create new post
        $post = Post::create($attr);
        $post->tags()->attach(request('tags'));

        session()->flash('success', 'The post was created');
        return redirect('posts');

        session()->flash('error', 'The post was created');
        return back();
    }

    public function edit(Post $post)
    {
        return view('posts.edit', [
            'post' => $post,
            'categories' => Category::get(),
            'tags' => Tag::get(),
        ]);
    }

    public function update(PostRequest $request, Post $post)
    {
        $attr = $request->all();
        $attr['category_id'] = request('category');
        $post->update($attr);
        $post->tags()->sync(request('tags'));
        session()->flash('success', 'The post was updated');
        return redirect('posts');
    }
    public function destroy(Post $post)
    {
        $post->tags()->detach();
        $post->delete();
        session()->flash('success', 'The post was destroyed');
        return redirect('posts');
    }
}
