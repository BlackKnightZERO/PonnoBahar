@extends('back-end.super-admin.master')
@section('title')
Web Settings Footer
@endsection
@section('page-content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blogs</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">post blog</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
     <!-- START ALERTS AND CALLOUTS -->
     <section class="content">
      <div class="container-fluid">     

		<div class="row">
            
        <div class="col-md-12">
            <div class="card card-secondary card-outline">
            <div class="card-header">
                <h3 class="card-title">
                <!-- <i class="far fa-check-circle"></i> -->
                <i class="fas fa-users"></i>
               Post A New Blog
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body" style="background: #92CAEC;">
            <form action="{{ route('super.admin.addBlog') }}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3">
                        <label for="exampleEmail"><i>Author</i></label>
                        <input type="textw" name="author" class="form-control">
                    </div>
                    <div class="col-md-7">
                        <label for="exampleEmail"><i>Title</i></label>
                        <input type="textw" name="title" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <label for="exampleEmail">Image*</label>
                        <div class="input-group">
                          <input type="file" name="b_image" required="required">
                      </div>
                    </div>
                  </div>
                  
                    <label for="exampleEmail"><i>Description</i></label>
                    <textarea class="textarea" placeholder="Place some text here" name="description" 
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-secondary">Update</button>
                </div>
            </form>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->

<!-- END ALERTS AND CALLOUTS -->
</div>
</section>

@endsection