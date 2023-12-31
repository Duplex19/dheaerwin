<?php 

session_start();

if (!isset($_SESSION["login"])) {
  header("Location: ../examples/login.php");
  exit;
}
require '../../../functions/functions.php';

$id = $_GET["id"];

$album = query("SELECT * FROM album WHERE id = $id")[0];
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bytedata-ID | FORM INPUT</title>

    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="../../plugins/fontawesome-free/css/all.min.css"
    />
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css" />
      <!-- feather icon -->
      <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
       <!-- sweet allert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
    
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"
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
              
              href="../../../"
              role="button"
            >
            <i data-feather="home"></i>
          </a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              
              href="../examples/logout.php"
              role="button"
            >
            <i data-feather="log-out"></i>
          </a>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="" class="brand-link">
          <img
            src="../../dist/img/AdminLTELogo.png"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: 0.8"
          />
          <span class="brand-text font-weight-light">Bytedata-ID</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img
                src="../../dist/img/user2-160x160.jpg"
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
                <a href="../../index.php" class="nav-link active">
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
                    <a href="general.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Story</p>
                    </a>
                  </li>
                 
        </div>
        <!-- /.sidebar -->
      </aside>


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>General Form</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Upload Your Story</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </section>
<?php 

if(isset($_POST["edit"])){

  if(edit($_POST) > 0 ){
    echo  <<<GFG
    <script>
    Swal.fire({
      icon: "success",
      title: "Success",
      text: "Story has been Edited!"
    })
   </script>
GFG;
} else {
echo <<<GFG
  <script>
  Swal.fire({
    icon: "error",
    title: "Failed",
    text: "Failed Edit Story!"
  })
</script>
GFG;
}
}

?>
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <!-- left column -->
              <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Upload Foto</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                      <div class="form-group">
                        <input type="hidden" name="id" value="<?= $album["id"]; ?>">
                        <input type="hidden" name="old_image" value="<?= $album["image"]; ?>">

                        <label for="exampleInputEmail1">Event Name</label>
                        <input
                          type="text"
                          class="form-control"
                          id="exampleInputEmail1"
                          placeholder="Event Name"
                          name="judul"
                          value="<?= $album["name"]; ?>"
                        />
                      </div>

		       <div class="form-group">
                        <div class="form-floating">
                        <label for="floatingTextarea2">Story</label>

                          <textarea 
                          class="form-control" 
                          placeholder="Write Stories here" 
                          id="floatingTextarea2" 
                          style="height: 100px"
                          name="story"
                          ><?= $album["story"]; ?></textarea>
                        </div>

                      <div class="form-group">
                        <label for="we">Category</label>
                          <div class="container">
                            <div class="row" id="we">
                              
                                <div class="col-md-3">
                                  <div class="form-check">
                                    <input class="form-check-input" value="our" type="radio" name="category" checked="checked">
                                    <label class="form-check-label">Our</label>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-check">
                                    <input class="form-check-input" value="erwin" type="radio" name="category">
                                    <label class="form-check-label">Erwin</label>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-check">
                                    <input class="form-check-input" value="dhea" type="radio" name="category">
                                    <label class="form-check-label">Dhea</label>
                                  </div>
                                </div>
                      <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input
                              type="file"
                              class="custom-file-input"
                              id="exampleInputFile"
                              name="foto"
                            />
                  
                              <label
                              class="custom-file-label"
                              for="exampleInputFile"
                              height="50px"
                              > </label>
                          </div> 
                          <!-- <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div> -->
                          <div class="input-group-append">
                            <img src="../../../img/<?= $album["image"]; ?>" 
                            alt="<?= $album["name"]; ?>"
                            width="20%">
                          </div>
                        </div>
                      </div>
                  
                    </div>
                    <!-- /.card-body -->
                    <div class="container text-center">
                          <div class="row">
                            <div class="col-sm-2">  
                              <div class="card-footer">
                                <button type="submit" name="edit" class="btn btn-success">
                                  Submit
                                </button>
                              </div>
                            </div>
                            <div class="col-sm-2">
                             
                        </div>
                      </div>  
                    </div>
                  </form>
                            
                </div>
                   </form>
                   
                  </div> 
                  
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!--/.col (right) -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer fixed-bottom">
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
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="../../dist/js/demo.js"></script> -->
    <!-- Page specific script -->
    <script>
      $(function () {
        bsCustomFileInput.init();
      });
    </script>
        <!-- feather icon -->
        <script>
      feather.replace()
    </script>
  </body>
</html>
