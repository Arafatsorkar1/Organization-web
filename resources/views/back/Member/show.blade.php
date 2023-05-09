@extends('back.master')

@section('title','Manage ')

@section('body')



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Manage Members Details</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <tr>
                                    <th>Session</th>
                                    <td>{{ $member->session ?? '' }}</td>
                                </tr>

                                <tr>
                                    <th>Occopetation</th>
                                    <td>{{ $member->occopetation ?? ''}}</td>
                                </tr>

                                <tr>
                                    <th>Trainee_Name</th>
                                    <td>{{ $member->trainee_Name ?? '' }}</td>
                                </tr>

                                <tr>
                                    <th>Designation</th>
                                    <td>{{ $member->designation ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $member->name ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{ $member->address ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Country</th>
                                    <td>{{ $member->country ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>From</th>
                                    <td>{{ $member->from ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>To</th>
                                    <td>{{ $member->to ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Mobile</th>
                                    <td>{{ $member->mobile ?? '' }}</td>
                                </tr>

                                <tr>
                                    <th>Employment Type</th>
                                    <td>{{ $member->type ?? '' }}</td>
                                </tr>

                                <tr>
                                    <th>Reg/ID</th>
                                    <td>{{ $member->reg ?? '' }}</td>
                                </tr>

                                <tr>
                                    <th>Assessment Date</th>
                                    <td>{{ $member->assessment ?? '' }}</td>
                                </tr>

                                <tr>
                                    <th>Monthly Income (BDT)</th>
                                    <td>{{ $member->income ?? '' }}</td>
                                </tr>

                                <tr>
                                    <th></th>
                                    <td> <a href="{{ route('members.index', $member->id) }}" class="btn btn-success btn-sm">
                                           Back
                                        </a>
                                       <a href="{{ route('members.edit', $member->id) }}" class="btn btn-warning btn-sm">
                                           <i class="fas fa-edit"></i>
                                       </a>
                                   </td>
                                </tr>


                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
