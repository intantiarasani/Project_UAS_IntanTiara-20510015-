<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  	<title></title>
</head>
<body>
	<?php
    include "header.php";
	  ?>
	<center><h1>Tambah Barang</h1></center>
	<form action="proses_tambah_barang.php" method="post" style="padding: 25px; background-color: white; color: black;font-size: 15px;">
		Nama Barang :
		<input type="text" name="nama_barang" value="" class="form-control">
		Keterangan :
		<input type="text" name="keterangan" value="" class="form-control"><br>
		<input type="submit" name="simpan" value="simpan" class="btn btn-primary">
	</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>