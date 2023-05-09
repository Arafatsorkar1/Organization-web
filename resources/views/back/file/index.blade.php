@extends('back.master')

@section('title','Manage ')

@section('body')



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Manage Occopetion</h3>
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
                                @foreach($files as $file)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $file->name }}</td>
                                        <td>{{ $file->pdf }}</td>




                                        <td>

                                            <a href="javascript:void(0)" onclick="event.preventDefault();document.getElementById('deleteFrom{{$file->id}}').submit();" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>

                                            <form id="deleteFrom{{$file->id}}" action="{{ route('Files.destroy', $file->id) }}" method="post">
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
