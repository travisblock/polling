<script>
    function validasiFile(){
    var inputFile = document.getElementById('file');
    var pathFile = inputFile.value;
    var ekstensiOk = /(\.jpg|\.png)$/i;
    if(!ekstensiOk.exec(pathFile)){
        alert('Silakan upload file yang memiliki ekstensi .jpg atau .png');
        inputFile.value = '';
        return false;
        }
    }
</script>
<?php
if(isset($_GET['tipe'])){
	if($_GET['tipe']=='tambah'){
		echo "
        <section class='no-padding-top'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-lg-12'>
                        <div class='block'>
                        <div class='title'><strong class='d-block'>Tambah Data</strong></div>
                        <div class='block-body'>
                            <form method='POST' action='x98/tambah_c.php' enctype='multipart/form-data'>
                            <div class='form-group'>
                                <label class='form-control-label'>Nama</label>
                                <input type='text' name='data'  required placeholder='Nama' class='form-control'>
                            </div>

                            <div class='form-group'>
                                <label class='control-label sr-only' for='myTextarea'>Visi Misi</label>
                                <textarea id='myTextarea' class='form-control'  name='visi_misi' rows='6' placeholder='Visi Misi'></textarea>
                            </div>

                            <div class='form-group'>
                                <label class='form-control-label'>Foto</label><br>
                                <input type='file' name='foto' id='file' onchange='return validasiFile()'  required>
                            </div>

                            <div class='form-group'>       
                                <input type='submit' value='Submit' class='btn btn-primary'>
                                <input type='button' value='Batal'  class='btn btn-dark' onClick='history.back();'/>
                            </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>";
        
    }elseif($_GET['tipe']=='edit'){
        $sqli= mysqli_query($conn, "SELECT * FROM polling WHERE id='$_GET[id]'");
        $d = mysqli_fetch_array($sqli);
        echo "
        <section class='no-padding-top'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-lg-12'>
                        <div class='block'>
                        <div class='title'><strong class='d-block'>Edit Data</strong></div>
                        <div class='block-body'>
                            <form method='POST' action='x98/edit_c.php' enctype='multipart/form-data'>
                            <input type='hidden' name='id' value='$d[id]'>
                            <div class='form-group'>
                                <label class='form-control-label'>Nama</label>
                                <input type='text' name='data' value='$d[data]' placeholder='Nama' class='form-control'>
                            </div>

                            <div class='form-group'>
                                <label class='control-label sr-only' for='summernote'>Visi Misi</label>
                                <textarea id='myTextarea' class='form-control'  name='visi_misi' rows='6' placeholder='Visi Misi' >$d[visi_misi]</textarea>
                            </div>

                            <div class='form-group'>
                                <label class='form-control-label'>Foto</label><br>
                                <img src='../img/$d[foto]' class='avatar-2'>
                                
                                <br><br>
                                <input type='checkbox' name='ubah_foto' value='true'> Ceklis jika ingin mengubah foto<br>
                                <input type='file' name='foto' id='file' onchange='return validasiFile()'>
                            </div>

                            <div class='form-group'>       
                                <input type='submit' value='Submit' class='btn btn-primary'>
                                <input type='button' value='Batal'  class='btn btn-dark' onClick='history.back();' />
                            </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>";

    }
}else{
    ?>
    <section class="no-padding-top">
          	<div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>Manage vote.forstone.web.id</strong></div>
                  <a class="btn btn-primary text-dark" href="?x=pemilu&tipe=tambah">+ add Calon</a>
                  <a class="btn btn-danger" href="x98/reset_hsil.php" onClick="return confirm('Lo Yakin GANNNNNNN?')" >RESET</a>
                  <div class="table-responsive"> 
                    <table class="table">
                      <thead>
                        <tr>                        	                     
                          <th width="5%">hasil</th>
                          <th width="10%">foto</th>
                          <th width="20%">Nama</th>
                          <th>Visi Misi</th>
                          <th width="5%">edit</th>
                          <th width="5%">delete</th>
                        </tr>
                      </thead>
                      <?php
                      $sql = mysqli_query($conn, "SELECT * from polling ORDER BY data ASC");
                      while($p= mysqli_fetch_array($sql)){
                      	echo " 
                      <tbody>                      
                        <tr style='border-bottom:#00adfe!important;'>
                          <td width='5%'>$p[value]</td>
                          <td width='10%'><img src='../img/$p[foto]' class='avatar'></td>
                          <td width='20%'>$p[data]</td>
                          <td>$p[visi_misi]</td>
                          <td width='5%'><a href='?x=pemilu&tipe=edit&id=$p[id]'>edit</a></td>
                          <td width='5%'><a href='x98/hapus_c.php?id=$p[id]' onClick='return confirm(\"Anda Yakin Akan Menghafus?\")'>delete</a>
                          </td>                          
                        </tr>
                      </tbody>";
                        }?>
                    </table>
                  </div>
                </div>
              </div>
        </section>        
    <?php
    }