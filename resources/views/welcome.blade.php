@extends('layouts.guest.app')
@section('content')
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="#" class="logo d-flex align-items-center">
        <img src="{{ asset('templates') }}/img/logo-siap-pensiun-panjang.png" alt="">
        {{-- <span>Siap Pensiun</span> --}}
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
          {{-- <li><a class="nav-link scrollto" href="#pengajuan">Ajukan</a></li> --}}
          <li><a class="nav-link scrollto" href="#team">Tim</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Testimoni</a></li>
          <li><a class="nav-link scrollto" href="#article">Artikel</a></li>
          <li><a class="nav-link scrollto" href="#faq">Bantuan</a></li>
          {{-- <li><a class="nav-link scrollto" href="#contact">Kontak</a></li> --}}
          <li><a class="getstarted scrollto" href="#">Ajukan</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Bakti kami kepada Aparatur Sipil Negara dan Karyawan Badan Usaha Milik Negara</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Demi memberikan informasi, literasi dan solusi pembiayaan kepada ASN dan BUMN untuk mempersiapkan masa pensiun penuh peluang</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              {{-- <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a> --}}
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{ asset('templates') }}/img/Aset Web SIAPENSIUN.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              {{-- <h3>Teantang Kami</h3> --}}
              <h2>Tentang Kami</h2>
              <p>
                Siap Pensiun merupakan platform milik PT. Eka Akar Jati yang menyediakan fasilitas pembiayaan syariah dan berafiliasi langsung dengan PT Bank Syariah Indonesia Tbk. Siap Pensiun merupakan platform pembiayaan online pertama yang mengakomodir kebutuhan para Aparatur Sipil Negara di Indonesia dan Karyawan BUMN dalam mengakses informasi, literasi keuangan untuk mempersiapkan masa depan penuh peluang
              </p>
              <div class="text-center text-lg-start">
                <a href="{{ route('about') }}" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Baca Selengkapnya</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ asset('templates') }}/img/Aset Web SIAPENSIUN6.jpg" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section>
    <!-- End About Section -->

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
              <img src="{{ asset('templates') }}/img/Aset Web SIAPENSIUN2.png" class="img-fluid" alt="">
              <h3>Literasi Keuangan</h3>
              <p>Dapatkan informasi mengenai literasi keuangan untuk mempersiapkan masa pensiun</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <img src="{{ asset('templates') }}/img/Aset Web SIAPENSIUN3.png" class="img-fluid" alt="">
              <h3>Inspirasi Bisnis</h3>
              <p>Dapatkan inspirasi dan tips bisnis untuk meraih peluang peluang baru</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <img src="{{ asset('templates') }}/img/Aset Web SIAPENSIUN4.png" class="img-fluid" alt="">
              <h3>Akses Pembiayaan</h3>
              <p>Dengan berafiliasi langsung dengan Bank Syariah Indonesia, kami dapat membantu mendapatkan akses pembiayaan syariah untuk mendukung persiapan pensiun yang penuh peluang</p>
            </div>
          </div>

        </div>

      </div>

    </section>
    <!-- End Values Section -->

    <!-- ======= Features Section ======= -->
    <section id="pengajuan" class="features">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          {{-- <h2>Features</h2> --}}
          <p>Tata Cara Pengajuan</p>
        </header>

        {{-- <div class="row">

          <div class="col-lg-6">
            <img src="{{ asset('templates') }}/img/features.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
            <div class="row align-self-center gy-4">

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Eos aspernatur rem</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Facilis neque ipsa</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Volup amet voluptas</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Rerum omnis sint</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Alias possimus</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Repellendus mollitia</h3>
                </div>
              </div>

            </div>
          </div>

        </div> <!-- / row --> --}}

        <!-- Feature Icons -->
        <div class="row feature-icons" data-aos="fade-up">
          {{-- <h3>Ratione mollitia eos ab laudantium rerum beatae quo</h3> --}}

          <div class="row">

            <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
              <img src="{{ asset('templates') }}/img/Aset Web SIAPENSIUN5.png" class="img-fluid p-4" alt="">
            </div>

            <div class="col-xl-8 d-flex content">
              <div class="row align-self-center gy-4">

                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="ri-book-read-line"></i>
                  <div>
                    <h4>Pahami prosedur persyaratan pembiayaan</h4>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="ri-ball-pen-line"></i>
                  <div>
                    <h4>Isi form pada menu pengajuan pembiayaan</h4>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="ri-timer-line"></i>
                  <div>
                    <h4>Tunggu dihubungi oleh tim kami</h4>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="ri-team-line"></i>
                  <div>
                    <h4>Anda akan didatangi oleh marketing kami untuk pengumpulan berkas</h4>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="ri-computer-line"></i>
                  <div>
                    <h4>Pengajuan anda akan diproses oleh tim Bank Syariah Indonesia setelah berkas lengkap</h4>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                  <i class="ri-money-dollar-box-line"></i>
                  <div>
                    <h4>Dana berhasil dicairkan</h4>
                  </div>
                </div>

              </div>
            </div>

          </div>

        </div><!-- End Feature Icons -->

        <!-- Feature Tabs -->
        <div class="row feture-tabs" data-aos="fade-up">
          <div class="col-lg-8">
            <h3>Konsultasikan Kebutuhanmu Sekarang!</h3>

            <!-- Tabs -->
            {{-- <ul class="nav nav-pills mb-3">
              <li>
                <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Pensiun</a>
              </li>
            </ul> --}}
            <!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">
              {{-- <div class="tab-pane fade show active" id="tab1"> --}}
                <div class="d-flex align-items-center mb-2">
                  <h4>Awali langkah persiapan masa pensiunmu yang penuh peluang dengan bergabung menjadi Bagian Bank Syariah Indonesia</h4>
                </div>
                <div class="row">
                    <div class="col md-3">
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modal-form" style="background: #0ba59d;">Ajukan Sekarang</button>
                    </div>
                </div>
              {{-- </div><!-- End Tab 1 Content --> --}}
            </div>

          </div>

          <div class="col-lg-4">
            <img src="{{ asset('templates') }}/img/Aset Web SIAPENSIUN7.png" class="img-fluid" alt="" width="500">
          </div>

        </div><!-- End Feature Tabs -->

      </div>

    </section>
    <!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    {{-- <section id="services" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Services</h2>
          <p>Veritatis et dolores facere numquam et praesentium</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <i class="ri-discuss-line icon"></i>
              <h3>Nesciunt Mete</h3>
              <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
              <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box orange">
              <i class="ri-discuss-line icon"></i>
              <h3>Eosle Commodi</h3>
              <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
              <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box green">
              <i class="ri-discuss-line icon"></i>
              <h3>Ledo Markt</h3>
              <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
              <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-box red">
              <i class="ri-discuss-line icon"></i>
              <h3>Asperiores Commodi</h3>
              <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
              <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-box purple">
              <i class="ri-discuss-line icon"></i>
              <h3>Velit Doloremque.</h3>
              <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
              <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box pink">
              <i class="ri-discuss-line icon"></i>
              <h3>Dolori Architecto</h3>
              <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
              <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>

    </section>
    <!-- End Services Section --> --}}

    <!-- ======= Team Section ======= -->
    {{-- <section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Tim</h2>
          <p>Tim Kami</p>
        </header>

        <div class="row gy-4">
            @foreach ($teams as $item)
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                <div class="member-img">
                    <img src="storage/teams/{{$item->avatar }}" class="img-fluid" alt="">
                    <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="member-info">
                    <h4>{{ $item->name }}</h4>
                    <span>{{ $item->position }}</span>
                    <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
                </div>
                </div>
            </div>
            @endforeach
        </div>

      </div>

    </section> --}}
    <!-- End Team Section -->

    <!-- ======= Testimonials Section ======= -->
    {{-- <section id="testimonials" class="testimonials">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Testimoni</h2>
          <p>Apa Kata Mereka ?</p>
        </header>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">
            @foreach ($testimonies as $testimonie)
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  {{ $testimonie->text }}
                </p>
                <div class="profile mt-auto">
                  <img src="storage/testimonies/{{$testimonie->avatar }}" class="testimonial-img" alt="">
                  <h3>{{ $testimonie->name }}</h3>
                  <h4>Ceo &amp; Founder</h4>
                </div>
              </div>
            </div>
            @endforeach

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section> --}}
    <!-- End Testimonials Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          {{-- <h2>Our Clients</h2> --}}
          <p>Partnership</p>
        </header>
        <div class="row d-flex justify-content-center align-items-center">
          <div class="col-md-3 text-center">
            <img src="{{ asset('templates') }}/img/clients/logo-bsi-color.svg" class="img-partner" alt="">
          </div>
          <div class="col-md-3 text-center">
            <img src="{{ asset('templates') }}/img/clients/logo-eka-black.png" class="img-partner" alt="">
          </div>
        </div>

        {{-- <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center"> --}}
            {{-- <div class="swiper-slide"><img src="{{ asset('templates') }}/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('templates') }}/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('templates') }}/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('templates') }}/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('templates') }}/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('templates') }}/img/clients/client-6.png" class="img-fluid" alt=""></div> --}}
          {{-- </div>
          <div class="swiper-pagination"></div>
        </div>
      </div> --}}

    </section>
    <!-- End Clients Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="article" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          {{-- <h2>Blog</h2> --}}
          <p>Artikel Terkini</p>
        </header>

        <div class="row">
            @foreach ($articles as $article)
            <div class="col-lg-4">
                <div class="post-box">
                    <div class="post-img"><img src="storage/articles/{{$article->image }}" class="img-fluid" alt=""></div>
                    <span class="post-date">{{$article->created_at->format('d-m-Y') }}</span>
                    <h3 class="post-title">{{ $article->header }}</h3>
                    <a href="/article/{{ $article->slug }}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            @endforeach
            <div class="row text-center">
              <div class="col lg-2">
                <a href="{{ route('articles_landing_page') }}" class="btn btn-primary btn-sm" style="background: #0ba59d;">Semua artikel</a>
              </div>
            </div>
        </div>

      </div>

    </section>
    <!-- End Recent Blog Posts Section -->

    <!-- ======= F.A.Q Section ======= -->
    {{-- <section id="faq" class="faq">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Pertanyaan yang Sering Diajukan</p>
        </header>

        <div class="row">
          <div class="col-lg-6">
            <!-- F.A.Q List 1-->
            <div class="accordion accordion-flush" id="faqlist1">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    Non consectetur a erat nam at lectus urna duis?
                  </button>
                </h2>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                  </button>
                </h2>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                  </button>
                </h2>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-6">

            <!-- F.A.Q List 2-->
            <div class="accordion accordion-flush" id="faqlist2">

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                    Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                  </button>
                </h2>
                <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                    Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                  </button>
                </h2>
                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                    Varius vel pharetra vel turpis nunc eget lorem dolor?
                  </button>
                </h2>
                <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>

    </section> --}}
    <!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          {{-- <h2>Contact</h2> --}}
          <p>Hubungi Kami</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>Jl. Dawuhan Tegalgondo RT 24/06<br>Karangploso, Malang, Jawa Timur, 65152</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>0341-5032189</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>admin@ekakarjati.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section>
    <!-- End Contact Section -->

  </main><!-- End #main -->
  
  <button type="button" class="btn btn-call" id="fixedbutton" data-bs-toggle="modal" data-bs-target="#modalContact"><i class="fa fa-whatsapp"></i></button>
  {{-- Modal Form WA --}}
  <div class="modal fade" id="modalContact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="card-body">
                <div class="text-center">
                  {{-- <img id="img-modal-cs" src="https://sistemberkah.id/front/assets/about/illust-customerservice.png" alt="Customer Services"> --}}
                  <h5>Jika Ada Pertanyaan Lebih Lanjut Silahkan Hubungi</h5>
                  <p class="text-center">WA : 082335245956</p>
                  <a href="https://wa.me/6282335245956" class="btn btn-primary">Hubungi Sekarang</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
  {{-- EndModal Form --}}
  {{-- Modal Form Ajukan --}}
  <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card card-plain">
                <div class="card-body">
                    <form role="form text-left">
                        <label>Nama Lengkap</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Nama Lengkap" aria-label="Nama" aria-describedby="nama-addon" name="name" id="name">
                        </div>
                        <label>No HP / WhatsApp</label>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Masukan Nomor HP" aria-label="No" aria-describedby="no-addon" name="no_hp" id="no_hp">
                        </div>
                        <label>Kota</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Kota" aria-label="Kota" aria-describedby="kota-addon" name="kota" id="kota">
                        </div>
                        <label>Alamat Lengkap</label>
                        <div class="input-group mb-3">
                            <textarea class="form-control" aria-label="With textarea" rows="3" name="alamat" id="alamat"></textarea>
                        </div>
                        <label>Deskripsi Kebutuhan Pembiayaan</label>
                        <div class="input-group mb-3">
                            <textarea class="form-control" aria-label="With textarea" rows="3" name="kebutuhan" id="kebutuhan"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" style="background: #0ba59d;">Ajukan Sekarang</button>
                        </div>
                    </form>
                </div>
                {{-- <div class="card-footer text-center pt-0 px-lg-2 px-1">
                    <p class="mb-4 text-sm mx-auto">
                    Don't have an account?
                    <a href="javascript:;" class="text-info text-gradient font-weight-bold">Sign up</a>
                    </p>
                </div> --}}
                </div>
            </div>
          </div>
      </div>
  </div>
  {{-- EndModal Form --}}
@endsection