<?php

namespace App\Http\Controllers;

use App\Post;
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

    public function projects()
    {
        return view('home.projects');
    }

    public function contacts()
    {
        return view('home.contacts');
    }
}
