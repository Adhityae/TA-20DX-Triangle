<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Admin</title>

    <!-- Custom fonts for this template-->
    <link  rel="stylesheet" type="text/css" href='<?php echo base_url("assets/fontawesome-free/css/all.min.css"); ?>'/>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
        rel="stylesheet">   

    <!-- Custom styles for this template-->
    <link href='<?php echo base_url("assets/css/sb-admin-2.min.css"); ?>' rel="stylesheet"/>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('admin/dashboard_admin') ?>">
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('Beranda/data_siswa') ?>">
                    <span>Data User</span></a>
            </li>

            
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
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href='<?php echo base_url("Beranda/Logout"); ?>' id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Logout</span>
                                <!-- <img class="img-profile rounded-circle"
                                    src='<?php echo base_url("assets/images/profile_admin.jpg") ?>'> -->
                            </a>
                            <!-- Dropdown - User Information -->
                            
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <div class="container-fluid">
                <a class="btn btn-sm btn-primary mb-3" href="<?php echo base_url("Beranda/tambahData"); ?>"><i class="fa-plus fa-plus"></i> Tambah Data</a>

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>MATA PELAJARAN</th>
            <th>ALAMAT</th>
            <th>NO HP</th>
            <th>STATUS</th>
            <th>AKSI</th>
        </tr>
        <?php
        $no=1;
        foreach($tbl_pelajar as $data) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $data->nama ?></td>
            <td><?php echo $data->mata_pelajaran ?></td>
            <td><?php echo $data->alamat ?></td>
            <td><?php echo $data->no_hp ?></td>
            <td><?php echo $data->status ?></td>
            <td>
            <a href="<?= site_url('Beranda/tambah_data' . $data->id) ?>" class="btn btn-primary">Tambah</i></a>        
            <a href="<?= site_url('Beranda/edit_data' . $data->id) ?>" class="btn btn-danger">Edit</i></a>        
            <a href="<?= site_url('Beranda/hapus_data' . $data->id) ?>" class="btn btn-success">Hapus</i></i></a>        
         </td>
            <!-- <td><?php echo anchor('admin/data_barang/edit/' .$data->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            <td><?php echo anchor('admin/data_barang/hapus/' .$data->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td> -->
        </tr>
        <?php endforeach; ?>
    </table>    
    </div>

    <!-- Modal -->

<!-- Bootstrap core JavaScript-->
<script src='<?php echo base_url("assets/vendor/jquery/jquery.min.js"); ?>'></script>
    <script src='<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>'></script>

    <!-- Core plugin JavaScript-->
    <script src='<?php echo base_url("assets/vendor/jquery-easing/jquery.easing.min.js") ?>'></script>

    <!-- Custom scripts for all pages-->
    <script src='<?php echo base_url("assets/js/sb-admin-2.min.js"); ?>'></script>

    <!-- Page level plugins -->
    <script src='<?php echo base_url("assets/vendor/chart.js/Chart.min.js"); ?>'></script>

    <!-- Page level custom scripts -->
    <script src='<?php echo base_url("assets/js/demo/chart-area-demo.js"); ?>'></script>
    <script src='<?php echo base_url("assets/js/demo/chart-pie-demo.js"); ?>'></script>

</body>

</html>