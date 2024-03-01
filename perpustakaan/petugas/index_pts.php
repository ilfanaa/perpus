<?php
   include 'layout/header.php';
?>

 <div class="container">

 <?php

    include '../koneksi/koneksi.php';

    $buku = mysqli_query($koneksi, "SELECT * FROM buku");
    $kategoribuku = mysqli_query($koneksi, "SELECT * FROM kategoribuku");
    $pinjaman = mysqli_query($koneksi, "SELECT * FROM peminjaman");
    

    $b = mysqli_num_rows($buku);
    $k = mysqli_num_rows($kategoribuku);
    $u = mysqli_num_rows($pinjaman);

   ?>
    <div class="row my-3 text-center">
    <div class="col-sm-3">
       <div class="card">
           <div class="card-body text-black bg-secondary-subtle text-center">
            <h2>Data Buku</h2>
            <h1><b><?php echo $b;?></b></h1>
            </div>
            <a href="buku.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
         </div>
       </div>
       <div class="col-sm-3">
       <div class="card">
           <div class="card-body text-black bg-secondary-subtle text-center">
            <h2>Kategori</h2>
            <h1><b><?php echo $k;?></b></h1>
           </div>
           <a href="kategori.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
         </div>
       </div>
       <div class="col-sm-3">
       <div class="card">
           <div class="card-body text-black bg-secondary-subtle text-center">
            <h2>Data Peminjam</h2>
            <h1><b><?php echo $u;?></b></h1>
          </div>
          <a href="peminjam.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
         </div>
       </div>
       <div class="col-sm-3">
       <div class="card">
           <div class="card-body text-black bg-secondary-subtle text-center">
            <h2>Laporan</h2>
            <h1><b><?php echo $u;?></b></h1>
          </div>
          <a href="generate.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
         </div>
       </div>
   </div>
   <div class="row">
    <div class="col-sm-6" style="margin-top: 5rem">
      <h2>SELAMAT DATANG</h2>
      <h3>Di Halaman Petugas</h3>
      <samp>"Ada dua motif untuk membaca buku. Pertama, kau menikmatinya dan yang lain, kau bisa menyombongkannya."</samp>
    </div>
    <div class="col-sm-6">
      <img src="../assets/img/bacabuku.png" width="" alt="">
    </div>
  </div>
</div>


<?php
  include 'layout/footer.php';
?>