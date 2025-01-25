<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SDIT Mutiara Islam Beranda">
    <meta name="author" content="SDIT Mutiara Islam">
    <link rel="shortcut icon" href="img/logo.jpeg" type="image/x-icon">
    <title>Beranda</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="vendor/css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        /* Tambahkan gaya tambahan di sini */
        body {
            background-color: #f8f9fc; /* Ganti warna latar belakang */
            font-family: 'Nunito', sans-serif; /* Ganti jenis font */
        }
        .sidebar-brand-text {
            color: #ffffff; /* Ganti warna teks pada sidebar */
        }
        .nav-link {
            color: #ffffff; /* Ganti warna teks menu */
        }
        .nav-link:hover {
            background-color: #343a40; /* Efek hover pada menu */
        }
        .topbar {
            background-color: #ffffff; /* Ganti warna topbar */
        }
        .text-gray-800 {
            color: #343a40; /* Ganti warna teks utama */
        }
        .card {
            border-radius: 10px; /* Tambahkan sudut lengkung pada kartu */
            transition: all 0.3s ease; /* Animasi transisi */
        }
        .card:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* Efek bayangan saat hover */
            transform: translateY(-5px); /* Animasi mengangkat sedikit kartu saat hover */
        }
    </style>
</head>
<body id="page-top">

    <?php
    session_start();
    if (!isset($_SESSION['email'])) {
        header("Location: login.html");
        exit;
    }
    ?>

    <!-- Page Wrapper -->
    <div id="wrapper">
        
        <!-- Sidebar -->
        <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="beranda.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-school"></i>
                </div>
                <div class="sidebar-brand-text mx-2">SDIT Mutiara Islam</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Looping Menu-->
            <li class="nav-item active">
                <a class="nav-link pb-0" href="beranda.php">
                    <i class="fa fa-fw fa-home"></i>
                    <span>Beranda</span>
                </a>
                <a class="nav-link pb-0" href="pendaftaran.php">
                    <i class="fa fa-fw fa-address-card"></i>
                    <span>Pendaftaran</span>
                </a>
                <a class="nav-link pb-0" href="persyaratan.php">
                    <i class="fa fa-fw fa-list"></i>
                    <span>Persyaratan</span>
                </a>
                <a class="nav-link pb-0" href="pembayaran.php">
                    <i class="fa fa-fw fa-shopping-cart"></i>
                    <span>Pembayaran</span>
                </a>
                <a class="nav-link pb-0" href="pengumuman.php">
                    <i class="fa fa-fw fa-info"></i>
                    <span>Pengumuman</span>
                </a>
            </li>
            <br>
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
                <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-white">Beranda</h1>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-white small">Hai, <?php echo $_SESSION['nama']; ?></span>
                                <img class="img-profile rounded-circle" src="default.jpg" alt="User Image">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="login.html" data-toggle="modal" data-target="#logoutModal">
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
                    <!-- row ux-->
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2 bg-success">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Pendaftaran</div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="pendaftaran.php"><i class="fas fa-address-card fa-3x text-warning"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2 bg-success">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Persyaratan</div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="persyaratan.php"><i class="fas fa-list fa-3x text-primary"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2 bg-success">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Pembayaran</div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="pembayaran.php"><i class="fas fa-shopping-cart fa-3x text-danger"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2 bg-success">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Pengumuman</div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="pengumuman.php"><i class="fas fa-info fa-3x text-dark"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Divider -->
                    <hr class="sidebar-divider">
                    <!-- Beranda Awal -->
                    <div class="container text-center">
                        <div class="card shadow h-100 py-2 bg-success">
                            <div class="card-body">
                                <div class="row align-items-start">
                                    <div class="col h1 mb-0 font-weight-bold text-white">
                                        <h1>SDIT MUTIARA ISLAM</h1>
                                        <br>
                                        <img class="mb-4" src="logo.jpeg" alt="SDIT Mutiara Islam Logo" width="250" height="250">
                                        <h1>SELAMAT DATANG</h1>
                                        <h1>DI SEKOLAH DASAR ISLAM TERPADU</h1>
                                        <h1>MUTIARA ISLAM</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Divider -->
                    <hr class="sidebar-divider">
                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; SDIT Mutiara Islam</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->
                </div>
                <!-- End of Content Wrapper -->
            </div>
            <!-- End of Page Wrapper -->
        </div>

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Yakin mau keluar?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Pilih "Logout" di bawah jika kamu yakin sudah selesai.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- Custom scripts for all pages-->
        <script src="vendor/js/sb-admin-2.min.js"></script>
        <!-- Page level plugins -->
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Page level custom scripts -->
        <script>
            $(document).ready(function() {
                $("#table-datatable").dataTable();
            });

            $('.custom-file-input').on('change', function() {
                let fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').addClass("selected").html(fileName);
            });

            $('.form-check-input').on('click', function() {
                const menuId = $(this).data('menu');
                const roleId = $(this).data('role');

                $.ajax({
                    url: "<?= base_url('admin/changeaccess'); ?>",
                    type: 'post',
                    data: {
                        menuId: menuId,
                        roleId: roleId
                    },
                    success: function() {
                        document.location.href = "<?= base_url('admin/akses-role/'); ?>" + roleId;
                    }
                });
            });

            $('.alert-message').alert().delay(3500).slideUp('slow');
        </script>
    </body>
</html>
