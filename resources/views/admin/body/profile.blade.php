@extends('admin.master')

@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <img class="rounded-circle avatar-xl card-img text-center card-img" alt="200x200" src="{{ asset($admindata->profile_image) }}" data-holder-rendered="true">
                    </div>
                    <div class="card-body">


                        <p>Your Name: <b>{{ $admindata->name }} </b></p>
                        <p>Your Username:<b> {{ $admindata->username }} </b></p>
                        <p>Your Email: <b>{{ $admindata->email }}</b></p>

                        <a href="{{ route('edit.profile') }}" class="btn btn-success">Edit Profile</a>
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div>
    </div>
@endsection

