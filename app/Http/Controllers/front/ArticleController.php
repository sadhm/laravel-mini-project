<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use App\frontmodels\Article;
use App\frontmodels\User;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('id','DESC')->where('status',1)->paginate(20);
        return view('front.articles', compact('articles'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $article->increment('hit');
        $comments = $article->comments()->where('status',1)->get();
        return view('front.article', compact('article','comments'));
    }

}
