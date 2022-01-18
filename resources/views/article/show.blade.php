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
            <li><a class="nav-link scrollto" href="/#hero">Beranda</a></li>
            <li><a class="nav-link scrollto" href="/#about">Tentang Kami</a></li>
            {{-- <li><a class="nav-link scrollto" href="/#pengajuan">Ajukan</a></li> --}}
            <li><a class="nav-link scrollto" href="/#team">Tim</a></li>
            <li><a class="nav-link scrollto" href="/#testimonials">Testimoni</a></li>
            <li><a class="nav-link scrollto active" href="/#article">Artikel</a></li>
            <li><a class="nav-link scrollto" href="/#faq">Bantuan</a></li>
            {{-- <li><a class="nav-link scrollto" href="/#contact">Kontak</a></li> --}}
            <li><a class="getstarted scrollto" href="#">Ajukan</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->
    @foreach ($article as $article)
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ route('welcome') }}">Beranda</a></li>
                    <li><a href="{{ route('articles_landing_page') }}">Artikel</a></li>
                </ol>
                <h2>{{ $article->header }}</h2>

            </div>
        </section>
        <!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

                <div class="entry-img">
                    <img src="/storage/articles/{{ $article->image }}" alt="" class="img-fluid">
                </div>

              <h2 class="entry-title">
                <a href="blog-single.html">{{ $article->header }}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">Admin</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{ $article->created_at->format('d-m-Y') }}</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                 {!! $article->content !!}
                </p>
              </div>

            </article><!-- End blog entry -->

          </div><!-- End blog entries list -->

            <div class="col-lg-4">

                <div class="sidebar">

                    <h3 class="sidebar-title">Search</h3>
                    <div class="sidebar-item search-form">
                        <form action="">
                            <input type="text">
                            <button type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                    <!-- End sidebar search formn-->

                    <h3 class="sidebar-title">Categories</h3>
                    <div class="sidebar-item categories">
                        <ul>
                            <li><a href="#">General <span>(25)</span></a></li>
                            <li><a href="#">Lifestyle <span>(12)</span></a></li>
                            <li><a href="#">Travel <span>(5)</span></a></li>
                            <li><a href="#">Design <span>(22)</span></a></li>
                            <li><a href="#">Creative <span>(8)</span></a></li>
                            <li><a href="#">Educaion <span>(14)</span></a></li>
                        </ul>
                    </div>
                    <!-- End sidebar categories-->

                    <h3 class="sidebar-title">Recent Posts</h3>
                    <div class="sidebar-item recent-posts">
                        <div class="post-item clearfix">
                            <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                            <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="assets/img/blog/blog-recent-2.jpg" alt="">
                            <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="assets/img/blog/blog-recent-3.jpg" alt="">
                            <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="assets/img/blog/blog-recent-4.jpg" alt="">
                            <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="assets/img/blog/blog-recent-5.jpg" alt="">
                            <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                    </div>
                    <!-- End sidebar recent posts-->

                    <h3 class="sidebar-title">Tags</h3>
                    <div class="sidebar-item tags">
                        <ul>
                            <li><a href="#">App</a></li>
                            <li><a href="#">IT</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Mac</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Office</a></li>
                            <li><a href="#">Creative</a></li>
                            <li><a href="#">Studio</a></li>
                            <li><a href="#">Smart</a></li>
                            <li><a href="#">Tips</a></li>
                            <li><a href="#">Marketing</a></li>
                        </ul>
                    </div>
                    <!-- End sidebar tags-->

                </div>
                <!-- End sidebar -->

            </div>
            <!-- End blog sidebar -->
        </div>

      </div>
    </section><!-- End Blog Single Section -->
    </main>
    <!-- End #main -->
    @endforeach
@endsection