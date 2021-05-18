<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            's' => 'required',
        ]);

        $s = $request->s;
        $posts = Post::where('title', 'LIKE', "%{$s}%")->with('category')->paginate(6);
        return view('home.searching', compact('posts', 's'));
    }
}
