<!doctype html>
<html lang="en">
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<!-- Font Family -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway:600&display=swap" rel="stylesheet">

		<title>Home - Permata Kranggan Cibubur</title>
	
		<style media="screen">
				.carousel-inner > .carousel-item > img {
						width: 100%;
						height: 500px !important;
				}

				html{
						position: relative;
				}
		
				body {
						margin-bottom: 50px;
				}
		</style>
</head>
<body>
		<nav class="navbar navbar-light" style="background-color: #076B07; border-bottom-left-radius: 50px; height:55px;">
    		<h7 style="color:white; margin-left:25px;">permatakranggancibubur@gmail.com</h7>
    </nav>
    <nav class="navbar navbar-expand-sm sticky-top navbar-light" style="background-color: white; padding-top:20px; padding-bottom:20px; font-family: 'Open Sans', sans-serif;">
      	<a class="navbar-brand" href=""><h3 style="margin-left:25px; color:green; font-family: 'Raleway', sans-serif;">Permata Kranggan Cibubur</h3></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
						</button>
  			<div class="collapse navbar-collapse" id="navbarText">
    				<ul class="navbar-nav" style="margin-left:50px;">
      					<li class="nav-item">
        						<a class="nav-link active" href="<?= base_url();?>" style="padding-right:15px; color:green; font-family: 'Open Sans', sans-serif;">Home <span class="sr-only">(current)</span></a>
      					</li>
								<li class="nav-item" style="padding-right:15px; padding-left:15px;">
										<a class="nav-link" href="<?= base_url();?>home/berita" style="font-family: 'Open Sans', sans-serif;">Berita</a>
								</li>
								<li class="nav-item" style="padding-right:15px; padding-left:15px;">
										<a class="nav-link page-scroll" href="<?= base_url();?>home/layanan" style="font-family: 'Open Sans', sans-serif;">Layanan</a>
								</li>
								<li class="nav-item" style="padding-right:15px; padding-left:15px;">
										<a class="nav-link" href="<?= base_url();?>home/organisasi" style="font-family: 'Open Sans', sans-serif;">Organisasi</a>
								</li>
								<li class="nav-item" style="padding-right:15px; padding-left:15px;">
										<a class="nav-link page-scroll" href="#tentang" style="font-family: 'Open Sans', sans-serif;">Tentang</a>
								</li>
								<li class="nav-item" style="padding-right:15px; padding-left:15px;">
										<a class="nav-link" href="<?= base_url();?>home/feedback" style="font-family: 'Open Sans', sans-serif;">Feedback</a>
								</li>
						</ul>
  			</div>
    </nav>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
    				<div class="carousel-item active">
      					<img class="d-block w-100" src="<?= base_url();?>assets/slide/slide1edit.jpg" alt="First slide">
    				</div>
    				<div class="carousel-item">
      					<img class="d-block w-100" src="<?= base_url();?>assets/slide/slide21.jpg" alt="Second slide">
    				</div>
    				<div class="carousel-item">
      					<img class="d-block w-100" src="<?= base_url();?>assets/slide/slide3.jpg" alt="Third slide">
    				</div>
  			</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    				<span class="sr-only">Previous</span>
  			</a>
  			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    				<span class="carousel-control-next-icon" aria-hidden="true"></span>
    				<span class="sr-only">Next</span>
  			</a>
		</div>

		<section class="berita" id="berita" style="background-color: rgba(204,209,209,0.3); min-height:600px;">
				<div class="container">
						<div class="row">
								<div class="col-sm-12">
										<h2 class="mt-4 text-center" style="font-family: 'Open Sans', sans-serif;">BERITA TERBARU</h2>
										<hr style="width:100%; border-top:3px solid #666;">
								</div>
						</div>
						<div class="row">
								<?php foreach ($berita as $p) : ?>
										<div class="col-md-4 col-sm-12 mb-3">
												<div class="card" style="width: 22rem;">
														<div class="card-body">
																<h5 class="card-title" style="font-family: Roboto;"><?= $p['judul'];?></h5>
																<span class="badge badge-pill badge-success" style="font-family: Roboto; font-size:13px; "> <?= date("d/F/Y",strtotime($p['tanggal'])); ?></span>
																<p class="card-text"  style="font-family: Roboto;"><?php $limiter_word = word_limiter($p['isi'],40) ?>
																<?= $limiter_word ?></p></p>
																<a href="<?= base_url();?>home/detailBerita/<?= $p['id'];?>" class="btn btn-success">Read More</a>
															</div>
												</div>
										</div>
								<?php endforeach; ?>
						</div>
				</div>
		</section>

		<section class="tentang" id="tentang" style="min-height:500px;">
				<div class="container">
						<div class="row">
								<div class="col-sm-12">
										<h2 class="mt-4 text-center" style="font-family: 'Open Sans', sans-serif;">Tentang</h2>
										<hr style="width:100%; border-top:3px solid #666;">
								</div>
						</div>
				<div class="row no-gutters">
						<div class="col-md-6">
								<div class="card" style="width:  820; height:721; background-color: #076B07; border-top-right-radius: 1px; border-bottom-right-radius: 1px;">
										<div class="card-body">
												<h5 class="card-title" style="color:white;">LAYANAN</h5>
												<hr style="color:white; border-top: 1px solid white;">
												<p class="card-text" style="color:white; font-family: 'Open Sans', sans-serif;">
														Website Perumahan Permata Kranggan Cibubur <br />
														memiliki fungsionalitas untuk memberikan informasi<br /> apa saja yang ada di lingkungan PKC seperti, <br />
														organisasi kepengurusan RW, RT, Karang Taruna, DKM <br />
														Masjid Al-Ikhlas, Posyandu, dll. serta berita seputar <br />
														kegiatan yang sedang berlangsung maupun yang akan <br />
														datang kepada semua warga perumahan Permata <br /> Kranggan Cibubur.
												</p>
										</div>
								</div>
						</div>
						<div class="col-md-6">
								<div class="card" style="width: 820; height:721; background-color: #68BB15; border-top-left-radius: 1px; border-bottom-left-radius: 1px;">
										<div class="card-body">
												<h5 class="card-title" style="color:white;">FEEDBACK</h5>
												<hr style="color:white; border-top: 1px solid white;">
														<p class="card-text" style="color:white; font-family: 'Open Sans', sans-serif;">
															Layanan feedback ini dibuat sebagai sarana untuk<br /> menyampaikan keluhan atau berdiskusi untuk <br />memajukan Lingkungan Permata Kranggan Cibubur.<br />
															Feedback bisa disampaikan untuk website ini, <br />
															kepengurusan organisasi, dan lingkungan sekitar. <br />
															Untuk melakukan pengisian dapat menuju ke laman <a href="<?= base_url();?>home/feedback/">Feedback.</a><br />

															<br /><br />
														</p>
										</div>
								</div>
						</div>
				</div>
		</section>
		
		<!--Footer Halaman-->
		<footer style="position:absolute; width:100%; bottom:0; height:50px; background-color: #076B07;">
				<div class="container">
						<div class="row">
								<div class="col-6 col-md-4">								
								</div>
								<div class="col-6 col-md-4 text-center" style="margin-top:14px">
										<h6 style="color:white; font-family: 'Open Sans', sans-serif;">&copy; All Right Reserved 2019</h6>
								</div>
								<div class="col-6 col-md-4 text-right" style="margin-top:14px">
										<h6 style="color:white; font-family: 'Open Sans', sans-serif;">Developed by PriaJago Software Developer</h6>
								</div>
						</div>
				</div>
		</footer>

    <!-- Optional JavaScript -->
    <script type="text/javascript">
    $('.page-scroll').on('click', function(e) {

        var tujuan = $(this).attr('href');

        var elemenTujuan = $(tujuan);

        $('body').animate({
        scrollTop: elemenTujuan.offset().top - 50
        });

        e.preventDefault();
        });
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
</body>
</html>
