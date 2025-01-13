
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Tambah Merk</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="db/db_merk.php?proses=insert" method="POST">
    <div class="card-body">
      <div class="form-group">
        <label for="namamerk">nama</label>
        <input type="text" class="form-control" id="namamerk" name="namamerk" placeholder="nama Anda" required>
      </div>
      <!-- /.card-body -->
        
        <div class="card-footer">
      <button type="submit" class="btn btn-primary float-right ml-3"><i class="fa fa-save"></i>
        Simpan</button>
      <button type="reset" class="btn btn-warning float-right"><i class="fa fa-retweet"></i>
        Reset</button>
    </div>
  </form>
</div>