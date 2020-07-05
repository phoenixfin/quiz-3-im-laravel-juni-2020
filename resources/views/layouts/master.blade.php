<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  @yield('title')

  @include('layouts.style.main')
</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    @include('layouts.components.sidebar')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">

        @include('layouts.components.topbar')
        <!-- Begin Page Content -->
        @yield('content')
        <!-- End of Main Content -->
      </div>
      <!-- Footer -->
      @include('layouts.components.footer')
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  @include('layouts.components.modal')

  @include('layouts.scripts.main')

  <!-- script tambahan sweet alert, bukan dari bawaan sb-admin-2 -->
  @stack('additional_scripts')



</body>

</html>
