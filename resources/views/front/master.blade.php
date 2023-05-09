<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="fundpress - Nonprofit, Crowdfunding & Charity HTML5 Template" />
    <meta name="keywords" content="charity,crowdfunding,nonprofit,orphan,Poor,funding,fundrising,ngo,children" />
    <meta name="author" content="ThemeMascot" />

    <!-- Page Title -->
    <title>compact foundation | @yield('title')</title>



    @include('front.includes.css')
</head>
<body class=" pt-0 pb-0 " data-bg-img="images/pattern/p13.png">
<div id="wrapper" class="clearfix">
    <!-- preloader -->
    <div id="preloader">
        <div id="spinner">
            <img alt="" src="{{asset('/')}}assets/images/preloaders/5.gif">
        </div>
        <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
    </div>

 @include('front.includes.header')


    @yield('body')


    @include('front.includes.footer')
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- Footer Scripts -->
@include('front.includes.js')
</body>
</html>
