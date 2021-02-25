<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman User</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontselect/styles/fontselect-alternate.css">
  <!-- jQuery -->
  <script src="<?php echo base_url(); ?>assets/theme/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url(); ?>assets/theme/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url(); ?>assets/theme/dist/js/adminlte.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/theme/plugins/select2/js/select2.full.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/theme/plugins/summernote/summernote-bs4.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/theme/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/theme/plugins/inputmask/jquery.inputmask.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/sweetalert.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/qrcode/qrcode.js"></script>
  <script src="<?php echo base_url(); ?>assets/fontselect/jquery.fontselect.js"></script>

  <style media="screen">
    .masonry-container {
      -webkit-column-count: 3;
      -moz-column-count: 3;
      column-count: 3;

      -webkit-column-gap: 15px;
      -moz-column-gap: 15px;
      column-gap: 15px;
    }

    .masonry-item {
      display: inline-block;
      width: 100%;
    }

    .masonry-item img {
      display: block;
      width: 100%;
    }

    /* Just for decoration: */
    .masonry-item span {
      font-family: sans-serif;
      display: block;
      padding: 10px;
    }

    .masonry-item {
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    @media (max-width: 768px) {
      .masonry-container {
        -webkit-column-count: 2;
        -moz-column-count: 2;
        column-count: 2;

        -webkit-column-gap: 15px;
        -moz-column-gap: 15px;
        column-gap: 15px;
      }
    }

    .loader {
      border: 10px solid #f3f3f3;
      border-radius: 80%;
      border-top: 10px solid blue;
      border-bottom: 10px solid blue;
      width: 80px;
      height: 80px;
      -webkit-animation: spin 2s linear infinite;
      animation: spin 2s linear infinite;
    }

    @-webkit-keyframes spin {
      0% {
        -webkit-transform: rotate(0deg);
      }

      100% {
        -webkit-transform: rotate(360deg);
      }
    }

    @keyframes spin {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }
  </style>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>login/logout" role="button">
            <i class="fas fa-sign-out-alt"></i> Keluar
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/" class="brand-link">
        <span class="brand-text font-weight-light">Halaman User</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <?php if ($this->session->userdata('USER_LEVEL') == "user") { ?>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>dashboard" class="nav-link <?php if ($this->uri->segment(1) == "dashboard") {
                                                                                echo "active";
                                                                              } ?>">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
            <?php   } else { ?>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin" class="nav-link <?php if ($this->uri->segment(1) == "admin") {
                                                                            echo "active";
                                                                          } ?>">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Admin
                  </p>
                </a>
              </li>
            <?php  } ?>






          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>