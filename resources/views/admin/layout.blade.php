@if (!session('admin'))
    <script>
        alert('Anda Harus Login');
        location = '{{ url('loginadmin') }}';
    </script>
    @php
        exit();
    @endphp
@endif
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin-assets/assets') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('admin-assets/assets') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('admin-assets/assets') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('admin-assets/assets') }}/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin-assets/assets') }}/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="{{ asset('admin-assets/assets') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('admin-assets/assets') }}/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('admin-assets/assets') }}/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{ asset('img/log.png') }}" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>


    </nav>
    <!-- /.navbar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('img/log.png') }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{ session('admin')->level }}</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">

                    <li class="nav-item">
                        <a href="{{ url('admin/dashboard') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('admin/gurudaftar') }}" class="nav-link">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                Data Guru
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('admin/kelasdaftar') }}" class="nav-link">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                Data Kelas
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('admin/sppdaftar') }}" class="nav-link">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                Data SPP
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('admin/nilaidaftar') }}" class="nav-link">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                Nilai
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('admin/ppdbdaftar') }}" class="nav-link">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                Data PPDB
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/userdaftar') }}" class="nav-link">
                            <i class="nav-icon far fa-user"></i>
                            <p>
                                Siswa
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/blogdaftar') }}" class="nav-link">
                            <i class="nav-icon far fa-user"></i>
                            <p>
                                Blog
                            </p>
                        </a>
                    </li>
                    @if (session('admin')->level == 'Superadmin')
                        <li class="nav-item">
                            <a href="{{ url('admin/admindaftar') }}" class="nav-link">
                                <i class="nav-icon far fa-user"></i>
                                <p>
                                    Admin
                                </p>
                            </a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a href="{{ url('admin/logout') }}" class="nav-link"
                            onclick="return confirm('Apakah anda yakin ingin keluar?')">
                            <i class="nav-icon fa-right-from-bracket"></i>
                            <p>
                                Logout
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>
    </div>

    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.1.0
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
    <script src="{{ asset('admin-assets/assets') }}/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('admin-assets/assets') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin-assets/assets') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="{{ asset('admin-assets/assets') }}/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="{{ asset('admin-assets/assets') }}/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="{{ asset('admin-assets/assets') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{ asset('admin-assets/assets') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('admin-assets/assets') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('admin-assets/assets') }}/plugins/moment/moment.min.js"></script>
    <script src="{{ asset('admin-assets/assets') }}/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('admin-assets/assets') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
    </script>
    <!-- Summernote -->
    <script src="{{ asset('admin-assets/assets') }}/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('admin-assets/assets') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin-assets/assets') }}/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admin-assets/assets') }}/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('admin-assets/assets') }}/dist/js/pages/dashboard.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

    @yield('script')

    @if (session('success'))
        <script>
            alert('{{ session('success') }}')
        </script>
    @endif
    @if (session('error'))
        <script>
            alert('{{ session('error') }}')
        </script>
    @endif

    @if ($errors->any())
        <script>
            alert('Validasi gagal:\n{{ implode('\n', $errors->all()) }}');
        </script>
    @endif

    <script>
        $(document).ready(function() {
            $('#tabel').DataTable();
        });
    </script>
</body>

</html>
