<?php
if ($_POST) {
	$nama_barang=$_POST['nama_barang'];
	$keterangan=$_POST['keterangan'];
	if (empty($nama_barang)) {
		echo "<script>alert('Nama barang tidak boleh kosong');location.href='barang.php';</script>";

	} elseif (empty($keterangan)) {
		echo "<script>alert('nama tidak boleh kosong');location.href='barang.php';</script>";
	} else {
		include "koneksi.php";
		$insert=mysqli_query($conn, "insert into barang (nama_barang, keterangan) value ('".$nama_barang."', '".$keterangan."')");
		if ($insert) {
			echo "<script>alert('Sukses menambahkan barang');location.href='barang.php';</script>";
		} else {
			echo "<script>alert('Gagal menambahkan barang');location.href='barang.php';</script>";
		}
	}
}
?>