<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html">
      <!-- <img src="{{ asset('') }}assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" -->
          <!-- style="opacity: .8"> -->
      <img src="{{ asset('').'core/public/storage/'.$g_settings->logo }}" alt="AdminLTE Logo" class="brand-image elevation-3"
           style="opacity: 1; height:12%; width:100%; border-radius:5%; padding:3%;">
      <!-- <span class="brand-text font-weight-light">AdminLTE 3</span> -->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="{{ asset('').'core/public/storage/'.Auth::user()->profile_picture }}" class="img-circle elevation-2" alt="User Image"> -->
          <img src="{{ asset('') }}assets/dist/img/AdminLTELogo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          @if(Auth::user()->user_type_id == 1)
          <a href="#" class="d-block">Super Admin</a>
          @elseif(Auth::user()->user_type_id == 2)
          <a href="#" class="d-block">Admin</a>
          @else
          @endif
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="{{ route('super.admin.dashboard') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-box-open"></i>
              <p>
                Product Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link" data-toggle="modal" data-target="#categoryModal">
                  <i class="fas fa-arrow-circle-right nav-icon"></i>
                  <p>Add Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" data-toggle="modal" data-target="#subCategoryModal">
                  <i class="fas fa-arrow-circle-right nav-icon"></i>
                  <p>Add Sub-Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" data-toggle="modal" data-target="#attributesModal">
                  <i class="fas fa-arrow-circle-right nav-icon"></i>
                  <p>Add Attributes</p>
                </a>
              </li>
              <li class="nav-item" data-toggle="modal" data-target="#productModal" >
                <a href="{{ route('super.admin.product') }}" class="nav-link">
                  <i class="fas fa-arrow-circle-right nav-icon"></i>
                  <p>Add Product</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-globe"></i>
              <p>
                Website Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item has-treeview">
                <a href="{{ route('super.admin.showlandingIteamsForm1') }}" class="nav-link">
                  <i class="fas fa-arrow-circle-right nav-icon"></i>
                  <p>Landing Items 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('super.admin.showlandingIteamsForm2') }}" class="nav-link">
                  <i class="fas fa-arrow-circle-right nav-icon"></i>
                  <p>Landing Items 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('super.admin.showlandingIteamsForm3') }}" class="nav-link">
                  <i class="fas fa-arrow-circle-right nav-icon"></i>
                  <p>Landing Items 3</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('super.admin.showAboutUs') }}" class="nav-link">
                  <i class="fas fa-arrow-circle-right nav-icon"></i>
                  <p>About Us</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('super.admin.footerIteamsForm') }}" class="nav-link">
                  <i class="fas fa-arrow-circle-right nav-icon"></i>
                  <p>Footer</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book-reader"></i>
              <p>
                Blog Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('super.admin.showBlog') }}" class="nav-link">
                  <i class="fas fa-arrow-circle-right nav-icon"></i>
                  <p>Post New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('super.admin.updateBlog') }}" class="nav-link">
                  <i class="fas fa-arrow-circle-right nav-icon"></i>
                  <p>Edit Blogs</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{ route('super.admin.showSettingsForm') }}" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                General Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>

          
          <!-- <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                UI Elements
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Icons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/buttons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buttons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/sliders.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/modals.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modals & Alerts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/navbar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Navbar & Tabs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/timeline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Timeline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/ribbons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ribbons</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/e_commerce.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E-commerce</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/projects.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project_add.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project_edit.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project_detail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/contacts.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/login.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Login</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/register.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/forgot-password.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Forgot Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/recover-password.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Recover Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lockscreen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Legacy User Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/language-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Language Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 404</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/500.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 500</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/pace.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pace</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/blank.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blank Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="starter.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Starter Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
          <li class="nav-header">MULTI LEVEL EXAMPLE</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Level 1
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Level 2
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- ModalCategory -->
  <form action="{{ route('super.admin.addCategory') }}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">


              <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleName">Name</label>
                      <input type="text" class="form-control" placeholder="Category Name" name="name" required="required">
                    </div>
                  </div>
              </div>

              <div class="row">
              <div class="col-md-12">
		              		<div class="form-group">
		                    <label for="exampleInputFile">Image</label>
		                    <div class="input-group">
		                      <!-- <div class="custom-file"> -->
		                       <!--  <input type="file" class="custom-file-input" id="exampleInputFile" name="profile_picture">
		                        <input type="hidden" name="profile_picture_url" value="{{ Auth::user()->profile_picture }}"> -->
		                        <input type="file" name="cat_image" class="form-control">
		          
		                        <!-- <label class="custom-file-label" for="exampleInputFile">Choose file</label> -->
		                     <!--  </div> -->
		                      <!-- <div class="input-group-append">
		                        <span class="input-group-text" id="">Upload</span>
		                      </div> -->
		                    </div>
		                  </div>
		              	</div>
                </div>


              <div class="row">
                <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleEmail">Discount in %</label>
                  <input type="text" class="form-control" placeholder="Enter Discount" name="discount_amount_in_pct" onkeypress="return isNumber(event)"> 
                </div>
              </div>
              </div>
             </div> 

              <div class="modal-footer">
                
                <input type="submit" class="btn btn-primary" value="Save changes" name="submit">
              </div>
            </div>
          </div>
        </div>
        </form>
        <!-- ModalCategory -->
       <!-- ModalSubCategory -->
  <form action="{{ route('super.admin.addSubCategory') }}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="modal fade" id="subCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sub-Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">


              <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleName">Name</label>
                      <input type="text" class="form-control" placeholder="Subcategory Name" name="name" required="required">
                    </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-12">
                      <label for="exampleName">Parent Category</label>
                    <div class="form-group">
                    <select class="form-control form-control-sm" name="category_id" id="category_id">
                        @foreach($categories as $key => $value)
                      <option value="{{ $value->id }}">{{ $value->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  </div>
              </div>

              <div class="row">
              <div class="col-md-12">
		              		<div class="form-group">
		                    <label for="exampleInputFile">Image</label>
		                    <div class="input-group">
		                      <!-- <div class="custom-file"> -->
		                       <!--  <input type="file" class="custom-file-input" id="exampleInputFile" name="profile_picture">
		                        <input type="hidden" name="profile_picture_url" value="{{ Auth::user()->profile_picture }}"> -->
		                        <input type="file" name="s_cat_image" class="form-control" id="chk_sub">
		          
		                        <!-- <label class="custom-file-label" for="exampleInputFile">Choose file</label> -->
		                     <!--  </div> -->
		                      <!-- <div class="input-group-append">
		                        <span class="input-group-text" id="">Upload</span>
		                      </div> -->
		                    </div>
		                  </div>
		              	</div>
                </div>


              <div class="row">
                <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleEmail">Discount in %</label>
                  <input type="text" class="form-control" placeholder="Enter Discount" name="discount_amount_in_pct" onkeypress="return isNumber(event)"> 
                </div>
              </div>
              </div>
             </div> 

              <div class="modal-footer">
                
                <input type="submit" class="btn btn-primary" value="Save changes" name="submit">
              </div>
            </div>
          </div>
        </div>
        </form>
        <!-- ModalSubCategory -->

        <!-- ModalSubCategory -->
  <form action="{{ route('super.admin.addAttribute') }}" method="post">
    @csrf
        <div class="modal fade" id="attributesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Attributs</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

              <div class="row">
                  <div class="col-md-4">
                      <label for="exampleName">Category</label>
                    <div class="form-group">
                    <select class="form-control form-control-sm" name="category_id_attr" id="category_id_attr">
                        @foreach($categories as $key => $value)
                      <option value="{{ $value->id }}">{{ $value->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  </div>
                  <div class="col-md-4">
                      <label for="exampleName">Sub Category</label>
                    <div class="form-group">
                    <select class="form-control form-control-sm" name="sub_category_id_attr" id="sub_category_id_attr">
                       
                    </select>
                  </div>
                  </div>
                  <div class="col-md-4">
                      <label for="exampleName">Available Attributes</label>
                    <div class="form-group">
                    <select class="form-control form-control-sm" name="attribute_id_attr" id="attribute_id_attr">
                        
                    </select>
                  </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-md-8">
                <label for="exampleName">Attribute</label>
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Add An Attribute" name="name[]">
                      
                    </div>
                </div>
                <div class="col-md-4" style="margin-top: 7%;">

                  <button class="btn btn-sm btn-success adder_att" id="adder_att">Add +</button>
                  <button class="btn btn-sm btn-danger erase_att" id="erase_att">Remove -</button>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <div id="append_input"></div>
                  </div>
                </div>
              </div>

             </div> 

              <div class="modal-footer">
                
                <input type="submit" class="btn btn-primary" value="Save changes" name="submit">
              </div>
            </div>
          </div>
        </div>
        </form>
        <!-- ModalSubCategory -->


        <script>
        function isNumber(evt)
        {
          var charCode = (evt.which) ? evt.which : event.keyCode
          if (charCode > 31 && (charCode < 48 || charCode > 57))
              return false;
          return true;
        }

        $('#adder_att').click(function(){
            $('#append_input').append('<input type="text" class="form-control" placeholder="Additional Attribute" name="name[]"><br>');
            event.preventDefault();
        });
        $('#erase_att').click(function(){
           $("#append_input input:last-child").remove();
           $("#append_input br:last-child").remove();
            event.preventDefault();
        });

        $(document).ready(function() {
         // alert('!');
        $('#category_id').click(function(){
          console.log($('#chk_sub').val());
        });
      });

        $(document).ready(function() {
         // alert('!');
        $('#category_id_attr').click(function(){

            // alert('!');
            $("#sub_category_id_attr option").remove(); 
            $("#attribute_id_attr option").remove();
            var id = $("#category_id_attr").val();
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
               // $('#district').append($('<option>', {value:v.id, text:v.name}));
                $('#sub_category_id_attr').append($('<option>', {value:v.id, text:v.name}));
                 // console.log(v.id);
                });
                 },
                  error: function()
                 {
                    //  alert('error...');
                     console.log(v.id);
                 }
            });
        });
     });    
        $(document).ready(function() {
         // alert('!');
        $('#sub_category_id_attr').click(function(){
            // alert('!');
            console.log($('#chk_sub').val());

            $("#attribute_id_attr option").remove();
            var id = $("#sub_category_id_attr").val();
            console.log(id);
            // var dataId={'id':id};
            $.ajax({
                type :'GET',
                url :'getAttr/'+id,
                dataType :"json",
                // data :{id:dataId},
                data :{},
                success:function(data) {
                    // console.log(data);
                    $.each( data, function(k, v) {
               // $('#district').append($('<option>', {value:v.id, text:v.name}));
                $('#attribute_id_attr').append($('<option>', {value:v.id, text:v.name}));
                 // console.log(v.id);
                });
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

        