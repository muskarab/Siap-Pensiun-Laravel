@extends('layouts.landing')
@section('content')
{{-- Home --}}
<header class="bg-gradient-dark" id="welcome">
    <div class="page-header min-vh-75" style="background-image: url('');">
    <span class="mask bg-gradient-secondary opacity-4"></span>
    <div class="container mt-8">
        <div class="row justify-content-center mb-8">
        <div class="col-lg-8 text-center mx-auto my-auto">
            <h1 class="text-white">Work with an amazing design</h1>
            <p class="lead mb-4 text-white opacity-8">We’re constantly trying to express ourselves and actualize our dreams. If you have the opportunity to play this game</p>
            <button type="submit" class="btn bg-white text-dark">Create Account</button>
            <h6 class="text-white mb-2 mt-5">Find us on</h6>
            <div class="d-flex justify-content-center">
            <a href="javascript:;"><i class="fab fa-facebook text-lg text-white me-4"></i></a>
            <a href="javascript:;"><i class="fab fa-instagram text-lg text-white me-4"></i></a>
            <a href="javascript:;"><i class="fab fa-twitter text-lg text-white me-4"></i></a>
            <a href="javascript:;"><i class="fab fa-google-plus text-lg text-white"></i></a>
            </div>
        </div>
        </div>
    </div>
    <div class="position-absolute w-100 z-index-0 bottom-0">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="moving-waves">
            <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
            <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
            <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
            <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,1" />
        </g>
        </svg>
    </div>
    </div>
</header>
{{-- End Home --}}
{{-- Penjelasan --}}
<section class="py-9">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="p-3 info-horizontal">
                    <div class="description ps-3">
                        <h4>Kumpulkan semua file akun / tunjangan pensiun</h4>
                        <p class="mb-0">Gabungkan semua akun Anda menjadi satu dasbor dan memiliki pandangan holistik tentang kesipan pensiun Anda. Selain jaminan solusi, pegawai di Indonesia dapat memiliki beberapa rekening Dana Pensiun Lembaga Keuangan (DPLK) karena karyawan berpindah dari satu pemberi kerja ke pemberi kerja lainnya. Karyawan berhak atas tunjangan UU ketenagakerjaan setelah mencapai masa pensiun normal.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid" src="../assets/img/illustrations/sign-up.png" alt="image" width="500">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid" src="../assets/img/illustrations/chat.png" alt="image" width="500">
            </div>
            <div class="col-lg-6">
                <div class="p-3 info-horizontal">
                    <div class="description ps-3">
                        <h4>Nilai pensiun Anda kesiapan dan tindakan</h4>
                        <p class="mb-0">Memiliki pandangan holistik tentang tabungan pensiun Anda memungkinkan Anda untuk memiliki kesiapan pensiun Anda dan menindaklanjuti. Berikan lump sum atau kontribusi rutin yang diperlukan saat Anda masih bekerja.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="p-3 info-horizontal">
                    <div class="description ps-3">
                        <h4>Pantau investasi Anda kinerja dan bertindak</h4>
                        <p class="mb-0">Gabungkan semua akun Anda menjadi satu dasbor dan memiliki pandangan holistik tentang kesipan pensiun Anda. Selain jaminan solusi, pegawai di Indonesia dapat memiliki beberapa rekening Dana Pensiun Lembaga Keuangan (DPLK) karena karyawan berpindah dari satu pemberi kerja ke pemberi kerja lainnya. Karyawan berhak atas tunjangan UU ketenagakerjaan setelah mencapai masa pensiun normal.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid" src="../assets/img/illustrations/sign-up.png" alt="image" width="500">
            </div>
        </div>
    </div>
</section>
{{-- End Penjelasan --}}
{{-- Carausel --}}
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @php
            $i = 1;
        @endphp
        @foreach ($sliders as $slider)
        <div class="carousel-item {{ $i == '1' ? 'active' : '' }}">
            @php
                $i++;
            @endphp
            <div class="page-header section-height-75 m-3 border-radius-xl">
            <span class="mask bg-gradient-dark"></span>
            <div class="container">
                <div class="row">
                <div class="col-lg-6 my-auto">
                    {{-- <h4 class="text-white mb-0 fadeIn1 fadeInBottom">{{ $slider->header }}</h4> --}}
                    <h1 class="text-white fadeIn2 fadeInBottom">{{ $slider->header }}</h1>
                    <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">{{ $slider->content }}</p>
                </div>
                <div class="col-lg-6 my-auto">
                    <img src="storage/sliders/{{$slider->image }}" class="img-fluid border-radius-lg" style="height: 300px">
                </div>
                </div>
            </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="section-height-75 position-absolute w-100 top-0">
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon position-absolute bottom-50" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon position-absolute bottom-50" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </a>
    </div>
</div>
{{-- End Carausel --}}
{{-- Tata cara pengajuan --}}
<section class="py-6" id="pengajuan">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
            <h3 class="mt-2">Tata Cara Pengajuan</h3>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="row justify-content-start">
                    <div class="col-md-4">
                    <div class="info">
                        <h5>Keuntungan Menarik</h5>
                        <p>Dapatkan keuntungan hingga 15% per tahun & cashflow mingguan pembayaran angsuran dapat diambil kapanpun.</p>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="info">
                        <h5>Keuntungan Menarik</h5>
                        <p>Dapatkan keuntungan hingga 15% per tahun & cashflow mingguan pembayaran angsuran dapat diambil kapanpun.</p>
                    </div>
                    </div>
                    <div class="col-md-4 mb-2">
                    <div class="info">
                        <h5>Keuntungan Menarik</h5>
                        <p>Dapatkan keuntungan hingga 15% per tahun & cashflow mingguan pembayaran angsuran dapat diambil kapanpun.</p>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="info">
                        <h5>Keuntungan Menarik</h5>
                        <p>Dapatkan keuntungan hingga 15% per tahun & cashflow mingguan pembayaran angsuran dapat diambil kapanpun.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End Tata cara pengajuan --}}
{{-- Ajukan Pembiayaan mu Sekarang --}}
<section class="py-6">
    <div class="container">
    <div class="row">
        <div class="col-md-6 m-auto">
        <h4>Be the first to see the news</h4>
        <p class="mb-4">
            Your company may not be in the software business,
            but eventually, a software company will be in your business.
        </p>
        <div class="row">
            <div class="col-8">
            {{-- <div class="input-group">
                <input type="text" class="form-control mb-sm-0" placeholder="Email Here...">
            </div> --}}
            </div>
            <div class="col-4 ps-0">
            <button type="button" class="btn bg-gradient-info mb-0 h-100 position-relative z-index-2" data-bs-toggle="modal" data-bs-target="#modal-form">Ajukan</button>
            </div>
        </div>
        </div>
        <div class="col-md-5 ms-auto">
        <div class="position-relative">
            <img class="max-width-50 w-100 position-relative z-index-2" src="../assets/img/illustrations/sign-up.png" alt="image">
        </div>
        </div>
    </div>
    </div>
</section>
{{-- End Ajukan Pembiayaan mu Sekarang --}}
{{-- Team --}}
<section class="pt-sm-8 pb-5 position-relative bg-gradient-dark" id="tim">
    <div class="position-absolute w-100 z-inde-1 top-0 mt-n3">
    <svg width="100%" viewBox="0 -2 1920 157" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <title>wave-down</title>
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g fill="#FFFFFF" fill-rule="nonzero">
            <g id="wave-down">
            <path d="M0,60.8320331 C299.333333,115.127115 618.333333,111.165365 959,47.8320321 C1299.66667,-15.5013009 1620.66667,-15.2062179 1920,47.8320331 L1920,156.389409 L0,156.389409 L0,60.8320331 Z" id="Path-Copy-2" transform="translate(960.000000, 78.416017) rotate(180.000000) translate(-960.000000, -78.416017) "></path>
            </g>
        </g>
        </g>
    </svg>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-md-8 text-start mb-5 mt-5">
        <h3 class="text-white z-index-1 position-relative">The Executive Team</h3>
        <p class="text-white opacity-8 mb-0">There’s nothing I really wanted to do in life that I wasn’t able to get good at. That’s my skill.</p>
        </div>
    </div>
    <div class="row">
        @foreach ($teams as $team)
        <div class="col-lg-6 col-12 mb-4">
        <div class="card card-profile mt-lg-0 mt-5 overflow-hidden">
            <div class="row">
            <div class="col-lg-4 col-md-6 col-12 pe-lg-0">
                <a href="javascript:;">
                <div class="p-3 pe-md-0">
                    <img class="w-100 border-radius-md" src="storage/teams/{{$team->avatar }}" alt="image">
                </div>
                </a>
            </div>
            <div class="col-lg-8 col-md-6 col-12 ps-lg-0 my-auto">
                <div class="card-body">
                <h5 class="mb-0">{{$team->name }}</h5>
                <h6 class="text-info">{{$team->position }}</h6>
                {{-- <p>Artist is a term applied to a person who engages in an activity deemed to be an art.</p> --}}
                </div>
            </div>
            </div>
        </div>
        </div>
        @endforeach
    </div>
    <div class="row">
    <div class="col-md-8 text-start mb-4 mt-4">
    <button class="btn bg-gradient-info mb-0 h-100 position-relative z-index-2">Selengkapnya</button>
    </div>
    </div>
    </div>
    <div class="position-absolute w-100 bottom-0 mn-n1">
    <svg width="100%" viewBox="0 -1 1920 166" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <title>wave-up</title>
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(0.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <g id="wave-up" transform="translate(0.000000, -5.000000)">
            <path d="M0,70 C298.666667,105.333333 618.666667,95 960,39 C1301.33333,-17 1621.33333,-11.3333333 1920,56 L1920,165 L0,165 L0,70 Z" fill="#f8f9fa"></path>
            </g>
        </g>
        </g>
    </svg>
    </div>
</section>
{{-- End Team --}}
{{-- Partnership --}}
<section class="bg-gray-100" id="count-stats">
    <div class="col-lg-8 text-center mx-auto my-auto">
        <h2 class="text-info z-index-1 position-relative">Partnership</h2>
        <div class="row mb-7">
            <div class="col-lg-2 col-md-4 col-6 mb-4">
            <img class="w-100 opacity-7" src="../assets/img/logos/gray-logos/logo-coinbase.svg" alt="logo">
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-4">
            <img class="w-100 opacity-7" src="../assets/img/logos/gray-logos/logo-nasa.svg" alt="logo">
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-4">
            <img class="w-100 opacity-7" src="../assets/img/logos/gray-logos/logo-netflix.svg" alt="logo">
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-4">
            <img class="w-100 opacity-7" src="../assets/img/logos/gray-logos/logo-pinterest.svg" alt="logo">
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-4">
            <img class="w-100 opacity-7" src="../assets/img/logos/gray-logos/logo-spotify.svg" alt="logo">
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-4">
            <img class="w-100 opacity-7" src="../assets/img/logos/gray-logos/logo-vodafone.svg" alt="logo">
            </div>
        </div>
    </div>
</section>
{{-- End Partnership --}}
{{-- Artikel --}}
<section class="py-6" id="artikel">
    <div class="container">
    <div class="row">
        <div class="col-sm-3">
        <h3 class="mb-3">Artikel Terkini</h3>
        </div>
    </div>
    <div class="row">
        <div class="card-group">
            <div class="row">
                @foreach ($articles as $article)
                <div class="col col-sm-4">
                    <div class="card">
                        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                        <a href="javascript:;" class="d-block">
                            <img src="storage/articles/{{$article->image }}" class="img-fluid border-radius-lg" style="height: 200px">
                        </a>
                        </div>
                        <div class="card-body pt-2">
                        <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">{{ $article->created_at }}</span>
                        <a href="javascript:;" class="card-title h5 d-block text-darker">{{ $article->header }}</a>
                        <p class="card-description mb-4">{!! Str::limit($article->content, 200, $end = '...') !!}</p>
                        {{-- <div class="author align-items-center">
                            <img src="./assets/img/team-2.jpg" alt="..." class="avatar shadow">
                            <div class="name ps-3">
                            <span>Mathew Glock</span>
                            <div class="stats">
                                <small>Posted on 28 February</small>
                            </div>
                            </div>
                        </div> --}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 text-start">
        <a href="{{ route('articles_landing_page') }}" class="btn bg-gradient-info mb-0 h-100 position-relative z-index-2">Selengkapnya</a>
        </div>
    </div>
    </div>
</section>
{{-- End Artikel --}}
{{-- Testimoni --}}
<section class="py-6" id="testimoni">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
            <h3 class="mt-2">Apa Kata Mereka</h3>
            </div>
        </div>
        <div class="row">
            <div id="carouselTestimonies" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @php
                        $data_nama = [];
                        $data_text = [];
                        $data_avatar = [];
                        $j = 0;
                        $i = 1;
                        $jumlah_slide = $count_testimoni / 3;
                        $cek_jml_slide = 0;
                        $cek_jml_cart = 0;
                    @endphp
                    @foreach ($testimonies as $testimoni)
                        @php
                            $data_nama[$j] = $testimoni->name;
                            $data_text[$j] = $testimoni->text;
                            $data_avatar[$j] = $testimoni->avatar;
                            $j++;
                        @endphp
                    @endforeach
                    @while ($cek_jml_slide < $jumlah_slide)
                        <div class="carousel-item {{ $i == '1' ? 'active' : '' }}">
                            @php
                                $i++;
                            @endphp
                            <div class="page-header section-height-75 m-3 border-radius-xl">
                            <span class="mask bg-gradient-dark"></span>
                            <div class="container">
                                <div class="card-group">
                                    <div class="row text-center">
                                        
                                    
                        @php
                            $cek_jml_slide++;
                            $cek_jml_cart_slide = 0;
                        @endphp
                        @while ($cek_jml_cart_slide < 3 && $cek_jml_cart < $count_testimoni)
                                    <div class="col-sm-3 card me-2" style="border-radius: 3%;">
                                        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                                        <a href="javascript:;" class="d-block">
                                            <img src="storage/testimonies/{{ $data_avatar[$cek_jml_cart] }}" class="img-fluid border-radius-lg" style="border-radius: 50%; height: 250px; width: 250px; margin: auto; border: 1px solid black;">
                                        </a>
                                        </div>
                                        <div class="card-body pt-2">
                                        <a href="javascript:;" class="card-title h5 d-block text-darker">
                                            {{ $data_nama[$cek_jml_cart] }}
                                        </a>
                                        <p class="card-description mb-4">
                                            {{ $data_text[$cek_jml_cart] }}
                                        </p>
                                        </div>
                                        </div>
                                    
                        @php
                            $cek_jml_cart++;
                            $cek_jml_cart_slide++;
                        @endphp
                        @endwhile
                        </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    @endwhile
                        
                </div>
                <div class="section-height-75 position-absolute w-100 top-0">
                <a class="carousel-control-prev" href="#carouselTestimonies" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon position-absolute bottom-50" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselTestimonies" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon position-absolute bottom-50" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End Testimoni --}}

{{-- Modal Form --}}
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-body p-0">
            <div class="card card-plain">
            {{-- <div class="card-header pb-0 text-left">
                <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
                <p class="mb-0">Enter your email and password to sign in</p>
            </div> --}}
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
                    {{-- <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div> --}}
                    <div class="text-center">
                        <button type="submit" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Ajukan Sekarang</button>
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