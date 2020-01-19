@extends('back-end.super-admin.master')
@section('title')
Web Settings Footer
@endsection
@section('page-content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Website Settings</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Website Settings</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
     <!-- START ALERTS AND CALLOUTS -->
     <section class="content">
      <div class="container-fluid">     

        <div class="row">
            
        <div class="col-md-6">
            <div class="card card-secondary card-outline">
            <div class="card-header">
                <h3 class="card-title">
                <!-- <i class="far fa-check-circle"></i> -->
                <i class="fas fa-shoe-prints"></i>
               Footer 1
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body" style="background: #ccc;">
            <form action="{{ route('super.admin.updateFooter') }}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="exampleEmail">Header</label>
                    <input type="text" class="form-control" name="footer_header_1" value="{{ $w_settings->footer_header_1 }}">
                </div>
                <div class="form-group">
                    <label for="exampleEmail">Text</label>
                    <textarea class="textarea" placeholder="Place some text here" name="footer_text_1" 
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $w_settings->footer_text_1 }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Update</button>
                </div>
            </div>
            </form>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->

        <div class="col-md-6">
            <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">
                <!-- <i class="far fa-check-circle"></i> -->
                <i class="fas fa-shoe-prints"></i>
               Footer 2
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body" style="background: #ccc;">
            	<form action="{{ route('super.admin.updateFooter') }}" method="post" enctype="multipart/form-data">
            	@csrf
            	    <div class="form-group">
            	        <label for="exampleEmail">Header</label>
            	        <input type="text" class="form-control" name="footer_header_2" value="{{ $w_settings->footer_header_2 }}">
            	    </div>
            	    <div class="form-group">
            	        <label for="exampleEmail">Text</label>
            	        <textarea class="textarea" placeholder="Place some text here" name="footer_text_2" 
            	                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $w_settings->footer_text_2 }}</textarea>
            	    </div>
            	    <div class="form-group">
            	        <button type="submit" class="btn btn-dark">Update</button>
            	    </div>
            	</div>
            	</form>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        </div>
<!-- /.row -->

<!-- END ALERTS AND CALLOUTS -->
</div>
</section>

@endsection