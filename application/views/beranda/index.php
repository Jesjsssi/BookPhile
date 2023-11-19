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
    <style>
        input {
            height: 34px;
            width: 50px;
            text-align: center;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            display: inline-block;
            vertical-align: middle;
        }
    </style>

    <!-- CAROUSEL -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url() ?>/img/news.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <p><a href="#kategori" class="btn btn-success mt-3">Pinjam Sekarang</a></p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
            <img src="<?= base_url() ?>/img/news4.png"  class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
        </div>
    </div>



    <!-- KATEGORI -->
    <section id="kategori" class="kategori-section-padding">
        <div class="container" >
            <div class="row text-center" >
                <div class="section-header text-center pb-5 mt-5">
                    <h2>Kategori</h2>
                </div>
                <div class="col-md-10 mx-5" >
                    <div class="container-fluid mx-5">
                        <div class="row text-center mt-3">
                            <div class="card m-5" style="width: 14rem;">
                                <a style="text-decoration: none; color:black;" href="<?php echo site_url('Kategori/fiksilmiah'); ?>">
                                    <div class="card-body">
                                        <img src="<?php echo base_url() . '/img/Group 24.png' ?>" class="img-fluid rounded-start" alt="...">
                                        <h5 class="card-title">Fiksi Ilmiah</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="card m-5" style="width: 14rem;">
                                <a style="text-decoration: none; color:black;" href="<?php echo site_url('Kategori/fantasi'); ?>">
                                    <div class="card-body">
                                        <img src="<?php echo base_url() . '/img/Group 20.png' ?>" class="img-fluid rounded-start" alt="...">
                                        <h5 class="card-title">Fantasi</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="card m-5" style="width: 14rem;">
                                <a style="text-decoration: none; color:black;" href="<?php echo site_url('Kategori/roman'); ?>">
                                    <div class="card-body">
                                        <img src="<?php echo base_url() . '/img/Group 22.png' ?>" class="img-fluid rounded-start" alt="...">
                                        <h5 class="card-title">Roman</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="card m-5" style="width: 14rem;">
                                <a style="text-decoration: none; color:black;" href="<?php echo site_url('Kategori/nonfiksi'); ?>">
                                    <div class="card-body">
                                        <img src="<?php echo base_url() . '/img/Group 26.png' ?>" class="img-fluid rounded-start" alt="...">
                                        <h5 class="card-title">Non-Fiksi</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="card m-5" style="width: 14rem;">
                                <a style="text-decoration: none; color:black;" href="<?php echo site_url('Kategori/firemaja'); ?>">
                                    <div class="card-body">
                                        <img src="<?php echo base_url() . '/img/Group 21.png' ?>" class="img-fluid rounded-start" alt="...">
                                        <h5 class="card-title">Fiksi Remaja</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="card m-5" style="width: 14rem;">
                                <a style="text-decoration: none; color:black;" href="<?php echo site_url('Kategori/humor'); ?>">
                                    <div class="card-body">
                                        <img src="<?php echo base_url() . '/img/Group 23.png' ?>" class="img-fluid rounded-start" alt="...">
                                        <h5 class="card-title">Humor</h5>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>



    <!-- PRODUK -->
    <section id="produk" class="produk-section-padding">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Produk</h2>
                    </div>

                    <div class="container-fluid">
                        <div class="row text-center">
                            <?php foreach ($barang as $brg) : ?>
                                <div class="card m-3" style="max-width: 25rem;">
                                
                                    <div class="row g-0">
                                       
                                        <div class="col-md-6">
                                            <img src="<?php echo base_url() . '/img/' . $brg->gambar ?>" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-body">
                                                <h5 class="card-title mb-2"><?php echo $brg->nama_buku ?></h5>
                                                <small><?php echo $brg->penulis ?></small><br>
												<span class="fa fa-star checked" style="color: orange;"></span> <?php echo $brg->avg_rating ?>
                                                <div class="d-flex justify-content-center">

                                                    <?php if (isset($_SESSION['status'])) { ?>
                                                        <form action="<?php echo site_url('Beranda/tambah_ke_keranjang/'). $brg->id_barang; ?>" method="POST">
                                                            <input class="input mx-2 my-2" name="qty" type="number" value="1" min="1" max="10" />
                                                            <button class="btn btn-sm btn-success" type="submit">Pesan</button>'
                                                        </form>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <a href="<?php echo base_url() . "index.php/Beranda/detail/" . $brg->id_barang ?>">
                                                <button class="btn btn-sm btn-success" type="submit">detail</details></button>
                                            </a>
                                        </div>
                                        
                                        
                                    </div>
                                
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- TENTANG -->
    <section id="tentang" class="tentang-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Tentang</h2>
                    </div>
                    <div class="section-isi text-center pb-5 m-2"> 
                     <p>Kami selalu berusaha untuk meningkatkan pengalaman pengguna di situs web buku kami. 
                        Kami juga terbuka terhadap umpan balik dari pengguna kami untuk membantu kami mengembangkan 
                        dan menyempurnakan fitur-fitur kami lebih lanjut.Terima kasih telah menggunakan situs web buku kami, 
                        dan kami berharap Anda menikmati eksplorasi dunia buku melalui platform kami!</p>
                </div>
                </div>
            </div>
        </div>
    </section>

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
