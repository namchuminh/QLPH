<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="<?php echo base_url('public/dist/img/AdminLTELogo.png') ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url('public/'); ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('public/'); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('public/'); ?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('public/'); ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('public/'); ?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url('public/'); ?>plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
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
    </ul>


  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url(); ?>" class="brand-link">
      <img src="<?php echo base_url('public/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Quản Lý Phòng Học</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo base_url(); ?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Trang Chủ
              </p>
            </a>
          </li>
          
          <li class="nav-header">QUẢN LÝ THÔNG TIN</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa-solid fa-house"></i>
              <p>
                Phòng Học
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('phong-hoc/') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh Sách</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('phong-hoc/them/') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm Mới</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa-solid fa-layer-group"></i>
              <p>
                Loại Phòng
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('loai-phong/') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh Sách</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('loai-phong/them/') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm Mới</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa-solid fa-computer"></i>
              <p>
                Thiết Bị Phòng
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('thiet-bi/') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh Sách</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('thiet-bi/them/') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm Mới</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa-solid fa-map-location-dot"></i>
              <p>
                Vị Trí Phòng
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('vi-tri/') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh Sách</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('vi-tri/them/') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm Mới</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">QUẢN LÝ NHÂN VIÊN</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa-solid fa-user-group"></i>
              <p>
                Nhân Viên
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('nhan-vien/') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh Sách</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('nhan-vien/them/') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm Mới</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('ca-nhan/'); ?>" class="nav-link">
              <i class="nav-icon fa-solid fa-user"></i>
              <p>
                Cá Nhân
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('dang-xuat/'); ?>" class="nav-link">
              <i class="nav-icon fa-solid fa-right-from-bracket"></i>
              <p>
                Đăng Xuất
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>