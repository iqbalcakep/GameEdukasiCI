<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/admin/images/favicon.png">
    <title>Admin Kuis Online - Profil</title>
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Tambah Cerita</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Soal</a></li>
                            <li class="breadcrumb-item active">add Cerita</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div id="gg" class="col-lg-10 col-xlg-11 col-md9">
                        <div class="card">
                            <div class="card-block">
                                    <form id="form_soal" class="form-horizontal form-material">
                                    <div class="form-group">
                                                <label for="example-email" class="col-md-12">Subjek Cerita</label>
                                                <div class="col-md-12">
                                                    <input type="text" required placeholder="Subjek" id="subjek" class="form-control form-control-line" name="subjek">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Cerita</label>
                                                <div class="col-md-12">
                                                    <textarea id="isicerita"  name="cerita" rows="5" class="form-control form-control-line"></textarea>
                                             </div><br>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button id="simpan" type="submit" class="btn btn-success">Simpan</button>
                                                </div>
                                            </div>
                                           </div>
                                        </div>
                                        <div id="pesanbox"></div>
                                    </div>
                                    </form>
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
    <script src="//cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
     CKEDITOR.replace('isicerita');
            $("#form_soal").submit(function(e){
                e.preventDefault();
                for ( instance in CKEDITOR.instances ) {
                        CKEDITOR.instances[instance].updateElement();
                    }
                    $.ajax({
                     url:'<?php echo base_url();?>/index.php/Soal/save_cerita',
                     type:"post",
                     data:new FormData(this),
                     processData:false,
                     contentType:false,
                     cache:false,
                      success: function(response){
                          if(response==="success"){
                            $("#simpan").hide();
                            $("#pesanbox").html("<div class='alert alert-"+response+"'><strong>Success!</strong> Soal Baru Telah Tersimpan</div>");
                            setTimeout(() => {
                                location.reload(true);
                            }, 2000);
                          }else{
                            $("#pesanbox").html("<div class='alert alert-"+response+"'><strong>GAGAL!</strong> Periksa Kembali Data Anda</div>");
                          }
                   }
                 });
                
            })
        })
    </script>
</body>

</html>
