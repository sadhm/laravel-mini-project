@extends('back.index')
@section('title')
    مطلب جدید
@endsection
@section('contents')
<div class="main-panel">
    <div class="content-wrapper">
        <!-- Page Title Header Starts-->
        <div class="row page-title-header">
            <div class="col-12">
                <div class="page-header">
                    <h4 class="page-title">  مطلب جدید</h4>
                </div>
            </div>

        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">

                <div class="card-body">
                    @include('back.message')
                    <form action="{{route('admin.articles.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">نام مطلب</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                   value="{{old('name')}}">
                            @error('name')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="slug">نام مستعار -slug</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug"
                                   value="{{old('slug')}}">
                            @error('slug')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">محتوای مطلب</label>
                            <textarea id="editor" type="text" class="form-control @error('description') is-invalid @enderror" name="description">{{old('description')}}</textarea>
                            @error('description')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="status">انتخاب دسته بندی</label>
                            <div id="output"></div>
                            <select class="chosen-select" name="categories[]" multiple
                            style="width: 400px">
                                @foreach($categories as $cat_id =>$cat_title)
                                    <option value="{{$cat_title}}"> {{$cat_id}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="user_id">نویسنده مطلب : {{\Illuminate\Support\Facades\Auth::user()->name}} </label>
                            <input  type="hidden"  name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                        </div>

                        <div class="form-group">
                            <label for="status">وضعیت</label>
                            <select  name="status" class="form-control">
                                <option value="0">منتشر نشده</option>
                                <option value="1">منتشر شده</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">ذخیره  </button>
                            <a href="{{route('admin.articles')}}" class="btn btn-warning">انصراف</a>
                        </div>

                    </form>


                </div>

            </div>

        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    @include('back.footer')
    <!-- partial -->
</div>
@endsection
