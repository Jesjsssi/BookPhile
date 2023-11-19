<!--  -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Custom fonts for this template-->
    <link href="assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/admin/vendor/fontawesome-free/css/all.min.css" ?>">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() . "assets/admin/css/sb-admin-2.min.css" ?>" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">WELCOME !</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url() . "index.php/Admin/dashboard" ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard Admin</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="<?php echo base_url() . "index.php/Admin/dashboard" ?>">
                    <i class="fas fa-fw fa-user-alt"></i>
                    <span>Buku</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo base_url() . "index.php/Admin/logout" ?>" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->







                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Button trigger modal -->

                    <!-- Modal -->


                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-2 text-gray-800">Edit Buku</h1>
                    </div>
                    <!-- Page Heading -->
                    <?php
                    if (isset($_GET['alert'])) {
                        if ($_GET['alert'] == 'gagal') {
                    ?>
                            <div class="alert alert-warning alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
                                Ekstensi Tidak Diperbolehkan
                            </div>
                        <?php
                        } elseif ($_GET['alert'] == "berhasil") {
                        ?>
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-check"></i> Success</h4>
                                Berhasil Disimpan
                            </div>
                        <?php
                        } elseif ($_GET['alert'] == "berhasilupdate") {
                        ?>
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-check"></i> Success</h4>
                                Berhasil Update
                            </div>
                        <?php
                        } elseif ($_GET['alert'] == "berhasilhapus") {
                        ?>
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-check"></i> Success</h4>
                                Berhasil Hapus
                            </div>
                    <?php
                        }
                    }
                    ?>





                    <form action="<?php echo base_url() . "index.php/Admin/editBuku/" . $barang[0]['id_barang'] ?>" method="post" enctype="multipart/form-data" >
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" name="nama" required="required" class="form-control "  placeholder="Masukkan Nama Buku .." value="<?= $barang[0]['nama_buku']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Penulis</label>
                            <input type="text" name="penulis" required="required" class="form-control "  placeholder="Masukkan Alamat ..." value="<?= $barang[0]['penulis']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Sinopsis</label>
                            <input type="textarea" name="sinopsis" required="required"  class="form-control" placeholder="Sinopsis .." value="<?php echo $barang[0]['sinopsis'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <select name="kategori" value="<?= $barang[0]['kategori']; ?>" id="">
                                <option value="Fantasi">Fantasi</option>
                                <option value="Non-Fiksi">Non-Fiksi</option>
                                <option value="Fiksi Ilmiah">Fiksi Ilmiah</option>
                                <option value="Roman">Roman</option>
                                <option value="Humor">Humor</option>
                                <option value="Fiksi Remaja">Fiksi Remaja</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Sampul</label>
                            <input type="file" name="sampul"  class="form-control" placeholder="Sampul">
                        </div>


                        <div >
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>



                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() . "assets/admin/vendor/jquery/jquery.min.js" ?>"></script>
    <script src="<?php echo base_url() . "assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js" ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() . "assets/admin/vendor/jquery-easing/jquery.easing.min.js" ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() . "assets/admin/js/sb-admin-2.min.js" ?>"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url() . "assets/admin/vendor/chart.js/Chart.min.js" ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url() . "assets/admin/js/demo/chart-area-demo.js" ?>"></script>
    <script src="<?php echo base_url() . "assets/admin/js/demo/chart-pie-demo.js" ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>

</html>