<?php
session_start();
if(!isset($_SESSION['login'])){
  header('location:index.php');
}
include "conn.php";
$id= $_GET['id'];
$sesi = $_SESSION['id'];
    mysqli_query($conn, "UPDATE polling SET value=value+1 where id=$id");
    mysqli_query($conn, "UPDATE usr SET status=1 where id=$sesi");
    
    echo "<script>alert('Terimakasih $_SESSION[nama] sudah memilih, anda akan logout secara otomatis');document.location.href='logout.php'</script>";
?>