<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function news()
    {
       return view('home.news');
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
