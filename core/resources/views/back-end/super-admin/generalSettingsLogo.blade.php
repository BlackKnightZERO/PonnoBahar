@extends('back-end.super-admin.master')
@section('title')
General Settings Logo & Title
@endsection
@section('page-content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Settings</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Inline Charts</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
     <!-- START ALERTS AND CALLOUTS -->
     <section class="content">
      <div class="container-fluid">     

        <div class="row">
            
        <div class="col-md-4">
            <div class="card card-secondary card-outline">
            <div class="card-header">
                <h3 class="card-title">
                <i class="far fa-check-circle"></i>
                Current
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <form action="{{ route('super.admin.updateLogoTitle') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="exampleEmail">Logo</label><span style="opacity:0.5;"> (290*130)</span>
                <div class="form-group">
                    <div class="text-center">
                        <img src="{{ asset('').'core/public/storage/'.$g_settings->logo }}" alt="" srcset="" class="img-fluid">
                    </div>
                    <div class="input-group">
                        <input type="file" name="logo" >
                        <input type="hidden" name="logo_old" class="form-control" value="{{ $g_settings->logo }}">
		            </div>
                </div>
                <div class="form-group">
                    <label for="exampleEmail">Title</label>
                    <input type="text" class="form-control" name="title" value="{{ $g_settings->title }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                </div>
            </div>
            </form>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->

        <div class="col-md-8">
            <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">
                <i class="fas fa-paperclip"></i>
                <!-- <i class="fas fa-shoe-prints"></i> -->
                Contact Settings
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <form action="{{ route('super.admin.updateContactSettings') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleEmail">Email</label>
                    <input type="text" class="form-control" name="email" value="{{ $g_settings->email }}">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleEmail">Location</label>
                    <input type="text" class="form-control" name="location" value="{{ $g_settings->location }}">
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleEmail">Phone 1</label>
                    <input type="text" class="form-control" name="phone1" value="{{ $g_settings->phone1 }}">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleEmail">Phone 2</label>
                    <input type="text" class="form-control" name="phone2" value="{{ $g_settings->phone2 }}">
                </div>
                </div>
            </div>
            <br>
                <h3 class="card-title">
                <i class="fab fa-twitter"></i>
                Social Settings
                </h3>
                <br><hr>
                <div class="form-group">
                    <label for="exampleEmail">Facebook</label>
                    <input type="text" class="form-control" name="facebook" style="background:#F2F4FF ;" value="{{ $g_settings->facebook }}">
                </div>
                <div class="form-group">
                    <label for="exampleEmail">Instagram</label>
                    <input type="text" class="form-control" name="instagram" style="background:#F2F4FF ;" value="{{ $g_settings->instagram }}">
                </div>
                <div class="form-group">
                    <label for="exampleEmail">Pinterest</label>
                    <input type="text" class="form-control" name="pinterest" style="background:#F2F4FF ;" value="{{ $g_settings->pinterest }}">
                </div>
                <!-- <br>
                <h3 class="card-title">
                <i class="fas fa-shoe-prints"></i>
                Footer Information
                </h3>
                <br><hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleEmail">Footer Header 1</label>
                            <input type="text" class="form-control" name="footer_header1">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleEmail">Footer Header 2</label>
                            <input type="text" class="form-control" name="footer_header2">
                        </div>
                        </div>
                    </div>
                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleEmail">Footer Text 1</label>
                            <input type="text" class="form-control" name="footer_text1">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleEmail">Footer Text 2</label>
                            <input type="text" class="form-control" name="footer_text2">
                        </div>
                        </div>
                    </div> -->
                <div class="form-group" style="text-align:right;">
                    <button type="submit" class="btn btn-primary">Update</button>
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