<html>
<head>
	<title>Adm00n</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.css">
	<script src="../vendor/jquery/jquery.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
		<div class=" text-center">
				<img src="../img/logos.png" class="page-header my-5" >
		</div>
        <?php
	//www.indexattacker.tech
	include"conn.php";
	if($_SERVER['REQUEST_METHOD']=='POST'){
        $nama = addslashes(trim($_POST['usr']));
        $pass = addslashes(trim(md5($_POST['pass'])));
		$sqlcek=mysqli_query($conn, "select * from adm where usr='$nama' AND pswd='$pass'");
		$jml=mysqli_num_rows($sqlcek);
		$d=mysqli_fetch_array($sqlcek);

		if($jml > 0) {
			session_start();
			$_SESSION['login2']			= TRUE;
			$_SESSION['id']				= $d['id'];
			$_SESSION['nama']			= $d['nama'];

			header('location:home/home.php');
			}else{
			echo "<div class='alert alert-danger'><strong>Error: </strong> GAGAL</div>";
			}
	}
?>
                    <form method="POST" class="my-4">
                        <input type="text" name="usr" class="form-control" placeholder="Username"><br>
                        <input type="password" name="pass" class="form-control" placeholder="pass"><br>
                        <input class="btn btn-primary" type="submit" value="Log In">
                    </form>
		</div>
	</div>	
</div>
<script>
      $(document).ready(function(){
        setTimeout(function(){$(".alert").fadeIn('slow');}, 150);});
        setTimeout(function(){$(".alert").fadeOut('slow');}, 1000);
  </script>
</body>
</html>