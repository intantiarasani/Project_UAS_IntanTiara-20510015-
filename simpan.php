<?php  
    session_start();
    include "koneksi.php";
    $cart=@$_SESSION['cart'];
    if (count($cart)>0) {
    	$lama_dikirim=5; // satuan hari
    	$tgl_harus_kirim=date('Y-m-d', mktime(0,0,0, date('m'),(date('d')+$lama_dikirim), date('Y')));
    	mysqli_query($conn, "insert into barang_masuk(
    		id_karyawan, tanggal_masuk, tanggal_kirim) value ('".$_SESSION['id_karyawan']."','".date('Y-m-d')."','".$tgl_harus_kirim."')");
    	$id=mysqli_insert_id($conn);
    	foreach ($cart as $key_produk => $val_produk) {
    		mysqli_query($conn, "insert into detail_masuk_barang(id_barang_masuk, id_barang, jumlah) value ('".$id."','".$val_produk['id_barang']."','".$val_produk['jumlah']."')");
    	}
    	unset($_SESSION['cart']);
    	echo '<script>alert("Anda berhasil menyimpan barang");location.href="gudang_perusahaan.php"</script>';
    }


?>