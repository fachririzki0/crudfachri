<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Tambah admin</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="db/db_admin.php?proses=insert" method="POST">
    <div class="card-body">
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="namaadmin" name="namaadmin" placeholder="Nama Anda" required>
      </div>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Username Anda" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password " required>
      </div>
      
      <div class="form-group">
        <label>Select</label>
        <select class="form-control" name="level">
          <option value="admin">Admin</option>
          <option value="user">User</option>
        </select>
        </div>
        
        <div class="card-footer">
          <button type="simpan" class="btn btn-primary float-right ml-3"><i class="fa fa-retweet"></i>
            Simpan</button>
          <button type="reset" class="btn btn-warning float-right"><i class="fa fa-save"></i>
            Reset</button>
        </div>
    </div>
  </form>
</div>