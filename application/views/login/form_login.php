<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <!-- <link href="css/styles.css" rel="stylesheet" /> -->
        <link href="<?php echo base_url()."assets/css/styles.css" ?>" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <!-- <body>



    <section class="vh-100" style="background-color: #ffffff;">
  <div class="container py-5 h-30">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-9">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-lg-5">
            < col-md-6 col-lg-5 d-none d-md-block -->
            <!-- <img src="<?= base_url() ?>/img/Group 29.png"  alt="..." class="img-fluid" style="border-radius: 1rem 0 0 1rem" >
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="<?php echo base_url()."index.php/Beranda/aksi_login";?>" method="POST">
                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Masuk</h5>

                  <div class="form-outline mb-4">
                    <input name="username" class="form-control"  type="text" placeholder="Enter Username"  />
                    <label class="form-label" for="enterUsername">Username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input name="password" class="form-control" id="inputPassword" type="password" placeholder="Password" />
                    <label class="form-label" for="inputPassword">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="text-white btn btn-dark btn-lg btn-block" style="background-color: #24199D" type="button" value="Login">Masuk</button>
                  </div>

                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!"
                      style="color: #393f81;">Register here</a></p>
                   <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a> 
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>  -->
<?php 
                                if(isset($status_login)){
                                    ?>
                            <div class="alert alert-danger text-center my-5" role="alert">
                                Username dan Kata sandi tidak cocok ! ! !
                            </div>

                                    <?php
                                }
                            ?>
<section class="vh-100" style="background-color: #ffffff;">
  <div class="container py-5 h-30">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-9">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-lg-5">
            <!-- < col-md-6 col-lg-5 d-none d-md-block > -->
            <img src="<?= base_url() ?>/img/Group 29.png"  alt="..." class="img-fluid" style="border-radius: 1rem 0 0 1rem" >
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
              <form action="<?php echo base_url()."index.php/Beranda/aksi_login";?>" method="POST">
              <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Masuk</h5>
                                            <div class="form-floating mb-3">
                                                <input name="username" class="form-control"  type="text" placeholder="Enter Username"  />
                                                <label>Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input name="password" class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div>
                                                <input type="submit" class="btn text-white" value="Masuk" style="background-color: #24199D;"> <input type="reset" class="btn  text-white" style="background-color: #24199D;">
                                                
                                            </div><br><br>
                                            <p class="mb-5 pb-lg-2" style="color: #393f81;">Belum punya akun? <a href="<?php echo base_url()."index.php/Beranda/daftar";?>"
                      style="color: #393f81;">Daftar</a></p>
                                        </form>

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
