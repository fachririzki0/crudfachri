<?php
include "koneksi.php";
$id=$_GET['idbarang'];

$sql = mysqli_query($koneksi, "SELECT * FROM barang WHERE idbarang='$id'");
$data = mysqli_fetch_array($sql);

?>
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Edit Data Admin</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="db/db_barang.php?proses=update" method="POST">
    <input type="hidden" value="<?= $data['idbarang'] ?>" name="idbarang"id="idbarang">
    <div class="card-body">
      <div class="form-group">
        <label for="namabarang">namabarang</label>
        <input type="text" class="form-control" id="namabarang"
          name="namabarang" placeholder="namabarang anda" value="<?= $data['namabarang'] ?>" required>
      </div>
      <div class="form-group">
        <label for="harga">harga</label>
        <input type="text" class="form-control" id="harga"
          name="harga" placeholder="harga anda" value="<?= $data['harga'] ?> " required>
      </div>
      <div class="form-group">
        <label>Select</label>
        <select class="form-control" id="level"  name="level" value="<?= $data['level'] ?> ">
          <option value="admin" <?php if ($data['level'] == 'admin') echo
                                "selected"; ?>>admin</option>
          <option value="user" <?php if ($data['level'] == 'user') echo
                                "selected"; ?>>user</option>
        </select>
      </div>

    </div>

    <!-- /.card-body -->

    <div class="card-footer">
      <button type="Submit" class="btn btn-primary float-right ml-3"><i class="fa fa-save"></i>
        pan</button>
      <button type="Reset" class="btn btn-warning float-right ml-3"><i class="fa fa-retweet"></i>
        reset</button>
    </div>
  </form>
</div>