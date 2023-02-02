<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kepala Desa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets-admin/img/favicon.png" rel="icon">
  <link href="assets-admin/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets-admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets-admin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets-admin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets-admin/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets-admin/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets-admin/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets-admin/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets-admin/css/style.css" rel="stylesheet">
  
  <!-- Data Table-->
  <link href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.13.1/css/dataTables.jqueryui.min.css" rel="stylesheet">
  {{-- <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet"> --}}


  

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
@php
    if(isset($_GET['page'])){
		$page = $_GET['page'];
  }
@endphp
<body>
    <nav>@include('Template-Kades.Nav')</nav>
    <main id="main" class="main">
        <div class="pagetitle">
        <h1>@php echo ("Halaman Data <b>$page<b/>"); @endphp</h1>
        <div>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
            <li class="breadcrumb-item active">@php echo $page;  @endphp</li>
          </ol>
        </div>
      </div><!-- End Page Title -->

      @yield('content')
    </main>
    
    <footer>@include('Template-Kades.Footer')</footer>
</body>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets-admin/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets-admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets-admin/vendor/chart.js/chart.umd.js"></script>
  <script src="assets-admin/vendor/echarts/echarts.min.js"></script>
  <script src="assets-admin/vendor/quill/quill.min.js"></script>
  <script src="assets-admin/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets-admin/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets-admin/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets-admin/js/main.js"></script>

  <!-- Data Table-->
  <script>
    $(document).ready(function () {
    $('#example').DataTable();
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/dataTables.jqueryui.min.js"></script>
  



</body>

</html>