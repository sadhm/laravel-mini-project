<?php

namespace App\Http\Controllers\back;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;
use TheSeer\Tokenizer\Exception;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'DESC')->paginate();
        return view('back.categories.categories', compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('back.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
           'title'=> 'required',
           'slug'=> 'required|unique:categories'
        ]);
        $category = new Category();
        try {
            $category->create($request->all());
        }catch (Exception $exception){
            switch ($exception->getCode()) {
                case 21:
                    $msg= "نام مستعار وارد شده تکراری است";
                    break;
            }
            return redirect(route('admin.categories.create'))->with('warning', $msg);
        }
        $msg = "ذخیره دسته بندی با موفقیت انجام شد";
        return redirect(route('admin.categories'))->with('success', $msg);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('back.comments.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        $validateData = $request->validate([
            'name'=> 'required',
             'email' =>'required',
             'body' =>'required',
        ]);
        try{
            // $category->save();
            $comment->update($request->all());
        }catch (Exception $exception){
            return redirect(route('admin.comments.edit')->with('warning', $exception->getCode()));
        }
        $msg = "نطر با موفقست انجام شد";
        return redirect(route('admin.comments'))->with('success',$msg);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        $msg = " حذف  با موفقیت انجام شد.";
        return redirect(route('admin.comments'))->with('success', $msg);
    }

    public function updatestatus(Comment $comment)
    {
        if ($comment->status==1){
            $comment->status =0;
        }else{
            $comment->status=1;
        }
        $comment->save();
        $msg = " عملیات با موفقیت انجام شد.";
        return redirect(route('admin.comments'))->with('success', $msg);

    }
}
