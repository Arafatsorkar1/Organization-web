@extends('back.master')

@section('title','edit Member')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Edit Members</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('members.update', $member->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')


                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Session</label>
                                    <div class="col-md-8">
                                        <input type="text" name="session" class="form-control" value="{{$member->session}}" />
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Occopetation</label>
                                    <div class="col-md-8">
                                        <input type="text" name="occopetation" class="form-control" value="{{$member->occopetation}}"/>
                                    </div>
                                </div>


                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Trainee Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="trainee_Name" class="form-control" value="{{$member->trainee_Name}}"/>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Designation</label>
                                    <div class="col-md-8">
                                        <input type="text" name="designation" class="form-control" value="{{$member->designation}}" />
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control" value="{{$member->name}}"/>
                                    </div>
                                </div>


                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Address</label>
                                    <div class="col-md-8">
                                        <input type="text" name="address" class="form-control" value="{{$member->address}}"/>
                                    </div>
                                </div>


                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Country</label>
                                    <div class="col-md-8">
                                        <input type="text" name="country" class="form-control" value="{{$member->country}}"/>
                                    </div>
                                </div>


                                <div class="row mt-3">
                                    <label for="" class="col-md-4">From</label>
                                    <div class="col-md-8">
                                        <input type="text" name="from" class="form-control" value="{{$member->from}}"/>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="" class="col-md-4">To</label>
                                    <div class="col-md-8">
                                        <input type="text" name="to" class="form-control" value="{{$member->to}}"/>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Mobile</label>
                                    <div class="col-md-8">
                                        <input type="number" name="mobile" class="form-control" value="{{$member->mobile}}"/>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Employment Type</label>
                                    <div class="col-md-8">
                                        <input type="text" name="type" class="form-control" value="{{$member->type}}"/>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Reg/ID</label>
                                    <div class="col-md-8">
                                        <input type="text" name="reg" class="form-control" value="{{$member->reg}}" />
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Assessment Date</label>
                                    <div class="col-md-8">
                                        <input type="text" name="assessment" class="form-control" value="{{$member->assessment}}"/>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Monthly Income (BDT)</label>
                                    <div class="col-md-8">
                                        <input type="text" name="income" class="form-control" value="{{$member->income}}"/>
                                    </div>
                                </div>




                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success" value="Update Member" />
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










