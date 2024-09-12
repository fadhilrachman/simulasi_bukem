<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset("template_admin/template/vendors/feather/feather.css") }}">
  <link rel="stylesheet" href="{{ asset("template_admin/template/vendors/mdi/css/materialdesignicons.min.css") }}">
  <link rel="stylesheet" href="{{ asset("template_admin/template/vendors/typicons/typicons.css") }}">
  <link rel="stylesheet" href="{{ asset("template_admin/template/vendors/simple-line-icons/css/simple-line-icons.css") }}">
  <link rel="stylesheet" href="{{ asset("template_admin/template/vendor.bundle.base.css") }}">

  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset("template_admin/template/vendors/datatables.net-bs4/dataTables.bootstrap4.css") }}">
  <link rel="stylesheet" href="{{ asset("template_admin/template/js/select.dataTables.min.css") }}">
  {{-- <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="js/select.dataTables.min.css"> --}}
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset("template_admin/template/css/vertical-layout-light/style.css") }}">
  <link rel="stylesheet" href="{{ asset("template_admin/template/images/favicon.png") }}">
  {{-- <link rel="stylesheet" href="css/vertical-layout-light/style.css"> --}}
  <!-- endinject -->
  {{-- <link rel="shortcut icon" href="images/favicon.png" /> --}}
</head>
<body style="height: 100vh;">
    {{ $slot }}
</body>
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset("template_admin/template/js/off-canvas.js") }}"></script>
  <script src="{{ asset("template_admin/template/js/hoverable-collapse.js") }}"></script>
  <script src="{{ asset("template_admin/template/js/template.js") }}"></script>
  <script src="{{ asset("template_admin/template/js/settings.js") }}"></script>
  <script src="{{ asset("template_admin/template/js/todolist.js") }}"></script>

{{-- 
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script> --}}
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset("template_admin/template/js/dashboard.js") }}"></script>
  <script src="{{ asset("template_admin/template/js/Chart.roundedBarCharts.js") }}"></script>

  {{-- <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script> --}}
  <!-- End custom js for this page-->
</body>

</html>

