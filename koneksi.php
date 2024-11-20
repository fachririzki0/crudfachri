<?php
$koneksi=mysqli_connect("localhost","root","","belajarcrud");

if(mysqli_connect()){
    echo"Koneksi Gagal:".mysqli_connect_error();
}else{
    echo"Koneksi Berhasil";
}