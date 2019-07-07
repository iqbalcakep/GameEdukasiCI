<!DOCTYPE HTML>
<?php $sesData = $this->session->userdata('datadiri');
      $nama = $sesData["nama"];
      $kelas = $sesData["kelas"];
?>
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
                  <!-- <li><a href="<?php echo base_url() ?>index.php/login">Login</a></li> -->
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
      <div class="container">
   
       <div id="pagess">
       <?php 
       shuffle($soal);
       $no = 1;
       foreach($soal as $d){ ?>
          <div class="kumpulansoal">   
         <div class="scp-quizzes-main">
          <div class="scp-quizzes-data">
        <input type="hidden" value="<?= $d->jawaban?>" id="kunci<?= $d->id_soal?>">
        <input type="hidden" value="<?= $d->id_tipe; ?>" id="tipe_soal">
      
            <h3>Soal <?= $no; ?>.</h3>
              <span class="soal">
                <?= $d->cerita; ?>
              </span>
              <span class="gambar" <?php if($d->gambar=="null"){?> style="display:none" <?php }else{} ?>>
              <img src="<?php echo base_url() ?>/assets/file/<?= $d->gambar; ?>" class="img-responsive"></span>
              <span class="video"  <?php if($d->video=="null"){?> style="display:none" <?php }else{} ?>>
                <video controls>
                <source src="<?php echo base_url() ?>/assets/file/<?= $d->video ?>" type="video/mp4" class="img-responsive">
                <!-- <embed src="<?php echo base_url() ?>/assets/video/as.mov" class="img-responsive"></span> -->
                </video>
              </span>
              <h4 class="pertanyaan" <?php if($d->text=="" or $d->text=="null"){?> style="display:none" <?php } ?>><?= $d->text; ?></h4>
              <?php 
                $choice = array("a","b","c","d");
                $pilihan = array("a","b","c","d");
                shuffle($choice);
                for($i=0;$i<4;$i++){
              ?>
                <?php $pil = $choice[$i];  ?>
                <input type="radio" id="jawab<?= $d->id_soal.$pil;?>" name="jawab<?= $d->id_soal;?>" value="<?= $pil; ?>">
                  <label for="jawab<?= $d->id_soal.$pil;?>"><?= $pilihan[$i]; ?>. <?= $d->$pil; ?> <span id="<?= $pil.$d->id_soal; ?>" style="float:right"></span></label><br/>
                <?php } ?>
           </div>
           <button type="button" onclick="konfirmasi(event,<?= $d->id_soal;?>)" class="btn btn-success" id="konfirmasi<?= $d->id_soal;?>" clas="btn">Konfirmasi</button>
           <button type="button" onclick="next(event,<?= $d->id_soal;?>)" style="display:none;" class="btn btn-success" id="next<?= $d->id_soal;?>" clas="btn">Soal Selanjutnya</button>
           </div>
          </div>
          <?php $no++; } ?>
        </div>
        <div id="selesai" style="display:none">
        <center>
                <h1>SKOR ANDA </h1>
              <h2 id="skor">0</h2>
              <br><br>
              <div id="bagiansaran">
              <div class="form-group">
                <label for="comment">Saran Anda : </label>
                <textarea class="form-control" rows="5" id="saran" placeholder="Masukkan Saran"></textarea>
              </div>
              <button type="button" id="saranSend" clas="btn btn-default">Kirim Saran</button>
                </div>
              <div style="display:none" id="hasilsaran">
              <div class="alert alert-success">
                <strong>Success!</strong> Saran Telah Tersimpan
              </div>
              <a href="<?= base_url()?>/index.php/">Kembali Ke Home</a> | <a href="javascript:window.location.reload(true)">Kuis Kembali</a>
              </div>
              <br><br>

        </center>
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
    <script src="<?php echo base_url()?>assets/js/jquery.paginate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.29.2/sweetalert2.all.js"></script> 

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

<!-- <script type="text/javascript">
    	$(document).ready(function() {
        $('label').click(function() {
            $('label').removeClass('worngans');
            $(this).addClass('worngans');
        });
      });
    </script>
    -->

    <script type="text/javascript">
    var total_soal = "<?php echo count($soal) ?>";
    var penilaian = Number(100) / Number(total_soal);
    $(document).ready(function(){

      $('div#pagess').paginate({
        scope: $('div.kumpulansoal'), // targets all div elements
        perPage: 1
      });
      var nama = "<?php echo $nama; ?>"
      if(nama==="" || nama === "undefined"){
        $("#setupModal").modal('show');
      }
      //break

      $("#saranSend").click(function(e){
         e.preventDefault();
        var saran=$("#saran").val();
        if(saran===""){
          alert("Saran Tidak Boleh Kosong");
        }else{
          var nama = "<?= $nama; ?>"
          var kelas = "<?= $kelas;?>"
          var id_tipe=$("#tipe_soal").val();
          $.ajax({
            url:"<?= base_url() ?>/index.php/Ujian/kirimkomentar",
            type:"POST",
            data:{nama:nama,kelas:kelas,id_tipe:id_tipe,komentar:saran},
            dataType:"json",
            success:function(data){
              $("#bagiansaran").hide();
              $("#hasilsaran").show();
            }
          })
          

        }


      })

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

     //break
     next=(e,id_soal)=>{
        e.preventDefault();
        if($('div#pagess').data('paginate').switchPage('next')){

        }else{
          $("#pagess").hide();
          $("#selesai").show();
        }
        
      }

      //break
      konfirmasi=(e,id_soal)=>{
        e.preventDefault();
        let kunci = $("#kunci"+id_soal).val();
        let pilihan = ["a","b","c","d"];
        let jawabanpilihan = document.querySelector('input[name="jawab'+id_soal+'"]:checked').value;
        console.log(jawabanpilihan);
        if(kunci===jawabanpilihan){
            var skorlama = $("#skor").text();
            var tambah = Number(skorlama) + Number(penilaian);
            $("#skor").text(tambah);
            swal("SELAMAT", "JAWABAN ANDA BENAR!", "success");
        }else{
          swal("SAYANG SEKALI", "JAWABAN ANDA SALAH!", "error");
        }

          for(i in pilihan){
            $("#jawab"+id_soal+pilihan[i]).prop('disabled', true);
            if(pilihan[i]===kunci){
              $("#"+pilihan[i]+id_soal).html("Benar");
            }else{
              $("#"+pilihan[i]+id_soal).html("Salah");
            }
          }

          $("#konfirmasi"+id_soal).hide();
       $("#next"+id_soal).show();
        
      }
    </script>
    </body>
  </html>