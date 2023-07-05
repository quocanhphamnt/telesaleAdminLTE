@extends('layout.document')

@section('body')
<div class="wrapper" style="width: 100%">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="{{url('resources/img/TelesaleLogo.png')}}" alt="TelesaleLogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="javascript:;" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="trangchu" class="nav-link">Trang chủ</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="javascript:;" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                            <i class="fas fa-times"></i>
                        </button>
                        </div>
                    </div>
                    </form>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="javascript:;" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:;" role="button">
                    <i class="fas fa-adjust"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="javascript:;" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-primary elevation-4">
        <!-- Brand Logo -->
        <a href="trangchu" class="brand-link">
            <img src="{{url('resources/img/TelesaleLogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle" style="opacity: .8">
            <span class="brand-text font-weight-light">Telesale System</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{url('resources/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="javascript:;" class="d-block">Alexander Pierce</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="javascript:;" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Khách hàng
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="customer" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="dialog" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lịch sử cuộc gọi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="graph-representation" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Biểu đồ biểu thị</p>
                            </a>
                        </li>
                    </ul>
                    </li>
                    <li class="nav-item">
                        <a href="calendar" class="nav-link">
                            <i class="nav-icon fas fa-calendar-alt"></i>
                                <p>
                                Lịch
                                <span class="badge badge-danger right">1</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="mail" class="nav-link">
                            <i class="nav-icon far fa-envelope"></i>
                            <p>
                                Mail
                                <span class="badge badge-info right">6</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Quản lý
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="employee" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Nhân viên</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="group" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Nhóm</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="cusAssign" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Phân công khách hàng</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    <!-- /.sidebar -->
    </aside>

    @yield('main')

    <!-- Control Sidebar -->
    <aside class="control-sidebar sidebar-light-primary ">
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Thông tin tài khoản
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link">
                            <i class="nav-icon far fa-share-square"></i>
                            <p>
                                Đăng xuất
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@endsection
