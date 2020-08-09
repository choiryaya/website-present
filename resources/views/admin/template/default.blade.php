<!DOCTYPE html>
<html lang="en">
    @include('admin.template.partials.head')
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">


    <!-- Sidebar -->
    @include('admin.template.partials.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->

        @include('admin.template.partials.content')

        <!--Page breadcrumbs-->
      <!-- End of Main Content -->

      <!-- Footer -->
     @include('admin.template.partials.footer')
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  @include('admin.template.partials.logout')

  <!-- Bootstrap core JavaScript-->
@include('admin.template.partials.scripts')

</body>

</html>
