<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rushprintnyc | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('/') }}/admin-assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ url('/') }}/admin-assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ url('/') }}/admin-assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  {{-- <link rel="stylesheet" href="{{ url('/') }}/admin-assets/plugins/jqvmap/jqvmap.min.css"> --}}
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('/') }}/admin-assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ url('/') }}/admin-assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ url('/') }}/admin-assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  {{-- <link rel="stylesheet" href="{{ url('/') }}/admin-assets/plugins/summernote/summernote-bs4.css"> --}}
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  @stack('style')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('admin/dashboard') }}" class="nav-link">Welcome  </a> 
      </li>
      
     
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('admin-logout') }}" class="nav-link">Logout</a>
      </li>
    </ul>
    
  </nav>
  <!-- /.navbar -->
    @include('admin.layout.sidebar')
    @yield('content')
   <footer class="main-footer">
    <strong>Copyright &copy; {{ date('Y') }} <a target="_blank" href="{{ url('/') }}">Rushprintnyc</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      
    </div>
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="{{ url('/') }}/admin-assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ url('/') }}/admin-assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ url('/') }}/admin-assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
{{-- <script src="{{ url('/') }}/admin-assets/plugins/chart.js/Chart.min.js"></script> --}}
<!-- Sparkline -->
{{-- <script src="{{ url('/') }}/admin-assets/plugins/sparklines/sparkline.js"></script> --}}
<!-- JQVMap -->
<!-- jQuery Knob Chart -->
<script src="{{ url('/') }}/admin-assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ url('/') }}/admin-assets/plugins/moment/moment.min.js"></script>
<script src="{{ url('/') }}/admin-assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
{{-- <script src="{{ url('/') }}/admin-assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script> --}}
<!-- Summernote -->
{{-- <script src="{{ url('/') }}/admin-assets/plugins/summernote/summernote-bs4.min.js"></script> --}}
<!-- overlayScrollbars -->
<script src="{{ url('/') }}/admin-assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ url('/') }}/admin-assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ url('/') }}/admin-assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{ url('/') }}/admin-assets/dist/js/demo.js"></script> --}}
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
{{-- <script src="{{ url('/') }}/admin-assets/plugins/summernote/summernote-bs4.min.js"></script> --}}
 <!-- DataTables -->
<script src="{{ url('/') }}/admin-assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ url('/') }}/admin-assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ url('/') }}/admin-assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ url('/') }}/admin-assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
@stack('scripts')
 <!--End DataTables -->
<script type="text/javascript">
  @if(Session::has('message'))
            @if(Session::get('type') == 'success')
                toastr.success('{{ Session::get('message') }}', 'Success');
            @endif

            @if(Session::get('type') == 'error')
                toastr.error('{{ Session::get('message') }}', 'Error!')
            @endif
        @endif  
</script>
@stack('script')
<script>
  jQuery(function () {
    jQuery("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    // jQuery('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    //   "responsive": true,
    // });
  });
</script>
{{-- <script>
  $(function () {
    //Add text editor
    $('#compose-textarea').summernote()
  })
</script> --}}
{{-- <script type="text/javascript">
    $(document).ready(function() {
      $("button.btn.btn-success").click(function(){ 
          var lsthmtl = $(".clone").html();
          $(".increment").after(lsthmtl);
      });
      $("body").on("click",".btn-danger",function(){
          $(this).parents(".hdtuto.control-group.lst.input-group").remove();
      });
    });
</script> --}}
</body>
</html>