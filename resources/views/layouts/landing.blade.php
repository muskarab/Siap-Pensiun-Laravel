<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Siap-Pensiun
    </title>
    <!-- Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css" rel="stylesheet" />
    <!-- Alpine -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    @livewireStyles
</head>

<body>
    <!-- Navbar Transparent -->
    {{-- <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent">
        <div class="container">
        <a class="navbar-brand  text-white" rel="tooltip" data-placement="bottom" target="_blank">
            Siap Pensiun
        </a>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav navbar-nav-hover mx-auto">
                <li class="nav-item px-3">
                    <a class="nav-link">Beranda</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link">Tentang Kami</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="#pengajuan">Ajukan</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link">Tim</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link">Tesimoni</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="{{ route('articles_landing_page') }}">Artikel</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link">Bantuan</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <a href="{{ route('login') }}" class="btn  btn-white  mb-0">Login</a>
            </ul>
        </div>
    </nav> --}}
    <!-- Navbar Dark -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-dark z-index-3 py-3 fixed-top">
    <div class="container">
        <a class="navbar-brand text-white" href="{{ route('welcome') }}">
        Siap Pensiun
        </a>
        <a href="https://www.creative-tim.com/product/soft-ui-design-system-pro#pricingCard" class="btn btn-sm  bg-gradient-primary  btn-round mb-0 ms-auto d-lg-none d-block">Buy Now</a>
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
        </span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav navbar-nav-hover mx-auto">
                <li class="nav-item px-3">
                    <a class="nav-link" href="{{ route('welcome') }}">Beranda</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link">Tentang Kami</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="#pengajuan">Ajukan</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="#tim">Tim</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="#testimoni">Tesimoni</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="#artikel">Artikel</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link">Bantuan</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <a href="{{ route('login') }}" class="btn  btn-white  mb-0">Login</a>
            </ul>
        </div>
    </div>
    </nav>
<!-- End Navbar -->
    <!-- End Navbar -->
    @yield('content')

     <footer class="footer pt-5 mt-5">
        <hr class="horizontal dark mb-5">
        <div class="container">
        <div class=" row">
            <div class="col-md-3 mb-4 ms-auto">
            <div>
                <h6 class="text-gradient text-primary font-weight-bolder">Soft UI Design System</h6>
            </div>
            <div>
                <h6 class="mt-3 mb-2 opacity-8">Social</h6>
                <ul class="d-flex flex-row ms-n3 nav">
                <li class="nav-item">
                    <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim/" target="_blank">
                    <i class="fab fa-facebook text-lg opacity-8"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">
                    <i class="fab fa-twitter text-lg opacity-8"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pe-1" href="https://dribbble.com/creativetim" target="_blank">
                    <i class="fab fa-dribbble text-lg opacity-8"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank">
                    <i class="fab fa-github text-lg opacity-8"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w" target="_blank">
                    <i class="fab fa-youtube text-lg opacity-8"></i>
                    </a>
                </li>
                </ul>
            </div>
            </div>
            <div class="col-md-2 col-sm-6 col-6 mb-4">
            <div>
                <h6 class="text-gradient text-primary text-sm">Company</h6>
                <ul class="flex-column ms-n3 nav">
                <li class="nav-item">
                    <a class="nav-link" href="https://www.creative-tim.com/presentation" target="_blank">
                    About Us
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.creative-tim.com/templates/free" target="_blank">
                    Freebies
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.creative-tim.com/templates/premium" target="_blank">
                    Premium Tools
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.creative-tim.com/blog" target="_blank">
                    Blog
                    </a>
                </li>
                </ul>
            </div>
            </div>
            <div class="col-md-2 col-sm-6 col-6 mb-4">
            <div>
                <h6 class="text-gradient text-primary text-sm">Resources</h6>
                <ul class="flex-column ms-n3 nav">
                <li class="nav-item">
                    <a class="nav-link" href="https://iradesign.io/" target="_blank">
                    Illustrations
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.creative-tim.com/bits" target="_blank">
                    Bits & Snippets
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.creative-tim.com/affiliates/new" target="_blank">
                    Affiliate Program
                    </a>
                </li>
                </ul>
            </div>
            </div>
            <div class="col-md-2 col-sm-6 col-6 mb-4">
            <div>
                <h6 class="text-gradient text-primary text-sm">Help & Support</h6>
                <ul class="flex-column ms-n3 nav">
                <li class="nav-item">
                    <a class="nav-link" href="https://www.creative-tim.com/contact-us" target="_blank">
                    Contact Us
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.creative-tim.com/knowledge-center" target="_blank">
                    Knowledge Center
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://services.creative-tim.com/?ref=ct-soft-ui-footer" target="_blank">
                    Custom Development
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.creative-tim.com/sponsorships" target="_blank">
                    Sponsorships
                    </a>
                </li>
                </ul>
            </div>
            </div>
            <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
            <div>
                <h6 class="text-gradient text-primary text-sm">Legal</h6>
                <ul class="flex-column ms-n3 nav">
                <li class="nav-item">
                    <a class="nav-link" href="https://www.creative-tim.com/terms" target="_blank">
                    Terms & Conditions
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.creative-tim.com/privacy" target="_blank">
                    Privacy Policy
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.creative-tim.com/license" target="_blank">
                    Licenses (EULA)
                    </a>
                </li>
                </ul>
            </div>
            </div>
            <div class="col-12">
            <div class="text-center">
                <p class="my-4 text-sm">
                All rights reserved. Copyright © <script>
                    document.write(new Date().getFullYear())
                </script> Soft UI Design System by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                </p>
            </div>
            </div>
        </div>
        </div>
    </footer>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
  <script src="../assets/js/plugins/countup.min.js"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="../assets/js/plugins/parallax.min.js"></script>
  <!-- Control Center for Soft UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="../assets/js/soft-design-system.min.js?v=1.0.5" type="text/javascript"></script>
  <script>
    // get the element to animate
    var element = document.getElementById('count-stats');
    var elementHeight = element.clientHeight;

    // listen for scroll event and call animate function

    document.addEventListener('scroll', animate);

    // check if element is in view
    function inView() {
      // get window height
      var windowHeight = window.innerHeight;
      // get number of pixels that the document is scrolled
      var scrollY = window.scrollY || window.pageYOffset;
      // get current scroll position (distance from the top of the page to the bottom of the current viewport)
      var scrollPosition = scrollY + windowHeight;
      // get element position (distance from the top of the page to the bottom of the element)
      var elementPosition = element.getBoundingClientRect().top + scrollY + elementHeight;

      // is scroll position greater than element position? (is element in view?)
      if (scrollPosition > elementPosition) {
        return true;
      }

      return false;
    }

    var animateComplete = true;
    // animate element when it is in view
    function animate() {

      // is element in view?
      if (inView()) {
        if (animateComplete) {
          if (document.getElementById('state1')) {
            const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
            if (!countUp.error) {
              countUp.start();
            } else {
              console.error(countUp.error);
            }
          }
          if (document.getElementById('state2')) {
            const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
            if (!countUp1.error) {
              countUp1.start();
            } else {
              console.error(countUp1.error);
            }
          }
          if (document.getElementById('state3')) {
            const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
            if (!countUp2.error) {
              countUp2.start();
            } else {
              console.error(countUp2.error);
            };
          }
          animateComplete = false;
        }
      }
    }

    if (document.getElementById('typed')) {
      var typed = new Typed("#typed", {
        stringsElement: '#typed-strings',
        typeSpeed: 90,
        backSpeed: 90,
        backDelay: 200,
        startDelay: 500,
        loop: true
      });
    }
  </script>
  <script>
    if (document.getElementsByClassName('page-header')) {
      window.addEventListener('scroll', function() {
        var scrollPosition = window.pageYOffset;
        var bgParallax = document.querySelector('.page-header');
        var limit = bgParallax.offsetTop + bgParallax.offsetHeight;
        if (scrollPosition > bgParallax.offsetTop && scrollPosition <= limit) {
          bgParallax.style.backgroundPositionY = (50 - 10 * scrollPosition / limit * 3) + '%';
        } else {
          bgParallax.style.backgroundPositionY = '50%';
        }
      });
    }
  </script>
</body>

</html>
