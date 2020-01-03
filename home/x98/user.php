<?php
if(isset($_GET['tipe'])){
    if($_GET['tipe'] == 'edit'){
        $sql= mysqli_query($conn, "SELECT * FROM usr WHERE id='$_GET[id]'");
        $d= mysqli_fetch_array($sql);
        echo "
        <section class='no-padding-top'>
        <div class='container-fluid'>
        <div class='row'>
        <div class='col-lg-10'>                           
          <div class='block'>
            <div class='title'><strong class='d-block'>Edit</strong><span class='d-block'>Editing...</span></div>
            <div class='block-body'>
              <form class='form' method='POST' action='x98/edit_usr.php'>
              <input type='hidden' name='id' value='$d[id]'>
                <div class='form-group'>
                  <label for='inlineFormInput' class='sr-only'>Nama</label>
                  <input name='nama' value='$d[nama]' type='text' class='mr-sm-2 form-control'>
                </div>
                <div class='form-group'>
                  <label for='inlineFormInput' class='sr-only'>Nis</label>
                  <input name='nis' value='$d[nis]' type='text' class='mr-sm-2 form-control'>
                </div>
                <br>
                <div class='form-group'>
                  <input type='submit' value='Submit' name='submit' class='btn btn-primary'>
                  <input type='button' value='Batal'  class='btn btn-dark' onClick='history.back();' />
                </div>
              </form>
            </div>
          </div>
		</div>
		</div>
		</div>
		</section>
        ";
    }elseif($_GET['tipe'] == 'tambah'){
        echo "
		<section class='no-padding-top'>
        <div class='container-fluid'>
        <div class='row'>
        <div class='col-lg-10'>                           
          <div class='block'>
            <div class='title'><strong class='d-block'>Tambah</strong><span class='d-block'>User</span></div>
            <div class='block-body'>
              <form class='form' method='POST' action='x98/tambah_usr.php'>
                <div class='form-group'>
                  <label for='inlineFormInput' class='sr-only'>Nama</label>
                  <input name='nama' type='text' placeholder='Nama' class='mr-sm-2 form-control'>
                </div>
                <div class='form-group'>
                  <label for='inlineFormInput' class='sr-only'>Kategori</label>
                  <input name='nis' type='text' placeholder='nis' class='mr-sm-2 form-control'>
                </div><br>
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
		</section>
		";
    }
}else{
?>
    <section class="no-padding-top">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
            <div class="block margin-bottom-sm">
                <div class="title"><strong>Manage user vote.forstone.web.id</strong></div>
                <a class="btn btn-primary text-dark" href="?x=user&tipe=tambah">+ add user </a>
                <a class="btn btn-danger" href="x98/reset.php" onClick="return confirm('Lo Yakin?')" >RESET</a>
                <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>                        	                     
                        <th>no</th>
                        <th>Nama</th> 
                        <th>nis</th> 
                        <th>status</th>                                              
                        <th width="5%">edit</th>
                        <th width="5%">delete</th>
                    </tr>
                    </thead>
                    <?php
                    $sqli = mysqli_query($conn, "SELECT * from usr order by nis ASC");
                    $no=1;
                    while($k=mysqli_fetch_array($sqli)){
                    echo " 
                    <tbody>                      
                    <tr style='border-bottom:#00adfe!important;'>
                        <td>$no</td>
                        <td>$k[nama]</td>
                        <td>$k[nis]</td> 
                        <td>$k[status]</td>                                               
                        <td width='5%'><a href='?x=user&tipe=edit&id=$k[id]'>edit</a></td>
                        <td width='5%'><a href='x98/hapus_usr.php?id=$k[id]' onClick='return confirm(\"Anda Yakin Akan Menghafus?\")'>delete</a>
                        </td>                          
                    </tr>
                    </tbody>";
                    $no++;
                    }?>
                </table>
                </div><br>
                Jumlah user : <?php 
                $queriusr = mysqli_query($conn, "SELECT * from usr");
                $jml = mysqli_num_rows($queriusr); 
                echo "$jml" ;
                ?>
            </div>
            </div>
    </section>        
<?php
}