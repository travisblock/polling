<?php
if(isset($_GET['tipe'])){
    if($_GET['tipe'] == 'edit'){
        $sql= mysqli_query($conn, "SELECT * FROM judul WHERE id='$_GET[id]'");
        $d= mysqli_fetch_array($sql);
        echo "
        <section class='no-padding-top'>
        <div class='container-fluid'>
        <div class='row'>
        <div class='col-lg-10'>                           
          <div class='block'>
            <div class='title'><strong class='d-block'>Edit</strong><span class='d-block'>Editing...</span></div>
            <div class='block-body'>
              <form class='form' method='POST' action='x98/edit_jdl.php'>
              <input type='hidden' name='id' value='$d[id]'>
                <div class='form-group'>
                  <label for='inlineFormInput' class='sr-only'>Nama</label>
                  <input name='judul' value='$d[judul]' type='text' class='mr-sm-2 form-control'>
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
    }
}else{
?>
    <section class="no-padding-top">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
            <div class="block margin-bottom-sm">
                <div class="title"><strong>Judul</strong></div>
                <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>            
                        <th>Judul</th>                                              
                        <th width="5%">edit</th>
                    </tr>
                    </thead>
                    <?php
                    $sqli = mysqli_query($conn, "SELECT * from judul");
                    $no=1;
                    while($k=mysqli_fetch_array($sqli)){
                    echo " 
                    <tbody>                      
                    <tr style='border-bottom:#00adfe!important;'>
                        <td>$k[judul]</td>                                               
                        <td width='5%'><a href='?x=judul&tipe=edit&id=$k[id]'>edit</a></td>
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