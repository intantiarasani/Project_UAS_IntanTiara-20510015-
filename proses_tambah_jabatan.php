<?php
if ($_POST) {
	$nama_jabatan=$_POST['nama_jabatan'];
	$tunjangan_jabatan=$_POST['tunjangan_jabatan'];
	if (empty($nama_jabatan)) {
		echo "<script>alert('Nama Jabatan tidak boleh kosong');location.href='tambah_jabatan.php';</script>";

	} elseif (empty($tunjangan_jabatan)) {
		echo "<script>alert('Tunjangan tidak boleh kosong');location.href='tambah_jabatan.php';</script>";
	} else {
		include "koneksi.php";
		$insert=mysqli_query($conn, "insert into jabatan (nama_jabatan,tunjangan_jabatan) value ('".$nama_jabatan."', '".$tunjangan_jabatan."')");
		if ($insert) {
			echo "<script>alert('Sukses menambahkan Jabatan ');location.href='tampil_jabatan.php';</script>";
		} else {
			echo "<script>alert('Gagal menambahkan Jabatan ');location.href='tambah_jabatan.php';</script>";
		}
	}
}
?>