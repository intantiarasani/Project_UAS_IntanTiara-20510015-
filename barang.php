<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<?php 
  include "header.php";
 ?>
 <center><h1>Daftar Barang</h1></center>
 <a href="tambah_barang.php" class="btn btn-success">Tambah Barang</a>
 <div class="row" style="padding: 25px; background-color: white; color: black;font-size: 15px;">
 	<?php
 	include "koneksi.php";
 	$qry_barang=mysqli_query($conn, "select * from barang");
 	while ($dt_barang=mysqli_fetch_array($qry_barang)) {
 	 	?>
 	 	<div class="col-md-3">
 	 		<div class="card">
 	 			<img src="kardus.jpg" class="card-img-top">
 	 			<div class="card-body">
 	 				<h5 class="card-tittle"><?=$dt_barang['nama_barang']?></h5>
 	 				<p class="card-text"><?=substr($dt_barang['keterangan'], 0,70)?></p>
 	 				<a href="barang_masuk.php?id_barang=<?=$dt_barang['id_barang']?>" class="btn btn-primary">Masukkan</a>	
 	 				</p>
 	 			</div>
 	 		</div>
 	 	</div>
 	 	<?php
 	 } 
 	 ?>
 </div>