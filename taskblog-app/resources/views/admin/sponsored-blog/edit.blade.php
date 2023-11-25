@extends('admin.layouts.app')
@section('title','sponsoredBlog Module')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">sponsoredBlog Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit sponsoredBlog</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row justify-content-center">
        <div class="col-lg-10 shadow">
            <div class="card shadow">
                <div class="card-header justify-content-center border-bottom">
                    <h2 class="fw-bold">Edit sponsoredBlog Form</h2>
                    <hr>
                </div>
                <div class="card-body">
                    <p class="text-primary fw-bold fs-5">{{session('message')}}</p>
                    <form action="{{route('sponsoredBlog.update',$sponsoredBlog->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Category</label>
                            <div class="form-group col-md-9">
                                <select name="category_id" class="form-control select2 form-select" data-placeholder="Choose Course">
                                    <option label="Choose one"></option>
                                    @foreach($categories as $category)
                                        <option {{$category->id == $sponsoredBlog->category_id ? 'selected':''}} value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{$errors->has('course_id')?$errors->first('course_id'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">sponsoredBlog name</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$sponsoredBlog->name}}" id="name" name="name" placeholder="sponsoredBlog name" type="text">
                                <span class="text-danger">{{$errors->has('name')?$errors->first('name'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="author" class="col-md-3 form-label">Author Name</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$sponsoredBlog->author}}" id="author" name="author" placeholder="sponsoredBlog name" type="text">
                                <span class="text-danger">{{$errors->has('author')?$errors->first('author'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="form-group ps-0 d-lg-flex col-md-12">
                                <label class="col-md-3 form-label">sponsoredBlog Images</label>
                                <div class="col-md-9">
                                    <input class="dropify" type="file" name="image" accept=" image/jpeg, image/png, text/html, application/zip, text/css, text/js" multiple />
                                    <img width="150" src="{{asset($sponsoredBlog->image)}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="short_description" class="col-md-3 form-label">Short Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="short_description" name="short_description" placeholder="Short Description" type="text" cols="30" rows="5">{{$sponsoredBlog->short_description}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="long_description" class="col-md-3 form-label">Long Description</label>
                            <div class="col-md-9">
                                <textarea class="summernote" id="long_description" name="long_description" placeholder="Long Description" type="text" cols="30" rows="5">{{$sponsoredBlog->long_description}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="radio" class="col-md-3 form-label">status</label>
                            <div class="col-md-9">
                                <input class="" id="published" name="status" {{$sponsoredBlog->status == 1 ?'checked':''}}  type="radio" value="1"><label for="published">published</label>
                                <input class="mx-2" id="Unpublished" name="status" {{$sponsoredBlog->status == 0 ?'checked':''}} type="radio" value="0"><label for="Unpublished">unpublished</label>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="radio" class="col-md-3 form-label"></label>
                            <div class="col-md-9">
                                <button class="btn btn-primary" type="submit">Update sponsoredBlog Info</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

