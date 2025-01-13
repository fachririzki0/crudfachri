<?php
session_start();
// session_start();
// include "library/lib_login.php";
// if(!cek_login()){
//  header("location:login.php");
// }
// cek_timeout();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.php?halaman=home" class="nav-link">Home</a>
        </li>
        <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
          <a href="logout.php" class="nav-link"><i class="fa fa-power-off"></i> logout</a>
        </li>
      </ul>
    </nav>

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../../index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">toko prabotan fachri</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">FACHRI RIZKI</a>
          </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->

        
            <li class="nav-item">
              <a href="index.php?halaman=admin" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  admin
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="index.php?halaman=pembeli" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  pembeli
                </p>
              </a>
            </li>

            <li class="nav-item menu-is-opening menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: block;">
                <li class="nav-item">
                  <a href="index.php?halaman=barang" class="nav-link">
                    <i class="fas fa-briefcase"></i>
                    <p>barang</p>
                  </a>
                
            </li>
            <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">

      </section>

      <!-- Main content -->
      <section class="content">
        <?php
        if (isset($_GET['halaman'])) {
          switch ($_GET['halaman']) {
            //bagian admin
            case "admin";
              include("views/admin/admin.php");
              break;
            case "tambah_admin";
              include("views/admin/form_admin.php");
              break;
            case "edit_admin";
              include("views/admin/form_edit_admin.php");
              break;

            // bagian pembeli
            case "pembeli";
              include("views/pembeli/pembeli.php");
              break;
            case "tambah_pembeli";
              include("views/pembeli/form_pembeli.php");
              break;
            case "edit_pembeli";
              include("views/pembeli/form_edit_pembeli.php");
              break;

            //bagian barang
            case "barang";
              include("views/barang/barang/barang.php");
              break;
            case "tambah_barang";
              include("views/barang/barang/form_barang.php");
              break;
            case "edit_barang";
              include("views/barang/barang/form_edit_barang.php");
              break;

            //bagian suplier
            case "suplier";
              include("views/barang/suplier/suplier.php");
              break;
            case "tambah_suplier";
              include("views/barang/suplier/form_suplier.php");
              break;
            case "edit_suplier";
              include("views/barang/suplier/form_edit_suplier.php");
              break;

            //bagian kategori
            case "kategori";
              include("views/kategori/kategori.php");
              break;

            case "tambah_kategori";
              include("views/kategori/form_kategori.php");
              break;

            case "edit_kategori";
              include("views/kategori/from_edit_kategori.php");
              break;

            //bagian merk
            case "merk";
              include("views/merk/merk.php");
              break;

            case "tambah_merk";
              include("views/merk/form_merk.php");
              break;

            case "edit_merk";
              include("views/merk/form_edit_merk.php");
              break;

            default;
              include("views/dashboard.php");
          }

        } else {
          include("views/dashboard.php");
        }

        ?>
      </section>

      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer> -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- DataTables  & Plugins -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="plugins/jszip/jszip.min.js"></script>
  <script src="plugins/pdfmake/pdfmake.min.js"></script>
  <script src="plugins/pdfmake/vfs_fonts.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>


  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["excel", "pdf", "print",]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
  </script>
  <!-- AdminLTE for demo purposes -->
  <!-- <script src="../../dist/js/demo.js"></script> -->
</body>

</html>