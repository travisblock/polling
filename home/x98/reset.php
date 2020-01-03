<?php
include "../../conn.php";
session_start();
if(!isset($_SESSION['login2'])){
  header('location:../index.php');
}
$sql= mysqli_query($conn, "UPDATE usr set status=0");

if($sql){
    header('location:../home.php?x=user');
}else{
    echo "gagal";
}