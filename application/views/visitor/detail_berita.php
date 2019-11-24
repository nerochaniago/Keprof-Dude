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

        html{
          position: relative;
        }
        body {
          margin-bottom: 79px;
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
        <a class="nav-link" href="<?= base_url();?>home/feedback">Feedback</a>
      </li>
    </ul>
  </div>
    </nav>


    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://sg1-cdn.pgimgs.com/projectnet-project/28478/ZPPHO.99189814.R800X800.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://rumahdijual.com/attachments/bekasi/3209528d1439358901-rumah-di-jual-sewa-cibubur-residence-depan-rs-permata-img_2663-1-.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://rumahdijual.com/attachments/cibubur/10424692d1490291023-dijual-rumah-view-taman-di-permata-kranggan-cibubur-ready-joko-permata-kranggan1.jpg" alt="Third slide">
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
<section class="berita" id="berita" style="background-color: white; min-height:600px;">
  <div class="container">

    <div class="row">
                <div class="col m-12 mt-2">
                      <h1> <?= $berita['judul'];?></p> </h1>
                      <span class="badge badge-pill badge-success" style="font-family: Roboto; font-size:13px; ">published by admin</span>
                      <p style="color:black;">  <?= date("d/F/Y",strtotime($berita['tanggal'])); ?></p>
                      <p style="color:black;"> <?= $berita['isi'];?></p>
                      <!-- <a href="<?= base_url('assets/file/') . $berita['gambar'];?>"class="btn btn-sm btn-danger mb-2">Download Attachment</a> -->
                      <iframe src="<?= site_url('assets/file/') . $berita['gambar'];?>" style="width:100%; height:500px; border: none;" scrolling="no">

                    </iframe>

                    <div class="card-action mb-2">
                        <a href="<?= base_url();?>home/index" class="btn btn-primary" style="font-family: Roboto;" >Back</a>
                    </div>
                  </div>


                </div>
            </div>





</section>


<footer style="position:absolute; width:100%; bottom:0; height:79px; background-color: #076B07;">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 mt-3">
        <h6 style="color:white; font-family: Roboto; font-size: 13px;"> &copy; All Right Reserved 2019</h6>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <h6 style="color:white;  font-family: Roboto; font-size: 13px;">Developed by Priajago Software Developer</h6>
      </div>
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
