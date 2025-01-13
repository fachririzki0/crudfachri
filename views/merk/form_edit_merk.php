<?php
include "koneksi.php";
$id = $_GET['idmerk'];

$sql = mysqli_query($koneksi, "SELECT * FROM merk WHERE idmerk='$id'");
$data = mysqli_fetch_array($sql);

?>
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Edit Data merk</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="db/db_merk.php?proses=update" method="POST">
    <input type="hidden" value="<?= $data['idmerk'] ?>" name="idmerk" idmerk="idmerk">
    <div class="card-body">
      <div class="form-group">
        <label for="namamerk">Nama</label>
        <input type="text" class="form-control" id="namamerk" name="namamerk" 
        placeholder="Nama anda" value="<?= $data['namamerk'] ?>" required>
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