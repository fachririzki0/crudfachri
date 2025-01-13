<?php
$proses=$_GET['proses'];
include "../koneksi.php";
// session_start();
// include "../library/lib_login.php";
// if(cek_login()){
//    header("location:login.php");

if($proses=='insert'){
   $namaadmin = $_POST['nama'];
   $username  = $_POST['username'];
   $password  = md5($_POST['password']);
   $level     = $_POST['level'];
   $alamat    = $_POST['alamat'];
   $foto       = $_FILES['foto']['name'];
   $file_tmp   = $_FILES['foto']['tmp_name'];
move_uploaded_file($file_tmp, '../foto/fotouser/' . $foto);


   mysqli_query($koneksi,"INSERT INTO admin SET namaadmin='$namaadmin', password='$password',
   username='$username',password='$password',level='$level', foto='$foto'");
}else if($proses=='update'){
    $namaadmin=$_POST['namaadmin'];
    $username=$_POST['username'];
    $level=$_POST['level'];
    $id=$_POST['idadmin'];

    mysqli_query($koneksi,"UPDATE admin SET namaadmin='$namaadmin',
    username='$username',level='$level'WHERE idadmin='$id'");
}else if($proses=='hapus'){
   $idadmin=$_GET['idadmin'];
   
   mysqli_query($koneksi,"DELETE FROM admin WHERE idadmin='$idadmin'");
}

 header("location:../index.php?halaman=admin");
// }else{
//    header ("location:../login.php");
// }