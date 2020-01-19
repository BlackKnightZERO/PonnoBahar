@extends('back-end.super-admin.master')
@section('title')
Add Product
@endsection
@section('page-content')  
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Product</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <form method="POST" action="{{ route('super.admin.addProduct') }}" enctype="multipart/form-data" >
        @csrf

        <div class="card card-default">
          
          <div class="card-header">
            <h3 class="card-title">Details:</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
          
          <div class="card-body">

                <div class="row">
                  <div class="col-md-6">
                   <div class="form-group">
                      <label>Name</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fab fa-product-hunt"></i></span>
                        </div>
                        <input type="hidden" name="vendor_id" value="{{ Auth::user()->id }} ">
                        <input type="text" class="form-control" id="name" name="name" required="required" placeholder="Product's Name">
                      </div>
                      <!-- /.input group -->
                    </div>
                  </div>
                  <div class="col-md-6">
                   <div class="form-group">
                      <label>Quantity</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                        </div>
                        <input type="text" class="form-control" id="in_stock" name="in_stock" required="required" placeholder="Product's Quantity" onkeypress="return isNumber(event)">
                      </div>
                      <!-- /.input group -->
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                   <div class="form-group">
                      <label>Price</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-donate"></i></span>
                        </div>
                        <input type="text" class="form-control" id="present_price" name="present_price" required="required" placeholder="Product's Price" onkeypress="return isNumber(event)">
                      </div>
                      <!-- /.input group -->
                    </div>
                  </div>
                  <div class="col-md-6">
                   <div class="form-group">
                      <label>Discount</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-hand-holding-usd"></i></span>
                        </div>
                        <input type="text" class="form-control" id="discount" name="discount" placeholder="Product's Discount in %" onkeypress="return isNumber(event)">
                      </div>
                      <!-- /.input group -->
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                   <div class="form-group">
                      <label>Description Title</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-tshirt"></i></span>
                        </div>
                        <input type="text" class="form-control" id="description_title" name="description_title" required="required" placeholder="Title for showcase">
                      </div>
                      <!-- /.input group -->
                    </div>
                  </div>
                  <div class="col-md-3">
                  <!-- <input type="file" name="p_image" class="check"> -->
                   <div class="form-group">
                      <label>Image</label>
                      <div class="input-group">
                          <input type="file" name="p_image" class="check" required="required">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3" style="background: #F2F4FF; border-radius: 2%;">
                  <!-- <input type="file" name="p_image" class="check"> -->
                   <div class="form-group">
                      <label>Landing Page</label>
                      <div class="form-group">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="1" name="featured_status">
                          <label for="customCheckbox1" class="custom-control-label">Featured</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox2" value="1" name="on_sale_status">
                          <label for="customCheckbox2" class="custom-control-label">On Sale</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox3" value="1" name="top_rate">
                          <label for="customCheckbox3" class="custom-control-label">Top Rate</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                     <label>Description Details</label>
                    <textarea class="textarea" placeholder="Place some text here" name="description_details" 
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                               
                    </div>
                  </div>

          <label>Select Category & Attributes</label>
                   <div class="row">

                        <div class="col-md-4">
                          
                          <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" name="category_id" id="category_id_p">
                                @foreach($categories as $key => $value)
                              <option value="{{ $value->id }}">{{ $value->name }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Sub Category</label>
                            <select class="form-control" name="sub_category_id" id="sub_category_id_p">
                              
                            </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group clearfix">
                            <label>Attributes</label> 
                            <br>
                            <div id="generateAttributes">
                           
                            </div>

                          </div>
                        </div>
                      </div>
                    </br>
                    <button type="submit" class="btn btn-block btn-primary">Add Product</button>
            </div>
          </div>
        </form>
      </div>     
    </section>


    <script>
      
        // $(document).ready(function() {
        //  console.log('ready');
        $('#category_id_p').click(function(){
          console.log('click');
          console.log($('.check').val());
            $("#sub_category_id_p option").remove(); 

            var id = $("#category_id_p").val();
            console.log(id);
            // var dataId={'id':id};
            $.ajax({
                type :'GET',
                url :'getSubCat/'+id,
                dataType :"json",
                // data :{id:dataId},
                data :{},
                success:function(data) {
                    // console.log(data);
                    $.each( data, function(k, v) {
                $('#sub_category_id_p').append($('<option>', {value:v.id, text:v.name}));
                });
                 },
                  error: function()
                 {
                     console.log(v.id);
                 }
            });
        });
    //  });    
    //     $(document).ready(function() {
    //       console.log('ready2');
        $('#sub_category_id_p').click(function(){
          console.log('click2');
            $("#generateAttributes").empty();
            var id = $("#sub_category_id_p").val();
            console.log(id);
            // var dataId={'id':id};
            $.ajax({
                type :'GET',
                url :'getAttr/'+id,
                dataType :"json",
                // data :{id:dataId},
                data :{},
                success:function(data) {
                    console.log(data);
                    $.each( data, function(k, v) {
                      var container = $('#generateAttributes');
                      console.log(`id is ${v.id} & val is ${v.name} `);
                      $('<input />', { type: 'checkbox', value: v.id, name: 'checkboxarr[]'}).appendTo(container);
                      $('<label />', { text: v.name }).appendTo(container);
                      
                      // $('#generateAttributes').append(
                      //     '<div class="d-inline">'+
                      //       '<input type="checkbox" value=" '+v.id+' " name="checkarr[]">'+
                      //       '<label>'+
                      //         v.name +
                      //       '</label>'+
                      //     '</div>'+ '  ');
                    });
                    console.log($('.check').val());
                 },
                  error: function()
                 {
                    //  alert('error...');
                    //  console.log(v.id);
                 }
            });
        });
    //  });     
    </script>

@endsection
