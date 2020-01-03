<?php
            include "conn.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Forstone - Voting</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Official web Forstone - Formation TKJ One SMKN 2 Kudus">
    <meta name="author" content="FORSTONE">
    <meta name="keywords" content="Forstone, TKJ, Web TKJ" />
    <meta name="language" content="indonesia">
    <meta property="og:image" content="../img/logo.png" />
    <link rel="icon" href="../img/logo.png" sizes="32x32" />
    <link rel="icon" href="../img/logo.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="../img/logo.png" />
    <meta name="msapplication-TileImage" content="../img/logo.png" />
    <link rel="shortcut icon" href="../img/logo.png">
    <meta name="robots" content="all,follow">

    <link rel="stylesheet" href="../admin/home/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../admin/home/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../admin/home/css/font.css">
    <link rel="stylesheet" href="../admin/home/css/style.default.1.css" id="theme-stylesheet">
    <link rel="stylesheet" href="../admin/home/css/custom.css">

  </head>
  <body  id="responsecontainer">    
    <div class="d-flex"> 
      <div class="page-content">
        <section>
          <div class="col-lg-12">
            <div class="block">
            <?php
            $sqli = mysqli_query($conn, "SELECT * FROM judul");
            while($q= mysqli_fetch_array($sqli)){
            echo "
              <div class='titlea' style='color:#00adfe'><h2>$q[judul]</h2></div>";
            }; ?>
              <hr style='background:#5d5d5d'>
              <div class="text-center">
                <a href="login.php" class="btn btn-info">Silahkan Login</a>
              </div>
              <div class="row">
                  <?php
                  $kueri = mysqli_query($conn, "SELECT * FROM polling");
                  while($tampil = mysqli_fetch_array($kueri)){
                  $as = $tampil['value']*2;
                  echo "              
                    <div class='col-md-6 my-4'>
                      <div class='statistic-block block'  style='background:#34373c'>
                        <div class='progress-details d-flex align-items-end justify-content-between'>
                          <div class='title'>
                            <div class='icon'>";
                            if(empty($tampil['foto'])){
                              echo "<img src='img/default.png' class='avatar-3'>";
                            }else{
                              echo "<img src='img/$tampil[foto]' class='avatar-3'>";
                            }
                            echo "
                            </div><br><strong>$tampil[data]</strong></div>
                            <div class='number dashtext-1'>$tampil[value]%</div>
                          </div>
                          <div class='progress progress-template'>
                            <div role='progressbar' style='width:$as%' aria-valuenow='30' aria-valuemin='0' aria-valuemax='100' class='progress-bar progress-bar-template dashbg-1'></div>
                          </div>
                        </div>
                    </div>";}?>
              </div>
            </div>
          </div>
        </section>   
        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              
              <p class="no-margin-bottom">2019 &copy; Forstone. by <a style="color:#00adfe" href='http://www.indexattacker.blogspot.com' target="_blank">Index Attacker</a></p>
            </div>
          </div>
        </footer>
      </div>     
      </div>
    </div>
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