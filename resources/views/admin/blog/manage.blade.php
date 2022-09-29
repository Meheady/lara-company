@extends('admin.master')
@section('title')
    Manage Hero Section
@endsection
@section('admin')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body" style="overflow-x:auto!important;">

                    <h4 class="card-title">Manage About Section</h4>
                    <table id="datatable" class="table table-bordered table-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Blog category</th>
                            <th>Blog title</th>
                            <th>BLog tags</th>
                            <th>Blog Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($datas as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data['category']['blog_category'] }}</td>
                                <td>{{ $data->blog_title }}</td>
                                <td>{{ $data->blog_tags }}</td>
                                <td>
                                    <img src="{{ asset($data->blog_image) }}" width="50px" height="50px" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('edit.blog',['id'=>$data->id]) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('delete.blog',['id'=>$data->id]) }}" class="btn btn-danger">Delete</a>
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
