@extends('back.index')
@section('title')
    پنل مدیریت - مدیریت مطالب
@endsection
@section('contents')
<div class="main-panel">
    <div class="content-wrapper">
        <!-- Page Title Header Starts-->
        <div class="row page-title-header">
            <div class="col-12">
                <div class="page-header">
                    <h4 class="page-title">مدیریت مطالب</h4>
                </div>
            </div>

        </div>
        <div class="row">
            <a href="{{route('admin.articles.create')}}" class="btn btn-success">مطلب  جدید</a>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        @include('back.message')
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>نام</th>
                                <th>نام مستعار - slug</th>
                                <th>آیکون</th>
                                <th>نویسنده</th>
                                <th>دسته بندی</th>
                                <th>بازدید</th>
                                <th>وضعیت</th>
                                <th>مدیریت</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($articles as $article)
                                @switch($article->status)
                                    @case(1)
                                    @php
                                        $url = route('admin.articles.status' , $article->id);
                                            $status ='<a href="'.$url.'" class="badge badge-success"> فعال</>' @endphp
                                    @break
                                    @case(0)
                                    @php
                                        $url = route('admin.articles.status' , $article->id);
                                        $status ='<a href="'.$url.'" class="badge badge-warning"> غیرفعال</>' @endphp
                                    @break
                                    @default
                                @endswitch
                                <tr>
                                    <td>{{$article->name}}</td>
                                    <td>{{$article->slug}}</td>
                                    <td>{{$article->icon}}</td>
                                    <td>{{$article->user->name}}</td>
                                    <td>
                                        @foreach($article->categories()->pluck('title') as $category)
                                            <span class="badge badge-warning">{{$category}}</span>
                                        @endforeach
                                    </td>
                                    <td>{{$article->hit}}</td>
                                    <td>{!! $status !!}</td>
                                    <td><a href="{{route('admin.articles.edit' , $article->id)}}"
                                           class="badge badge-success">ویرایش</a></td>
                                    <td><a href="{{route('admin.articles.destroy' , $article->id)}}"
                                           class="badge badge-danger"
                                        onclick="return confirm('آیا ایتم مورد نظر حذف شود');"> حذف</a></td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>

                    </div>
                    {{ $articles->links() }}
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
