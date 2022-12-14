<?php

require('function.php');

$kategori = query("SELECT * FROM tbl_kategori ORDER BY id_kategori DESC");

if (isset($_POST["cari"])) {
    $kategori = cari($_POST["keyword"]);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ShoesSport</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">ShoesSport</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="img/profil.jpeg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="profil.php" class="d-block">MhmdZaki</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                        <li class="nav-item ">
                            <a href="index.php" class="nav-link">
                                <i class=""></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item ">

                            <a href="barang.php" class="nav-link">
                                <i class=""></i>
                                <p>
                                    Barang
                                </p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="kategori.php" class="nav-link active">
                                <i class=""></i>
                                <p>
                                    Kategori
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="manageuser.php" class="nav-link">
                                <i class=""></i>
                                <p>
                                    Transaksi
                                </p>

                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="nav-link ">
                                <i class=""></i>
                                <p>
                                    Profil
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 ml-1">Kategori</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Kategori</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!--content -->
            <div class="container ml-3">
                <form action="" method="POST">
                    <input type="text" name="keyword" size="40" autofocus placeholder="Cari Kategori" autocomplete="off">
                    <button type="text" name="cari">Cari</button>
                </form>
                <br>
                <a href="tambah2.php">Tambah Kategori</a>
                <table border="1" cellpadding="15" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Nama Kategori</th>

                        <th>Aksi</th>
                    </tr>
                    <?php $i = 1; ?>
                    <?php foreach ($kategori as $row) : ?>
                        <tr>
                            <th><?= $i; ?></th>
                            <th><img src="img/<?= $row["gambar_kategori"]; ?>" width="100" alt=""></th>
                            <th><?= $row["nama_kategori"]; ?></th>

                            <td>
                                <a href="update.php?id_kategori=<?= $row["id_kategori"] ?>">Update</a> |
                                <a href="hapus.php?id_kategori=<?= $row["id_kategori"]; ?>" onclick="return confirm('Apakah Anda Yakin Untuk Menghapus Kategori?');">Delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>