
@extends('front.index')
@section('title')
    lxgf
@endsection
@section('content')

    <section id="intro2" class="clearfix"></section>
    <main class="container main2">

        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb bgcolor">
                <li class="breadcrumb-item"><a href="#">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="page"> مطالب</li>
                <li class="breadcrumb-item active" aria-current="page"> {{$article->name}}</li>
            </ol>
        </nav>
    </main>
    <div class="d-flex justify-content-center">

        <div class="container">
           <div>
               <h1> {{$article->name}}</h1>
           </div>
            <ul>
                <li>نویسنده :  {{$article->user->name}}</li>
                <br><li>تاریخ :  {!! jdate($article->created_at)->format('%d %m %y') !!}</li>
                <br><li>بازدید   :  {{$article->hit}}</li>

            </ul>
        </div>
    </div>

    <div>
        <hr>
        <form action="{{route('comment.store', $article->slug)}}" method="post" class="form-group">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">نام : </label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group col-md-6">
                    <label for="email">ایمیل : </label>
                    <input type="text" class="form-control" name="email">
                </div>
            </div>
            <div class="form-group">
                <label for="body">متن نظر شما</label>
                <textarea class="form-control" name="body" id="" cols="30" rows="10"></textarea>
            </div>
            <button class="btn btn-primary" type="submit">ارسال نظر</button>
        </form>
    </div>
<div>
    @foreach($comments as $comment)
        <div>
            <ul>
                <li>تویسنده : {{$comment->name}}</li>
                <li>ایمیل : {{$comment->email}}</li>
            </ul>
            <div>
                <li> متن نظر : {{$comment->body}}</li>
            </div>
        </div>
    @endforeach
</div>
@endsection
