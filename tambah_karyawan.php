<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <?php 
  include "header.php";
 ?>

    <center><h1>Tambah Data Karyawan</h1></center>
    <form action="proses_tambah_karyawan.php" method="post" style="padding: 25px; background-color: white; color: black;font-size: 15px;">
      Nama :
      <input type="text" name="nama" value="" class="form-control">
      Tanggal Lahir :
      <input type="date" name="tanggal_lahir" value="" class="form-control"><br>
      Alamat :
      <textarea name="alamat" class="form-control" rows="4"></textarea>
      Jenis Kelamin :
      <select name="jenis_kelamin" class="form-control">
        <option></option>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
      </select>
      Username :
      <input type="text" name="username" value="" class="form-control">
      Password :
      <input type="password" name="password" class="form-control">
      Jabatan :
      <select name="id_jabatan" class="form-control">
            <option></option>
            <?php
            include "koneksi.php";
            $qry_karyawan = mysqli_query($conn, "select * from jabatan");
            while($data_karyawan=mysqli_fetch_array($qry_karyawan)){
                echo '<option value="'.$data_karyawan['id_jabatan'].'">'.$data_karyawan['nama_jabatan'].'
                </option>';
                }
                ?>
      </select>

      <input type="submit" name="simpan" value="Tambah Data" class="btn btn-primary">
    </form>
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>