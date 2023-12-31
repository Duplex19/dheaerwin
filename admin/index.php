<?php 
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: pages/examples/login.php");
  exit;
}
require '../functions/functions.php';

$albums = query("SELECT * FROM album");



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bytedata-ID | Dashboard</title>
    <!-- data Table -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <!-- Ionicons -->
    <link
      rel="stylesheet"
      href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
    />
    <!-- Tempusdominus Bootstrap 4 -->
    <link
      rel="stylesheet"
      href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"
    />
    <!-- iCheck -->
    <link
      rel="stylesheet"
      href="plugins/icheck-bootstrap/icheck-bootstrap.min.css"
    />
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css" />
    <!-- overlayScrollbars -->
    <link
      rel="stylesheet"
      href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css"
    />
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css" />
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css" />
    <!-- feather icon -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <!-- sweet allert -->
    <script src="../sweetallert/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="../sweetallert/dist/sweetalert2.min.css">
    <!-- MY Style -->
    <link rel="stylesheet" href="../style/style.css">

  </head>
  <body >
       
    
    <div class="wrapper">

      <!-- Navbar -->


      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="" role="button"
              ><i class="fas fa-bars"></i
            ></a>
          </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->
          <li class="nav-item">
            <a
              class="nav-link"
              data-widget="navbar-search"
              href="#"
              role="button"
            >
              <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
              <form class="form-inline">
                <div class="input-group input-group-sm">
                  <input
                    class="form-control form-control-navbar"
                    type="search"
                    placeholder="Search"
                    aria-label="Search"
                  />
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                    <button
                      class="btn btn-navbar"
                      type="button"
                      data-widget="navbar-search"
                    >
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </li>

          <!-- Messages Dropdown Menu -->
      
          <!-- Notifications Dropdown Menu -->

          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              
              href="../"
              role="button"
            >
            <i data-feather="home"></i>
          </a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              
              href="pages/examples/logout.php"
              role="button"
            >
            <i data-feather="log-out"></i>
          </a>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
        <aside  class="main-sidebar  sidebar-dark-primary elevation-4">
          
          <!-- Brand Logo -->
          <a href="" class="brand-link">
            <img
              src="dist/img/AdminLTELogo.png"
              alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3"
              style="opacity: 0.8"
            />
            <span class="brand-text font-weight-light">Bytedata-ID</span>
          </a>

          <!-- Sidebar -->
          <div  class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                <img
                  src="dist/img/user2-160x160.jpg"
                  class="img-circle elevation-2"
                  alt="User Image"
                />
              </div>
              <div class="info">
                <a href="" class="d-block">Admin</a>
              </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
              <div class="input-group" data-widget="sidebar-search">
                <input
                  class="form-control form-control-sidebar"
                  type="search"
                  placeholder="Search"
                  aria-label="Search"
                />
                <div class="input-group-append">
                  <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                  </button>
                </div>
              </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
              <ul
                class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview"
                role="menu"
                data-accordion="false"
              >
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                  <a href="" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      All Story
                      <!-- <i class="right fas fa-angle-left"></i> -->
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                      Forms
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="pages/forms/general.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Story</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/forms/hero.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Set Hero</p>
                      </a>
                    </li>
                  
          </div>
          
          <!-- /.sidebar -->
        </aside>
      <!-- Content Wrapper. Contains page content -->
    <section class="content">
       <div class="container"> 
        <div class="container-fluid">  
          <div class="row ">
            <div class="col-2"></div>
            <div class="col col-md-10">
              <div class="card">
                 
              <table id="example" class="text-center table  table-hover table-striped table-bordered">
                <thead >
                  <tr class="bg-secondary">
                    <th scope="col">#</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Story</th>
                    <th scope="col">Category</th>
                    <th scope="col">Options</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach($albums as $album): ?>
                      <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><img width="50px" height="50px" src="../img/<?= $album["image"]; ?>" alt=""></td>
                        <td><p><?= $album["name"]; ?></p></td>
                        <td><p><?= $album["story"]; ?></p></td>
                        <td><p><?= $album["category"]; ?></p></td>
                        <td>
                          <a href="pages/forms/edit.php?id=<?= $album["id"]; ?>">
                            <button type="button"  class="btn btn-primary">Edit</button>
                          </a>
                            <button onclick="delete_str(<?= $album['id']; ?>)" type="button" class="btn btn-danger"> 
                                Delete</button>
                        </td>
                      </tr>
                    <?php $i++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>

              </div>
            </div>
          </div>
        </div>
      </div>
     
    </section>
   
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <strong
          >Copyright &copy; 2023
          <a href="https://instagram.com/bytedata_id">Bytedata_ID</a>.</strong
        >
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 1.0.0
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
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge("uibutton", $.ui.button);
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- my js -->
    <script src="../style/script.js"></script>

    <!-- data table -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
        <!-- feather icon -->
        <script>
          feather.replace()
        </script>
  </body>
</html>
