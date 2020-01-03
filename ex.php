<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagination dengan PHP</title>

    <!-- Load File bootstrap.min.css yang ada difolder css -->
    <link href="../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <style>
    .align-middle{
      vertical-align: middle !important;
    }
    </style>
  </head>
  <body>
    <!-- Membuat Menu Header / Navbar -->
    
    <div style="padding: 0 15px;">
      <div class="table-responsive">
        <table class="table table-bordered">
          <tr>
            <th class="text-center">NO</th>
            <th>NIS</th>
            <th>NAMA</th>
            <th>status</th>
          </tr>
          <?php
          // Include / load file koneksi.php
          include "./conn.php";
          
          // Cek apakah terdapat data page pada URL
          $page = (isset($_GET['page']))? $_GET['page'] : 1;
          
          $limit = 10; // Jumlah data per halamannya
          
          // Untuk menentukan dari data ke berapa yang akan ditampilkan pada tabel yang ada di database
          $limit_start = ($page - 1) * $limit;
          
          // Buat query untuk menampilkan data siswa sesuai limit yang ditentukan
          $sql = mysqli_query($conn, "SELECT * FROM usr LIMIT ".$limit_start.",".$limit);
                    
          $no = $limit_start + 1; // Untuk penomoran tabel
          while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
          ?>
            <tr>
              <td class="align-middle text-center"><?php echo $no; ?></td>
              <td class="align-middle"><?php echo $data['nis']; ?></td>
              <td class="align-middle"><?php echo $data['nama']; ?></td>
              <td class="align-middle"><?php echo $data['status']; ?></td>
            </tr>
          <?php
            $no++; // Tambah 1 setiap kali looping
          }
          ?>
        </table>
      </div>
      
      <!--
      -- Buat Paginationnya
      -- Dengan bootstrap, kita jadi dimudahkan untuk membuat tombol-tombol pagination dengan design yang bagus tentunya
      -->
      <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center ">
        <!-- LINK FIRST AND PREV -->
        <?php
        if($page == 1){ // Jika page adalah page ke 1, maka disable link PREV
        ?>
          <li class="page-item disabled"><a class="page-link" href="#">First</a></li>
          <li class="page-item disabled"><a class="page-link" href="#">&laquo;</a></li>
        <?php
        }else{ // Jika page bukan page ke 1
          $link_prev = ($page > 1)? $page - 1 : 1;
        ?>
          <li class="page-item"><a class="page-link" href="ex.php?page=1">First</a></li>
          <li class="page-item"><a class="page-link" href="ex.php?page=<?php echo $link_prev; ?>">&laquo;</a></li>
        <?php
        }
        ?>
        
        <!-- LINK NUMBER -->
        <?php
        // Buat query untuk menghitung semua jumlah data
        $sql2 = mysqli_query($conn, "SELECT COUNT(*) AS jumlah FROM usr");
        $get_jumlah = mysqli_fetch_array($sql2);
        
        $jumlah_page = ceil($get_jumlah['jumlah'] / $limit); // Hitung jumlah halamannya
        $jumlah_number = 3; // Tentukan jumlah link number sebelum dan sesudah page yang aktif
        $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1; // Untuk awal link number
        $end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page; // Untuk akhir link number
        
        for($i = $start_number; $i <= $end_number; $i++){
          $link_active = ($page == $i)? ' class="page-item active"' : '';
        ?>
          <li<?php echo $link_active; ?>><a class="page-link" href="ex.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php
        }
        ?>
        
        <!-- LINK NEXT AND LAST -->
        <?php
        // Jika page sama dengan jumlah page, maka disable link NEXT nya
        // Artinya page tersebut adalah page terakhir 
        if($page == $jumlah_page){ // Jika page terakhir
        ?>
          <li class="page-item disabled"><a class="page-link" href="#">&raquo;</a></li>
          <li class="page-item disabled"><a class="page-link" href="#">Last</a></li>
        <?php
        }else{ // Jika Bukan page terakhir
          $link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
        ?>
          <li class="page-item" ><a class="page-link" href="ex.php?page=<?php echo $link_next; ?>">&raquo;</a></li>
          <li class="page-item" ><a class="page-link" href="ex.php?page=<?php echo $jumlah_page; ?>">Last</a></li>
        <?php
        }
        ?>
      </ul>
    </nav>
    </div>
  </body>
</html>