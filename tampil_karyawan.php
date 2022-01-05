<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
  include "header.php";
 ?>
	<center><h1 style="color: black;">Data Karyawan</h1></center>
	<a href="tambah_karyawan.php" class="btn btn-success">Tambah Data</a> 
	<table class="table table-hover table-striped" style="padding: 25px; background-color: white; color: black;font-size: 15px;">
		<thead>
			<tr>
				<th>NO</th>
				<th>NAMA</th>
				<th>TANGGAL LAHIR</th>
				<th>ALAMAT</th>
				<th>JENIS KELAMIN</th>
				<th>USERNAME</th>
				<th>JABATAN</th>
				<th>AKSI</th>
			</tr>
		</thead>
	<tbody>
		<?php
		include "koneksi.php";
		$qry_karyawan=mysqli_query($conn,"select * from karyawan join jabatan on jabatan.id_jabatan=karyawan.id_jabatan");
		$no=0;
		while ($data_karyawan=mysqli_fetch_array($qry_karyawan)) {
		$no++;?>
		   <tr>
		   	  <td><?=$no?></td><td><?=$data_karyawan['nama']?></td> <td><?=$data_karyawan['tanggal_lahir']?></td> <td><?=$data_karyawan['alamat']?></td> <td><?=$data_karyawan['jenis_kelamin']?></td> <td><?=$data_karyawan['username']?></td> <td><?=$data_karyawan['nama_jabatan']?></td> <td><a href="ubah_karyawan.php?id_karyawan=<?=$data_karyawan['id_karyawan']?>" class="btn btn-success">Ubah</a> | <a href="hapus_kry.php?id_karyawan=<?=$data_karyawan['id_karyawan']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>

		   </tr>
		   <?php
		   }
 		   ?>
	</tbody>
	</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>