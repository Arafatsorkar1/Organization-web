@extends('back.master')

@section('title','Manage ')

@section('body')



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Manage Mambers</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-hover baseDataTable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Session</th>
                                    <th>Occopetation</th>
                                    <th>Trainee Name</th>
                                    <th>Designation</th>
                                    <th>Company Name</th>
                                    <th>Company Address</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($members as $member)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $member->session}}</td>
                                        <td>{{ $member->occopetation}}</td>
                                        <td>{{ $member->trainee_Name}}</td>
                                        <td>{{ $member->name}}</td>
                                        <td>{{ $member->address}}</td>
                                        <td>{{ $member->country}}</td>

                                        <td>
                                            <a href="{{ route('members.edit', $member->id) }}" class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <a href="{{ route('members.show', $member->id) }}" class="btn btn-info btn-sm">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="event.preventDefault();document.getElementById('deleteFrom{{$member->id}}').submit();" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>

                                            <form id="deleteFrom{{$member->id}}" action="{{ route('members.destroy', $member->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
