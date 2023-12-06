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
                        <h4 class="card-title mb-0">Upload Video</h4>
                    </div>
                    <!-- end card header -->
                    <div class="card-body">
                        <div id="customerList">
                            <div class="row g-4 mb-3">
                                <div class="col-sm-auto">
                                    <div>
                                        <a href="{{ route('video.list') }}" class="btn btn-success add-btn" > List</a>
                                    </div>
                                </div>

                                <form action="{{ route('video.upload') }}" method="POST" enctype="multipart/form-data" class="upload-video">
                                    @csrf
                                        <div class="live-preview">
                                            <div class="mb-3">
                                               <label for="category" class="form-label">Category</label>
                                               <select class="form-control" aria-label="Default select example" name="category">
                                                 <option value="">-----Select----</option>
                                                @if(!empty($categories))
                                                    @foreach($categories as $cateogry)
                                                          <option value="{{ $cateogry->id }}" @if(!empty($singleVideo) && $singleVideo->category_id == $cateogry->id) selected @endif>{{ $cateogry->category_name }}</option>
                                                    @endforeach
                                                @endif
                                               </select>
                                               <span class="text-danger" id="category"> </span>
                                            </div>
                                            <div class="mb-3">
                                               <label for="videoType" class="form-label">Video Type</label>
                                               <select class="form-control switch-video-type" aria-label="Default select example" name="video_type">
                                                  <option value="">-----Select----</option>
                                                  <option value="1" @if(!empty($singleVideo) && $singleVideo->video_type == '1') selected @endif>Upload Video</option>
                                                  <option value="2" @if(!empty($singleVideo) && $singleVideo->video_type == '2') selected @endif>URL</option>
                                               </select>
                                                <span class="text-danger" id="video_type"> </span>
                                            </div>
                                            @if(!empty($singleVideo) && $singleVideo->video_type == '1')
                                              <div class="mb-3 upload_video">
                                                 <label for="uploadVideo" class="form-label">Upload Video</label>
                                                 <input type="file" class="form-control" id="uploadVideo" name="video">
                                                 <span class="text-danger" id="video"> </span>
                                                  <video width="320" height="240" controls>
                                                    <source src="{{ $singleVideo->upload_video }}" type="video/mp4">
                                                  </video>
                                              </div>
                                            @else
                                              <div class="mb-3 upload_video" style="display: none;">
                                                 <label for="uploadVideo" class="form-label">Upload Video</label>
                                                 <input type="file" class="form-control" id="uploadVideo" name="video">
                                                 <span class="text-danger" id="video"> </span>
                                              </div>
                                            @endif
                                            @if(!empty($singleVideo) && $singleVideo->video_type == '2')
                                              <div class="mb-3 uplaod_video_url">
                                                 <label for="videoEmbededCode" class="form-label">Video URL</label>
                                                 <input type="text" class="form-control" id="videoEmbededCode" placeholder="Video URL" name="video_url" value="@if(!empty($singleVideo)) {{ $singleVideo->video_embeded_code }} @endif">
                                                 <span class="text-danger" id="video_url"> </span>
                                              </div>
                                            @else
                                              <div class="mb-3 uplaod_video_url" style="display: none;">
                                                 <label for="videoEmbededCode" class="form-label">Video URL</label>
                                                 <input type="text" class="form-control" id="videoEmbededCode" placeholder="Video URL" name="video_url" value="@if(!empty($singleVideo)) {{ $singleVideo->video_embeded_code }} @endif">
                                                 <span class="text-danger" id="video_url"> </span>
                                              </div>
                                            @endif
                                            
                                            <div class="mb-3">
                                               <label for="videoTitle" class="form-label">Video Title</label>
                                               <input type="text" class="form-control" id="videoTitle" placeholder="Enter video title" name="video_title" value="@if(!empty($singleVideo)) {{ $singleVideo->video_title }} @endif">
                                               <span class="text-danger" id="video_title"> </span>
                                            </div> 
                                            <div class="mb-3">
                                               <label for="videoTitle" class="form-label">Video Price</label>
                                               <input type="text" class="form-control" id="prices" placeholder="Enter video Price" name="price" value="@if(!empty($singleVideo)) {{ $singleVideo->price }} @endif">
                                               <span class="text-danger" id="price"> </span>
                                            </div>

                                            <div class="mb-3">
                                               <label for="timeForLive" class="form-label">Time For live</label>
                                               <input type="datetime-local" class="form-control" id="timeForLive" value="@if(!empty($singleVideo)) {{ $singleVideo->time_for_live }} @endif">
                                            </div>
                                            <div class="mb-3">
                                               <label for="videoFuturedImage" class="form-label">Choose File (for Upload Video and Video Futured Image)</label>
                                               <input type="file" class="form-control" id="featured_image" name="video_image">
                                               <span class="text-danger" id="video_image"> </span>
                                                <div class="card bg-light overflow-hidden progress-bar-wrraper" style="display: none;">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-0"><b class="text-secondary" id="progressPercentage">0%</b> </h6>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <h6 class="mb-0" id="timeLeft">Calculating...</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress bg-soft-secondary rounded-0">
                                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%;" id="progressBar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                @if(!empty($singleVideo))
                                                    <img src="{{ $singleVideo->video_futured_image }}" height="100" width="100">
                                                @endif
                                            </div>
                                            <div class="mb-3">
                                               <label for="addTags" class="form-label">Add Tags</label>
                                               <input type="text" class="form-control tags" id="addTags" placeholder="Enter tags" name="video_tags[]">
                                               <span class="text-danger" id="video_tags"> </span>
                                            </div>
                                            <div class="mb-3">
                                               <label for="trendingTopic" class="form-label">Trending Topic</label>
                                               <input type="text" class="form-control" id="trendingTopic" placeholder="Enter trending topic" name="trending_topics" value="@if(!empty($singleVideo)) {{ $singleVideo->trending_topic }} @endif">
                                               <span class="text-danger" id="trending_topics"> </span>
                                            </div>

                                            <div class="mb-3">
                                               <label for="videoDescription" class="form-label">Video Description</label>
                                               <textarea class="form-control" id="videoDescription" rows="3" placeholder="Enter video description" name="video_description">@if(!empty($singleVideo)) {!! $singleVideo->video_description !!} @endif</textarea>
                                               <span class="text-danger" id="video_description"> </span>
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
     $('#addTags').tagify();
  });
</script>
@endsection
