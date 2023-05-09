@extends('back.master')

@section('title','certificate')

@section('body')


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Add certificate</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('cirtifications.store') }}" method="post" enctype="multipart/form-data">
                                @csrf



                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Title</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" >
                                    </div>
                                </div>






                                <div class="row mt-3">
                                    <label for="" class="col-md-4">File</label>
                                    <div class="col-md-8">
                                        <input type="file" name="pdf" >
                                    </div>
                                </div>








                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success" value="Add certificate" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
