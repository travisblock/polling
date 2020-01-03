<html>
<head>
	<title>Bootstrap</title>
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
	include "conn.php";
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$nama = addslashes(trim($_POST['nama']));
		$usrname = addslashes(trim($_POST['usrname']));
		$sqlcek=mysqli_query($conn, "SELECT * from usr where nama='$usrname' AND nis='$nama'");
		$jml=mysqli_num_rows($sqlcek);
		$d=mysqli_fetch_array($sqlcek);

		if($jml > 0) {
			if ($d['status'] == '0'){
			session_start();
			$_SESSION['login']			= TRUE;
			$_SESSION['id']				= $d['id'];
			$_SESSION['nama']			= $d['nama'];

			header('location:home2.php');
			}elseif($d['status'] == '1'){
			echo "<div class='alert alert-danger'><strong>Error: </strong> Anda sudah memilih</div>";
			}
		}else{
			echo "<div class='alert alert-danger'><strong>Error: </strong> Karena anda wibu</div>";
		}
	}
?>
                    <form method="POST" class="my-4">
						<input type="text" name="usrname" class="form-control" placeholder="Username"><br>
						<input type="password" name="nama" class="form-control" placeholder="PIN"><br>
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