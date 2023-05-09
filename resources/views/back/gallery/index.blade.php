@extends('back.master')

@section('title','Manage ')

@section('body')



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Manage Image</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-hover baseDataTable">
                                <thead>
                                <tr>
                                    <th>#</th>


                                    <th>Image</th>

                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($p as $picture)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td>
                                            <img src="{{asset($picture->image)}}" style="height: 80px" alt="">
                                        </td>


                                        <td>

                                            <a href="javascript:void(0)" onclick="event.preventDefault();document.getElementById('deleteFrom{{$picture->id}}').submit();" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>

                                            <form id="deleteFrom{{$picture->id}}" action="{{ route('gallerys.destroy', $picture->id) }}" method="post">
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
