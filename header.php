<?php  
session_start();
   if ($_SESSION['status_login']!=true) {
   	header('location: login.php');
   }
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title></title>
</head>
<body style="background-image: url('bg-01.jpg');">
	<nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 4px 4px 5px -4px;">
		<div class="container-flaud">
			<a class="navbar-brand" href="#">Aplikai Gudang Penyimpanan</a>
			<button class="navbar_toggler" type="button" data-bs-toggle="collaps" data-bs-target="#navbarNav" arial_controls="navbarNav" aria-expanded="false" arial-label="toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		<div class="collaps navbar-collaps" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="home.php">HOME</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="tampil_karyawan.php">KARYAWAN</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="tampil_jabatan.php">JABATAN</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="barang.php">BARANG</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="gudang_perusahaan.php">GUDANG</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="logout.php">LOGOUT</a>
				</li>
			</ul>
		</div>	
	</div>
		
</nav>
<div class="container bg-light rounded" style="margin-top: 10px">
	
</div>
</body>
</html>