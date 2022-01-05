 <?php 
     include "header.php";
     include "koneksi.php";
     $qry_detil_barang=mysqli_query($conn, "select * from barang where id_barang = '".$_GET['id_barang']. "'");
     $dt_barang=mysqli_fetch_array($qry_detil_barang);
?>     

<center><h1>Masukkan Barang</h1></center>
<div class="row">
	<div class="col-md-4">
		<img src="kardus.jpg" class="card-img-top">
	</div>
	<div class="col-md-8">
		<form action="proses_masuk.php?id_barang=<?=$dt_barang['id_barang']?>" method="POST">
			<table class="table table-hover table striped" style="padding: 25px; background-color: white; color: black;font-size: 15px;">
				<thead>
					<tr>
						<td>Nama Barang</td>
						<td><?=$dt_barang['nama_barang']?></td>
					</tr>
					<tr>
						<td>Keterangan</td>
						<td><?=$dt_barang['keterangan']?></td>
					</tr>
					<tr>
						<td>Berat (kg)</td>
						<td><input type="number" name="barang_masuk" value="1"></td>
					</tr>
					<tr>
						<td colspan="2"><input class="btn btn-success" type="submit" value="masukkan"></td>
					</tr>
				</thead>
			</table>
		</form>
	</div>
</div>