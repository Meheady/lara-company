@extends('admin.master')
@section('title')
    Manage Hero Section
@endsection
@section('admin')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Manage Hero Section</h4>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Short Title</th>
                            <th>Video Url</th>
                            <th>Hero Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($heroSectionDatas as $heroSectionData)
                        <tr>
                            <td>{{ $heroSectionData->title }}</td>
                            <td>{{ $heroSectionData->short_title }}</td>
                            <td>{{ $heroSectionData->video_url }}</td>
                            <td>
                                <img src="{{ asset($heroSectionData->slide_image) }}" width="50px" height="50px" alt="">
                            </td>
                            <td>
                                <a href="{{ route('edit.hero.section',['id'=>$heroSectionData->id]) }}" class="btn btn-success">Edit</a>
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
