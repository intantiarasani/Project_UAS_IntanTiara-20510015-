<?php
    if ($_GET['id_jabatan']) {
    	include "koneksi.php";
    	$qry_hapus=mysqli_query($conn,"delete from jabatan where id_jabatan='".$_GET['id_jabatan']."'");
    	if ($qry_hapus){
    		echo "<script>alert('Sukses hapus ');location.href='tampil_jabatan.php';</script>";
    	} else {
    		echo "<script>alert('Gagal hapus ');location.href='tampil_jabatan.php';</script>";
    	}
    }
?>    