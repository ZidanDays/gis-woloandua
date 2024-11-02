<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Peta Zona Nilai Tanah - Woloan Dua</title>

  <link rel="stylesheet" href="css/vendor.css">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <!-- Link Bootstrap's CSS and Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <link rel="stylesheet" href="assets-landing/style.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Scripts -->
  <script src="assets-landing/js/modernizr.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <!-- Leaflet JS -->
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

  <!-- Leaflet.js library to load shapefile .zip data -->
  <script src="https://unpkg.com/shpjs@latest/dist/shp.min.js"></script>

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />



  <!-- Leaflet Image untuk mengambil snapshot peta -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-image/0.4.0/leaflet-image.min.js"></script>
<!-- JSZip untuk mengompres gambar ke dalam ZIP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.7.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>




</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example2" tabindex="0">

  <!-- Navbar Start -->
  <header id="nav" class="site-header position-fixed text-white bg-dark">
    <nav id="navbar-example2" class="navbar navbar-expand-lg py-2">
      <div class="container">
        <a class="navbar-brand" href="./index.html">
          <img src="assets-landing/images/2.png" alt="Logo" class="img-fluid logo-responsive" style="width: 50%;">
        </a>
        <button class="navbar-toggler text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
          <ion-icon name="menu-outline" style="font-size: 30px;"></ion-icon>
        </button>
        
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          @include('partials-landing.header')
        </div>
      </div>
    </nav>
  </header>

  

  <!-- Content Container -->
  @yield('container')

  <!-- Footer -->
  @include('partials-landing.footer')


  <script src="assets-landing/js/jquery-1.11.0.min.js"></script>
  <script src="assets-landing/js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>
