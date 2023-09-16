<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo base_url() . '/assets/temp/plugins/fontawesome-free/css/all.min.css' ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() . '/assets/temp/dist/css/adminlte.min.css' ?>">

    <title>Tambah Budaya</title>
</head>

<body class="hold-transition sidebar-mini">

    <!-- left navbar -->
    <?php include(APPPATH . 'Views/templates/navbar_admin/left_navbar.php'); ?>
    <!-- right navbar -->
    <?php include(APPPATH . 'Views/templates/navbar_admin/right_navbar.php'); ?>
    <!-- sidebar -->
    <?php include(APPPATH . 'Views/templates/navbar_admin/sidebar.php'); ?>

    <!-- main content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 font-weight-bold">Budaya</h1><span>Manajemen Budaya</span>
                    </div><!-- /.col -->

                </div><!-- /.row -->
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <a href="<?php echo site_url('/employees') ?>">
                            <button class="btn btn-sm btn-primary">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </button>
                        </a>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h1 class="card-title ">
                            <i class="fas fa-user" style="font-size: 1.5rem;"></i>
                            Tambah Budaya
                        </h1>

                    </div>
                    <div class="card-body">
                        <form action="<?php echo site_url() ?>" method="post">
                            <div class="form-group">
                                <label for="provinsi">Provinsi </label>
                                <input type="text" class="form-control" id="provinsi" " name=" provinsi" value="" autocomplete="false">
                            </div>
                            <div class="form-group">
                                <label for="gubernur">Nama Gubernur </label>
                                <input type="text" class="form-control" id="gubernur" " name=" gubernur" value="" autocomplete="false">
                            </div>
                            <div class="form-group">
                                <label for="jumlah_penduduk">jumlah penduduk </label>
                                <input type="text" class="form-control" id="jumlah_penduduk" " name=" jumlah_penduduk" value="" autocomplete="false">
                            </div>
                            <div class="form-group">
                                <label for="detail_provinsi ">Detail Provinsi </label>
                                <textarea class="form-control shadow-none" style="resize: none;" id="detail_provinsi" rows="3" name="detail_provinsi"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="pendapatan_perkapita">Pendapatan Perkapita </label>
                                <input type="text" class="form-control" id="pendapatan_perkapita" " name=" pendapatan_perkapita" value="" autocomplete="false">
                            </div>
                            <div class="form-group">
                                <label for="judul_budaya">Nama Budaya </label>
                                <input type="text" class="form-control" id="judul_budaya" " name=" judul_budaya" value="" autocomplete="false">
                            </div>
                            <div class="form-group">
                                <label for="provinsi">provinsi </label>
                                <input type="text" class="form-control" id="provinsi" " name=" provinsi" value="" autocomplete="false">
                            </div>
                            <div class="form-group">
                                <label for="detail_budaya">Detail Budaya </label>
                                <textarea class="form-control shadow-none" style="resize: none;" id="detail_budaya" rows="3" name="detail_budaya"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success form-control">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>





    <!-- control sidebar -->
    <?php include(APPPATH . 'Views/templates/navbar_admin/control_sidebar.php'); ?>
</body>

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?php echo base_url() . '/assets/temp/plugins/jquery/jquery.min.js' ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() . '/assets/temp/plugins/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() . '/assets/temp/dist/js/adminlte.min.js' ?>"></script>

</html>