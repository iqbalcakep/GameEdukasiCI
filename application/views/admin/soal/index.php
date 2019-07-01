<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/admin/images/favicon.png">
    <title>Admin Kuis Online - BANK SOAL</title>
    <link href="<?php echo base_url() ?>assets/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/admin/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/admin/css/colors/blue.css" id="theme" rel="stylesheet">
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
                        <h3 class="text-themecolor m-b-0 m-t-0">BANK SOAL</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">SOAL</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-block">
                            <div class="text-center">
                                <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#settingModal">
                                    Setting Soal</a>
                                    <a href="<?= base_url() ?>/index.php/Soal/add" class="btn btn-default btn-rounded mb-4">
                                     Tambah Soal</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer"> © 2019 kuis online </footer>
        </div>
    
    </div>

    <div class="modal fade" id="settingModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Setting Soal</h4>
                </div>
                <form id="frmSubmit" method="post">
                <div class="modal-body mx-3">
                    <?php foreach($setting as $v){ ?>
                    <div class="md-form mb-5">
                    <label data-error="wrong" data-success="right" for="defaultForm-email"><?= $v->tipe; ?></label>
                    <input type="number" value="<?= $v->jumlah; ?>" id="<?= $v->id_setting; ?>" name="<?= $v->id_setting; ?>" class="form-control validate">
                    </div>
                    <?php } ?>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-default">Terapkan</button>
                </div>
                </div>
                <div id="pesanbox"></div>
                </form>
            </div>
        </div>

    <script src="<?php echo base_url() ?>assets/admin/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/waves.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/sidebarmenu.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/custom.min.js"></script>
    
</body>

</html>
