<?php

namespace App\Http\Controllers\back;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('id','DESC')->paginate(20);
        return view('back.articles.articles', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all()->pluck('id', 'title');
        return view('back.articles.create' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message= [
            'name.required'=>'فیلد عنوان را وارد نمایید.',
//            'slug.required'=>'فیلد نام مستعار را وارد نمایید.',
//            'slug.unique'=>'فیلد نام مستعار نباید تکراری باشد.',
        ];
        $validateData = $request->validate([
            'name'=> 'required',
//            'slug' =>'required|unique:categories'
        ],$message);
//        $category = new category([
//            'title'=>$request->get('title'),
//            'description'=>$request->get('description'),
//            'active'=>$request->get('active')
//        ]) ;
        $article = new Article();
       if (empty($request->slug)){
            $slug = SlugService::createSlug(Article::class, 'slug', $request->name);

        }else{
            $slug = SlugService::createSlug(Article::class, 'slug', $request->slug);
        }
        $request->merge(['slug'=>$slug]);
        try{
            //  $category->save();
            $article = $article->create($request->all());
            $article->categories()->attach($request->categories);
        }catch (Exception $exception){
            switch ($exception->getCode()){
                case 230000:
                    $msg = "نام مستعار وارد شده تکراری است";
                    break;
            }
            return redirect(route('admin.articles.create')->with('warning', $msg));
        }

        $msg = "ذخیره دسته بندی با موفقیت انجام شد";
        return redirect(route('admin.articles'))->with('success',$msg);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $categories=Category::all()->pluck('id','title');
        return view('back.articles.edit',compact('article','categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $message= [
            'name.required'=>'فیلد عنوان را وارد نمایید.',
        ];
        $validateData = $request->validate([
            'name'=> 'required',
        ],$message);
//        $category = new category([
//            'title'=>$request->get('title'),
//            'description'=>$request->get('description'),
//            'active'=>$request->get('active')
//        ]) ;
        try{
            //  $category->save();
            $article->update($request->all());
            $article->categories()->sync($request->categories);
        }catch (Exception $exception){
            switch ($exception->getCode()){
                case 230000:
                    $msg = "نام مستعار وارد شده تکراری است";
                    break;
            }
            return redirect(route('admin.articles.create')->with('warning', $msg));
        }

        $msg = "ذخیره دسته بندی با موفقیت انجام شد";
        return redirect(route('admin.articles'))->with('success',$msg);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        $msg = "ذخیره دسته بندی با موفقیت انجام شد";
        return redirect(route('admin.articles'))->with('success',$msg);
    }
    public function updatestatus(Article  $article)
    {
        if ($article->status==1){
            $article->status =0;
        }else{
            $article->status=1;
        }
        $article->save();
        $msg = " عملیات با موفقیت انجام شد.";
        return redirect(route('admin.articles'))->with('success', $msg);

    }
}
