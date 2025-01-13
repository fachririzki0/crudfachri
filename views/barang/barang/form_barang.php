<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Tambah admin</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="db/db_barang.php?proses=insert" method="POST">
    <div class="card-body">
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="namabarang" name="namabarang" placeholder="Nama Anda" required>
      </div>
      <div class="form-group">
        <label for="harga">harga</label>
        <input type="text" class="form-control" id="harga" name="harga" placeholder="harga Anda" required>
      </div>
      <div class="form-group">
        <label for="stok">stok</label>
        <input type="stok" class="form-control" id="stok" name="stok" placeholder="stok " required>
      </div>
      <div class="form-group">
        <label>Select</label>
        <select class="form-control" name="level">
          <option value="admin">Admin</option>
          <option value="user">User</option>
        </select>
        </div>
        <div class="form-group">
        <label for="exampleInputfile1">Upload foto</label>
        <input type="file" nama="foto" id="exampleInputfile" class="form-control" placeholder="foto">
      </div>


    </div>
    <!-- /.card-body -->
        <div class="card-footer">
          <button type="simpan" class="btn btn-primary float-right ml-3"><i class="fa fa-retweet"></i>
            Simpan</button>
          <button type="reset" class="btn btn-warning float-right"><i class="fa fa-save"></i>
            Reset</button>
        </div>
    </div>
  </form>
</div>