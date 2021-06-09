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
            $posts = Post::where('title', 'LIKE', "%{$s}%")->orWhere('description', 'LIKE', "%{$s}%")->orWhere('content', 'LIKE', "%{$s}%")->with('category')->paginate(6);
            return view('search.searching', compact('posts', 's'));

    }
}
