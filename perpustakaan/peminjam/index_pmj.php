<?php
session_start();
$SQL =  (isset($_SESSION["id_user"]) && $_SESSION["id_user"]);
include 'layout/header.php';
?>
<div class="container">
  <div class="row" style="margin-top: 5rem;">
    <div class="col-sm-7" style="margin-top: 5rem;">
      <h3>SELAMAT DATANG</h3>
      <h5>di Halaman Perpustakaan Digital</h5>
      <samp>"Ada dua motif untuk membaca buku. Pertama, kau menikmatinya dan yang lain, kau bisa menyombongkannya."</samp>
    </div>
    <div class="col-sm-5">
      <img src="../assets/img/bacabuku.png" width="400" alt="">
    </div>
  </div>
</div>


<?php
include 'layout/footer.php';
?>