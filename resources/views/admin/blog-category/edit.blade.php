@extends('admin.master')
@section('title')
    Edit Category
@endsection
@section('admin')
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Edit category</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update.category',['id'=>$category->id]) }}" method="post">
                            @csrf
                            <div class="row form-group mb-2">
                                <label for="" class="col-md-2 col-form-label">Category Name</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{ $category->blog_category }}" name="blog_category" class="form-control">
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
