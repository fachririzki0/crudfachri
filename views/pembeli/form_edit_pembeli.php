<?php
include "koneksi.php";
$id = $_GET['idpembeli'];

$sql = mysqli_query($koneksi, "SELECT * FROM pembeli WHERE idpembeli='$id'");
$data = mysqli_fetch_array($sql);

?>
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Edit Data Pembeli</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="db/db_pembeli.php?proses=update" method="POST">
    <input type="hidden" value="<?= $data['idpembeli'] ?>" name="idpembeli" idpembeli="idpembeli">
    <div class="card-body">
      <div class="form-group">
        <label for="namapembeli">Nama</label>
        <input type="text" class="form-control" id="namapembeli" name="namapembeli" 
        placeholder="Nama anda" value="<?= $data['namapembeli'] ?>" required>
      </div>
      <div class="form-group">
        <label for="nama">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat"
         placeholder="alamat anda" value="<?= $data['alamat'] ?> " required>
      </div>
      <div class="form-group">
      <div class="card-footer">
      <button type="Submit" class="btn btn-primary float-right ml-3"><i class="fa fa-save"></i>
        Simpan</button>
      <button type="Reset" class="btn btn-warning float-right ml-3"><i class="fa fa-retweet"></i>
        reset</button>
      </div>
    </div>
   </div>
  </form>
 </div>