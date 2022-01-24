<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>آموزش لاراول - بخش مدیریت</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{url('back/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{url('back/assets/vendors/iconfonts/ionicons/css/ionicons.css')}}">
    <link rel="stylesheet" href="{{url('back/assets/vendors/iconfonts/typicons/src/font/typicons.css')}}">
    <link rel="stylesheet" href="{{url('back/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{url('back/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{url('back/assets/vendors/css/vendor.bundle.addons.css')}}">
    <link rel="stylesheet" href="{{url('back/assets/css/shared/style.css')}}">
    <link rel="stylesheet" href="{{url('back/assets/css/demo_1/style.css')}}">
    <link rel="shortcut icon" href="{{url('back/assets/images/favicon.png')}}" />
    <link rel='stylesheet' href="{{url('https://harvesthq.github.io/chosen/chosen.css')}}">
    <link href="{{url('/back/assets/chosen/chosen.css')}}" rel="stylesheet" />
    <script src="{{url('https://cdn.tiny.cloud/1/kkkgui8erlshi9iatl8c7s6p605dddsf1mjcfcyouizjxc10/tinymce/5/tinymce.min.js')}}" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#editor',
            plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker image searchreplace wordcount textcolor colorpicker',
            toolbar: 'a11ycheck casechange code formatpainter pageembed permanentpen table image file searchreplace',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Authorname',
            image_caption: true,
            relative_urls: false,

            file_picker_types: 'file image media',
            file_picker_callback: function (callback, value, meta) {
                let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                let y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                let type = 'image' === meta.filetype ? 'Images' : 'Files',
                    url  =  '/laravel-filemanager?editor=tinymce5&type=' + type;

                tinymce.activeEditor.windowManager.openUrl({
                    url : url,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    onMessage: (api, message) => {
                        callback(message.content);
                    }
                });
            }
        });
    </script>

</head>

<body>

<!-- partial:partials/_navbar.html -->
@include('back.sidebar')
<!-- partial -->
<div class="container-fluid page-body-wrapper">

    @include('back.navbar')
@yield('contents')
</div>

<script src="{{url('back/assets/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{url('back/assets/vendors/js/vendor.bundle.addons.js')}}"></script>

<script src="{{url('back/assets/js/shared/off-canvas.js')}}"></script>
<script src="{{url('back/assets/js/shared/misc.js')}}"></script>

<script src="{{url('back/assets/js/demo_1/dashboard.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.chosen-select').chosen();
    });
</script>
<script src="{{url('/back/assets/chosen/chosen.jquery.js')}}"></script>
<script src="{{url('/back/assets/chosen/chosen.proto.js')}}"></script>


</body>

</html>
