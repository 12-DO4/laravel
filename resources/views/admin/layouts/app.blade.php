<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    @include('admin.layouts.head')
  </head>
  
  <body>

    <!-- wrapper -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full" >
      
      <!-- header -->
      @include('admin.layouts.header')
      <!-- end header -->
      
      <!-- aside -->
      @include('admin.layouts.aside')
      <!-- end aside -->
      
      <!-- page wrapper -->
      <div class="page-wrapper">

        <!-- breadcrumb -->
        @yield('breadcrumb')
        <!-- end breadcrumb -->
        
        <!-- container fluid -->
        <div class="container-fluid">
          <!-- Start Page Content -->
          <div class="row">
            <div class="col-12">
              @yield('content')
            </div>
          </div>
          <!-- End Page Content -->
        </div>
        <!-- end container fluid -->

        <!-- footer -->
        @include('admin.layouts.footer')
        <!-- end footer -->
        
      </div>
      <!-- end page wrapper -->
      
    </div>
    <!-- end wrapper -->

    <!-- scripts -->
    @include('admin.layouts.scripts')
    <!-- end scripts -->
    
  </body>
</html>
