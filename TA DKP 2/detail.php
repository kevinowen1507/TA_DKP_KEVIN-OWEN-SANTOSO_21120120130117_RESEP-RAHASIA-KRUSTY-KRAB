<?php
include("resep.php");
$resep=new resep ();
$no=$_GET["no"];
?>
<!DOCTYPE html>
<html>
<head>
<title>RESEP RAHASIA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<div class="container">
  <center><h3>WARNING !!!! SECRET RECIPE</h3></center>
  <div class="row">
    <div class="card col lg-12">
      <div class="card-body">
        <h5 class="card-title"><?php $resep->resep($no); ?> </h5>
        <h6>Alat dan Bahan </h6>
        <?php $resep->bahan($no); ?>
        <h6>Cara Pembuatan </h6>
        <?php $resep->pembuatan($no); ?>
        <h6>harga penjualan di publik </h6>
        <?php $resep->dijual($no); ?>
      </div> 
    </div>
  </div>
</div>
</body>
</html>