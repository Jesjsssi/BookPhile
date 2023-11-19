<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $judul; ?></title>
  <!-- bootstrap -->
  <!-- link css -->
  <link rel="stylesheet" href="<?= base_url('assets/css/profil.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <script src='<?= base_url() ?>assets/bootstrap-star-rating-master/js/star-rating.min.js' type='text/javascript'></script>
  <link href='<?= base_url() ?>assets/bootstrap-star-rating-master/css/star-rating.min.css' type='text/css' rel='stylesheet'>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Font awesome -->
  <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/solid.js" integrity="sha384-/BxOvRagtVDn9dJ+JGCtcofNXgQO/CCCVKdMfL115s3gOgQxWaX/tSq5V8dRgsbc" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/fontawesome.js" integrity="sha384-dPBGbj4Uoy1OOpM4+aRGfAOc0W37JkROT+3uynUgTHZCHZNMHfGXsmmvYTffZjYO" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

  <!-- Bootstrap Star Rating CSS -->


  <!-- icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="<?= base_url() ?>/img/textLogo.png" width="80px" height="40px" class="d-block w-100" alt="..."></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() . "index.php/Beranda/"; ?>">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() . "index.php/Beranda/#kategori"; ?>">Kategori</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="#produk" >Produk</a>
        </li>

          <?php
          if (isset($_SESSION['status'])) {
          ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() . "index.php/Beranda/riwayat"; ?>">Riwayat Peminjaman</a>
            </li>
          <?php
          } else {
          ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() . "index.php/Beranda/daftar"; ?>">Daftar</a>
            </li>
          <?php
          }
          ?>
        </ul>



        <!-- search -->
        <div class="search-box">
          <form action="<?php echo site_url('Beranda/search') ?>" class="d-flex" method="post">
            <input class="form-control me-2" name="keyword" placeholder="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
        <!-- <form action="" method="get" style="flex-direction: row; align-items:center">
          <div>
            <input type="search" name="keyword" style="width: 360px;" placeholder="Keyword.."  required maxlength="32" />
          </div>

          <div>
            <input type="submit" class="button button-primary" value="Cari">
          </div>
        </form> -->



        <!-- keranjang -->

        <?php
        if (isset($_SESSION['status'])) {

        ?>
          
              <a class="nav-link" href="<?php echo base_url() . "index.php/Beranda/keranjang"; ?>"><i class="bi bi-cart3"></i></a>

            
        <?php
        }
        ?>




        <!-- Topbar Navbar -->
        <!-- <ul class="navbar-nav ml-auto"> -->

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <!-- <li class="nav-item dropdown no-arrow d-sm-none">
    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-search fa-fw"></i>
    </a> -->


        <!-- Nav Item - User Information -->
        <!-- <li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
        <img class="img-profile rounded-circle"
            src="img/undraw_profile.svg">
    </a> -->
        <!-- Dropdown - User Information -->
        <!-- <!-- <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
        aria-labelledby="userDropdown">
        <a class="dropdown-item" href="#">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Profile
        </a>
        <a class="dropdown-item" href="#">
            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
            Settings
        </a>
        <a class="dropdown-item" href="#">
            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
            Activity Log
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
        </a>
    </div>
</li> -->

        <!-- </ul>

</nav>  -->
        <!-- End of Topbar -->

        <!-- profil -->
        <a class="nav-link"><i class="bi bi-person-circle  user-pic" onClick="toggleMenu()"></i></a>

        <div class="sub-menu-wrap" id="subMenu">
          <div class="sub-menu">
            <div class="user-info">
              <i class="bi bi-person-circle  user-pic"></i>
              <h5></h5>
            </div>
            <hr>
            <a href="#tentang" class="sub-menu-link text-dark" style="font-size:7px;">
              <p>Tentang</p>
              <span>></span>
            </a>

            <?php
            if (isset($_SESSION['status'])) {

            ?>
              <a href="<?php echo base_url() . "index.php/Beranda/Logout"; ?>" class="sub-menu-link text-dark" style="font-size:7px;">
                <p>LOGOUT</p>
                <span>></span>
              </a>
            <?php
            } else {
            ?>


              <a href="<?php echo base_url() . "index.php/Beranda/menu"; ?>" class="sub-menu-link text-dark" style="font-size:7px;">
                <p>Masuk</p>
                <span>></span>
              </a>
              <a href="<?php echo base_url() . "index.php/Beranda/daftar"; ?>" class="sub-menu-link text-dark" style="font-size:7px;">
                <p>Daftar</p>
                <span>></span>
              </a>
            <?php

            } ?>

          </div>
        </div>
      </div>
    </div>
  </nav>



  <!-- javascript -->
  <script>
    let subMenu = document.getElementById("subMenu");

    function toggleMenu() {
      subMenu.classList.toggle("open-menu");
    }
  </script>
  <script src="jquery-3.6.4.min.js"></script>


</body>

</html>