@extends('back-end.super-admin.master')
@section('title')
Lading Items 1
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
            
        <div class="col-md-4">
            <div class="card card-secondary card-outline">
            <div class="card-header">
                <h3 class="card-title">
                <!-- <i class="far fa-check-circle"></i> -->
                <i class="far fa-image"></i>
                Slider 1<span style="opacity:0.5;"> (1920*930)</span>
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <form action="{{ route('super.admin.updateLandingSlider') }}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- <label for="exampleEmail">Slider 1</label><span style="opacity:0.5;"> (1920*930)</span> -->
                <div class="form-group">
                    <div class="text-center">
                        <img src="{{ asset('').'core/public/storage/'.$w_settings->landing1_slider1 }}" alt="" srcset="" class="img-fluid">
                    </div>
                    <div class="input-group">
                        <input type="file" name="landing1_slider1" >
                        <input type="hidden" name="landing1_slider1_old" class="form-control" value="{{ $w_settings->landing1_slider1 }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleEmail">Sub Header 1</label>
                    <input type="text" class="form-control" name="landing1_sub_header1" value="{{ $w_settings->landing1_sub_header1 }}">
                </div>
                <div class="form-group">
                    <label for="exampleEmail">Header 1</label>
                    <input type="text" class="form-control" name="landing1_header1" value="{{ $w_settings->landing1_header1 }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->

        <div class="col-md-4">
            <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">
                <!-- <i class="far fa-check-circle"></i> -->
                <i class="far fa-image"></i>
                Slider 2<span style="opacity:0.5;"> (1920*930)</span>
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            	<form action="{{ route('super.admin.updateLandingSlider') }}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- <label for="exampleEmail">Slider 2</label><span style="opacity:0.5;"> (1920*930)</span> -->
                <div class="form-group">
                    <div class="text-center">
                        <img src="{{ asset('').'core/public/storage/'.$w_settings->landing1_slider2 }}" alt="" srcset="" class="img-fluid">
                    </div>
                    <div class="input-group">
                        <input type="file" name="landing1_slider2" >
                        <input type="hidden" name="landing1_slider2_old" class="form-control" value="{{ $w_settings->landing1_slider2 }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleEmail">Sub Header 2</label>
                    <input type="text" class="form-control" name="landing1_sub_header2" value="{{ $w_settings->landing1_sub_header2 }}">
                </div>
                <div class="form-group">
                    <label for="exampleEmail">Header 2</label>
                    <input type="text" class="form-control" name="landing1_header2" value="{{ $w_settings->landing1_header2 }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </form>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->

        <div class="col-md-4">
            <div class="card card-navy card-outline">
            <div class="card-header">
                <h3 class="card-title">
                <!-- <i class="far fa-check-circle"></i> -->
                <i class="far fa-image"></i>
                Slider 3<span style="opacity:0.5;"> (1920*930)</span>
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('super.admin.updateLandingSlider') }}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- <label for="exampleEmail">Slider 3</label><span style="opacity:0.5;"> (1920*930)</span> -->
                <div class="form-group">
                    <div class="text-center">
                        <img src="{{ asset('').'core/public/storage/'.$w_settings->landing1_slider3 }}" alt="" srcset="" class="img-fluid">
                    </div>
                    <div class="input-group">
                        <input type="file" name="landing1_slider3" >
                        <input type="hidden" name="landing1_slider3_old" class="form-control" value="{{ $w_settings->landing1_slider3 }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleEmail">Sub Header 3</label>
                    <input type="text" class="form-control" name="landing1_sub_header3" value="{{ $w_settings->landing1_sub_header3 }}">
                </div>
                <div class="form-group">
                    <label for="exampleEmail">Header 3</label>
                    <input type="text" class="form-control" name="landing1_header3" value="{{ $w_settings->landing1_header3 }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </form>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

        </div>
<!-- /.row -->
<!-- END ALERTS AND CALLOUTS -->
</div>
</section>

@endsection