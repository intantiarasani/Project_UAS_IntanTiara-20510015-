<?php
    if ($_GET['id_karyawan']) {
    	include "koneksi.php";
    	$qry_hapus=mysqli_query($conn,"delete from karyawan where id_karyawan='".$_GET['id_karyawan']."'");
    	if ($qry_hapus){
    		echo "<script>alert('Sukses hapus ');location.href='tampil_karyawan.php';</script>";
    	} else {
    		echo "<script>alert('Gagal hapus ');location.href='tampil_karyawan.php';</script>";
    	}
    }
?>    