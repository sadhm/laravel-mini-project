<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="{{url('/front/img/favicon.png')}}" rel="icon">
    <link href="{{url('/front/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700"
        rel="stylesheet">
    <link href="{{url('/front/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('front/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{url('/front/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{url('/front/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{url('/front/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{url('front/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <link href="{{url('/front/css/style.css')}}" rel="stylesheet">

</head>

<body dir="rtl">

@include('front.navbar')

@yield('content')

@include('front.footer')

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- Uncomment below i you want to use a preloader -->
<!-- <div id="preloader"></div> -->

<!-- JavaScript Libraries -->
<script src="{{url('/front/lib/jquery/jquery.min.js')}}"></script>
<script src="{{url('/front/lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{url('/front/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('/front/lib/easing/easing.min.js')}}"></script>
<script src="{{url('/front/lib/mobile-nav/mobile-nav.js')}}"></script>
<script src="{{url('/front/lib/wow/wow.min.js')}}"></script>
<script src="{{url('/front/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{url('/front/lib/counterup/counterup.min.js')}}"></script>
<script src="{{url('/front/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{url('/front/lib/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{url('/front/lib/lightbox/js/lightbox.min.js')}}"></script>
<!-- Contact Form JavaScript File -->
<script src="{{url('/front/contactform/contactform.js')}}"></script>

<!-- Template Main Javascript File -->
<script src="{{url('/front/js/main.js')}}"></script>
<script>
    function changetext(obj){
        $("button").click(function () {
            var b = $(this);
            $.ajax({
                url: "",
                button: b,
                success: function (result) {
                    b.text("New Text");
                }
            });
        });

       /* $.ajax({
            type: "POST",
            url: "",
            data:{},
            success:function( data )
            {
                $(obj).text("New Text");
           }
        });*/
    }
</script>
</body>

</html>
