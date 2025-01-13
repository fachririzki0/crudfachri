<?php
$proses= $_GET{'proses'};
include "../koneksi.php";
session_start();
// include "../library/lib_login.php";

if ($proses =='insert'){
    $nama = $_POST['namabarang'];
    $harga = $_POST['harga'];
    $stok = md5($_POST['stok']);
    

    mysqli_query($koneksi,"INSERT INTO barang SET nama='$nama',
   harga='$harga',stok='$stok'");
}else if($proses=='update'){
    $nama=$_POST['nama'];
    $harga=$_POST['harga'];
    $id=$_POST['id'];
 
    mysqli_query($koneksi,"UPDATE barang SET nama='$nama', harga='$harga',level='$level' WHERE id='$id'");
}else if($proses=='hapus'){
   $id=$_GET['idbarang'];
   mysqli_query($koneksi,"DELETE FROM barang WHERE id='$id'");
}

header("location:../index.php?halaman=barang");