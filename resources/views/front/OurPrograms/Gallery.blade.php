@extends('front.master')

@section('title', ' Education')

@section('body')

            <!-- Section: Gallery -->
                <section id="gallery">
                    <div class="container pb-70">
                        <div class="section-title text-center">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <h2 class="mt-0 line-height-1 text-center mb-10 text-black-333 text-uppercase">Our <span class="text-theme-colored"> Gallery</span></h2>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="section-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Portfolio Gallery Grid -->

                                    <div class="gallery-isotope grid-4 gutter-small clearfix" data-lightbox="gallery">
                                        <!-- Portfolio Item Start -->

                                        @foreach($pictures as $picture)
                                        <div class="gallery-item">
                                            <img src="{{asset($picture->image)}}" alt="" style="width:280px; height:190px ">
                                        </div>
                                    @endforeach
                                        <!-- Portfolio Item End -->


                                    </div>
                                    <!-- End Portfolio Gallery Grid -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


@endsection
