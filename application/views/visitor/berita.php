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

		<title>Berita - Permata Kranggan Cibubur</title>
		
		<!-- CSS -->
    <style media="screen">
        .carousel-inner{
        		width:100%;
        		max-height: 500px !important;
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
    <nav class="navbar navbar-expand-sm sticky-top navbar-light" style="background-color: white; padding-top:20px; padding-bottom:20px;">
    		<a class="navbar-brand" href="#"><h3 style="margin-left:25px; color:green; font-family: 'Raleway', sans-serif;">Permata Kranggan Cibubur</h3></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    				<span class="navbar-toggler-icon"></span>
  			</button>
  			<div class="collapse navbar-collapse" id="navbarText">
						<ul class="navbar-nav" style="margin-left:50px;">
      					<li class="nav-item">
        						<a class="nav-link" href="<?= base_url();?>home/index" style="padding-right:15px; font-family: 'Open Sans', sans-serif;">Home <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item active" style="padding-right:15px; padding-left:15px;">
										<a class="nav-link" href="<?= base_url();?>home/berita" style="color:green; font-family: 'Open Sans', sans-serif;">Berita</a>
								</li>
								<li class="nav-item" style="padding-right:15px; padding-left:15px;">
										<a class="nav-link page-scroll" href="<?= base_url();?>home/layanan" style="font-family: 'Open Sans', sans-serif;">Layanan</a>
								</li>
								<li class="nav-item" style="padding-right:15px; padding-left:15px;">
										<a class="nav-link" href="<?= base_url();?>home/organisasi" style="font-family: 'Open Sans', sans-serif;">Organisasi</a>
								</li>
								<li class="nav-item" style="padding-right:15px; padding-left:15px;">
										<a class="nav-link page-scroll" href="<?= base_url();?>home/index" style="font-family: 'Open Sans', sans-serif;">Tentang</a>
								</li>
								<li class="nav-item" style="padding-right:15px; padding-left:15px;">
										<a class="nav-link" href="<?= base_url();?>home/feedback" style="font-family: 'Open Sans', sans-serif;">Feedback</a>
								</li>
						</ul>
  			</div>
    </nav>

		<!-- Bagian Berita -->
		<section class="berita" id="berita" style="background-color: rgba(204,209,209,0.3); min-height:400px;">
				<div class="container">
						<div class="row">
								<div class="col-sm-12">
										<h2 class="mt-4 text-left">Berita & Acara Kegiatan</h2>
										<hr align=left style="align:left width:300px; border-top:3px solid #666;">
								</div>
						</div>
				</div>
  			<div class="container">
    				<div class="row">
      					<?php foreach($berita as $p):?>
      							<div class="col-md-4 mt-5">
        								<div class="card border-success">
          									<div class="card-body ">
            										<h5 class="card-title" style="font-family: Roboto; color:black;"><?= $p['judul'];?></h5>
            										<span class="badge badge-pill badge-success" style="font-family: Roboto; font-size:13px; ">published by admin</span>
            										<p style="color:black;">  <?= date("d/F/Y",strtotime($p['tanggal'])); ?></p>
            										<p class="card-text" style="font-family: Roboto; color:black;" ><?php $limiter_word = word_limiter($p['isi'],40) ?>
                             		<?= $limiter_word ?></p>
          									</div>
          									<div class="card-footer bg-transparent border-success"><a href="<?= base_url();?>home/detailBerita/<?= $p['id'];?>" class="btn btn-success">Read More</a></div>
        								</div>
      							</div>
      					<?php endforeach;?>
    				</div>
				</div>
  			<div class="container">
    				<div class="row">
                <div class="col-md-6 mt-5">
                    <?=$this->pagination->create_links();?>
                </div>
            </div>
				</div>
		</section>

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
