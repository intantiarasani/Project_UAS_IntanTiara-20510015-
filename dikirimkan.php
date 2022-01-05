<?php
if ($_GET['id']) {
	include "koneksi.php";
	$id_barang_masuk=$_GET['id'];
	$cek_terlambat=mysqli_query($conn, "select * from barang_masuk where id_barang_masuk = '".$id_barang_masuk."' ");
	$dt_masuk=mysqli_fetch_array($cek_terlambat);
	if (strtotime($dt_masuk['tanggal_kirim'])>=strtotime(date('Y-m-d'))) {
		$terlambat=0;
	} else{
		$tanggal_kirim = new DateTime();
		$tgl_harus_dikirim = new DateTime($dt_masuk['tanggal_kirim']);
		$selisih_hari = $tanggal_kirim->diff($tgl_harus_dikirim)->d;
		$terlambat=$selisih_hari;
	}
	mysqli_query($conn, "insert into barang_keluar (id_barang_masuk, tanggal_keluar) value ('".$id_barang_masuk."','".date('Y-m-d')."','".$terlambat."')");
	header('location: gudang_perusahaan.php');
}
?>