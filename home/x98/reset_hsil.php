<?php
include "../../conn.php";
session_start();
if(!isset($_SESSION['login2'])){
  header('location:../index.php');
}
$sql= mysqli_query($conn, "UPDATE polling set value=0");

if($sql){
    header('location:../home.php?x=pemilu');
}else{
    echo "gagal";
}