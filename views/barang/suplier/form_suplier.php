<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Tambah suplier</h3>
  </div>

  <!-- /.card-header -->
  <!-- form start -->
  <form action="db/db_suplier.php?proses=insert" method="POST">
    <div class="card-body">
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="namasuplier" name="namasuplier" placeholder="Nama Anda" required>
      </div>
      <div class="form-group">
        <label for="alamat">alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat Anda"
          required>
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
</div>