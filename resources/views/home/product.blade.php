<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Product - BM1OIL</title>
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
        <a href="{{route('home')}} " class="logo d-flex align-items-center">
            <img src="{{asset('img/logo/logo.jpg')}}" alt="Logo" class="logo d-flex align-items-center" style="max-height: 50px;"> 
        </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('home')}}#about">About</a></li>
          <li><a href="{{route('home')}}#partner">Partner</a></li>
          <li><a href="{{route('product')}}">Product</a></li>
          {{-- <li class="dropdown"><a href="{{route('product')}}"><span>Product</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{route('product')}}">Oli</a></li>
              <li><a href="{{route('product')}}">Baut</a></li>
            </ul>
          </li> --}}
          <li><a href="{{route('home')}}#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">
    <section id="product" class="portfolio section mt-5">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Product</h2>
          <p>Lini Product yang kami miliki</p>
        </div><!-- End Section Title -->
  
        <div class="container">
  
          <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
  
            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
              <li data-filter="*" class="filter-active">All</li>
              @foreach($categories as $category)
                  <li data-filter=".filter-{{ strtolower(str_replace(' ', '-', $category->name)) }}">{{ $category->name }}</li>
              @endforeach
          </ul><!-- End Portfolio Filters -->
  
            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
  
              @foreach($oli as $oil)
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ strtolower(str_replace(' ', '-', $oil->category->name)) }}">
                <img src="{{asset('storage/product-oli/'.$oil->image1)}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{$oil->name}}</h4>
                  <p>{{$oil->price}}</p>
                  <p>{{$oil->api}}</p>
                  <p>{{$oil->sae}}</p>
                  <p>{{$oil->content}}</p>
                  {{-- <a href="{{asset('storage/product-oli/'.$oil->image1)}}" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a> --}}
                  <div class="mt-3">
                    <a href="{{ route('detail.product', $oil->id) }}" title="More Details" class="details-link">
                      <button class="btn btn-primary btn-block">More Details</button>
                    </a>
                  </div>
                  {{-- <a href="{{ route('product.details', $oil->id) }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                </div>
              </div><!-- End Portfolio Item -->
              @endforeach
  
              @foreach($baut as $bolt)
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ strtolower(str_replace(' ', '-', $bolt->category->name)) }}">
                <img src="{{asset('storage/product-baut/'.$bolt->image1)}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{$bolt->coding}}</h4>
                  <p>{{$bolt->price}}</p>
                  <p>{{$bolt->kode}}</p>
                  <p>{{$bolt->ukuran}}</p>
                  {{-- <a href="{{asset('storage/product-baut/'.$bolt->image1)}}" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i>
                  </a> --}}
                  <div class="mb-3">
                    <a href="{{ route('detail.product', $bolt->id) }}" title="More Details" class="details-link">
                      <button class="btn btn-primary btn-block">More Details</button>
                    </a>
                  </div>
                  
                  {{-- <a href="{{ route('product.details', $oil->id) }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                </div>
              </div><!-- End Portfolio Item -->
              @endforeach
  
            </div><!-- End Portfolio Container -->
  
          </div>
  
        </div>
  
      </section><!-- /Portfolio Section -->
  </main>

  <footer id="footer" class="footer dark-background">
    <div class="container">
      <h3 class="sitename">BM1 OIL</h3>
      <p>Rajanya sintetik oli motor</p>
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