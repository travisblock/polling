<?php
include "../../conn.php";
if(!empty($_POST['data'])){
    $foto = $_FILES['foto']['name'];
    $size = $_FILES['foto']['size'];
    $tipe = $_FILES['foto']['type'];
    $tmp = $_FILES['foto']['tmp_name'];
    $path = "../../img/".$foto;
    if($tipe == 'image/jpg' || 'image/png'){
        if($size <= 1000000){
            if(move_uploaded_file($tmp, $path)){
                $sq = mysqli_query($conn, "INSERT INTO polling (data,value,visi_misi,foto) VALUES ('$_POST[data]', '', '$_POST[visi_misi]', '$foto') ");
                if($sq){
                    header('location:../home.php?x=pemilu');
                }else{
                    echo "gagal";
                }
            }else{
                echo "gagal2";
            }
        }else{
            echo "gagal3";
        }
    }else{
        echo "gagal4";
    }
}else{
    echo "gagal5";
}
?>