<?php
include "koneksi.php";
$id=$_GET['idkategori'];

$sql = mysqli_query($koneksi, "SELECT * FROM kategori WHERE idkategori='$id'");
$data = mysqli_fetch_array($sql);

?>
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Edit Data kategori</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="db/db_kategori.php?proses=update" method="POST">
    <input type="hidden" value="<?= $data['idkategori'] ?>" name="idkategori"id="idkategori">
    <div class="card-body">
      <div class="form-group">
        <label for="nama">nama</label>
        <input type="text" class="form-control" id="namakategori"
          name="namakategori" placeholder="nama anda" value="<?= $data['namakategori'] ?>" required>
      </div>
      <div class="form-group">
        <label for="username">username</label>
        <input type="text" class="form-control" id="username"
          name="username" placeholder="username anda" value="<?= $data['username'] ?> " required>
      </div>
      <div class="form-group">
        <label>Select</label>
        <select class="form-control" id="level"  name="level" value="<?= $data['level'] ?> ">
          <option value="kategori" <?php if ($data['level'] == 'kategori') echo
                                "selected"; ?>>kategori</option>
          <option value="user" <?php if ($data['level'] == 'user') echo
                                "selected"; ?>>user</option>
        </select>
      </div>

    </div>

    <!-- /.card-body -->

    <div class="card-footer">
      <button type="Submit" class="btn btn-primary float-right ml-3"><i class="fa fa-save"></i>
        simpan</button>
      <button type="Reset" class="btn btn-warning float-right ml-3"><i class="fa fa-retweet"></i>
        reset</button>
    </div>
  </form>
</div>