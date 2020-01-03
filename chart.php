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
            <button class="sidebar-toggle"></button>
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
                <li class="active"><a href=""> <i class="icon-home"></i>Home </a></li>
                <li><a href="pemilu.php"> <i class="icon-grid"></i>user</a></li>
                <li><a href="logout.php"> <i class="fa fa-bar-chart"></i>Login</a></li>
        
      </nav>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
        </div>
        <section class="no-padding-top no-padding-bottom">
         <div class="container-fluid">
          </div>
            <div class="row">
            <?php
            $kueri = mysqli_query($conn, "SELECT * FROM polling");
                  while($dp = mysqli_fetch_array($kueri)){
                      echo "
                  
              <div class='col-md-5 col-sm-5'>
                <div class='statistic-block block'>
                  <div class='progress-details d-flex align-items-end justify-content-between'>
                    <div class='title'>
                      <div class='icon'><img src='img/$dp[foto]' class='avatar'></div><br><strong>$dp[data]</strong>
                    </div>
                    <div class='number dashtext-1'>$dp[value]%</div>
                  </div>
                  <div class='progress progress-template'>
                    <div role='progressbar' style='width: $dp[value]%' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100' class='progress-bar progress-bar-template dashbg-1'></div>
                  </div>
                </div>
              </div>  
              ";
                        }?>            
        </section>
       
        <section>
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-4">
                <div class="stats-with-chart-2 block">
                  <div class="title"><strong class="d-block">Sudah memilih</strong></div>
                  <div class="piechart chart">
                    <canvas id="pieChartHome1"></canvas>
                    <div class="text"><strong class="d-block">50%</strong><span class="d-block">User</span></div>
                  </div>
                </div>
              </div>
              
              <div class="col-lg-4">
                <div class="stats-with-chart-2 block">
                  <div class="title"><strong class="d-block">Belum memilih</strong></div>
                  <div class="piechart chart">
                    <canvas id="pieChartHome3"></canvas>
                    <div class="text"><strong class="d-block">50%</strong><span class="d-block">User</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              <p class="no-margin-bottom">2018 &copy; Your company. Design by <a href="https://bootstrapious.com">Bootstrapious</a>.</p>
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