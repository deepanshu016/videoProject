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
                            <li class="breadcrumb-item active">Privacy Policy</li>
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
                        <h4 class="card-title mb-0">Privacy Policy</h4>
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

                                <form action="{{ route('admin.privacy.policy') }}" method="POST"  class="all-form">
                                    @csrf
                                        <div class="live-preview">
                                            <div class="mb-3">
                                               <label for="videoDescription" class="form-label">Privacy Policy Content</label>
                                               <textarea class="form-control" rows="3" placeholder="Privacy Policy Content" name="privacy_and_policy" id="privacy_policys">{{ @$cms->privacy_policy_content }}</textarea>
                                               <span class="text-danger" id="privacy_and_policy"> </span>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6" style="margin-top: 15px;">
                                                    <button type="submit" class="btn rounded-pill btn-success waves-effect waves-light">Save</button>
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
@section('page_script')
<script type="text/javascript">
  $(function () {
 
     $('.tags').tagify();
    
  });
</script>
@endsection