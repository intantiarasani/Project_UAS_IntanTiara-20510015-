<?php
	if($_POST){
		$nama = $_POST['nama'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $username = $_POST['username'];
		$password = $_POST['password'];
        $id_jabatan = $_POST['id_jabatan'];
		if(empty($nama)){
			echo "<script>alert('Nama Karyawan Tidak Boleh Kosong');location.href='tambah_karyawan.php';</script>";

		} elseif(empty($username)){
			echo "<script>alert('Username Tidak Boleh Kosong');location.href='tambah_karyawan.php';</script>";

		} elseif (empty($password)) {
			echo "<script>alert('Password Tidak Boleh Kosong');location.href='tambah_karyawan.php';</script>";

		} else {
		include "koneksi.php";
		$insert = mysqli_query($conn, "insert into karyawan (nama, tanggal_lahir, alamat , jenis_kelamin, username, password, id_jabatan) value ('".$nama."','".$tanggal_lahir."','".$alamat."',
		'".$jenis_kelamin."','".$username."', '".$password."', '".$id_jabatan."')")or die(mysqli_error($conn));
		if($insert){
			echo "<script>alert('sukses menambahkan data karyawan');location.href='tampil_karyawan.php';</script>";
		} else {
			echo "<script>alert('gagal menambahkan data karyawan');location.href='tambah_karyawan.php';</script>";
		}
	}
}
?>