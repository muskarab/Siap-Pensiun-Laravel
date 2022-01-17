<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Siap Pensiun</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('templates') }}/img/favicon.png" rel="icon">
  <link href="{{ asset('templates') }}/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('templates') }}/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('templates') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('templates') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('templates') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('templates') }}/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('templates') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('templates') }}/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
@yield('content')
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="{{ asset('templates') }}/img/logo.png" alt="">
              <span>Siap Pensiunt</span>
            </a>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            {{-- <h4>Useful Links</h4> --}}
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#hero">Beranda</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#about">Tentang Kami</a></li>
              {{-- <li><i class="bi bi-chevron-right"></i> <a href="#pengajuan">Ajukan</a></li> --}}
              <li><i class="bi bi-chevron-right"></i> <a href="#team">Tim</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#testimonials">Testimoniy</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#article">Artikel</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#faq">Bantuan</a></li>
              {{-- <li><i class="bi bi-chevron-right"></i> <a href="#contact">Kontak</a></li> --}}
            </ul>
          </div>

          {{-- <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> --}}

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Kontak Kami</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  {{-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> --}}
<!-- Vendor JS Files -->
  <script src="{{ asset('templates') }}/vendor/purecounter/purecounter.js"></script>
  <script src="{{ asset('templates') }}/vendor/aos/aos.js"></script>
  <script src="{{ asset('templates') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('templates') }}/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('templates') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('templates') }}/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('templates') }}/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('templates') }}/js/main.js"></script>

</body>

</html>