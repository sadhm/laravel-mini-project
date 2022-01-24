@extends('back.index')
@section('title')
   ویرایش دسته بندی
@endsection
@section('contents')
<div class="main-panel">
    <div class="content-wrapper">
        <!-- Page Title Header Starts-->
        <div class="row page-title-header">
            <div class="col-12">
                <div class="page-header">
                    <h4 class="page-title">ویرایش دسته بندی </h4>
                </div>
            </div>

        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    @include('back.message')
                    <form action="{{route('admin.categories.update', $category->id)}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">نام دسته بندی</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                   value="{{old($category->title)}}">
                            @error('title')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="slug">نام مستعار -slug</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug"
                                   value="{{old($category->slug)}}">
                            @error('slug')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">

                            <button type="submit" class="btn btn-success">ویرایش  </button>
                            <a href="{{route('admin.categories')}}" class="btn btn-warning">انصراف</a>
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
