<?php
include "header.php";
?>
<center><h1>Daftar Buku Keranjang</h1></center>
<table class="table table-hover striped" style="padding: 25px; background-color: white; color: black;font-size: 15px;">
	<thead>
		<tr>
			<th>NO</th><th>Nama Barang</th><th>Berat (kg)</th><th>AKSI</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach (@$_SESSION['cart'] as $key_produk => $val_produk): ?> 
			<tr>
				<td><?=($key_produk+1)?></td><td><?=$val_produk['nama_barang']?></td><td><?=$val_produk['jumlah']?></td><td>
				<a href="hapus.php?id=<?=$key_produk?>" class="btn btn-danger"><strong>X</strong></a></td>
			</tr>

		<?php endforeach ?>
	</tbody>
</table>
	<a href="simpan.php" class="btn btn-primary">Menyimpan</a>