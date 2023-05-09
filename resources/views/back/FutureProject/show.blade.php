@extends('back.master')

@section('title','Manage ')

@section('body')



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Manage Future  Project</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $project->name ?? '' }}</td>
                                </tr>

                                <tr>
                                    <th>Short Description</th>
                                    <td>{{ $project->short ?? ''}}</td>
                                </tr>

                                <tr>
                                    <th>Long Description</th>
                                    <td>{{ $project->long ?? '' }}</td>
                                </tr>


                                <tr>
                                    <th>Image</th>
                                    <td><img src="{{asset($project->image)}}" style="height: 80px" alt=""</td>
                                </tr>




                                <tr>
                                    <th></th>
                                    <td> <a href="{{ route('FutureProjects.index', $project->id) }}" class="btn btn-success btn-sm">
                                           Back
                                        </a>
                                       <a href="{{ route('FutureProjects.edit', $project->id) }}" class="btn btn-warning btn-sm">
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
