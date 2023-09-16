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
    <title>Budaya</title>
</head>

<body class="hold-transition sidebar-mini">
    <!-- left navbar -->
    <?php include(APPPATH . 'Views/templates/navbar_admin/left_navbar.php'); ?>
    <!-- right navbar -->
    <?php include(APPPATH . 'Views/templates/navbar_admin/right_navbar.php'); ?>
    <!-- sidebar -->
    <?php include(APPPATH . 'Views/templates/navbar_admin/sidebar.php'); ?>
    <!-- main content -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 font-weight-bold">Budaya</h1><span>Manajemen Budaya</span>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <!-- button add employees -->
                        <a href="<?php echo site_url('tambah_budaya') ?>">
                            <button class="btn btn-sm btn-success">
                                <i class="fas fa-plus"></i> Tambah Budaya
                            </button>
                        </a>
                    </div>
                    <div class="card-body">
                        <!-- Show list of employees -->
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 1%;">NO</th>
                                    <th style="width: 10%;">Nama Budaya</th>
                                    <th style="width: 30%;">Detail Budaya</th>
                                    <th>Provinsi</th>
                                    <th style="width: 10%;">Gambar</th>
                                    <th style="width: 15%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($budaya as $bud) : ?>
                                    <tr>
                                        <td><?php echo $i++ ?></td>
                                        <td><?php echo $bud['judul_budaya']    ?></td>
                                        <td><?php echo $bud['detail_budaya']   ?></td>
                                        <td><?php echo $bud['provinsi'] ?></td>
                                        <td><img width="100%" class="img-responsive" src="<?php echo base_url() . 'gambar/budaya/' . $bud['foto_budaya']; ?>"></td>
                                        <td>
                                            <div class="btn-group " role="group" aria-label="Action buttons">
                                                <a href="<?php echo site_url() ?>" class="btn btn-sm btn-warning mr-1"><i class="nav-icon fas fa-edit"></i></a>
                                                <form action="<?php echo site_url() ?>" method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-sm btn-danger mr-1" onclick="return confirm('Are sure delete this article ? ')"><i class="nav-icon fas fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="mt-4">
                            <?= $pager->links('default', 'cus') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- control sidebar -->
    <?php include(APPPATH . 'Views/templates/navbar_admin/control_sidebar.php'); ?>

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="<?php echo base_url() . '/assets/temp/plugins/jquery/jquery.min.js' ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url() . '/assets/temp/plugins/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() . '/assets/temp/dist/js/adminlte.min.js' ?>"></script>
</body>

</html>