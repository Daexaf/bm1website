<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Product Details - BM1OIL</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{asset('img/logo/logo.jpg')}} " rel="icon">
  <link href="{{asset('img/logo/logo.jpg')}} " rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('sel/assets/vendor/bootstrap/css/bootstrap.min.css')}} " rel="stylesheet">
  <link href="{{asset('sel/assets/vendor/bootstrap-icons/bootstrap-icons.css')}} " rel="stylesheet">
  <link href="{{asset('sel/assets/vendor/aos/aos.css')}} " rel="stylesheet">
  <link href="{{asset('sel/assets/vendor/animate.css/animate.min.css')}} " rel="stylesheet">
  <link href="{{asset('sel/assets/vendor/glightbox/css/glightbox.min.css')}} " rel="stylesheet">
  <link href="{{asset('sel/assets/vendor/swiper/swiper-bundle.min.css')}} " rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('sel/assets/css/main.css')}} " rel="stylesheet">

  <!-- =======================================================
  * Template Name: Selecao
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="portfolio-details-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <a href="{{asset('home')}} " class="logo d-flex align-items-center">
            <img src="{{asset('img/logo/logo.jpg')}}" alt="Logo" class="logo d-flex align-items-center" style="max-height: 50px;"> 
        </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Partner</a></li>
          <li class="dropdown"><a href="#portofolio"><span>Product</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Oli</a></li>
              <li><a href="#">Baut</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">
    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">
        <div class="container" data-aos="fade-up">
            @foreach($productoli as $oli)
            <div class="image mt-5" style="display: flex; justify-content: center; align-items: center; height: 300px;">
                <img src="{{asset('storage/product-oli/'.$oli->image1)}}" class="img-fluid" alt="">
            </div>
            <div class="row justify-content-between gy-4 mt-4">
            <div class="col-lg-8" data-aos="fade-up">
                <div class="portfolio-description">
                    <h2>{{$oli->name}}</h2>
                    <p>API: {{$oli->api}}</p>
                    <p>SAE: {{$oli->sae}}</p>
                    <p>CONTENT: {{$oli->content}}</p>
                    <section id="features" class="features section">
                        <div class="container">
                            <div class="container section-title" data-aos="fade-up">
                                <p>Product ini tersedia di link berikut ini:</p>
                            </div><!-- End Section Title -->
                            <ul class="nav nav-tabs row  d-flex" data-aos="fade-up" data-aos-delay="100">
                                <li class="nav-item col-3">
                                <a class="nav-link" target="_blank" href="{{$oli->link1}}">
                                    <img src="{{asset('img/logo/e-commerce/tokopedia.png')}}" alt="Tokopedia" style="max-height: 50px;">
                                </a>
                                </li>
                                <li class="nav-item col-3">
                                <a class="nav-link" target="_blank" href="{{$oli->link2}}">
                                    <img src="{{asset('img/logo/e-commerce/shopee.png')}}" alt="Shopee" style="max-height: 50px;">
                                </a>
                                </li>
                                <li class="nav-item col-3">
                                <a class="nav-link" target="_blank" href="{{$oli->link3}}">
                                    <img src="{{asset('img/logo/e-commerce/bukalapak.png')}}" alt="Bukalapak" style="max-height: 50px;">
                                </a>
                                </li>
                                <li class="nav-item col-3">
                                <a class="nav-link" target="_blank" href="{{$oli->link4}}">
                                    <img src="{{asset('img/logo/e-commerce/blibli.png')}}" alt="Blibli" style="max-height: 50px;">
                                </a>
                                </li>
                            </ul><!-- End Tab Nav -->
                        </div>
                  </section><!-- /Features Section -->
                </div>
            </div>
            <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="portfolio-info">
                <h3>Informasi Produk</h3>
                <ul>
                    <li><strong>Nomor SNI</strong>{{$oli->sni}}</li>
                    <li><strong>Nomor NPT</strong>{{$oli->npt}}</li>
                    <li><strong>Nomor NPB</strong>{{$oli->npb}}</li>
                </ul>
                </div>
            </div>
            </div>
            @endforeach

            @foreach($productbaut as $baut)
            <div class="image mt-5" style="display: flex; justify-content: center; align-items: center; height: 300px;">
                <img src="{{asset('storage/product-baut/'.$baut->image1)}}" class="img-fluid" alt="">
            </div>
            <div class="row justify-content-between gy-4 mt-4">
            <div class="col-lg-8" data-aos="fade-up">
                <div class="portfolio-description">
                <h2>{{$baut->coding}}</h2>
                <p>
                    {{$baut->kode}}
                </p>
                <p>
                    {{$baut->keterangan}}
                </p>

                <div class="testimonial-item">
                    <a class="btn btn-primary" href="{{$baut->link1}}">Link 1</a>
                    <a class="btn btn-primary" href="{{$baut->link2}}">Link 2</a>
                    <a class="btn btn-primary" href="{{$baut->link3}}">Link 3</a>
                    <a class="btn btn-primary" href="{{$baut->link4}}">Link 4</a>
                </div>

                <p>
                    Impedit ipsum quae et aliquid doloribus et voluptatem quasi. Perspiciatis occaecati earum et magnam animi. Quibusdam non qui ea vitae suscipit vitae sunt. Repudiandae incidunt cumque minus deserunt assumenda tempore. Delectus voluptas necessitatibus est.
                </p>

                <p>
                    Sunt voluptatum sapiente facilis quo odio aut ipsum repellat debitis. Molestiae et autem libero. Explicabo et quod necessitatibus similique quis dolor eum. Numquam eaque praesentium rem et qui nesciunt.
                </p>

                </div>
            </div>

            <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="portfolio-info">
                <h3>Project information</h3>
                <ul>
                    <li><strong>Category</strong> Web design</li>
                    <li><strong>Client</strong> ASU Company</li>
                    <li><strong>Project date</strong> 01 March, 2020</li>
                    <li><strong>Project URL</strong> <a href="#">www.example.com</a></li>
                    <li><a href="#" class="btn-visit align-self-start">Visit Website</a></li>
                </ul>
                </div>
            </div>
            </div>
            @endforeach
        </div>

    </section><!-- /Portfolio Details Section -->

  </main>

  <footer id="footer" class="footer dark-background">
    <div class="container">
      <h3 class="sitename">BM1 OIL</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-skype"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('sel/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}} "></script>
  <script src="{{asset('sel/assets/vendor/php-email-form/validate.js')}} "></script>
  <script src="{{asset('sel/assets/vendor/aos/aos.js')}} "></script>
  <script src="{{asset('sel/assets/vendor/glightbox/js/glightbox.min.js')}} "></script>
  <script src="{{asset('sel/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}} "></script>
  <script src="{{asset('sel/assets/vendor/isotope-layout/isotope.pkgd.min.js')}} "></script>
  <script src="{{asset('sel/assets/vendor/swiper/swiper-bundle.min.js')}} "></script>

  <!-- Main JS File -->
  <script src="{{asset('sel/assets/js/main.js')}} "></script>

</body>

</html>