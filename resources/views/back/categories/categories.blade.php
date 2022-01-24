@extends('back.index')
@section('title')
    بخش دسته بندی ها - مدیریت کاربران
@endsection
@section('contents')
<div class="main-panel">
    <div class="content-wrapper">
        <!-- Page Title Header Starts-->
        <div class="row page-title-header">
            <div class="col-12">
                <div class="page-header">
                    <h4 class="page-title">مدیریت دسته بندی ها</h4>
                </div>
                <div class=" float-right">
                    <a href="{{route('admin.categories.create')}}" class="btn btn-success btn-fw">دسته
                        بندی جدید</a>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        @include('back.message')
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>نام</th>
                                <th>نام مستعار - slug</th>
                                <th>مدیریت</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)

                                <tr>
                                    <td>{{$category->title}}</td>
                                    <td>{{$category->slug}}</td>
                                    <td><a href="{{route('admin.categories.edit' , $category->id)}}"
                                           class="badge badge-success">ویرایش</a></td>
                                    <td><a href="{{route('admin.categories.destroy' , $category->id)}}"
                                           class="badge badge-danger"
                                        onclick="return confirm('آیا ایتم موردنظر حذف شود');"> حذف</a></td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>

                    </div>
                    {{ $categories->links() }}
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
