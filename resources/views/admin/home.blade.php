<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags  CSS-->
    @include('admin.css')
    <!-- Required meta tags  CSS end-->

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- end partial -->
  
        <!-- partial:partials/_navbar.html -->
        @include('admin.header')
        <!-- end partial -->
        <!--   main body start -->
        @include('admin.body')
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>