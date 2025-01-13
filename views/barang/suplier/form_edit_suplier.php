<?php
include "koneksi.php";
$id = $_GET['idsuplier'];

$sql = mysqli_query($koneksi, "SELECT * FROM suplier WHERE idsuplier='$id'");
$data = mysqli_fetch_array($sql);

?>
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Edit Data Suplier</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="db/db_suplier.php?proses=update" method="POST">
    <input type="hidden" value="<?= $data['idsuplier'] ?>" name="idsuplier" id="idsuplier">
    <div class="card-body">
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="namasuplier" name="namasuplier"
          placeholder="Nama Anda" value="<?= $data['namasuplier'] ?>" required>
      </div>
      <div class="form-group">
        <label for="alamat">alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat"
          placeholder="alamat Anda" value="<?= $data['alamat'] ?>" required>
      </div>
      
    </div>
    <div class="card-footer">
      <button type="simpan" class="btn btn-primary float-right ml-3"><i class="fa fa-retweet"></i>
        Simpan</button>
      <button type="reset" class="btn btn-warning float-right"><i class="fa fa-save"></i>
        Reset</button>
    </div>
  </form>
</div>