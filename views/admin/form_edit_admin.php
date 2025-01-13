<?php
include "koneksi.php";
$id=$_GET['idadmin'];

$sql = mysqli_query($koneksi, "SELECT * FROM admin WHERE idadmin='$id'");
$data = mysqli_fetch_array($sql);

?>
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Edit Data Admin</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="db/db_admin.php?proses=update" method="POST">
    <input type="hidden" value="<?= $data['idadmin'] ?>" name="idadmin"id="idadmin">
    <div class="card-body">
      <div class="form-group">
        <label for="nama">nama</label>
        <input type="text" class="form-control" id="namaadmin"
          name="namaadmin" placeholder="nama anda" value="<?= $data['namaadmin'] ?>" required>
      </div>
      <div class="form-group">
        <label for="username">username</label>
        <input type="text" class="form-control" id="username"
          name="username" placeholder="username anda" value="<?= $data['username'] ?> " required>
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
        simpan</button>
      <button type="Reset" class="btn btn-warning float-right ml-3"><i class="fa fa-retweet"></i>
        reset</button>
    </div>
  </form>
</div>