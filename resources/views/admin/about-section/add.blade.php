@extends('admin.master')
@section('title')
    Add Hero Section
@endsection
@section('admin')

    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Add About Section</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('save.about.section') }}" method="post" enctype="multipart/form-data" >
                            @csrf
                            <div class="row form-group mb-2">
                                <label for="" class="col-md-2 col-form-label">Title</label>
                                <div class="col-md-9">
                                    <input type="text" name="title" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group mb-2">
                                <label for="" class="col-md-2 col-form-label">Short Title</label>
                                <div class="col-md-9">
                                    <input type="text" name="short_title" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group mb-2">
                                <label for="" class="col-md-2 col-form-label">Short Description</label>
                                <div class="col-md-9">
                                    <input type="text" name="short_desc" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group mb-2">
                                <label for="" class="col-md-2 col-form-label">Long Description</label>
                                <div class="col-md-9">
                                    <input type="text" name="long_desc" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group mb-2">
                                <label for="" class="col-md-2 col-form-label">About Image</label>
                                <div class="col-md-9">
                                    <input type="file" accept="image/png, image/gif, image/jpeg" name="about_image" class="form-control-file">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="" class="col-md-2 col-form-label"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="save_data" class="btn btn-success btn-block">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
