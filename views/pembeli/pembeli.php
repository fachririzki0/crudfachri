<!-- Default box -->
<button type="button" class="btn btn-block btn-primary btn-flat"><div class="card-title"><h4>Halaman Pembeli </h4></div></button>
   <div class="card">
     
   
   <div class="card-header">
       <h3 class="card-title">pembeli</h3>
     
       <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
     
      </div>
     <div class="card-body">
       <div class="row">
         <div class="col mb-3">
           <a href="index.php?halaman=tambah_pembeli" class="btn btn-primary float-right">
             <i class="fa fa-user-plus"></i>Tambah Pembeli</a >
         </div>
       </div>
    <table id="example1" class="table table-bordered table-striped">
         <thead>
           <tr>
             <th>No</th>
             <th>Nama</th>
             <th>alamat</th>
             <th>Aksi</th>
             
           </tr>
         </thead>
         <bod>
           <?php
            include "koneksi.php";
            $no=1;
            $sql = mysqli_query($koneksi, "SELECT * FROM pembeli");
            while ($data = mysqli_fetch_array($sql)) {
              echo"
                        <tr>
                        <td>$no</td>
                        <td>$data[namapembeli]</td>
                        <td>$data[alamat]</td>
                        
                        <td>
                        <div class='btn-group'>
                        <a href='index.php?halaman=edit_pembeli&idpembeli=$data[idpembeli]'class='btn btn-sm btn-success' 
                        title='ubah data'><i class='fa fa-pencil-alt'></i></a>
                        <a href='db/db_pembeli.php?proses=hapus&idpembeli=$data[idpembeli]'class='btn btn-sm btn-danger' 
                         title='hapus data'><i class='fa fa-trash-alt'></i></a>
                       </div>
                       </td>
                  </tr>";
              $no++;
            }

            ?>
   
          </body>
   <!-- /.card-body -->
   <!-- <div class="card-footer">
          Footer
        </div> -->
   <!-- /.card-footer-->
          </div>
   <!-- /.card -->