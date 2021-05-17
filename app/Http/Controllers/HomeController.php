<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function show()
    {
        $posts = Post::with('category')->orderBy('id','desc')->paginate(6);
        return view('home.news', compact('posts'));
    }

    public function post($slug)
    {
       $post = Post::where('slug', $slug)->firstOrFail();
       $post->view += 1;
       $post->update();
       return view('home.post', compact('post'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = $category->posts()->orderBy('id', 'desc')->paginate(2);
        return view('home.category', compact('category', 'posts'));
    }

    public function tag($slug)
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $posts = $tag->posts()->with('category')->orderBy('id', 'desc')->paginate(2);
        return view('home.tag', compact('tag', 'posts'));
    }

    public function projects()
    {
        return view('home.projects');
    }

    public function contacts()
    {
        return view('home.contacts');
    }
}
