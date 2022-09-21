@extends('admin.master')

@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="page-content">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <img class="rounded-circle avatar-xl card-img text-center card-img" alt="200x200" src="{{ asset($admindata->profile_image) }}" data-holder-rendered="true">
                    </div>
                    <div class="card-body">

                        <form method="post" action="{{ route('store.profile') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <label for="" class="col-md-3 col-form-label">Name</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{ $admindata->name }}" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-3 col-form-label">User Name</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{ $admindata->username }}" name="username" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-3 col-form-label">Email</label>
                                <div class="col-md-9">
                                    <input type="email" value="{{ $admindata->email }}" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-3 col-form-label">Upload</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" id="image" name="image">
                                    <img id="showImage" src="{{ asset($admindata->profile_image) }}" width="100px" height="100px" alt="">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-3 col-form-label"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" name="update" value="Update">
                                </div>
                            </div>
                        </form>
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
           $('#image').change(function(e){
               var reader = new FileReader();
               reader.onload = function (e) {
                   $('#showImage').attr('src',e.target.result);
               }
               reader.readAsDataURL(e.target.files['0']);
           });
        });
    </script>
@endsection

