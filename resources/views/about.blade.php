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
            <li><a class="nav-link scrollto active">Tentang Kami</a></li>
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

      <div class="container mt-5" data-aos="fade-up">

        <header class="section-header">
          {{-- <h2>Our Values</h2> --}}
          <p>Tentang Kami</p>
        </header>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <p>Siap Pensiun merupakan platform milik PT. Eka Akar Jati yang menyediakan fasilitas pembiayaan syariah dan berafiliasi langsung dengan PT Bank Syariah Indonesia Tbk. Siap Pensiun merupakan platform pembiayaan online pertama yang mengakomodir kebutuhan para Aparatur Sipil Negara di Indonesia dan Karyawan BUMN dalam mengakses informasi, literasi keuangan untuk mempersiapkan masa depan penuh peluang</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <p>Siap Pensiun merupakan platform milik PT. Eka Akar Jati yang menyediakan fasilitas pembiayaan syariah dan berafiliasi langsung dengan PT Bank Syariah Indonesia Tbk. Siap Pensiun merupakan platform pembiayaan online pertama yang mengakomodir kebutuhan para Aparatur Sipil Negara di Indonesia dan Karyawan BUMN dalam mengakses informasi, literasi keuangan untuk mempersiapkan masa depan penuh peluang</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <p>Siap Pensiun merupakan platform milik PT. Eka Akar Jati yang menyediakan fasilitas pembiayaan syariah dan berafiliasi langsung dengan PT Bank Syariah Indonesia Tbk. Siap Pensiun merupakan platform pembiayaan online pertama yang mengakomodir kebutuhan para Aparatur Sipil Negara di Indonesia dan Karyawan BUMN dalam mengakses informasi, literasi keuangan untuk mempersiapkan masa depan penuh peluang</p>
            </div>
          </div>

        </div>

      </div>

    </section>
    <!-- End Values Section -->
</main><!-- End #main -->
@endsection