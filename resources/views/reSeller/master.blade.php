<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags --> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{ asset('/reSeller') }}/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{ asset('/reSeller') }}/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{ asset('/reSeller') }}/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('/reSeller') }}/vendors/flag-icon-css/css/flag-icon.min.css"/>
  <link rel="stylesheet" href="{{ asset('/reSeller') }}/vendors/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('/reSeller') }}/vendors/jquery-bar-rating/fontawesome-stars-o.css">
  <link rel="stylesheet" href="{{ asset('/reSeller') }}/vendors/jquery-bar-rating/fontawesome-stars.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  
 {{-- for Data tabel --}}
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap4.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <style>
  .dataTables_filter{
      float: right;
  }
</style>

   

  <link rel="stylesheet" href="{{ asset('/reSeller') }}/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('/reSeller') }}/images/favicon.png" />
   {{-- For toastr --}}
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
     @include('reSeller.includes.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
     @include('reSeller.includes.sidebar')
      <!-- partial -->
      
      <div class="main-panel">
         @yield('mainContent')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('reSeller.includes.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="{{ asset('/reSeller') }}/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('/reSeller') }}/js/off-canvas.js"></script>
  <script src="{{ asset('/reSeller') }}/js/hoverable-collapse.js"></script>
  <script src="{{ asset('/reSeller') }}/js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="{{ asset('/reSeller') }}/vendors/chart.js/Chart.min.js"></script>
  <script src="{{ asset('/reSeller') }}/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="{{ asset('/reSeller') }}/js/dashboard.js"></script>
  <!-- End custom js for this page-->

{{-- For Toster --}}
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@if (Session::has('msg')) 
  <script>
     toastr.{{ Session::get('msgType') }}("{{ Session::get('msg') }}")
  </script>   
@endif

{{-- For Data Table --}}
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
    $('#dataTable').DataTable();
        } );
</script>
</body>

</html>

