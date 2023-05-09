@extends('front.master')

@section('title', ' error')


<div id="wrapper">
    <!-- preloader -->
    <div id="preloader">
        <div id="spinner">
            <img src="{{asset('/')}}assets/images/preloaders/4.gif" alt="">
        </div>
        <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
    </div>

    <!-- start main-content -->
    <div class="main-content">
        <!-- Section: home -->
        <section id="home" class="fullscreen bg-lightest">
            <div class="display-table text-center">
                <div class="display-table-cell">
                    <div class="container pt-0 pb-0">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h1 class="font-150 text-theme-colored mt-0 mb-0"><i class="fa fa-map-signs text-theme-color-2"></i>404!</h1>
                                <h2 class="mt-0">Oops! Page Not Found</h2>
                                <p>The page you were looking for could not be found.</p>
                                <a class="btn btn-border btn-gray btn-transparent btn-circled" href="index-mp-layout1.html">Return Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->

    <!-- Footer -->
    <footer id="footer" class="footer bg-black-333 text-center pt-20 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-black-777 m-0">Copyright &copy;2015 ThemeMascot. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
