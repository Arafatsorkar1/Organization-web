@extends('front.master')

@section('title','Details')

@section('body')


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-5   ">
                    <div>
                        <img src="{{asset($run->image)}}" alt="" style="height: 280px; width: 300px">
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="text-center">


                        <h3>{{$run->name}}</h3>

                    </div>
                    <div><h2>{{$run->short}}</h2></div>

                    <div class="mt-10">

                        <p class="text-muted">{{$run->long}}</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
