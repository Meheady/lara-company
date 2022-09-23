@extends('admin.master')
@section('title')
    Add Hero Section
@endsection
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Edit About Section</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update.about.section',['id'=>$data->id]) }}" method="post" enctype="multipart/form-data" >
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
                                <label for="" class="col-md-2 col-form-label">Short Description</label>
                                <div class="col-md-9">
                                    <textarea name="short_desc" id="" class="form-control" cols="30" rows="4">{{ $data->short_desc }}</textarea>
                                </div>
                            </div>
                            <div class="row form-group mb-2">
                                <label for="" class="col-md-2 col-form-label">Long Description</label>
                                <div class="col-md-9">
                                    <textarea id="elm1" name="long_desc">{{ $data->long_desc }}</textarea>
                                </div>
                            </div>
                            <div class="row form-group mb-2">
                                <label for="" class="col-md-2 col-form-label">About Image</label>
                                <div class="col-md-9">
                                    <input type="file" id="image" accept="image/png,  image/gif, image/jpeg" name="about_image" class="form-control-file">
                                    <img id="showImage" src="{{ asset($data->about_image) }}"  width="100px" height="100px" alt="">
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

    <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                console.log(reader);
                reader.onload = function (e) {
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>

@endsection
