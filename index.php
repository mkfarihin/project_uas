<?php
session_start();
if ($_SESSION['login'] != 1) {
  header('location:login.php');
}
$dash_nav = '';
$mhs_nav = '';
$buku_nav = '';
if (isset($_GET['page'])) {

  if ($_GET['page'] == "add") {
    $mhs_nav = 'active';
  } else if ($_GET['page'] == "read") {
    $mhs_nav = 'active';
  } else if ($_GET['page'] == "create") {
    $mhs_nav = 'active';
  } else if ($_GET['page'] == "edit") {
    $mhs_nav = 'active';
  } else if ($_GET['page'] == "update") {
    $mhs_nav = 'active';
  } else if ($_GET['page'] == "delete") {
    $mhs_nav = 'active';
  } else if ($_GET['page'] == "readBuku") {
    $buku_nav = 'active';
  } else if ($_GET['page'] == "addBuku") {
    $buku_nav = 'active';
  } else if ($_GET['page'] == "createBuku") {
    $buku_nav = 'active';
  } else if ($_GET['page'] == "deleteBuku") {
    $buku_nav = 'active';
  } else if ($_GET['page'] == "editBuku") {
    $buku_nav = 'active';
  } else if ($_GET['page'] == "updateBuku") {
    $buku_nav = 'active';
  }
} else {
  $dash_nav = 'active';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags always come firt -->
  <title>BELAJAR CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet">

</head>

<body>
  <div class="wrapper">
    <div class="sidebar" data-color="purple" data-background-color="white">
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
          KELOMPOK 3
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item <?php echo $dash_nav ?>">
            <a class="nav-link" href="index.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item <?php echo $mhs_nav ?>">
            <a class="nav-link" href="index.php?page=read">
              <i class="material-icons">school</i>
              <p>Data Mahasiswa</p>
            </a>
          </li>
          <li class="nav-item <?php echo $buku_nav ?>">
            <a class="nav-link" href="index.php?page=readBuku">
              <i class="material-icons">book</i>
              <p>Data Buku</p>
            </a>
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Web Programming</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="logout.php">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container">
          <!-- your content here -->
          <?php include "pages.php"; ?>
        </div>
      </div>

    </div>
  </div>

  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="ckeditor/ckeditor.js"></script>
  <script type="text/javascript">
    CKEDITOR.replaceAll('editor', {
      height: 300
    });
    // CKEDITOR.replace('alamat','referensi',{height: 300} );
  </script>
</body>

</html>