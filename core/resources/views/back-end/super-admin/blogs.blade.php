@extends('back-end.super-admin.master')
@section('title')
All Blogs
@endsection

  @section('extraHeader')
  <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <script src="{{ asset('') }}assets/plugins/summernote/summernote-bs4.min.js"></script>
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
                all blogs
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="blogsTable" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Sl</th>
                  <th>Author</th>
                  <th>Title</th>
                  <th style="width: 40%;">Description</th>
                  <th>Posted On</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if($blogs)
                  @foreach($blogs as $key => $value) 
                  <tr>
                   <td>{{ $key+1 }}</td> 
                   <td><i>{{ $value->author }}</i></td> 
                   <td>{{ $value->title }}</td> 
                   <td>{!! str_limit(strip_tags($value->description), 100) !!}</td>
                   <td>{{ date("M d, Y", strtotime($value->created_at)) }}</td> 
                   <td>
                    <button class="btn btn-sm btn-light mod_id" value="{{ $value->id }}" data-toggle="modal" data-target="#modal-xl"><i class="fas fa-edit" style="color:#5E7CDC;"></i></button>
                    |
                    <button class="btn btn-sm btn-light"><i class="fas fa-trash-alt" style="color: #DC6F3C;"></i></button>
                  </td>
                  </tr>
                  @endforeach
                  @endif 
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Author</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Posted On</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->

<!-- END ALERTS AND CALLOUTS -->
</div>
<!-- modal -->
<form action="{{ route('super.admin.addBlog') }}" method="post" enctype="multipart/form-data">
            @csrf
    <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit a Blog</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body p-3">
             
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3">
                        <label for="exampleEmail"><i>Author</i></label>
                        <input type="text" id="author" name="author" class="form-control">
                    </div>
                    <div class="col-md-7">
                        <label for="exampleEmail"><i>Title</i></label>
                        <input type="text" id="title" name="title" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <label for="exampleEmail">Image*</label>
                        <div class="input-group">
                          <input type="file" name="b_image">
                      </div>
                    </div>
                  </div>
                  
                    <label for="exampleEmail"><i>Description</i></label>
                    <textarea class="textarea" name="description" 
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="description"></textarea>     
                    <label for="exampleEmail">Image</label>

                    <div id="loadImg" style="text-align: center; background: #23293E;"></div>               
              </div>
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      </form>
</section>
@section('extraScript')
<!-- DataTables -->
<script src="{{ asset('') }}assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="{{ asset('') }}assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
  $(function () {
    
    $('#blogsTable').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
$(document).ready(function() {
  $( ".mod_id").click(function() {
  console.log(this.value);
  $("#author").val("");
  $("#title").val("");
  $('#loadImg').empty();
  // $("#description").val("");
            var id = this.value;
            $.ajax({
                type :'GET',
                url :'getBlog/'+id,
                dataType :"json",
                data :{},
                success:function(data) {
                   // console.log(data.description);
                   var html = $.parseHTML( data.description );
                   console.log(html[0].innerText);
                    $("#author").val(data.author);
                    $("#title").val(data.title);
                    $("#description").val(html[0].innerText);
                    var img = data.b_image;
                    $('#loadImg').prepend($('<img>',{id:'theImg',src:`{{ asset('').'core/public/storage/' }}${img}`, class:"img-fluid",  height:300, width:590, }));
                 },
                  error: function()
                 {
                    //  alert('error...');
                    //  console.log(v.id);
                 }
            });
  });
});
</script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
@endsection

@endsection

