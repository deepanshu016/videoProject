@extends('backend.includes.layout')
@section('title','Admin panel | Upload Video')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Upload Video</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Upload Vide</h4>
                    </div>
                    <!-- end card header -->
                    <div class="card-body">
                        <div id="customerList">
                            <div class="row g-4 mb-3">
                                <div class="col-sm-auto">
                                    <div>
                                        <a href="#" class="btn btn-success add-btn" > List</a>
                                    </div>
                                </div>

                                <form action="{{ route('video.upload') }}" method="POST" enctype="multipart/form-data" class="all-form">
                                    @csrf
                                        <div class="live-preview">
                                            <div class="row">

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="basiInput" class="form-label">Course Full Name</label>
                                                        <input class="form-control" type="text" name="course_full_name"  placeholder="Course Full Name">
                                                        <span class="text-danger" id="course_full_name"></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="basiInput" class="form-label">Certificate Image</label>
                                                        <input class="form-control" type="file" name="certificate_video">
                                                        <span class="text-danger" id="certificate_image"></span>

                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="basiInput" class="form-label">Marksheet Image</label>
                                                        <input class="form-control" type="file" name="marksheet_image" accept="image/*">
                                                        <span class="text-danger" id="marksheet_image"></span>

                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="basiInput" class="form-label">Certificate Number Prefix</label>
                                                        <input class="form-control" type="text" name="certificate_no_prefix" placeholder="Certificate Number Prefix">
                                                        <span class="text-danger" id="certificate_no_prefix"></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="basiInput" class="form-label">Count Start</label>
                                                        <input class="form-control" type="text" name="count_start" placeholder="Count Start">
                                                        <span class="text-danger" id="count_start"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6" style="margin-top: 15px;">
                                                    <button type="submit" class="btn rounded-pill btn-success waves-effect waves-light">Update</button>

                                                </div>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end col -->
        </div>

    </div>
    <!-- container-fluid -->
</div>
@endsection
