@extends('backend.includes.layout')
@section('title','Admin panel | Categories')
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
                            <li class="breadcrumb-item active">Categories</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
		   <div class="col-lg-12">
		      <div class="card">
		         <div class="card-header">
		            <h4 class="card-title mb-0 flex-grow-1">Categories</h4>
		            <div class="live-preview">
                        <div class="d-flex flex-wrap gap-2">
                            <a href="{{ route('admin.add.category') }}" class="btn btn-outline-primary waves-effect waves-light shadow-none">Add</a>
                        </div>
                    </div>
		         </div>
		         <!-- end card header -->
		         <div class="card-body">
		            <table class="table table-bordered data-table">
				        <thead>
				            <tr>
				                <th>Category</th>
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
        ajax: "{{ route('admin.categories.list') }}",
        columns: [
            {data: 'category', name: 'category'},
        ]
    });
    
  });
</script>
@endsection