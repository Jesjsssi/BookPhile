<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>" />
  </head>
  <body>

  <!-- CAROUSEL -->
  <!-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/news.png"  class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    <p><a href="#kategori" class="btn btn-success mt-3">Pinjam Sekarang</a></p>
                </div>    
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="..." class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
                </div>
                </div>
            </div>
  </div> -->



  <!-- KATEGORI -->
  <!-- <section id="kategori" class="kategori-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2></h2>
                </div>
                <div class="kategori-img">
                <div class="card" style="width: 16rem;">
                            
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <small></small>
                                <br>
                                <span class="badge rounded-pill bg-success"></span>
                                <br>
                                <br>
                                
                            </div>
                        </div>
                </div>
            </div>
        </div>
  </div> -->



  <!-- PRODUK -->
  <section id="produk" class="produk-section-padding">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2><?= $title; ?></h2>
                </div>

                <div class="container-fluid">
                    <div class="row text-center mt-3">
                        <?php foreach ($buku as $brg) : ?>
                            <div class="card m-3" style="max-width: 25rem;">
                            <div class="row g-0">
                                <div class="col-md-6">
                                <img src="<?php echo base_url().'/img/'.$brg->gambar ?>" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-4">
                                    <div class="card-body">
                                        <h5 class="card-title mb-1"><?php echo $brg->nama_buku ?></h5>
                                        <small><?php echo $brg->penulis ?></small><br>
                                        <?php echo anchor('Beranda/tambah_ke_keranjang/'.$brg->id_barang,'<div class="btn btn-sm btn-success">Pesan</div>') ?>
                                    </div>
                                </div>
                            </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
  </div>

  



  <!-- TENTANG -->
  <section id="tentang" class="tentang-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2>Tentang</h2>
                </div>
            </div>
        </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  </body>
</body>
</html>

<!--   
  <section class="content">
            <div class="row mt-3 text-center">
                    <div class="col-md-3">
                    
                        <div class="card" style="width: 16rem;">
                            
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <small></small>
                                <br>
                                <span class="badge rounded-pill bg-success"></span>
                                <br>
                                <br>
                                
                            </div>
                        </div>
                    </div>
                
            </div>
    </section> -->
    