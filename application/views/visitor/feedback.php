<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title>Home - Permata Kranggan Cibubur</title>
    <style media="screen">
            .carousel-inner{
        width:100%;
        max-height: 500px !important;
        }
        /*css3 design scrollbar*/
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            background: #68BB15;
        }

        ::-webkit-scrollbar-thumb {
            background: #076B07;
        }

        html{
          position: relative;
        }
        body {
          margin-bottom: 79px;
        }
        .wrapper {
    		text-align: center;
		}

		.button {
			position: absolute;
			top: 50%;
		}
    </style>
</head>

<body>
    <nav class="navbar navbar-light" style="background-color: #076B07; border-bottom-left-radius: 50px; height:55px;">
        <h7 style="color:white; margin-left:25px;">permatakranggancibubur@gmail.com</h7>
    </nav>
    <nav class="navbar navbar-expand-sm sticky-top navbar-light" style="background-color: white; padding-top:20px; padding-bottom:20px;">
    	<a class="navbar-brand" href=""><h3 style="margin-left:25px; color:green;">Permata Kranggan Cibubur</h3></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
  		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav" style="margin-left:50px;">
				<li class="nav-item active">
					<a class="nav-link" href="<?= base_url();?>" style="padding-right:15px;">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active" style="padding-right:15px; padding-left:15px;">
					<a class="nav-link" href="<?= base_url();?>home/berita">Berita</a>
				</li>
				<li class="nav-item active" style="padding-right:15px; padding-left:15px;">
					<a class="nav-link page-scroll" href="#tentang">Layanan</a>
				</li>
				<li class="nav-item active" style="padding-right:15px; padding-left:15px;">
					<a class="nav-link" href="#">Organisasi</a>
				</li>
				<li class="nav-item active" style="padding-right:15px; padding-left:15px;">
					<a class="nav-link page-scroll" href="#tentang">Tentang</a>
				</li>
				<li class="nav-item active" style="padding-right:15px; padding-left:15px;">
					<a class="nav-link" href="#">Feedback</a>
				</li>
    		</ul>
  		</div>
    </nav>

	<section class="berita" id="berita" style="background-color: rgba(204,209,209,0.3); min-height:410px;">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="mt-4 text-left">Feedback</h2>
					<hr align=left style="align:left width:300px; border-top:3px solid #666;">
				</div>
			</div>
			<div class="boxes" style="border: 1px solid grey; padding: 10px; padding-bottom: 20px;">
				<p>Layanan feedback ini dibuat sebagai sarana untuk menyampaikan keluhan, saran, dan berdiskusi untuk memajukan Lingkungan Permata Kranggan Cibubur. Berikut link untuk pengisian feedback:</p>
				<div class="wrapper">
					<a href="https://forms.gle/2JbdGSoMk9pBY4c47" target=_blank class="btn btn-success" tabindex="-1" role="button" aria-disabled="true" align=center>Form Feedback Website</a><br><br>
					<a href="https://forms.gle/mcLpGfpVBWqj1NfJ8" target=_blank class="btn btn-success" tabindex="-1" role="button" aria-disabled="true" align=center>Form Feedback Organisasi</a><br><br>
					<a href="https://forms.gle/YVXW6t3FZnoSPtm46" target=_blank class="btn btn-success" tabindex="-1" role="button" aria-disabled="true" align=center>Form Feedback Lingkungan</a><br>
				</div>
			</div>
		</div>
	</section>

	<footer style="position:absolute; width:100%; bottom:0; height:79px; background-color: #076B07;">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 mt-3">
					<h6 style="color:white;"> &copy; All Right Reserved 2019</h6>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<h6 style="color:white;">Developed by Priajago Software Developer</h6>
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
