<?php
include "../../conn.php";
if(!empty($_POST['data'])){
    if(isset($_POST['ubah_foto'])){
        $foto = $_FILES['foto']['name'];  
        $tmp = $_FILES['foto']['tmp_name'];
        $path = "../../img/".$foto;
        if(move_uploaded_file($tmp, $path)){
            $tm = mysqli_query($conn, "SELECT * FROM polling where id='$_POST[id]");
            $dpq = mysqli_fetch_array($tm);  
            if(is_file("../../img/".$dpq['foto']))   
            unlink("../../img/".$dpq['foto']);

            $queri= mysqli_query($conn, "UPDATE polling SET data='$_POST[data]', visi_misi='$_POST[visi_misi]', foto='$foto' WHERE id='$_POST[id]'");
            if($queri){
                header('location:../home.php?x=pemilu');
            }else{
                echo "gagal1";
            }
    }else{
        echo "gagal upload";
    }
    
}else{
    $querry= mysqli_query($conn, "UPDATE polling SET data='$_POST[data]', visi_misi='$_POST[visi_misi]' WHERE id='$_POST[id]'");
    if($querry){
    header('location:../home.php?x=pemilu');
    }else{
    echo "gagal";
    }
}
}
?>