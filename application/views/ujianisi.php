<!DOCTYPE HTML>
<?php $sesData = $this->session->userdata('datadiri');
      $nama = $sesData["nama"];
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Ujian Online</title>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css">   
      <link href="https://fonts.googleapis.com/css?family=Istok+Web" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/magnific-popup.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/styleujian.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/main.css">
    
    <script type="text/javascript">
    	$(document).ready(function() {
        $('label').click(function() {
            $('label').removeClass('worngans');
            $(this).addClass('worngans');
        });
      });
    </script>
   
    
   </head>
   <body >
    <section class="head" id="header">
      <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <header class="header">
                <div class="inner">
                  <!-- Logo -->
                  <a href="#menu"class="nav-bars">
                    <img src="<?php echo base_url() ?>assets/images/nav_icon.svg" class="img-responsive" alt="Collapsable Navbar">
                  </a>
                  <a href="index.html" class="logo">
                    <span class="symbol">
                      <img src="<?php echo base_url() ?>assets/images/logo2.png" alt="Title" />
                    </span>
                    <span class="title">Kuis Online<br>(<span id="namaSess"><?= $nama; ?></span>)<a href="<?= base_url()?>/index.php/Home/destroy">X Reset</a></span>
                  </a>
                </div>
              </header>
              <!-- Menu -->
              <nav id="menu">
                <h2>Menu</h2>
                <ul>
                  <li><a href="<?php echo base_url() ?>">Home</a></li>
                  <li><a href="<?php echo base_url() ?>index.php/about">About Us</a></li>
                  <li><a href="<?php echo base_url() ?>index.php/login">Login</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
      <div class="container">
         <div class="scp-quizzes-main">
          <div class="scp-quizzes-data">
            <h3>1. Isian </h3>
              
              <span class="gambar"><img src="<?php echo base_url() ?>/assets/images/1.jpg" class="img-responsive"></span>
              <span class="video">
                <video controls>
                <source src="<?php echo base_url() ?>/assets/video/as.mov" type="video/mp4" class="img-responsive">
                <!-- <embed src="<?php echo base_url() ?>/assets/video/as.mov" class="img-responsive"></span> -->
                </video>
              <h4 class="pertanyaan">Ini Pertanyaannya, apakah iqbal cakep?</h4>
              </span>

              <div class="form-group">
                <label for="comment">Jawaban : </label>
                <textarea class="form-control" rows="5" id="comment" placeholder="Masukkan Jawaban"></textarea>
              </div>
            </div>
          </div>
      </div>
      
       <section class="footer">   
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-xs-9">
              <p class="right-color">&copy; Copyright 2019. All rights reserved by Kuis Online</a></p>
            </div>
            <div class="col-sm-4 col-xs-3" align="right">
              <a href="#" id="back-to-top" class="top text-right" >TOP <i class="fa fa-angle-up" aria-hidden="true"></i> </a>
            </div>
          </div>
        </div>                      
      </footer>
    </section>

  <!-- Modall -->

    <div id="setupModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Tambahkan Data Anda Terlebih dahulu sebelum masuk Game Ini</h4>
          </div>
          <div class="modal-body">
            <p>Masukkan Nama dan Kelas Anda</p>
            <form id="formAdd" method="post">
              <div class="form-group">
                <input type="text" required class="form-control" id="nama" name="nama" placeholder="Name">
              </div>
              <div class="form-group">
                <input type="text" required class="form-control" id="kelas" name="kelas" placeholder="Kelas">
              </div>
              <button type="submit" class="btn btn-primary">Masuk</button>
            </form>
          </div>
        </div>
      </div>
    </div>


    <script src="<?php echo base_url() ?>assets/js/jquery-3.1.0.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.magnific-popup.min.js"></script> 
    <script src="<?php echo base_url() ?>assets/js/script.js"></script>

    <!--  ===== Scroll to Top ====  -->
      <script>
      if ($('#back-to-top').length) {
          $('#back-to-top').on('click', function (e) {
              e.preventDefault();
              $('html,body').animate({
                  scrollTop: 0
              }, 700);
          });
      }
    </script>

    <script type="text/javascript">
    $(document).ready(function(){
      var nama = "<?php echo $nama; ?>"
      if(nama==="" || nama === "undefined"){
        $("#setupModal").modal('show');
      }
      $("#formAdd").submit(function(e){
        e.preventDefault();
        $.ajax({
          url:"<?php echo base_url() ?>index.php/Home/setData",
          type:"post",
          data:new FormData(this),
          processData:false,
                    contentType:false,
          success:function(response){
            console.log(response)
            if(response==="success"){
              $("#setupModal").modal('hide');
              $("#namaSess").html($("#nama").val());
            }
          }
        })
      })
    });

    </script>
    </body>
  </html>