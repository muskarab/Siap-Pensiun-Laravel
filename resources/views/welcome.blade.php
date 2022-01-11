@extends('layouts.landing')
@section('content')
{{-- Home --}}
<header class="bg-gradient-dark">
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
    <div class="carousel-item active">
        <div class="page-header section-height-75 m-3 border-radius-xl" style="background-image: url('https://images.unsplash.com/photo-1537511446984-935f663eb1f4?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1920&amp;q=80');">
        <span class="mask bg-gradient-dark"></span>
        <div class="container">
            <div class="row">
            <div class="col-lg-6 my-auto">
                <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Pricing Plans</h4>
                <h1 class="text-white fadeIn2 fadeInBottom">Work with the rockets</h1>
                <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">Wealth creation is an evolutionarily recent positive-sum game. Status is an old zero-sum game. Those attacking wealth creation are often just seeking status.</p>
            </div>
            </div>
        </div>
        </div>
        {{-- <div class="container-fluid px-3">
        <div class="row">
            <div class="col-lg-6">
            <div class="info-horizontal bg-gradient-primary border-radius-xl p-5">
                <div class="icon">
                <svg width="25px" height="25px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>office</title>
                    <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Rounded-Icons" transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                            <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                <g id="office" transform="translate(153.000000, 2.000000)">
                                    <path d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z" id="Path" opacity="0.6"></path>
                                    <path d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z" id="Shape"></path>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
                </div>
                <div class="description ps-5">
                <h5 class="text-white">Netflix's 'Shuffle Play' feature</h5>
                <p class="text-white">The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever.</p>
                <a href="javascript:;" class="text-white icon-move-right">
                    More about us
                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                </a>
                </div>
            </div>
            </div>
            <div class="col-lg-6">
            <div class="info-horizontal bg-light border-radius-xl p-5">
                <div class="icon">
                <svg class="text-primary" width="25px" height="25px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>ungroup</title>
                    <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Rounded-Icons" transform="translate(-2170.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                            <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                <g id="ungroup" transform="translate(454.000000, 151.000000)">
                                    <path class="color-background" d="M38.1818182,10.9090909 L32.7272727,10.9090909 L32.7272727,30.9090909 C32.7272727,31.9127273 31.9127273,32.7272727 30.9090909,32.7272727 L10.9090909,32.7272727 L10.9090909,38.1818182 C10.9090909,39.1854545 11.7236364,40 12.7272727,40 L38.1818182,40 C39.1854545,40 40,39.1854545 40,38.1818182 L40,12.7272727 C40,11.7236364 39.1854545,10.9090909 38.1818182,10.9090909 Z" id="Path"></path>
                                    <path class="color-foreground" d="M27.2727273,29.0909091 L1.81818182,29.0909091 C0.812727273,29.0909091 0,28.2781818 0,27.2727273 L0,1.81818182 C0,0.814545455 0.812727273,0 1.81818182,0 L27.2727273,0 C28.2781818,0 29.0909091,0.814545455 29.0909091,1.81818182 L29.0909091,27.2727273 C29.0909091,28.2781818 28.2781818,29.0909091 27.2727273,29.0909091 Z" id="Path"></path>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
                </div>
                <div class="description ps-5">
                <h5>Brave web browser</h5>
                <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever.</p>
                <a href="javascript:;" class="text-primary icon-move-right">
                    More about us
                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                </a>
                </div>
            </div>
            </div>
        </div>
        </div> --}}
    </div>
    <div class="carousel-item">
        <div class="page-header section-height-75 m-3 border-radius-xl" style="background-image: url('https://images.unsplash.com/photo-1543269865-cbf427effbad?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1920&amp;q=80');">
        <span class="mask bg-gradient-dark"></span>
        <div class="container">
            <div class="row">
            <div class="col-lg-6 my-auto">
                <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Our Team</h4>
                <h1 class="text-white fadeIn2 fadeInBottom">Work with the best</h1>
                <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">Free people make free choices. Free choices mean you get unequal outcomes. You can have freedom, or you can have equal outcomes. You can’t have both.</p>
            </div>
            </div>
        </div>
        </div>
        {{-- <div class="container-fluid px-3">
        <div class="row">
            <div class="col-lg-6">
            <div class="info-horizontal bg-light border-radius-xl p-5">
                <div class="icon">
                <svg class="text-info" width="25px" height="25px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>spaceship</title>
                    <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Rounded-Icons" transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                        <g id="spaceship" transform="translate(4.000000, 301.000000)">
                            <path class="color-foreground" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z" id="Shape"></path>
                            <path class="color-foreground" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z" id="Path"></path>
                            <path class="color-background" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z" id="color-2"></path>
                            <path class="color-background" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z" id="color-3"></path>
                        </g>
                        </g>
                    </g>
                    </g>
                </svg>
                </div>
                <div class="description ps-5">
                <h5>Netflix's 'Shuffle Play' feature</h5>
                <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever.</p>
                <a href="javascript:;" class="text-dark icon-move-right">
                    Learn more
                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                </a>
                </div>
            </div>
            </div>
            <div class="col-lg-6">
            <div class="info-horizontal bg-light border-radius-xl p-5">
                <div class="icon">
                <svg class="text-info" width="25px" height="25px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>spaceship</title>
                    <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Rounded-Icons" transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                        <g id="spaceship" transform="translate(4.000000, 301.000000)">
                            <path class="color-foreground" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z" id="Shape"></path>
                            <path class="color-foreground" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z" id="Path"></path>
                            <path class="color-background" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z" id="color-2"></path>
                            <path class="color-background" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z" id="color-3"></path>
                        </g>
                        </g>
                    </g>
                    </g>
                </svg>
                </div>
                <div class="description ps-5">
                <h5>Brave web browser</h5>
                <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever.</p>
                <a href="javascript:;" class="text-dark icon-move-right">
                    Learn more
                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                </a>
                </div>
            </div>
            </div>
        </div>
        </div> --}}
    </div>
    <div class="carousel-item">
        <div class="page-header section-height-75 m-3 border-radius-xl" style="background-image: url('https://images.unsplash.com/photo-1552793494-111afe03d0ca?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1920&amp;q=80');">
        <span class="mask bg-gradient-dark"></span>
        <div class="container">
            <div class="row">
            <div class="col-lg-6 my-auto">
                <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Office Places</h4>
                <h1 class="text-white fadeIn2 fadeInBottom">Work from home</h1>
                <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">You’re spending time to save money when you should be spending money to save time.</p>
            </div>
            </div>
        </div>
        </div>
        {{-- <div class="container-fluid px-3">
        <div class="row">
            <div class="col-lg-6">
            <div class="info-horizontal bg-light border-radius-xl p-5">
                <div class="icon">
                <svg class="text-danger" width="25px" height="25px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>document</title>
                    <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Rounded-Icons" transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                        <g id="document" transform="translate(154.000000, 300.000000)">
                            <path class="color-foreground" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" id="Path" opacity="0.603585379"></path>
                            <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z" id="Shape"></path>
                        </g>
                        </g>
                    </g>
                    </g>
                </svg>
                </div>
                <div class="description ps-5">
                <h5>Netflix's 'Shuffle Play' feature</h5>
                <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever.</p>
                <a href="javascript:;" class="text-dark icon-move-right">
                    More about us
                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                </a>
                </div>
            </div>
            </div>
            <div class="col-lg-6">
            <div class="info-horizontal bg-gradient-danger border-radius-xl p-5">
                <div class="icon">
                <svg class="mt-1" width="25px" height="25px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>settings</title>
                    <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Rounded-Icons" transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                        <g id="settings" transform="translate(304.000000, 151.000000)">
                            <polygon id="Path" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                            <path d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" id="Path" opacity="0.596981957"></path>
                            <path d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z" id="Path"></path>
                        </g>
                        </g>
                    </g>
                    </g>
                </svg>
                </div>
                <div class="description ps-5">
                <h5 class="text-white">Brave web browser</h5>
                <p class="text-white">The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever.</p>
                <a href="javascript:;" class="text-white icon-move-right">
                    More about us
                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                </a>
                </div>
            </div>
            </div>
        </div>
        </div> --}}
    </div>
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
<section class="py-7" id="pengajuan">
    <div class="container">
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
<section class="my-1 pt-1">
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
<section class="pt-sm-8 pb-5 position-relative bg-gradient-dark">
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
        <div class="col-lg-6 col-12">
        <div class="card card-profile overflow-hidden">
            <div class="row">
            <div class="col-lg-4 col-md-6 col-12 pe-lg-0">
                <a href="javascript:;">
                <div class="p-3 pe-md-0">
                    <img class="w-100 border-radius-md" src="../assets/img/kal-visuals-square.jpg" alt="image">
                </div>
                </a>
            </div>
            <div class="col-lg-8 col-md-6 col-12 ps-lg-0 my-auto">
                <div class="card-body">
                <h5 class="mb-0">Emma Roberts</h5>
                <h6 class="text-info">UI Designer</h6>
                <p class="mb-0">Artist is a term applied to a person who engages in an activity deemed to be an art.</p>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-6 col-12">
        <div class="card card-profile mt-lg-0 mt-5 overflow-hidden">
            <div class="row">
            <div class="col-lg-4 col-md-6 col-12 pe-lg-0">
                <a href="javascript:;">
                <div class="p-3 pe-md-0">
                    <img class="w-100 border-radius-md" src="../assets/img/bruce-mars.jpg" alt="image">
                </div>
                </a>
            </div>
            <div class="col-lg-8 col-md-6 col-12 ps-lg-0 my-auto">
                <div class="card-body">
                <h5 class="mb-0">William Pearce</h5>
                <h6 class="text-info">Boss</h6>
                <p>Artist is a term applied to a person who engages in an activity deemed to be an art.</p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-6 col-12">
        <div class="card card-profile overflow-hidden z-index-2">
            <div class="row">
            <div class="col-lg-4 col-md-6 col-12 pe-lg-0">
                <a href="javascript:;">
                <div class="p-3 pe-md-0">
                    <img class="w-100 border-radius-md" src="../assets/img/team-4.jpg" alt="image">
                </div>
                </a>
            </div>
            <div class="col-lg-8 col-md-6 col-12 ps-lg-0 my-auto">
                <div class="card-body">
                <h5 class="mb-0">Ivana Flow</h5>
                <h6 class="text-info">Athlete</h6>
                <p>Artist is a term applied to a person who engages in an activity deemed to be an art.</p>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-6 col-12">
        <div class="card card-profile mt-lg-0 mt-5 overflow-hidden z-index-2">
            <div class="row">
            <div class="col-lg-4 col-md-6 col-12 pe-lg-0">
                <a href="javascript:;">
                <div class="p-3 pe-md-0">
                    <img class="w-100 border-radius-md" src="../assets/img/ivana-square.jpg" alt="image">
                </div>
                </a>
            </div>
            <div class="col-lg-8 col-md-6 col-12 ps-lg-0 my-auto">
                <div class="card-body">
                <h5 class="mb-0">Sophia Garcia</h5>
                <h6 class="text-info">JS Developer</h6>
                <p>Artist is a term applied to a person who engages in an activity deemed to be an art.</p>
                </div>
            </div>
            </div>
        </div>
        </div>
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
<section class="py-3">
    <div class="container">
    <div class="row">
        <div class="col-lg-6">
        <h3 class="mb-5">Artikel Terkini</h3>
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
                        <p class="card-description mb-4">{{ $article->content }}</p>
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
    </div>
</section>
{{-- End Artikel --}}
{{-- Testimoni --}}
<section class="py-3">
    <div class="container">
    <div class="row">
        <div class="col-lg-6">
        <h3 class="mb-5">Apa Kata Mereka</h3>
        </div>
    </div>
    <div class="row">
        {{-- <div class="carousel-item"> --}}
            <div class="col-lg-3 col-sm-6">
            <div class="card card-plain card-blog">
                <div class="card-image border-radius-lg position-relative">
                <a href="javascript:;">
                    <img class="w-100 border-radius-lg move-on-hover shadow" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/color-bags.jpg">
                </a>
                </div>
                <div class="card-body px-0">
                <h5>
                    <a href="javascript:;" class="text-dark font-weight-bold">Rover raised $65 million</a>
                </h5>
                <p>
                    Finding temporary housing for your dog should be as easy as
                    renting an Airbnb. That’s the idea behind Rover ...
                </p>
                <a href="javascript:;" class="text-info icon-move-right">Read More
                    <i class="fas fa-arrow-right text-sm"></i>
                </a>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-sm-6">
            <div class="card card-plain card-blog">
                <div class="card-image border-radius-lg position-relative">
                <a href="javascript:;">
                    <img class="w-100 border-radius-lg move-on-hover shadow" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/color-wall.jpg">
                </a>
                </div>
                <div class="card-body px-0">
                <h5>
                    <a href="javascript:;" class="text-dark font-weight-bold">MateLabs machine learning</a>
                </h5>
                <p>
                    If you’ve ever wanted to train a machine learning model
                    and integrate it with IFTTT, you now can with ...
                </p>
                <a href="javascript:;" class="text-info icon-move-right">Read More
                    <i class="fas fa-arrow-right text-sm"></i>
                </a>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-sm-6">
            <div class="card card-plain card-blog">
                <div class="card-image border-radius-lg position-relative">
                <a href="javascript:;">
                    <img class="w-100 border-radius-lg move-on-hover shadow" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/color-clock.jpg">
                </a>
                </div>
                <div class="card-body px-0">
                <h5>
                    <a href="javascript:;" class="text-dark font-weight-bold">US venture investment ticks</a>
                </h5>
                <p>
                    Venture investment in U.S. startups rose sequentially in
                    the second quarter of 2017, boosted by large, ate-stage financings
                </p>
                <a href="javascript:;" class="text-info icon-move-right">Read More
                    <i class="fas fa-arrow-right text-sm"></i>
                </a>
                </div>
            </div>
            </div>
            {{-- <div class="col-lg-3 col-md-12 col-12">
            <div class="card card-blog card-background">
                <div class="full-background" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/seaside.jpg')"></div>
                <div class="card-body">
                <div class="content-left text-start my-auto py-4">
                    <a href="javascript:;">
                    <h2 class="card-title text-white">Flexible work hours</h2>
                    <p class="card-description text-white">Rather than worrying about switching offices every couple years, you stay in the same place.</p>
                    <a href="javascript:;" class="text-white icon-move-right">Read More
                        <i class="fas fa-arrow-right text-sm"></i>
                    </a>
                    </a>
                </div>
                </div>
            </div>
            </div> --}}
        {{-- </div>  --}}
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