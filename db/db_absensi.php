<?php
$proses=$_GET['proses'];
include "../koneksi.php";
// session_start();
// include "../library/lib_login.php";
// if(cek_login()){
//    header("location:login.php");

if($proses=='insert'){
   $namakategori=$_POST['namakategori'];

   mysqli_query($koneksi,"INSERT INTO kategori SET namakategori='$namakategori'
 ");
}else if($proses=='update'){
    $nama=$_POST['namakategori'];
    $id=$_POST['idkategori'];
    

    mysqli_query($koneksi, "UPDATE kategori SET namakategori='$namakategori', alamat='$alamat' WHERE idkategori='$idkategori'");
   } else if ($proses == 'hapus') {
      $id = $_GET['idkategori'];
      
      mysqli_query($koneksi, "DELETE FROM kategori WHERE idkategori='$idkategori'");
   }

   header("location:../index.php?halaman=kategori");
// }else{
// header ("location:../login.php");
// }

