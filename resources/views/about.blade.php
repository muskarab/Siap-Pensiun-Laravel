@extends('layouts.guest.app')
@section('content')
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="#" class="logo d-flex align-items-center">
            <img src="{{ asset('templates') }}/img/logo-siap-pensiun.png" alt="">
            <span>Siap Pensiun</span>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
            <li><a class="nav-link scrollto" href="/#hero">Beranda</a></li>
            <li><a class="nav-link scrollto active" href="/#about">Tentang Kami</a></li>
            {{-- <li><a class="nav-link scrollto" href="/#pengajuan">Ajukan</a></li> --}}
            <li><a class="nav-link scrollto" href="/#team">Tim</a></li>
            <li><a class="nav-link scrollto" href="/#testimonials">Testimoni</a></li>
            <li><a class="nav-link scrollto" href="/#article">Artikel</a></li>
            <li><a class="nav-link scrollto" href="/#faq">Bantuan</a></li>
            {{-- <li><a class="nav-link scrollto" href="/#contact">Kontak</a></li> --}}
            <li><a class="getstarted scrollto" href="#">Ajukan</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->
 <main id="main">
    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          {{-- <h2>Our Values</h2> --}}
          <p>Apa yang Anda Dapatkan</p>
        </header>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <img src="{{ asset('templates') }}/img/values-1.png" class="img-fluid" alt="">
              <h3>Literasi Keuangan</h3>
              <p>Dapatkan informasi mengenai literasi keuangan untuk mempersiapkan masa pensiun</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <img src="{{ asset('templates') }}/img/values-2.png" class="img-fluid" alt="">
              <h3>Inspirasi Bisnis</h3>
              <p>Dapatkan inspirasi dan tips bisnis untuk meraih peluang peluang baru</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <img src="{{ asset('templates') }}/img/values-3.png" class="img-fluid" alt="">
              <h3>Akses Pembiayaan</h3>
              <p>Dengan berafiliasi langsung dengan Bank Syariah Indonesia, kami dapat membantu mendapatkan akses pembiayaan syariah untuk mendukung persiapan pensiun yang penuh peluang</p>
            </div>
          </div>

        </div>

      </div>

    </section>
    <!-- End Values Section -->
</main><!-- End #main -->
@endsection