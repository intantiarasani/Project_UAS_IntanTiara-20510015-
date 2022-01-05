<?php 
if ($_POST) {
    $id_karyawan=$_POST['id_karyawan'];
    $nama=$_POST['nama'];
    $tanggal_lahir=$_POST['tanggal_lahir'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $id_jabatan=$_POST['id_jabatan'];
    if (empty($nama)) {
        echo "<script>alert('nama tidak boleh kosong');location.href='ubah_karyawan.php';</script>";
    } elseif (empty($username)) {
        echo "<script>alert('username tidak boleh kosong');location.href='ubah_karyawan.php';</script>";
    } else {
        include "koneksi.php";
        if (empty($password)) {
            $update=mysqli_query($conn,"update karyawan set nama='".$nama."', alamat='".$alamat."', username='".$username."', id_jabatan='".$id_jabatan."' where id_karyawan = '".$id_karyawan."' ")or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update data');location.href='tampil_karyawan.php';</script>";    
            } else {
                echo "<script>alert('Gagal update data');location.href='ubah_karyawan.php';</script>"; 
            }
        } else {
            $update=mysqli_query($conn,"update karyawan set nama='".$nama."', alamat='".$alamat."', username='".$username."', password='".$password."'  where id_karyawan = '".$id_karyawan."' ")or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update data');location.href='tampil_karyawan.php';</script>";       
            }   else {
                echo "<script>alert('Gagal update data');location.href='ubah_karyawan.php';</script>";    
            }
        }
    }
    }
?>