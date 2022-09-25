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
                        <h4 class="text-center">Add Portfolio</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('save.portfolio') }}" method="post" enctype="multipart/form-data" >
                            @csrf
                            <div class="row form-group mb-2">
                                <label for="" class="col-md-2 col-form-label">Portfolio Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="portfolio_name" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group mb-2">
                                <label for="" class="col-md-2 col-form-label">Portfolio Title</label>
                                <div class="col-md-9">
                                    <input type="text" name="portfolio_title" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group mb-2">
                                <label for="" class="col-md-2 col-form-label">Portfolio Description</label>
                                <div class="col-md-9">
                                    <textarea id="elm1" name="portfolio_desc"></textarea>
                                </div>
                            </div>
                            <div class="row form-group mb-2">
                                <label for="" class="col-md-2 col-form-label">Portfolio Image</label>
                                <div class="col-md-9">
                                    <input type="file" id="image" accept="image/png,  image/gif, image/jpeg" name="portfolio_image" class="form-control-file">
                                    <img id="showImage" src=""  width="100px" height="100px" alt="">
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
