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
                            <th>Title</th>
                            <th>Short Title</th>
                            <th>Short Desc</th>
                            <th>Long Desc</th>
                            <th>About Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($datas as $data)
                        <tr>
                            <td>{{ $data->title }}</td>
                            <td>{{ $data->short_title }}</td>
                            <td>{{ $data->short_desc }}</td>
                            <td>{!! $data->long_desc !!}</td>
                            <td>
                                <img src="{{ asset($data->about_image) }}" width="50px" height="50px" alt="">
                            </td>
                            <td>
                                <a href="{{ route('edit.about.section',['id'=>$data->id]) }}" class="btn btn-success">Edit</a>
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
