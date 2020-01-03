<?php
session_start();
if(!isset($_SESSION['login2'])){
  header('location:../index.php');
}
include "../conn.php";
?>
<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Adm00n</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <link rel="stylesheet" href="../../admin/home/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../admin/home/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../admin/home/css/font.css">
    <link rel="stylesheet" href="../../admin/home/css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="../../admin/home/css/custom.css">
    <link rel="shortcut icon" href="../../img/logo.png">
    <script src="../../assets/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea', height: 200, themes:'modern'});</script>


  </head>
  <body>
    <header class="header">   
      <nav class="navbar navbar-expand-lg">
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">For</strong><strong>Stone</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">X</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
          <div class="right-menu list-inline no-margin-bottom">
            <!-- Log out               -->
            <div class="list-inline-item logout">
              <a id="logout" href="../logout.php" class="nav-link">Logout <i class="icon-logout"></i></a>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="../../admin/home/img/avatar-6.jpg" alt="Programmer forstone" titlr="programmer forstone" 
          class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Yusuf32</h1>
            <p>Programmer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus-->
        <span class="heading">Main</span>
        <ul class="list-unstyled">
                <li><a href="home.php"> <i class="icon-home"></i>Home </a></li>
                <li><a href="?x=pemilu"> <i class="icon-grid"></i>Calon</a></li>
                <li><a href="?x=user"> <i class="fa fa-bar-chart"></i>User</a></li>
                <li><a href="?x=judul"> <i class="fa fa-github"></i>Judul</a></li>
                <li><a href="../logout.php"> <i class="icon-padnote"></i>Logout</a></li>
        </ul>
      </nav>      
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom"><a href="http://vote.forstone.web.id" target="_blank">vote.forstone.web.id</a></h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="home.php">Home</a></li>
            <li class="breadcrumb-item active">Pemilu</li>
          </ul>
        </div>
        <?php include "content.php"; ?>
        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              <p class="no-margin-bottom">2019 &copy; Forstone</p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="../../admin/home/vendor/jquery/jquery.min.js"></script>
    <script src="../../admin/home/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="../../admin/home/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../admin/home/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../../admin/home/vendor/chart.js/Chart.min.js"></script>
    <script src="../../admin/home/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="../../admin/home/js/front.js"></script>


  </body>
</html>