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
	<center><h1>Tambah Jabatan</h1></center>
	<form action="proses_tambah_jabatan.php" method="post" style="padding: 25px; background-color: white; color: black;font-size: 15px;">
		Pangkat :
		<input type="text" name="nama_jabatan" value="" class="form-control">
		Tunjangan :
		<input type="text" name="tunjangan_jabatan" value="" class="form-control"><br>
		<input type="submit" name="simpan" value="simpan" class="btn btn-primary">
	</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>