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
                        <h3 class="text-themecolor m-b-0 m-t-0">Tambah Soal</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Soal</a></li>
                            <li class="breadcrumb-item active">add</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-block">
                                <center id="saved"class="m-t-30"> 
                                </center>
                                <span id="isicerita"></span>
                            </div>
                        </div>
                    </div>
                    <div id="gg" class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-block">
                                    <div id="tipe_soal_all" class="form-group">
                                        <label class="col-sm-12">Tipe Soal</label>
                                        <div class="col-sm-12">
                                            <select id="tipe_soal" onchange="pilih_tipe()" class="form-control form-control-line">
                                            <option>Pilih Tipe</option>
                                            </select>
                                        </div>
                                    </div>
                                    <form id="form_soal" class="form-horizontal form-material">
                                        <input type="hidden" id="id_tipe" name="id_tipe">
                                        <input type="hidden" id="id_cerita" name="id_cerita">
                                    <div id="pilihan_ganda" style="display:none">
                                            <div id="cerita_all" class="form-group">
                                                <label class="col-sm-12">Subjek Cerita</label>
                                                <div class="col-sm-12">
                                                    <select required id="cerita" onchange="pilih_cerita()" class="form-control form-control-line">
                                                        <option>Pilih Cerita</option>
                                                    </select>
                                                    <div id="isi_cerita">
                                                    <a href="#" id="add_cerita" onclick="openCerita()">Cerita Baru ? Klik disini..</a>
                                            </div><br>
                                            <div class="form-group">
                                                <label class="col-md-12">Anak Soal</label>
                                                <div class="col-md-12">
                                                    <textarea id="anak_soal"  name="anak_soal" rows="5" class="form-control form-control-line"></textarea>
                                             </div><br>
                                             <div class="form-group">
                                                <label for="example-email" class="col-md-12">Pilihan A</label>
                                                <div class="col-md-12">
                                                    <input type="text" required placeholder="A" id="a" class="form-control form-control-line" name="a">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Pilihan B</label>
                                                <div class="col-md-12">
                                                    <input type="text" required placeholder="B" id="b" class="form-control form-control-line" name="b">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Pilihan C</label>
                                                <div class="col-md-12">
                                                    <input type="text" required placeholder="C" id="c" class="form-control form-control-line" name="c">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Pilihan D</label>
                                                <div class="col-md-12">
                                                    <input type="text" required placeholder="D" id="d" class="form-control form-control-line" name="d">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Kunci Jawaban</label>
                                                <div class="col-md-12">
                                                    <select required id="jawaban" name="jawaban" class="form-control form-control-line">
                                                        <option>Pilih kunci</option>
                                                        <option value="a">A</option>
                                                        <option value="b">B</option>
                                                        <option value="c">C</option>
                                                        <option value="d">D</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Video</label>
                                                <div class="col-md-12">
                                                     <input type="file" id="video" class="form-control form-control-line" name="video">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Gambar</label>
                                                <div class="col-md-12">
                                                     <input type="file" id="gambar" class="form-control form-control-line" name="gambar">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button id="simpan_pg" type="submit" class="btn btn-success">Simpan</button>
                                                </div>
                                            </div>
                                           </div>
                                        </div>
                                        <div id="pesanbox"></div>
                                    </div>
                                    </div>
                                    </form>
                                    </div>
                                    <div id="isian" style="display:none">
                                    <form id="form_soal2" class="form-horizontal form-material">
                                    <input type="hidden" id="id_tipe2" name="id_tipe2">
                                    <div class="form-group">
                                        <label class="col-md-12">Soal Uraian</label>
                                        <div class="col-md-12">
                                            <textarea id="anak_soal2"  name="anak_soal2" rows="5" class="form-control form-control-line"></textarea>
                                    </div><br>
                                    <div class="form-group">
                                                <label for="example-email" class="col-md-12">Jawaban</label>
                                                <div class="col-md-12">
                                                    <input type="text" required placeholder="jawaban" id="jawaban" class="form-control form-control-line" name="jawaban">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Video</label>
                                                <div class="col-md-12">
                                                     <input type="file" id="video" class="form-control form-control-line" name="video">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Gambar</label>
                                                <div class="col-md-12">
                                                     <input type="file" id="gambar" class="form-control form-control-line" name="gambar">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button id="simpan_isian" type="submit" class="btn btn-success">Simpan</button>
                                                </div>
                                            </div>
                                            <div id="pesanbox2"></div>
                                    </div>
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
     CKEDITOR.replace('anak_soal');
     CKEDITOR.replace('anak_soal2');
    var browser;
        $(document).ready(function(){
            var pilihsoal = "<?php echo base_url() ?>/index.php/Soal/Listtipe";
            $.ajax({
                url:pilihsoal,
                type:"GET",
                dataType:"json",
                success:function(response){
                    response.map(d=>{
                        $("#tipe_soal").append("<option value='"+d.id_tipe+"'>"+d.tipe+"</option>");
                    })
                }
            })

            $("#form_soal2").submit(function(e){
                e.preventDefault();
                for ( instance in CKEDITOR.instances ) {
                        CKEDITOR.instances[instance].updateElement();
                    }
                    $.ajax({
                     url:'<?php echo base_url();?>/index.php/Soal/save_isian',
                     type:"post",
                     data:new FormData(this),
                     processData:false,
                     contentType:false,
                     cache:false,
                      success: function(response){
                          if(response==="success"){
                            $("#simpan_isian").hide();
                            $("#pesanbox2").html("<div class='alert alert-"+response+"'><strong>Success!</strong> Soal Baru Telah Tersimpan</div>");
                            setTimeout(() => {
                                location.reload(true);
                            }, 2000);
                          }else{
                            $("#pesanbox2").html("<div class='alert alert-"+response+"'><strong>GAGAL!</strong> Periksa Kembali Data Anda</div>");
                          }
                   }
                 });
                
            })

            $("#form_soal").submit(function(e){
                e.preventDefault();
                for ( instance in CKEDITOR.instances ) {
                       CKEDITOR.instances[instance].updateElement();
                    }            
                // var gambar = $('#gambar').prop('files')[0];
                // var video = $('#video').prop('files')[0];
                // var form_data = new FormData(this);
                $.ajax({
                     url:'<?php echo base_url();?>/index.php/Soal/save',
                     type:"post",
                     data:new FormData(this),
                     processData:false,
                     contentType:false,
                     cache:false,
                      success: function(response){
                          if(response==="success"){
                            $("#simpan_pg").hide();
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

        pilih_cerita=()=>{
            var selectBox = document.getElementById("cerita");
            var isi = selectBox.options[selectBox.selectedIndex].value;
            $("#id_cerita").val(isi);
            $.ajax({
                url:"<?= base_url() ?>/index.php/Soal/getCerita/"+isi,
                type:"GET",
                dataType:"json",
                success:function(response){
                    if(response[0]){
                        $("#isicerita").html("<p>"+response[0].cerita+"</p>");
                    }else{
                        $("#isicerita").html("");
                    }
                   
                }
            })
        }

        pilih_tipe=()=>{
            var selectBox = document.getElementById("tipe_soal");
            var isi = selectBox.options[selectBox.selectedIndex].value;
            $("#tipe_soal_all").hide();
            $("#saved").html("");
            $("#id_tipe").val(isi);
            $("#id_tipe2").val(isi);
            if(isi==="1" || isi==="2"){
                $("#saved").append("<h4>Soal Kuis" +isi+"</h4>")
                $("#isian").hide();
                $("#pilihan_ganda").show();
                $("#cerita").html("<option>Pilih Subjek Cerita</option>");
                var pilihcerita = "<?php echo base_url() ?>/index.php/Soal/Listcerita";
                $.ajax({
                    url:pilihcerita,
                    type:"GET",
                    dataType:"json",
                    success:function(response){
                        response.map(d=>{
                            $("#cerita").append("<option value='"+d.id_cerita+"'>"+d.tema+"</option>");
                        })
                    }
                })
            }else if(isi==="3" || isi==="4"){
                $("#saved").append("<h4>Soal Kuis" +isi+"</h4>")
                $("#isian").show();
                $("#pilihan_ganda").hide();
            }else{
                $("#isian").hide();
                $("#pilihan_ganda").hide();
            }
        }

        openCerita=()=>{
            browser = window.open('<?= base_url() ?>/index.php/soal/addCerita', 'newwindow', 'width=800,height=750');
            $("#isi_cerita").html("<a href='#' onclick='closeCerita()'>Tutup X</a>"); 
        }
        closeCerita=()=>{
            browser.close();
            $("#cerita").html("<option>Pilih Subjek Cerita</option>");
            var pilihcerita = "<?php echo base_url() ?>/index.php/Soal/Listcerita";
                $.ajax({
                    url:pilihcerita,
                    type:"GET",
                    dataType:"json",
                    success:function(response){
                        response.map(d=>{
                            $("#cerita").append("<option value='"+d.id_cerita+"'>"+d.tema+"</option>");
                        })
                    }
                })
            $("#isi_cerita").html("<a href='#' id='add_cerita' onclick='openCerita()'>Cerita Baru ? Klik disini..</a>");
        }
    </script>
</body>

</html>
