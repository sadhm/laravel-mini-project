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
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            @include('back.message')
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>خلاصه نظر</th>
                                    <th>نام نویسنده</th>
                                    <th> برای مطلب</th>
                                    <th>تاریخ ثبت</th>
                                    <th>وضعیت</th>
                                    <th>مدیریت</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($comments as $comment)
                                    @switch($comment->status)
                                        @case(1)
                                        @php
                                            $url = route('admin.comments.status' , $comment->id);
                                                $status ='<a href="'.$url.'" class="badge badge-success"> فعال</>' @endphp
                                        @break
                                        @case(0)
                                        @php
                                            $url = route('admin.comments.status' , $comment->id);
                                            $status ='<a href="'.$url.'" class="badge badge-warning"> غیرفعال</>' @endphp
                                        @break
                                        @default
                                    @endswitch
                                    <tr>
                                        <td>{!! mb_substr($comment->body,0,40) !!}</td>
                                        <td>{{$comment->name}}</td>
                                        <td>{{$comment->article->name}}</td>
                                        <td>{!! jdate($comment->created_at)->format('%y-%m-%d') !!}</td>
                                        <td>{!! $status !!}</td>
                                        <td><a href="{{route('admin.comments.edit' , $comment->id)}}"
                                               class="badge badge-success">ویرایش</a></td>
                                        <td><a href="{{route('admin.comments.destroy' , $comment->id)}}"
                                               class="badge badge-warning"
                                               onclick="return confirm('آیا ایتم موردنظر حذف شود');"> حذف</a></td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>

                        </div>
                        {{ $comments->links() }}
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
