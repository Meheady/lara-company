@extends('admin.master')

@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Change Password</p>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="post" action="{{ route('update.password') }}">
                            @csrf

                            <div class="row">
                                <label for="" class="col-md-3 col-form-label">Old Password</label>
                                <div class="col-md-9">
                                    <input type="password"  name="oldpassword" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-3 col-form-label">New password</label>
                                <div class="col-md-9">
                                    <input type="password" name="newpassword" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-3 col-form-label">Confirm Password</label>
                                <div class="col-md-9">
                                    <input type="password" name="confirmpassword" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-3 col-form-label"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" name="update" value="Change Password">
                                </div>
                            </div>
                        </form>
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div>
    </div>

@endsection

