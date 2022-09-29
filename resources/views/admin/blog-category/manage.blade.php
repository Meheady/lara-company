@extends('admin.master')
@section('title')
    Manage category
@endsection
@section('admin')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body" style="overflow-x:auto!important;">

                    <h4 class="card-title">Manage Category</h4>
                    <table id="datatable" class="table table-bordered table-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Category Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($category as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->blog_category }}</td>
                                <td>
                                    <a href="{{ route('edit.category',['id'=>$data->id]) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('delete.category',['id'=>$data->id]) }}" onclick=" return confirm('Are you sure')" class="btn btn-danger">Delete</a>
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
