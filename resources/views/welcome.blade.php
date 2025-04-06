<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Jasa Backlink</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="aos/dist/aos.css">
    <link rel="stylesheet" href="bootstrap/vendor/bootstrap-icons/bootstrap-icons.css">
</head>

<body class="index-page">

    <header id="header" class="header fixed-top">
        <div class="branding d-flex align-items-center">
            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="/" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <img src="/img/backlinknews2.png" alt="">
                    {{-- <h1 class="sitename">Day</h1> --}}
                </a>
                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#hero" class="active">Home</a></li>
                        <li><a href="#cards">Tentang Kami</a></li>
                        <li><a href="#services">Fitur</a></li>
                        <li><a href="#pricing">Harga</a></li>
                        {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Dropdown 1</a></li>
                                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                        <li><a href="#">Deep Dropdown 1</a></li>
                                        <li><a href="#">Deep Dropdown 2</a></li>
                                        <li><a href="#">Deep Dropdown 3</a></li>
                                        <li><a href="#">Deep Dropdown 4</a></li>
                                        <li><a href="#">Deep Dropdown 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Dropdown 2</a></li>
                                <li><a href="#">Dropdown 3</a></li>
                                <li><a href="#">Dropdown 4</a></li>
                            </ul>
                        </li> --}}
                        <li><a href="#contact">Contact</a></li>
                        <button class="btn btn-nav">Pesan sekarang</button>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
            </div>
        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <img src="img/hero.jpg" alt="" data-aos="fade-in">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row justify-content-start">
                    <div class="col-lg-8">
                        <h2>Penyedia Backlink dan
                            </br class="pt-2">
                            Content Placement</h2>
                        <p>backlinknews.id membantu meningkatkan otoritas dan peringkat website Anda
                            di
                            mesin pencari
                            dengan strategi SEO yang efektif dan aman. Kami memastikan setiap backlink yang diperoleh
                            relevan dan bernilai tinggi untuk bisnis Anda.</p>
                        <a href="#about" class="btn-get-started">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Hero Section -->

        <!-- Cards Section -->
        <section id="cards" class="cards section">

            <div class="container">
                <div class="container section-title" data-aos="fade-up">
                    <span>Keunggulan Kami<br></span>
                    <h2>Mengapa memilih backlinknews.id?<br></h2>
                </div>
                <div class="row no-gutters">

                    <div class="col-lg-4 col-md-6 card" data-aos="fade-up" data-aos-delay="100">
                        <span>01</span>
                        <h4>Situs Berkualitas Tinggi</h4>
                        <p>Kami hanya bekerja dengan website yang memiliki reputasi baik dan DA/PA tinggi.</p>
                    </div>
                    <!-- End Card Item -->

                    <div class="col-lg-4 col-md-6 card" data-aos="fade-up" data-aos-delay="200">
                        <span>02</span>
                        <h4>Harga Kompetitif</h4>
                        <p>Layanan berkualitas dengan harga terbaik di pasaran.</p>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6 card" data-aos="fade-up" data-aos-delay="300">
                        <span>03</span>
                        <h4>Proses Cepat & Mudah</h4>
                        <p>Order dan pemasangan backlink yang cepat dan efisien.</p>
                    </div><!-- End Card Item -->
                </div>
            </div>
        </section>
        <!-- /Cards Section -->

        <!-- Clients Section -->
        <section id="clients" class="clients section light-background">
            <div class="container">
                <div class="container section-title" data-aos="fade-up">
                    <span>Media Partner<br></span>
                    <h2>Terindeks Google News<br></h2>
                </div>
                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                    {
                      "loop": true,
                      "speed": 600,
                      "autoplay": {
                        "delay": 2000
                      },
                      "slidesPerView": "auto",
                      "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                      },
                      "breakpoints": {
                        "320": {
                          "slidesPerView": 2,
                          "spaceBetween": 40
                        },
                        "480": {
                          "slidesPerView": 3,
                          "spaceBetween": 60
                        },
                        "640": {
                          "slidesPerView": 4,
                          "spaceBetween": 80
                        },
                        "992": {
                          "slidesPerView": 6,
                          "spaceBetween": 120
                        }
                      }
                    }
                  </script>
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="img/clients/media_1.png" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="img/clients/media_2.png" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="img/clients/media_3.png" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="img/clients/media_4.png" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="img/clients/media_5.png" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="img/clients/media_6.png" class="img-fluid"
                                alt="">
                        </div>
                        <div class="swiper-slide"><img src="img/clients/media_7.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="img/clients/media_8.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="img/clients/media_9.png" class="img-fluid"
                                alt=""></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Clients Section -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span>Fitur</span>
                <h2>Fitur Lanjutan Kami</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item  position-relative">
                            <div class="icon">
                                <i class="bi bi-check"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Backlink Berkualitas</h3>
                            </a>
                            <p>Backlink berkualitas meningkatkan otoritas domain dan peringkat SEO, menarik trafik
                                organik melalui tautan relevan dari situs terpercaya di niche Anda.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-check"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Terindeks Google Berita</h3>
                            </a>
                            <p>Konten Anda akan tampil di Google Berita, meningkatkan visibilitas, kepercayaan, dan
                                peluang muncul di hasil pencarian terkini.</p>

                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-check"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Media Lokal dan Nasional</h3>
                            </a>
                            <p>Publikasi di media lokal dan nasional membantu membangun kredibilitas, menjangkau audiens
                                luas, dan meningkatkan reputasi bisnis Anda.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-check"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Press Release</h3>
                            </a>
                            <p>
                            <p>Press release profesional menyampaikan informasi penting bisnis Anda ke media, menarik
                                perhatian publik, dan meningkatkan eksposur online.</p>
                            </p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-check"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Meningkatkan DA PA</h3>
                            </a>
                            <p>Backlink berkualitas membantu meningkatkan Domain Authority (DA) dan Page Authority (PA),
                                memperkuat posisi situs di hasil pencarian Google.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-check"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Optimasi SEO</h3>
                            </a>
                            <p>Optimasi SEO meningkatkan peringkat situs di mesin pencari melalui strategi konten, kata
                                kunci, dan struktur website yang efektif.</p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                </div>

            </div>

        </section>
        <!-- /Services Section -->

        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section dark-background">

            <img src="/img/cta.jpg" alt="">

            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <h3>Optimalkan Website Anda Sekarang</h3>
                            <p>Ingin website Anda muncul di halaman pertama Google? Gunakan layanan backlink kami
                                sekarang!</p>
                            <a class="cta-btn" href="#">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- /Call To Action Section -->

        {{-- Harga Backlink --}}
        <section id="pricing" class="pricing section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span>Harga</span>
                <h2>Harga Backlink</h2>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row g-4 g-lg-0">
                    @foreach ($prices as $price)
                        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pricing-item d-flex flex-column flex-fill">
                                <h3>{{ $price->name }}</h3>
                                <h4><sup>Rp</sup>{{ number_format($price->harga, 0, ',', '.') }}</h4>

                                <ul>
                                    @foreach ($price->fitur as $fitur)
                                        @php
                                            $text = $fitur['value'] ?? '';
                                            $isNegative = Str::startsWith($text, '-');
                                        @endphp

                                        <li class="{{ $isNegative ? 'na' : '' }}">
                                            <i class="bi {{ $isNegative ? 'bi-x' : 'bi-check' }}"></i>
                                            <span>{{ ltrim($text, '-') }}</span>
                                        </li>
                                    @endforeach
                                </ul>

                                <div class="text-center">
                                    <a href="#" class="buy-btn mt-auto">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        {{-- Harga Backlink End --}}

        {{-- Harga Content Placement --}}
        <section id="pricing" class="pricing section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span>Harga</span>
                <h2>Harga Content Placement</h2>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row g-4 g-lg-0">
                    @foreach ($priceContent as $price)
                        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pricing-item d-flex flex-column flex-fill">
                                <h3>{{ $price->name }}</h3>
                                <h4><sup>Rp</sup>{{ number_format($price->harga, 0, ',', '.') }}</h4>

                                <ul>
                                    @foreach ($price->fitur as $fitur)
                                        @php
                                            $text = $fitur['value'] ?? '';
                                            $isNegative = Str::startsWith($text, '-');
                                        @endphp

                                        <li class="{{ $isNegative ? 'na' : '' }}">
                                            <i class="bi {{ $isNegative ? 'bi-x' : 'bi-check' }}"></i>
                                            <span>{{ ltrim($text, '-') }}</span>
                                        </li>
                                    @endforeach
                                </ul>

                                <div class="text-center">
                                    <a href="#" class="buy-btn mt-auto">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

        </section>
        <!-- Harga Content Placement End -->



        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span>Hubungi Kami</span>
                <h2>Kontak</h2>
            </div>
            <!-- End Section Title -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Alamat</h3>
                            <p> Buaran Indah, Kota Tangerang
                                </br>
                                Banten, 15119</p>
                        </div>
                    </div>
                    <!-- End Info Item -->
                    <div class="col-lg-3 col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone"></i>
                            <h3>Call Us</h3>
                            <p>088225772497
                                </br>
                                085956084329
                        </div>
                    </div>
                    <!-- End Info Item -->
                    <div class="col-lg-3 col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope"></i>
                            <h3>Email Us</h3>
                            <p>admin@backlinknews.id
                                </br>
                                mail@backlinknews.id</p>
                        </div>
                    </div>
                    <!-- End Info Item -->
                </div>
                <div class="row gy-4 mt-1">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <iframe
                            src="https://maps.google.com/maps?width=600&height=400&hl=en&q=buaran%20indah&t=&z=14&ie=UTF8&iwloc=B&output=embed"
                            frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- End Google Maps -->
                    <div class="col-lg-6">
                        <form action="{{ route('submit.order') }}" method="POST" class="php-email-form"
                            data-aos="fade-up" data-aos-delay="400">
                            @csrf
                            <div class="row gy-4">

                                <div class="col-md-12">
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Your Name" required>
                                </div>

                                <div class="col-md-12">
                                    <input type="email" name="email" class="form-control"
                                        placeholder="Your Email" required>
                                </div>

                                <div class="col-md-12">
                                    <textarea name="pesan" class="form-control" rows="6" placeholder="Pesan" required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    @if (session('success'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('success') }}
                                    @endif
                                </div>

                                @if ($errors->any())
                                    <div class="error-message">
                                        <ul style="list-style: none; padding: 0;">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <button type="submit">Send Message</button>
                            </div>

                    </div>
                    </form>

                </div>
                <!-- End Contact Form -->
            </div>
            </div>

        </section>
        <!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer position-relative dark-background">

        {{-- <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-about">
                        <a href="index.html" class="logo sitename">Day</a>
                        <div class="footer-contact pt-3">
                            <p>A108 Adam Street</p>
                            <p>New York, NY 535022</p>
                            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                            <p><strong>Email:</strong> <span>info@example.com</span></p>
                        </div>
                        <div class="social-links d-flex mt-4">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                    <form action="forms/newsletter.php" method="post" class="php-email-form">
                        <div class="newsletter-form"><input type="email" name="email"><input type="submit"
                                value="Subscribe"></div>
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                    </form>
                </div>

            </div>
        </div> --}}

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Backlink TNG</strong> <span>All Rights
                    Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>
    {{-- swiper --}}
    <script src="swiper/swiper-bundle.min.js"></script>
    {{-- AOS --}}
    <script src="aos/dist/aos.js"></script>
</body>

</html>
