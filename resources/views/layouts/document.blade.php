<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" sizes="256x256" href="{{asset('frontend/img/TelesaleLogo.png')}}">
    <title>{{ config('app.name') }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('frontend/css/adminlte/icons/icons.css')}}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{asset('frontend/css/adminlte//bootstrap/sweetalert2.css')}}">
    <!-- fullCalendar -->
    <link rel="stylesheet" href="{{asset('frontend/css/adminlte//calendar/main.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('frontend/css/adminlte/bootstrap/icheck-bootstrap.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('frontend/css/adminlte/mapael/OverlayScrollbars.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('frontend/css/adminlte/datatables/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/adminlte/datatables/responsive.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/adminlte/datatables/buttons.bootstrap4.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('frontend/css/adminlte/bootstrap/adminlte.css')}}">
    <!-- Custom style -->
    <link rel="stylesheet" href="{{asset('frontend/css/styles.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-footer-fixed login-page">

    @yield('body')

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{asset('frontend/js/adminlte/bootstrap/jquery.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('frontend/js/adminlte/bootstrap/bootstrap.bundle.js')}}"></script>
    <!-- SweetAlert2 -->
    <script src="{{asset('frontend/js/adminlte/bootstrap/sweetalert2.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('frontend/js/adminlte/bootstrap/adminlte.js')}}"></script>
    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{{asset('frontend/js/adminlte/mapael/jquery.overlayScrollbars.js')}}"></script><!-- overlayScrollbars -->
    <script src="{{asset('frontend/js/adminlte/mapael/jquery.mousewheel.js')}}"></script>
    <script src="{{asset('frontend/js/adminlte/mapael/raphael.js')}}"></script>
    <script src="{{asset('frontend/js/adminlte/mapael/jquery.mapael.js')}}"></script>
    <script src="{{asset('frontend/js/adminlte/mapael/map.js')}}"></script>
    <script src="{{asset('frontend/js/adminlte/mapael/drawMap.js')}}"></script>
    <!-- ChartJS -->
    <script src="{{asset('frontend/js/adminlte/chart/Chart.js')}}"></script>
    <script src="https://www.gstatic.com/charts/loader.js" type="text/javascript"></script>
    <script src="{{asset('frontend/js/adminlte/chart/drawChart.js')}}"></script>
    <!-- fullCalendar -->
    <script src="{{asset('frontend/js/adminlte/calendar/jquery-ui.min.js')}}"></script>
    <script src="{{asset('frontend/js/adminlte/calendar/moment.min.js')}}"></script>
    <script src="{{asset('frontend/js/adminlte/calendar/main.js')}}"></script>
    <script src="{{asset('frontend/js/adminlte/calendar/drawCalendar.js')}}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{asset('frontend/js/adminlte/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('frontend/js/adminlte/datatables/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('frontend/js/adminlte/datatables/dataTables.responsive.js')}}"></script>
    <script src="{{asset('frontend/js/adminlte/datatables/responsive.bootstrap4.js')}}"></script>
    <script src="{{asset('frontend/js/adminlte/datatables/dataTables.buttons.js')}}"></script>
    <script src="{{asset('frontend/js/adminlte/datatables/buttons.bootstrap4.js')}}"></script>
    <script src="{{asset('frontend/js/adminlte/datatables/jszip.js')}}"></script>
    <script src="{{asset('frontend/js/adminlte/datatables/pdfmake.js')}}"></script>
    <script src="{{asset('frontend/js/adminlte/datatables/vfs_fonts.js')}}"></script>
    <script src="{{asset('frontend/js/adminlte/datatables/buttons.html5.js')}}"></script>
    <script src="{{asset('frontend/js/adminlte/datatables/buttons.print.js')}}"></script>
    <script src="{{asset('frontend/js/adminlte/datatables/buttons.colVis.js')}}"></script>
    <!-- Telesale App -->
    <script src="{{asset('frontend/js/app.js')}}"></script>

    @yield('script')
    @yield('body-script')
</body>
</html>
