<!DOCTYPE HTML>
<?php $sesData = $this->session->userdata('datadiri');
      $nama = $sesData["nama"];
?>
<html>
	<head>
		<title>Kuis Online</title>

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css">		
		<link href="https://fonts.googleapis.com/css?family=Istok+Web" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/magnific-popup.css">

		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/main.css">
	</head>

	<body>
		<!-- Wrapper -->
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
									<a href="<?php echo base_url() ?>" class="logo">
										<span class="symbol">
											<img src="<?php echo base_url() ?>assets/images/logo2.png" alt="Title" />
										</span>
										<span class="title">Kuis Online
											<br><span id="namaSess"><?= $nama; ?></span>
										</span>
										<a href="<?= base_url()?>/index.php/Home/destroy">Logout</a>
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

		<!-- Main -->

		<section class="main-body">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<center><p class="drescription">Ayo Ikuti Kuisnya</p></center>
					</div>
				</div>
				<div class="tiles">
					<div class="row">
					<?php foreach($tipe_soal as $v){ ?>
						<div class="col-md-6 col-xs-12">
							<div class="a">
								<a href="#test-popup-<?= $v->id_tipe;?>" class="open-popup-link">
									<img src="<?php echo base_url() ?>assets/images/b.png" class="img-responsive" alt="Responsive image">
									<div class="img-hover glass">
										<div class="c-table">
											<div class="ct-cell">
												<h3 class="img-title"><?= $v->tipe?></h3>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div id="test-popup-<?= $v->id_tipe;?>" class="white-popup mfp-hide">
							  	<div class="container-fluid">
									<div class="row">
										<div class="pop-up-color">
											<div class="col-md-8 p-l-0 p-r-0">
												<img src="<?php echo base_url() ?>assets/images/b.png" class="img-responsive" alt="Responsive image">
											</div>
											<div class="col-md-4">
												<div>
													<h2 class="popup-head"><?= $v->tipe;?></h2>
												</div>
												<div>
													<p class="popup-parapraph"><?= $v->deskripsi;?></p><br/>
													<a href="<?= base_url()?>/index.php/Ujian/tipe/<?= $v->tipe?>" class="btn btn-success">Mulai</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
						<!-- <div class="col-md-6 col-xs-12">
							<div class="a">
								<a href="#test-popup-2" class="open-popup-link">
									<img src="<?php echo base_url() ?>assets/images/b.png" class="img-responsive" alt="Responsive image">
									<div class="img-hover shoes-glass">
										<div class="c-table">
											<div class="ct-cell">
												<h3 class="img-title">Kuis 2</h3>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div id="test-popup-2" class="white-popup mfp-hide">
							  	<div class="container-fluid">
									<div class="row">
										<div class="pop-up-color">
											<div class="col-md-8 p-l-0 p-r-0">
												<img src="<?php echo base_url() ?>assets/images/b.png" class="img-responsive" alt="Responsive image">
											</div>
											<div class="col-md-4">
												<div>
													<h2 class="popup-head">Kuis 2</h2>
												</div>
												<div>
													<p class="popup-parapraph">Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit a amet nisi is a euismod sed cursus arcu elementum and ipsum arcu vivamus is quis venenatis orci and nullam dolore. Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod still amet nisi aliqua.Eas Lorem ipsum dolor sit amet.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><br>
					<div class="row">
						<div class="col-md-6 col-xs-12">
							<div class="a">
								<a href="#test-popup-3" class="open-popup-link">
									<img src="<?php echo base_url() ?>assets/images/b.png" class="img-responsive" alt="Responsive image">
									<div class="img-hover hand-parts">
										<div class="c-table">
											<div class="ct-cell">
												<h3 class="img-title">Kuis 3</h3>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div id="test-popup-3" class="white-popup mfp-hide">
							  	<div class="container-fluid">
									<div class="row">
										<div class="pop-up-color">
											<div class="col-md-8 p-l-0 p-r-0">
												<img src="<?php echo base_url() ?>assets/images/b.png" class="img-responsive" alt="Responsive image">
											</div>
											<div class="col-md-4">
												<div>
													<h2 class="popup-head">Kuis 3</h2>
												</div>
												<div>
													<p class="popup-parapraph">Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit a amet nisi is a euismod sed cursus arcu elementum and ipsum arcu vivamus is quis venenatis orci and nullam dolore. Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod still amet nisi aliqua.Eas Lorem ipsum dolor sit amet.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<div class="a">
								<a href="#test-popup-4" class="open-popup-link">
									<img src="<?php echo base_url() ?>assets/images/b.png" class="img-responsive" alt="Responsive image">
									<div class="img-hover table-with-phone">
										<div class="c-table">
											<div class="ct-cell">
												<h3 class="img-title">Kuis 4</h3>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div id="test-popup-4" class="white-popup mfp-hide">
							  	<div class="container-fluid">
									<div class="row">
										<div class="pop-up-color">
											<div class="col-md-8 p-l-0 p-r-0">
												<img src="<?php echo base_url() ?>assets/images/b.png" class="img-responsive" alt="Responsive image">
											</div>
											<div class="col-md-4">
												<div>
													<h2 class="popup-head">Kuis 4</h2>
												</div>
												<div>
													<p class="popup-parapraph">Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit a amet nisi is a euismod sed cursus arcu elementum and ipsum arcu vivamus is quis venenatis orci and nullam dolore. Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod still amet nisi aliqua.Eas Lorem ipsum dolor sit amet.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</section>



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


	<!-- end Modal -->

	<!-- Scripts -->

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