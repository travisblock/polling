<?php 
session_start();
if(!isset($_SESSION['login'])){
  header('location:index.php');
}

include "conn.php";
if($_POST['getDetail']) {

  $id = $_POST['getDetail'];
  $sql = mysqli_query($conn, "SELECT * from polling where id='$id'");
  while ($d = mysqli_fetch_array($sql)){       
echo "
    
                            <div class='modal-header text-center'><strong id='exampleModalLabel' class='modal-title'>$d[data]</strong>
                            </div>

                            <div class='modal-body'>
                              <img src='img/$d[foto]' alt='$d[data]' width='30%' class='avatar2'>
                                <div class='form-group my-4'>
                                  <label><strong>Visi & misi</strong></label><br>
                                </div>
                                <div class='form-group text-left'>
                                  <ul>
                                    $d[visi_misi]           
                                  </ul>
                                </div>
                                
                              <form class='my-4' method='POST'>
                              <input type='hidden' name='id' value='$d[id]' >
                                <div class='form-group my-4'>       
                                  <a href='pilih.php?id=$d[id]' class='btn btn-primary' onClick='return confirm(\"Anda Yakin Akan Memilih $d[data] ?\")'>Pilih</a>                             
                                  <button type='button' data-dismiss='modal' class='btn btn-secondary'>Batal</button>
                                </div>                              
                              </form>
                            </div>  
                            "; } }?>             
                    
