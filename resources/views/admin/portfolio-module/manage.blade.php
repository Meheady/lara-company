@extends('admin.master')
@section('title')
    Manage Hero Section
@endsection
@section('admin')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body" style="overflow-x:auto!important;">

                    <h4 class="card-title">Manage Portfolio</h4>
                    <table id="datatable" class="table table-bordered table-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Portfolio name</th>
                            <th>Portfolio title</th>
                            <th>Portfolio desc</th>
                            <th>Portfolio image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($portfolio as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->portfolio_name }}</td>
                            <td>{{ $data->portfolio_title }}</td>
                            <td>{{ $data->portfolio_desc }}</td>
                            <td>
                                <img src="{{ asset($data->portfolio_image) }}" width="50px" height="50px" alt="">
                            </td>
                            <td>
                                <a href="{{ route('edit.portfolio',['id'=>$data->id]) }}" class="btn btn-success">Edit</a>
                                <a onclick="return confirm('Are you sure?')" href="{{ route('delete.portfolio',['id'=>$data->id]) }}" class="btn btn-danger">Delete</a>
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
