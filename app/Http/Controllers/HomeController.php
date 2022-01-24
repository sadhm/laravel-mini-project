<?php

namespace App\Http\Controllers;

use App\frontmodels\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $articles= Article::orderBy('id','DESC')->get();
        return view('front.main', compact('articles'));
    }
}
