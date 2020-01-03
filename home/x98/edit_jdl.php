<?php
include "../../conn.php";
if(!empty($_POST['judul'])){
    $judul = $_POST['judul'];
    $id = $_POST['id'];
    mysqli_query($conn, "UPDATE judul SET judul='$judul' WHERE id=$id");

    header('location:../home.php?x=judul');
}else{
    header('location:../home.php?x=judul');
}