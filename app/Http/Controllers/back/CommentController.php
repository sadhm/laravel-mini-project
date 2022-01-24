<?php

namespace App\Http\Controllers\back;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::orderBy('id','DESC')->paginate(20);
        return view('back.comments.comments', compact('comments'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        return view('back.comments.edit',compact('comment'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $article)
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
     * @param  \App\Models\Article  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
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
