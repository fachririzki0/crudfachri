<!-- Default box -->
<div class="card">
<button type="button" class="btn btn-block btn-danger"><div class="card-title"><h4>Halaman Tampil kategori</h4></button>
        <div class="card-header">
          <h3 class="card-title">kategori</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            
          </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col mb-3 ">
                    <a href="index.php?halaman=tambah_kategori" class="btn btn-danger float-right">
                      <i class="fa fa-user-plus"></i>Tambah kategori</a>
                </div>
            </div>
          <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    include "koneksi.php";
                    $no=1;
                        $sql=mysqli_query($koneksi,"SELECT * FROM kategori");
                        while($data= mysqli_fetch_array($sql)){
                            echo"
                              <tr>
                              <td>$no</td>
                              <td>$data[namakategori]</td>

                              <td><div class='btn-group'>
                              <a href='index.php?halaman=edit_kategori&idkategori=$data[idkategori]' class='btn btn-sm btn-success'
                              title='ubah data'><i class='fa fa-pencil-alt'>
                              </i></a>
                              <a href='db/db_kategori.php?proses=hapus&idkategori=$data[idkategori]' class='btn btn-sm btn-danger'
                              title='hapus data'><i class='fa fa-trash-alt'></i></a>
                              </div></td>
                            </tr>";
                         $no++;
                        }
                    ?>                  
                  
                    
                   
                </tbody>    
        </div>
        <!-- /.card-body -->
        <!--<div class="card-footer">
          Footer
        </div>-->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->