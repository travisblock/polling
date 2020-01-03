<?php
include "../../conn.php";
if(!empty($_POST['nis'])){
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $id = $_POST['id'];
    mysqli_query($conn, "UPDATE usr SET nama='$nama', nis='$nis' WHERE id=$id");

    header('location:../home.php?x=user');
}else{
    header('location:../home.php?x=user');
}