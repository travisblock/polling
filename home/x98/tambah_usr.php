<?php
include "../../conn.php";
if(!empty($_POST['nis'])){

	mysqli_query($conn, "INSERT INTO usr (nama,nis,status) VALUES ('$_POST[nama]', '$_POST[nis]', '')");

	header('location:../home.php?x=user&tipe=tambah');
}else{
	echo "<script>alert('nis gak bole kosong.');document.location.href='../home.php?x=user&tipe=tambah'</script>";
}
?>