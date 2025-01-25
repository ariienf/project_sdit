<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="logo.jpeg" type="image/x-icon">

    <title>Data Pembayaran</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="vendor/datatables/jquery.dataTables.js"></script>
    <script type="text/javascript" src="vendor/datatables/dataTables.bootstrap4.js"></script>
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

    <!-- Page Wrapper -->
    <div id="wrapper">
                
        
<!-- Sidebar -->
<ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="berandaadmin.php">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-user"></i>
    </div>
    <div class="sidebar-brand-text mx-2">SDIT Mutiara Islam</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Looping Menu-->
<li class="nav-item active">
                <a class="nav-link pb-0" href="berandaadmin.php">
                    <i class="fa fa-fw fa-home"></i>
                    <span>Beranda</span></a>
                <a class="nav-link pb-0" href="data-pendaftaran.php">
                    <i class="fa fa-fw fa-address-card"></i>
                    <span>Data Pendaftaran</span></a>
                <a class="nav-link pb-0" href="data-persyaratan.php">
                    <i class="fa fa-fw fa-list"></i>
                    <span>Data Persyaratan</span></a>
                <a class="nav-link pb-0" href="data-pembayaran.php">
                    <i class="fa fa-fw fa-shopping-cart"></i>
                    <span>Data Pembayaran</span></a>
                <a class="nav-link pb-0" href="data-laporan.php">
                    <i class="fa fa-fw fa-folder"></i>
                    <span>Laporan</span></a>
            </li>
<br>
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar --   > 

<!- Content Wrapper -->
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
            <h1 class="h3 mb-2 text-white">Data Pembayaran</h1>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-white small">Admin SDIT</span>
                        <img class="img-profile rounded-circle" src="logo.jpeg">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="loginadmin.html" data-toggle="modal" data-target="#logoutModal">
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

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Data Pendaftaran -->
<div class="container">
    <h2 class="text-center">Data Pembayaran Peserta Didik Baru</h2>
    <h2 class="text-center">SDIT Mutiara Islam</h2>
</div>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- row table-->
<div class="row">
    <div class="table-responsive table-bordered">
        <div class="page-header">
            <span class="fas fa-users text-primary mt-2 "> Data Pembayaran</span>
        </div>
        <table class="table mt-3">
            <thead>
            <tr>
                <th>No.</th>
                <th>NIK Anak</th>
                <th>Email User</th>
                <th>Nama Lengkap Rekening Bank</th>
                <th>Nomor Rekening</th>
                <th>Metode Pembayaran Bank</th>
            </tr>
            </thead>
        <tbody>
            <?php
            include "database.php";
            $i = 1;
            $sql = "SELECT pendaftaran.NIK, pendaftaran.email, pembayaran.nama_lengkap, pembayaran.nomor_rekening, pembayaran.metode_pembayaran
                    FROM pendaftaran
                    JOIN pembayaran ON pendaftaran.id = pembayaran.id_peserta";

            $result = $conn->query($sql); 
            
            if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
            ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $row['NIK']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['nama_lengkap']; ?></td>
                    <td><?= $row['nomor_rekening']; ?></td>
                    <td><?= $row['metode_pembayaran']; ?></td>
                </tr>
                <?php } 
            } else {
                "Tidak ada data.";
            }
            $conn->close();
            ?>
        </tbody>
        </table>
    </div>
</div>


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
                <a class="btn btn-primary" href="loginadmin.html">Logout</a>
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

<script>
    const BASE_URL = "http://localhost/project/login/";

    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });

    $('.form-check-input').on('click', function() {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');

        $.ajax({
            url: BASE_URL + "admin/changeaccess",
            type: 'post',
            data: {
                menuId: menuId,
                roleId: roleId
            },
            success: function() {
                document.location.href = BASE_URL + "admin/akses-role/" + roleId;
            }
        });
    });

    $(document).ready(function() {
        $("#table-datatable").dataTable();
    });

    $('.alert-message').alert().delay(3500).slideUp('slow');
</script>


</body>


</html>