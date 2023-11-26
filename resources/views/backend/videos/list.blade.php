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
        <div class="row">
		   <div class="col-lg-12">
		      <div class="card">
		         <div class="card-header">
		            <h4 class="card-title mb-0 flex-grow-1">Video Lists</h4>
		         </div>
		         <!-- end card header -->
		         <div class="card-body">
		            <table class="table table-bordered data-table">
				        <thead>
				            <tr>
				                <th>Category</th>
				                <th>Video Type</th>
				                <th>Video Title</th>
				                <th>Live Video ?</th>
				                <th>Featured Image</th>
				                <th width="100px">Action</th>
				            </tr>
				        </thead>
				        <tbody>
				        </tbody>
				    </table>
		         </div>
		         <!-- end card-body -->
		      </div>
		      <!-- end card -->
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
 
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        cache: true,
        type: 'GET',
        ajax: "{{ route('video.lists') }}",
        columns: [
            {data: 'category', name: 'category'},
            {data: 'video_type', name: 'video_type'},
            {data: 'video_title', name: 'video_title'},
            {data: 'live_video', name: 'live_video'},
            {data: 'featured_image', name: 'featured_image',render: function (data, type, row) {
                    return data; // 'data' here should be HTML content
                }},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    
  });
</script>
@endsection