@extends('admin.master')
@section('title')
    Update Hero Section
@endsection
@section('admin')

    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Update Hero Section</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update.hero.section',['id'=>$data->id]) }}" enctype="multipart/form-data" method="post" >
                            @csrf

                            <div class="row form-group mb-2">
                                <label for="" class="col-md-2 col-form-label">Title</label>
                                <div class="col-md-9">
                                    <input type="text" name="title" value="{{ $data->title }}" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group mb-2">
                                <label for="" class="col-md-2 col-form-label">Short Title</label>
                                <div class="col-md-9">
                                    <input type="text" name="short_title" value="{{ $data->short_title }}" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group mb-2">
                                <label for="" class="col-md-2 col-form-label">Video URL</label>
                                <div class="col-md-9">
                                    <input type="text" name="video_url" value="{{ $data->video_url }}" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group mb-2">
                                <label for="" class="col-md-2 col-form-label">Hero Image</label>
                                <div class="col-md-9">
                                    <input type="file" accept="image/png, image/gif, image/jpeg" name="hero_image" class="form-control-file">
                                    <img src="{{asset($data->slide_image)}}" width="50px" height="50px" alt="">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="" class="col-md-2 col-form-label"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="save_data" value="Update" class="btn btn-success btn-block">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


