<?php
session_start();
if(!isset($_SESSION['login'])){
  header('location:index.php');
}
include "conn.php";
?>
<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome to Forstone - Voting</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../admin/home/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../admin/home/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="../admin/home/css/font.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../admin/home/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../admin/home/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../img/logo.png">
  </head>
  <body>
    <header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Search</button>
              </div>
            </form>
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
          
            
            <!-- Log out               -->
          </div>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="../admin/home/img/avatar-6.jpg" alt="Forstone" class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Yusuf32</h1>
            <p>Web Developer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Menu</span>
        <ul class="list-unstyled">
                <li class="active"><a href="home2.php"> <i class="icon-home"></i>Home </a></li>
                <li><a href="pemilu.php"> <i class="icon-grid"></i>Pemilu</a></li>
                <li><a href="logout.php" onClick="return confirm('Koe yakin arep Logout ?');"> <i class="fa fa-bar-chart"></i>LOGOUT</a></li>
        
      </nav>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Selamat datang <?php echo $_SESSION['nama'] ?></h2>
          </div>
        </div>
        <section class="no-padding-top no-padding-bottom">
         <div class="container-fluid">
            <div class="row">
              <div class="col-md-8 col-sm-8">
                  <div class="my-4">
                      <p>Silahkan klik menu pemilu yang ada di samping kiri untuk memilih</p><br>
                  </div>
            </div>
          </div>
        </section>
        <section class="no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-4">               
              </div>           
            </div>
          </div>
        </section>
        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              
              <p class="no-margin-bottom">2019 &copy; Forstone</p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="../admin/home/vendor/jquery/jquery.min.js"></script>
    <script src="../admin/home/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="../admin/home/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../admin/home/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../admin/home/vendor/chart.js/Chart.min.js"></script>
    <script src="../admin/home/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="../admin/home/js/charts-home.js"></script>
    <script src="../admin/home/js/front.js"></script>
  </body>
</html>