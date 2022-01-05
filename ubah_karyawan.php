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
      <?php
      include "koneksi.php";
      $qry_get_karyawan = mysqli_query($conn, "select * from karyawan where id_karyawan = '".$_GET['id_karyawan']."'");
      $dt_karyawan = mysqli_fetch_array($qry_get_karyawan);
      ?>
    <center><h1>Ubah Data</h1></center>
    <form action="proses_ubah_karyawan.php" method="post" style="padding: 25px; background-color: white; color: black;font-size: 15px;">
        <input type="hidden" name="id_karyawan" value="<?=$dt_karyawan['id_karyawan']?>">
        Nama Karyawan :
        <input type="text" name="nama" value="<?=$dt_karyawan['nama']?>" class="form-control">
        Tanggal Lahir :
        <input type="date" name="tanggal_lahir" value="<?=$dt_karyawan['tanggal_lahir']?>" class="form-control">
        Alamat :
        <textarea name="alamat" class="form-control" rows="4"><?=$dt_karyawan['alamat']?></textarea>
        Jenis Kelamin :
        <?php
        $arr_jk=array('L'=>'Laki-laki','P'=>'Perempuan');
        ?>
        <select name="jenis_kelamin" class="form-control">
            <option></option>
            <?php foreach ($arr_jk as $key_jk => $val_jk) :
                if ($key_jk==$dt_karyawan['jenis_kelamin']){
                    $selek="selected";
            } else {
                $selek="";
            }
            ?>
            <option value="<?=$key_gender?>" <?=$selek?>><?=$val_jk?></option>
            <?php endforeach; ?>
        </select>
        Jabatan :
        <select name="id_jabatan" class="form-control">
            <option></option>
            <?php
            include "koneksi.php";
            $qry_jabatan = mysqli_query($conn, "select * from jabatan");
            while($data_jabatan=mysqli_fetch_array($qry_jabatan)){
                if($data_jabatan['id_jabatan']==$dt_karyawan['id_jabatan']){
                    $selek="selected";
                }
                else {
                    $selek="";
                }
            echo '<option value="'.$data_jabatan['id_jabatan'].'" '.$selek.'>'.$data_jabatan['nama_jabatan'].'</option>';
            }
            ?>
        </select>
        Username : 
        <input type="text" name="username" value="<?=$dt_karyawan['username']?>" class="form-control">
        Password :
        <input type="password" name="password" value="" class="form-control">
        <input type="submit" name="simpan" value="Ubah Data Karyawan" class="btn btn-primary">
    
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
