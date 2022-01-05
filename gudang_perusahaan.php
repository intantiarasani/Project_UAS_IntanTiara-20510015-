<?php  
    include "header.php";
?>
<center><h1>Gudang Penyimpanan Perusahaan</h1></center>
<table class="table table-hover table-striped" style="padding: 25px; background-color: white; color: black;font-size: 15px;">
	<thead>
		<th>NO</th><th>Tanggal Masuk Barang</th><th>Tanggal Harus Dikirim</th><th>Nama Barang</th><th>Status</th><th>Aksi</th>
	</thead>
	<tbody>
		<?php  
		include "koneksi.php";
		$qry_gudang=mysqli_query($conn, "select * from barang_masuk order by id_barang_masuk desc");
		$no=0;
		while($dt_gudang=mysqli_fetch_array($qry_gudang)){
			$no++;
			//menampilkan barang yang dimasukkan
			$barang_masuk="<ol>";
			$qry_barang=mysqli_query($conn,"select * from detail_masuk_barang join barang on barang.id_barang=detail_masuk_barang.id_barang where id_barang_masuk = '".$dt_gudang['id_barang_masuk']."'");
			while ($dt_barang=mysqli_fetch_array($qry_barang)) {
				$barang_masuk.="<li>".$dt_barang['nama_barang']."</li>";
			}
			$barang_masuk.="</ol>";
			// menampilkan status sudah dikirim atau belum
			$qry_cek_kirim=mysqli_query($conn,"select * from barang_keluar where id_barang_masuk = '".$dt_gudang['id_barang_masuk']."'");
			if (mysqli_num_rows($qry_cek_kirim)>0) {
				$dt_kirim=mysqli_fetch_array($qry_cek_kirim);
				$status_kirim="<label class='alert alert-success'> Telah Dikirimkan</label>";
				$button_kirim="";
			} else {
				$status_kirim="<label class='alert alert-danger'>belum dikirim</label>";
				$button_kirim="<a href='dikirimkan.php?id=".$dt_gudang['id_barang_masuk']."' class='btn btn-warning' onclick='return confirm(\"Yakin ingin mengembalikan?\")'>Kirimkan</a>";
			}
		?>
			<tr>
				<td><?=$no?></td><td><?=$dt_gudang['tanggal_masuk']?></td><td><?=$dt_gudang['tanggal_kirim']?></td><td><?=$barang_masuk?></td><td><?=$status_kirim?></td>
				<td><?=$button_kirim?></td>
			</tr>
		<?php	
		}
		?>
	</tbody>
</table>    