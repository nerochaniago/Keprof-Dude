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
    <div class="col-sm-12">
      <hr style=" border:0px; border-top: 3px double #076B07">
    </div>

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
<section class="berita" id="berita" style="background-color: rgba(204,209,209,0.3); min-height:600px;">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="mt-4 text-center">BERITA TERBARU</h2>
        <hr style="width:300px; border-top:3px solid #666;">
      </div>
    </div>
    <div class="row">
          <div class="col-md-4 col-sm-12">
                    <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="..." alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
          </div>
          <div class="col-md-4 col-sm-12">
                    <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="..." alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
          </div>
          <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="..." alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
          </div>
          <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="..." alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
          </div>
          <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="..." alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
          </div>
          <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="..." alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
          </div>
    </div>
  </div>

</section>
<section class="tentang" id="tentang" style="min-height:500px;">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="mt-4 text-center">Tentang</h2>
        <hr style="width:300px; border-top:3px solid #666;">
      </div>
    </div>
    <div class="row no-gutters">
      <div class="col-md-6">
        <div class="card" style="width:  820; height:721; background-color: #076B07; ">
          <div class="card-body">
            <h5 class="card-title" style="color:white;">LAYANAN</h5>
            <hr style="color:white; border-top: 1px solid white;">
          <p class="card-text" style="color:white;">
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
      <div class="card" style="width: 820; height:721; background-color: #68BB15">
        <div class="card-body">
        <h5 class="card-title" style="color:white;">FEEDBACK</h5>
        <hr style="color:white; border-top: 1px solid white;">
        <p class="card-text" style="color:white;">
          Layanan feedback ini dibuat sebagai sarana untuk<br /> menyampaikan keluhan atau berdiskusi untuk <br />memajukan Lingkungan Permata Kranggan Cibubur.<br />
          Feedback bisa disampaikan untuk website ini, <br />
          kepengurusan organisasi, dan lingkungan sekitar. <br />
          Untuk melakukan pengisian dapat menuju ke laman Feedback. <br />
          <a href="#">FEEDBACK</a>
          <br /><br />
        </p>
      </div>
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
