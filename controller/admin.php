<?php

include "../model/admin.php";
$buku=new Buku();
$aksi=$_GET['aksi'];

if($aksi=='tambah'){
$buku->tambahData($_POST['judul'],$_POST['pengarang'],$_POST['penerbit']);

}elseif($aksi=='hapus'){
$buku->hapusData($_GET['id']);
}elseif($aksi=='ubah'){
    $buku->ubahData($_POST['id'],$_POST['judul'],$_POST['pengarang'],
    $_POST['penerbit']);

}
header("location:index.php");