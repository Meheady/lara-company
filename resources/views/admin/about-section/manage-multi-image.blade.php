@extends('admin.master')
@section('title')
    Manage Hero Section
@endsection
@section('admin')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body" style="overflow-x:auto!important;">

                    <h4 class="card-title">Manage Multi Image</h4>
                    <table id="datatable" class="table table-bordered table-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>About Multi Imange</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($multiImage as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img src="{{ asset($data->multi_image) }}" width="50px" height="50px" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('edit.multi.image',['id'=>$data->id]) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('delete.multi.image',['id'=>$data->id]) }}" onclick=" return confirm('Are you sure')" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
