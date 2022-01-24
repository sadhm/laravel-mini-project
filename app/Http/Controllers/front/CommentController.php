<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use App\frontmodels\Article;
use App\frontmodels\Comment;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Article $article, Request  $request)
    {
        $message= [
            'name.required'=>'فیلد عنوان را وارد نمایید.',
//            'slug.required'=>'فیلد نام مستعار را وارد نمایید.',
//            'slug.unique'=>'فیلد نام مستعار نباید تکراری باشد.',
        ];
        $validateData = $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'body'=> 'required',
//            'slug' =>'required|unique:categories'
        ],$message);
//        $category = new category([
//            'title'=>$request->get('title'),
//            'description'=>$request->get('description'),
//            'active'=>$request->get('active')
//        ]) ;
         $article->comments()->create($request->all());

         return back();
    }

}
