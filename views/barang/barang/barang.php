<!-- Default box -->
<div class="card">
<button type="button" class="btn btn-block btn-danger"><div class="card-title"><h4>Halaman Tampil barang</h4></button>
        <div class="card-header">
          <h3 class="card-title">barang</h3>

          <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Unggulan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        .header {
            background-color: #ffffff;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #673ab7;
        }

        .main-content {
            padding: 20px;
        }

        .featured-products {
            text-align: center;
            margin-bottom: 40px;
        }

        .featured-products h2 {
            font-size: 28px;
            color: #333;
        }

        .featured-products p {
            color: #555;
            margin: 10px 0 30px;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .product-card {
            background: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .product-card h3 {
            font-size: 18px;
            margin: 15px 0 10px;
        }

        .price {
            font-size: 16px;
            color: #e91e63;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header class="header">
        <h1 class="logo">SAUDAGAR</h1>
    </header>

    <main class="main-content">
        <section class="featured-products">
            <h2>Produk Unggulan</h2>
            <p>Dapatkan produk-produk terbaik dari Saudagar Shop. Jaminan kualitas terbaik dan desain yang menarik, hanya untuk Anda.</p>
            <div class="product-grid">
                <div class="product-card">
                    <img src="bag.jpg" alt="Waxed Canvas Messenger Bag">
                    <h3>Waxed Canvas Messenger Bag</h3>
                    <p class="price">Rp580,000</p>
                </div>
                <div class="product-card">
                    <img src="shirt1.jpg" alt="Do What You Love">
                    <h3>Do What You Love</h3>
                    <p class="price">Rp320,000</p>
                </div>
                <div class="product-card">
                    <img src="shirt2.jpg" alt="And Then I Woke Up">
                    <h3>And Then I Woke Up</h3>
                    <p class="price">Rp320,000</p>
                </div>
                <div class="product-card">
                    <img src="sweater.jpg" alt="Premium Ampersand Crewneck">
                    <h3>Premium Ampersand Crewneck</h3>
                    <p class="price">Rp540,000</p>
                </div>
            </div>
        </section>
    </main>
</body>
</html>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            
          </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col mb-3 ">
                    <a href="index.php?halaman=tambah_barang" class="btn btn-danger float-right">
                      <i class="fa fa-user-plus"></i>Tambah barang</a>
                </div>
            </div>
          <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Alamat</th>
                    <th>Level</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    include "koneksi.php";
                    $no=1;
                        $sql=mysqli_query($koneksi,"SELECT * FROM barang");
                        while($data= mysqli_fetch_array($sql)){
                            echo"
                              <tr>
                              <td>$no</td>
                              <td>$data[namaadmin]</td>
                              <td>$data[username]</td>
                              <td>$data[alamat]</td>
                              <td>$data[level]</td>
                              <td><div class='btn-group'>
                              <a href='index.php?halaman=edit_barang&idbarang=$data[idbarang]' class='btn btn-sm btn-success'
                              title='ubah data'><i class='fa fa-pencil-alt'>
                              </i></a>
                              <a href='db/db_barang.php?proses=hapus&idbarang=$data[idbarang]' class='btn btn-sm btn-danger'
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