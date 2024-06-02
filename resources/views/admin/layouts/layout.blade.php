<!DOCTYPE html>
<html>


<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>

   لوحة التحكم
    |
    @yield('title')


  </title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
    {!! Html::style('admin/plugins/fontawesome-free/css/all.min.css')!!}

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
    {!! Html::style('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')!!}

  <!-- iCheck -->
    {!! Html::style('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')!!}

  <!-- JQVMap -->
    {!! Html::style('admin/plugins/jqvmap/jqvmap.min.css')!!}

  <!-- Theme style -->
    {!! Html::style('admin/dist/css/adminlte.min.css')!!}

  <!-- overlayScrollbars -->
    {!! Html::style('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')!!}

  <!-- Daterange picker -->
    {!! Html::style('admin/plugins/daterangepicker/daterangepicker.css')!!}

  <!-- summernote -->
    {!! Html::style('admin/plugins/summernote/summernote-bs4.css')!!}

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Star Rating -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.6/css/star-rating.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.6/js/star-rating.min.js"></script>

    @yield('header')


</head>

<body class="hold-transition sidebar-mini layout-fixed">

        <div class="wrapper">

                    <!-- Navbar -->
                    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                    <!--  Left navbar links -->
                        <ul class="navbar-nav">
                        <!--<li class="nav-item">
                            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                        </li>
                        -->
                        <li class="nav-item d-none d-sm-inline-block">
                            <a href="/dashboard" class="nav-link"> الرئيسية </a>
                        </li>

                        </ul>

                    </nav>
                    <!-- /.navbar -->



                    <!-- Main Sidebar Container -->
                    <aside class="main-sidebar sidebar-dark-primary elevation-4">
                        <!-- Brand Logo -->
                        <a href="{{url('/dashboard')}}" class="brand-link">
                        <img src="{{Request::root()}}/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                            style="opacity: .8">
                        <span class="brand-text font-weight-light"> الليل المضيئ</span>
                        </a>


                        <!-- Sidebar -->
                        <div class="sidebar">
                        <!-- Sidebar Menu -->
                        <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                                @include('/admin/layouts/nav')
                            </ul>
                        </nav>
                        <!-- /.sidebar-menu -->
                        </div>
                        <!-- /.sidebar -->
                    </aside>





                <div class="content-wrapper">

                    @include('/admin/layouts/message')


                    <!-- alert -->

                    @yield('content')

                </div>







            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->





<!-- jQuery -->
 {!! Html::script('admin/plugins/jquery/jquery.min.js') !!}
<!-- jQuery UI 1.11.4 -->
 {!! Html::script('admin/plugins/jquery-ui/jquery-ui.min.js') !!}
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
 {!! Html::script('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}
<!-- ChartJS -->
 {!! Html::script('admin/plugins/chart.js/Chart.min.js') !!}
<!-- Sparkline -->
 {!! Html::script('admin/plugins/sparklines/sparkline.js') !!}
<!-- JQVMap -->
 {!! Html::script('admin/plugins/jqvmap/jquery.vmap.min.js') !!}
 {!! Html::script('admin/plugins/jqvmap/maps/jquery.vmap.usa.js') !!}
<!-- jQuery Knob Chart -->
 {!! Html::script('admin/plugins/jquery-knob/jquery.knob.min.js') !!}
<!-- daterangepicker -->
 {!! Html::script('admin/plugins/moment/moment.min.js') !!}
 {!! Html::script('admin/plugins/daterangepicker/daterangepicker.js') !!}

<!-- Tempusdominus Bootstrap 4 -->
 {!! Html::script('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') !!}

<!-- Summernote -->
 {!! Html::script('admin/plugins/summernote/summernote-bs4.min.js') !!}

<!-- overlayScrollbars -->
 {!! Html::script('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') !!}

<!-- AdminLTE App -->
 {!! Html::script('admin/dist/js/adminlte.js') !!}

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 {!! Html::script('admin/dist/js/pages/dashboard.js') !!}

<!-- AdminLTE for demo purposes -->
 {!! Html::script('admin/dist/js/demo.js') !!}

<script type="text/javascript">
 $(function(){
    setTimeout(function() {
        $("#mes").hide('blind', {}, 500)
    }, 5000);
});
</script>


@yield('footer')

</body>





</html>
