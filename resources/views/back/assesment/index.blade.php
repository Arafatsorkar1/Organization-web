@extends('back.master')

@section('title','assessments ')

@section('body')



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Manage assessments</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-hover baseDataTable">
                                <thead>
                                <tr>
                                    <th>#</th>


                                    <th>Title</th>
                                    <th>PDF</th>

                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($gets as $get)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $get->name }}</td>
                                        <td>{{ $get->pdf }}</td>




                                        <td>

                                            <a href="javascript:void(0)" onclick="event.preventDefault();document.getElementById('deleteFrom{{$get->id}}').submit();" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>

                                            <form id="deleteFrom{{$get->id}}" action="{{ route('assesments.destroy', $get->id) }}" method="post">
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
