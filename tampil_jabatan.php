<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <title></title>
</head>
<body>
    <?php 
  include "header.php";
 ?>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
 
    <center><h1>JABATAN</h1></center>
    <a href="tambah_jabatan.php" class="btn btn-success">Tambah Jabatan</a>
    <table class="table table-hover table-striped" style="padding: 25px; background-color: white; color: black;font-size: 15px;">
    	<thead>
    		<tr>
    			<th>NO</th><th>PANGKAT</th><th>TUNJANGAN</th><th>AKSI</th>
    		</tr>
    	</thead>
    	<tbody>
    		<?php 
    		include "koneksi.php";
    		$qry_jabatan=mysqli_query($conn,"select * from jabatan");
    		$no=0;
    		while ($data_jabatan=mysqli_fetch_array($qry_jabatan)) {
    		$no++;?>
    		<tr>
    		<td><?=$no?></td><td><?=$data_jabatan['nama_jabatan']?></td> <td><?=$data_jabatan['tunjangan_jabatan']?></td>	
    		<td><a href="hapus_jbt.php?id_jabatan=<?=$data_jabatan['id_jabatan']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
    	    </tr>	
    	    <?php
    		}
    		 ?>
    	</tbody>
    </table>
</body>
</html>