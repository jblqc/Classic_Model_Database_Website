<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.files.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.files.sidebar')
      
      <!-- partial -->
      @include('admin.files.navbar')
        <!-- partial -->
        
      @include('admin.files.body')
    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.files.script')
    <!-- End custom js for this page -->
  </body>
</html>