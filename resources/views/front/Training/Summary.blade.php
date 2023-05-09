@extends('front.master')

@section('title', ' Summary')

@section('body')

    <div class="main-content">

        <!-- Section: inner-header -->
        <section class="" data-bg-img="">
            <div class="container  pb-50">
                <!-- Section Content -->
                <div class="section-content ">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="text-center text-black">Batch Wise Job Placement Summary:</h3>
                        </div>
                        <div class="col-md-12">

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Causes -->
        <section>
            <div class="container pb-30">
                <div class="section-content">
                    <div class="row multi-row-clearfix">
                        <div class="col-sm-12 col-md-12">






                            <div class="causes bg-white maxwidth500 clearfix mb-40">




                                <div class="col-md-12">
                                    <div class="causes-details clearfix p-15 pt-0 pb-10 pl-0">
                                        <h4 class="font-weight-600 mt-0"><a href="#"> </a></h4>
                                        <p class="border-bottom pb-15">

                                        <div class="table-responsive">

                                        <table class="table baseDataTable table-striped table-hover table-bordered ">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th >Session</th>
                                                <th >Occopetation</th>
                                                <th >Trainee Name</th>
                                                <th >Designation</th>
                                                <th>Company Name</th>
                                                <th >Company Address</th>
                                                <th >Country</th>









                                                <th >From</th>
                                                <th >To</th>



                                                <th >Mobile</th>
                                                <th >Employment Type</th>
                                                <th >Reg/ID</th>
                                                <th >Assessment Date</th>
                                                <th >Monthly Income (BDT)</th>







                                            </tr>
                                            </thead>


                                            <tbody>
                                            @foreach($members as $member)
                                            <tr>

                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{$member->session}}</td>
                                                <td>{{$member->occopetation}}</td>
                                                <td>{{$member->trainee_Name}}</td>
                                                <td>{{$member->designation}}</td>
                                                <td>{{$member->name}}</td>
                                                <td>{{$member->address}}</td>
                                                <td>{{$member->country}}</td>
                                                <td>{{$member->from}}</td>









                                                <td>{{$member->to}}</td>
                                                <td>{{$member->mobile}}</td>



                                                <td>{{$member->type}}</td>
                                                <td>{{$member->reg}}</td>
                                                <td>{{$member->assessment}}</td>
                                                <td>{{$member->income}}</td>


                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        </div>







                                            <a href="#" class="text-theme-colored ml-5"> </a></p>

                                        <div class="causes mt-20 mb-20">
                                            <div class="progress-item mt-0">

                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>















                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection



