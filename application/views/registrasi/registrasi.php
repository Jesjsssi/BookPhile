<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register</title>
        <link href="<?php echo base_url()."assets/css/styles.css" ?>" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
    <section class="vh-50" style="background-color: #ffffff;">
  <div class="container py-5 h-20">
    <div class="row d-flex justify-content-center align-items-center h-50">
      <div class="col col-xl-9">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-lg-5">
            <!-- < col-md-6 col-lg-5 d-none d-md-block > -->
            <img src="<?= base_url() ?>/img/Group30.png"  alt="..." class="img-fluid" style="border-radius: 1rem 0 0 1rem" style="height:100px">
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
              <form action="<?php echo base_url()."index.php/Beranda/aksi_daftar";?>" method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="username" type="text" placeholder="Masukkan Username" />
                                                <label>Username</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Masukkan Password" />
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Konfirmasi Password" />
                                                        <label for="inputPasswordConfirm">Konfirmasi Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="email" type="text" placeholder="Masukkan E-mail" />
                                                <label>E-mail</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="nohp" type="text" placeholder="Masukkan Nomor Telepon" />
                                                <label>Nomor Telepon</label>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><input type="submit" class="btn text-white btn-block" style="background-color: #24199D;"><br> <input type="reset" class="btn text-white btn-block" style="background-color: #24199D;"></div>
                                            </div><br><br>
                                            <div class="card-footer text-center py-3">
                                        <div class="small"><p>Sudah punya akun?<a href="<?php echo base_url()."index.php/Beranda/menu";?>">Masuk</a></p></div>
                                        <div class="small"><p><a href="<?php echo base_url()."index.php/Admin/index";?>">Masuk sebagai admin</a></p></div>
                                        
                                    </div>
                                        </form>
                                    </div>
                                    

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> 
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Bookphile 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url()."assets/js/scripts.js" ?>"></script>
    </body>
</html>