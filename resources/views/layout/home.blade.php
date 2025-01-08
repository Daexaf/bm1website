<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>BM1 OIL</title>
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

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{asset('home')}} " class="logo d-flex align-items-center">
        <img src="{{asset('img/logo/logo.jpg')}}" alt="Logo" style="max-height: 50px;"> 
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('home')}}#about">About</a></li>
          <li><a href="{{route('home')}}#partner">Partner</a></li>
          <li><a href="{{route('product')}}">Product</a></li>
          <li><a href="{{route('home')}}#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  {{-- ini konten isian --}}
  @yield('homeContent')
  @yield('productContent')
  @yield('detailProductContent')
  {{-- <main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Selamat Datang di Website BM1 OIL</h2>
            <p class="animate__animated animate__fadeInUp">Rajanya sintetik oli motor</p>
            {{-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> 
          </div>
        </div>
      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>
      </svg>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>Who we are</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p style="text-align: justify">
              Kami terus bertumbuh dengan upaya maksimal untuk menjadi merek oli otomotif nomor satu di Indonesia. Kami memastikan bahwa kualitas selalu menjadi prioritas utama dalam setiap langkah proses manufaktur kami. Kami juga memandu seluruh upaya penjualan dari awal hingga akhir untuk memberikan pengalaman penuh kepada pelanggan dalam menggunakan merek oli mesin berkualitas tinggi, yaitu BM1.
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span>Bermitra dengan 13 partner di seluruh Indonesia</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Bekerja bersama lebih dari 16.000 outlet</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Menyediakan berbagai jenis oli berkualitas</span></li>
            </ul>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p style="text-align: justify">Komitmen kami melampaui sekadar menyediakan oli mesin premium. Kami secara aktif berinvestasi dalam inovasi, penelitian, dan pengembangan untuk memastikan produk kami memenuhi kebutuhan pelanggan yang terus berkembang dan beradaptasi dengan teknologi otomotif terkini. Dengan fokus yang kuat pada keberlanjutan, kami berupaya meminimalkan dampak lingkungan melalui praktik ramah lingkungan dan formulasi canggih.</p>
          </div>
        </div>
      </div>
    </section><!-- /About Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Keunggulan Oli BM1</h2>
        <p>Keunggulan Oli BM1</p>
      </div><!-- End Section Title -->
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 10
                }
              }
            }
          </script>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-item">
                <i class="bi bi-droplet" style="font-size: 3rem; display: block; margin: 0 auto;"></i>
                <h3>Oli dengan bahan Sintetik Berkualitas</h3>
                <p>
                  <span>Oli dengan sintetik terbaik yang meningkatkan performa mesin dan memperpanjang usia kendaraan Anda.</span>
                </p>
              </div>
            </div><!-- End testimonial item -->
          
            <div class="swiper-slide">
              <div class="testimonial-item">
                  <i class="bi bi-snow" style="font-size: 3rem; display: block; margin: 0 auto;"></i>
                <h3>Mesin Lebih Dingin dan Terlindungi</h3>
                <p>
                  <span>Menjaga mesin tetap dingin dan terlindungi, bahkan di kondisi berkendara ekstrem.</span>
                </p>
              </div>
            </div><!-- End testimonial item -->
          
            <div class="swiper-slide">
              <div class="testimonial-item">
                <i class="bi bi-speedometer" style="font-size: 3rem; display: block; margin: 0 auto;"></i>
                <h3>Tarikan Kendaraan Lebih Enteng</h3>
                <p>
                  <span>Meningkatkan responsivitas kendaraan dengan pelumasan yang mengurangi gesekan.</span>
                </p>
              </div>
            </div><!-- End testimonial item -->
          
            <div class="swiper-slide">
              <div class="testimonial-item">
                <i class="bi bi-fuel-pump" style="font-size: 3rem; display: block; margin: 0 auto;"></i>
                <h3>Lebih Awet Bensin dan Hemat Biaya</h3>
                <p>
                  <span>Hemat bahan bakar dan biaya operasional dengan performa mesin yang efisien.</span>
                </p>
              </div>
            </div><!-- End testimonial item -->
          
            <div class="swiper-slide">
              <div class="testimonial-item">
                <i class="bi bi-shield-lock" style="font-size: 3rem; display: block; margin: 0 auto;"></i>
                <h3>Keunggulan Oli Berkualitas Tinggi</h3>
                <p>
                  <span>Perlindungan ekstra dan pengurangan gesekan untuk menjaga kinerja mesin optimal.</span>
                </p>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </section><!-- /Testimonials Section -->

    <!-- Features Section -->
    <section id="features" class="features section">
      <div class="container">
        <div class="container section-title" data-aos="fade-up">
          <p>Official Store Kami</p>
        </div><!-- End Section Title -->
        <ul class="nav nav-tabs row  d-flex" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item col-3">
            <a class="nav-link active show" target="_blank" href="https://www.tokopedia.com/bm1-oil?source=universe&st=product">
                <img src="{{asset('img/logo/e-commerce/tokopedia.png')}}" alt="Tokopedia" style="max-height: 50px;">
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" target="_blank" href="https://shopee.co.id/bm1oil?entryPoint=ShopBySearch&searchKeyword=bm1%20official%20shop">
              <img src="{{asset('img/logo/e-commerce/shopee.png')}}" alt="Shopee" style="max-height: 50px;">
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" target="_blank" href="https://www.bukalapak.com/u/bm1oil/label/mobil?from=omnisearch&from_keyword_history=false&search_source=omnisearch_user&source=navbar">
                <img src="{{asset('img/logo/e-commerce/bukalapak.png')}}" alt="Bukalapak" style="max-height: 50px;">
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" target="_blank" href="https://www.blibli.com/merchant/bm1-oil-indonesia/BMO-60023?pickupPointCode=PP-3070717&fbbActivated=false">
                <img src="{{asset('img/logo/e-commerce/blibli.png')}}" alt="Blibli" style="max-height: 50px;">
            </a>
          </li>
        </ul><!-- End Tab Nav -->
      </div>
    </section><!-- /Features Section -->
    
     <!-- Portfolio Section -->
     <section id="product" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Product Unggulan</h2>
        <p>Product Unggulan Kami</p>
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
            @foreach($oli->take(3) as $oil)
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ strtolower(str_replace(' ', '-', $oil->category->name)) }}">
              <img src="{{asset('storage/product-oli/'.$oil->image1)}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{$oil->name}}</h4>
                <p>{{$oil->api}}</p>
                <p>{{$oil->sae}}</p>
                <p>{{$oil->content}}</p>
                {{-- <a href="{{asset('storage/product-oli/'.$oil->image1)}}" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a> 
                <div class="mt-3">
                  <a href="{{ route('detail.product', $oil->id) }}" title="More Details" class="details-link">
                    <button class="btn btn-primary btn-block">More Details</button>
                  </a>
                </div>
                {{-- <a href="{{ route('product.details', $oil->id) }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
            @endforeach

            @foreach($baut->take(3) as $bolt)
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ strtolower(str_replace(' ', '-', $bolt->category->name)) }}">
              <img src="{{asset('storage/product-baut/'.$bolt->image1)}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{$bolt->coding}}</h4>
                <p>{{$bolt->kode}}</p>
                <p>{{$bolt->ukuran}}</p>
                {{-- <a href="{{asset('storage/product-baut/'.$bolt->image1)}}" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i>
                </a> 
                <div class="mb-3">
                  <a href="{{ route('detail.product', $bolt->id) }}" title="More Details" class="details-link">
                    <button class="btn btn-primary btn-block">More Details</button>
                  </a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            @endforeach
          </div><!-- End Portfolio Container -->
        </div>
      </div>
    </section><!-- /Portfolio Section -->

    <!-- Services Section -->
    <section id="partner" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Partner</h2>
        <p>Where are our partner</p>
      </div><!-- End Section Title -->
      <div class="container">
        <div class="row gy-4">
          <div class="row gy-4">
            @foreach($cabang as $item)
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                  <div class="icon">
                    <i class="bi bi-globe" style="color: #0dcaf0;"></i>
                  </div>
                  <a href="{{ asset('sel/service-details.html') }}" class="stretched-link">
                    <h3>{{ $item->name }}</h3>
                  </a>
                  <p>{{ $item->address }}</p>
                  <p>{{ $item->email }}</p>
                  <p>{{ $item->phone }}</p>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </section><!-- /Services Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div><!-- End Section Title -->
      <div class="container" data-aos="fade" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>Pergudangan Green Sedayu Biz Park Blok DM 3 No 29, Jalan Daan Mogot Raya Km. 18, Kalideres, 3 No.8, RT.11/RW.6, Kalideres, Kec. Kalideres, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11840</p>
              </div>
            </div><!-- End Info Item -->
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>(021) 22553411</p>
              </div>
            </div><!-- End Info Item -->
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>birumegahabadi@yahoo.com</p>
              </div>
            </div><!-- End Info Item -->
          </div>
          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">
                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>
                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>
                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                  <button type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div><!-- End Contact Form -->
        </div>
      </div>
    </section><!-- /Contact Section -->
  </main> --}}

  <footer id="footer" class="footer dark-background">
    <div class="container">
      <h3 class="sitename">BM1 OIL</h3>
      <p>A Step ahead technology</p>
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
  <script src="{{asset('sel/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('sel/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('sel/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('sel/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('sel/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('sel/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('sel/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- Main JS File -->
  <script src="{{asset('sel/assets/js/main.js')}}"></script>

</body>

</html>