<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        // $posts = $category->posts;
        $posts = $category->posts()->paginate(6);
        return view('posts.index', compact('posts', 'category'));
    }
}
