<!DOCTYPE html>


<html lang="en">
  <head>
    @include('admin.css')
    <!-- Required meta tags -->
  </head>
  <body>

    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->
        @include('admin.navbar')
        <!-- partial -->
        @include('admin.body')
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.scripts')
  </body>
</html>