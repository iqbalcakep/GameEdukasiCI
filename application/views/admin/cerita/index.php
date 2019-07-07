<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/admin/images/favicon.png">
    <title>Admin Kuis Online - Cerita</title>
    <link href="<?php echo base_url() ?>assets/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/admin/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/admin/css/colors/blue.css" id="theme" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/datatable/css/jquery.dataTables.min.css">
</head>

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
        <?php include('./application/views/admin/header.php') ?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Daftar CERITA</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">CERITA</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-block">
                                <a href="<?= base_url() ?>/index.php/soal/addCerita" class="btn btn-success btn-rounded mb-4">
                                    Tambah Cerita</a>
                                <div class="table-responsive">
                                    <table class="table" id="example">
                                        <thead>
                                            <tr>
                                                <th>Nomor</th>
                                                <th>Subjek Cerita</th>
                                                <th>Cerita</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?php $no=1; foreach ($cerita as $data) : ?>
                                            <tr>
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $data->tema ?></td>
                                                <td><?php echo $data->cerita ?></td>
                                                <td>
                                                    <a href="<?php echo base_url('index.php/Cerita/update/'.$data->id_cerita) ?> " class="btn btn-info btn-rounded mb-4" style="color: white" >Update</a><br>
                                                    <a href="<?php echo base_url('index.php/Cerita/delete/'.$data->id_cerita) ?>" class="btn btn-danger btn-rounded mb-4" style="color: white">Delete</a>
                                                </td>
                                            </tr>
                                        <?php $no++; endforeach; ?>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer"> © 2019 kuis online </footer>
        </div>
    </div>

    <script src="<?php echo base_url() ?>assets/admin/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/waves.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/sidebarmenu.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/custom.min.js"></script>
    
    <script type="text/javascript" language="javascript" src="<?php echo base_url() ?>assets/datatables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">

    $(document).ready(function() {
        $('#example').DataTable();
    } );
    
    </script>
</body>

</html>
