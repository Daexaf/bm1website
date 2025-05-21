@extends('layout.home')
@section('homeContent')
<main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <div id="hero-carousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Selamat Datang di Website BM1 OIL</h2>
            <p class="animate__animated animate__fadeInUp">A Step ahead technology</p>
            {{-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> --}}
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
              <li><i class="bi bi-check2-circle"></i> <span>Bermitra dengan 12 partner di seluruh Indonesia</span></li>
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
        <div class="container section-title text-center" data-aos="fade-up">
          <p>Official Store Kami</p>
        </div><!-- End Section Title -->
    
        <ul class="nav nav-tabs row d-flex justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item col-12 col-md-4 mb-3">
            <a class="nav-link show d-flex align-items-center justify-content-center" target="_blank" href="https://www.tokopedia.com/bm1-oil?source=universe&st=product">
              <img src="{{asset('img/logo/e-commerce/tokopedia.png')}}" alt="Tokopedia" class="img-fluid" style="max-height: 50px;">
            </a>
          </li>
          <li class="nav-item col-12 col-md-4 mb-3">
            <a class="nav-link d-flex align-items-center justify-content-center" target="_blank" href="https://shopee.co.id/bm1oil?entryPoint=ShopBySearch&searchKeyword=bm1%20official%20shop">
              <img src="{{asset('img/logo/e-commerce/shopee.png')}}" alt="Shopee" class="img-fluid" style="max-height: 50px;">
            </a>
          </li>
          <li class="nav-item col-12 col-md-4 mb-3">
            <a class="nav-link d-flex align-items-center justify-content-center" target="_blank" href="https://www.blibli.com/merchant/bm1-oil-indonesia/BMO-60023?pickupPointCode=PP-3070717&fbbActivated=false">
              <img src="{{asset('img/logo/e-commerce/blibli.png')}}" alt="Blibli" class="img-fluid" style="max-height: 50px;">
            </a>
          </li>
        </ul><!-- End Tab Nav -->
      </div>
    </section><!-- /Features Section -->
    
    <!-- /Features Section -->
    
     <!-- Portfolio Section -->
     <section id="product" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Product aja</h2>
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
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ strtolower(str_replace(' ', '-', $oil->category->name)) }}" data-name="{{ strtolower($oil->name) }}">
              <div class="card">
                <img src="{{ asset('storage/product-oli/'.$oil->image1) }}" class="card-img-top product-img" alt="">
                <div class="card-body text-center">
                  <h4 class="card-title">{{ $oil->name }}</h4>
                  <p class="card-text">Rp {{ number_format($oil->price, 0, ',', '.') }}</p>
                  <p class="card-text">{{ strtoupper($oil->category_type) }}</p>
                  <p class="card-text">{{$oil->api}}</p>
                  <p class="card-text">{{$oil->sae}}</p>
                  <p class="card-text">{{$oil->content}}</p>
                  <a href="{{ route('detail.product', ['category' => $oil->category_type, 'barcode' => $oil->barcode]) }}" class="btn btn-primary">More Details</a>
                </div>
              </div>
            </div>
            @endforeach

            @foreach($baut->take(3) as $bolt)
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ strtolower(str_replace(' ', '-', $bolt->category->name)) }}" data-name="{{ strtolower($bolt->name) }}">
              <div class="card">
                <img src="{{ asset('storage/product-baut/'.$bolt->image1) }}" class="card-img-top product-img" alt="">
                <div class="card-body text-center">
                  <h4 class="card-title">{{ $bolt->coding }}</h4>
                  <p class="card-text">{{ strtoupper($bolt->category_type) }}</p>
                  <p class="card-text">Rp {{ number_format($bolt->price, 0, ',', '.') }}</p>
                  <p class="card-text">{{$bolt->kode}}</p>
                  <p class="card-text">{{$bolt->ukuran}}</p>
                  <a href="{{ route('detail.product', ['category' => $bolt->category_type, 'barcode' => $bolt->barcode]) }}" class="btn btn-primary">More Details</a>
                </div>
              </div>
            </div>
            @endforeach
          </div><!-- End Portfolio Container -->
        </div>
      </div>
    </section><!-- /Portfolio Section -->

    <style>
      .product-img {
        width: 100%; /* Lebar penuh */
        height: 250px; /* Tinggi tetap */
        object-fit: contain; /* Menyesuaikan tanpa memotong */
        /* background-color: #f8f8f8; Tambahkan latar belakang jika gambar tidak penuh */
        padding: 10px;
      }

      .service-item {
        background: #fff;
        border-radius: 8px;
        transition: transform 0.3s ease-in-out;
      }

      .service-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
      }

      .icon {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 60px;
        width: 60px;
        background: #f1f9ff;
        border-radius: 50%;
        margin: 0 auto;
      }

      @media (max-width: 768px) {
        .service-item {
          text-align: left;
          padding: 20px;
        }
      }
    </style>

    <!-- Services Section -->
    <section id="partner" class="services section">
      <!-- Section Title -->
      <div class="container section-title text-center" data-aos="fade-up">
        <h2>Partner</h2>
        <p>Where are our partners</p>
      </div><!-- End Section Title -->
    
      <div class="container">
        <div class="row gy-4">
          @foreach($cabang as $item)
            <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item position-relative p-4 text-center shadow-sm">
                <div class="icon">
                  <i class="bi bi-globe" style="color: #0dcaf0; font-size: 2rem;"></i>
                </div>
                <a href="{{ asset('#') }}" class="stretched-link">
                  <h3 class="mt-3">{{ $item->name }}</h3>
                </a>
                <p class="text-muted">{{ $item->address }}</p>
                <p class="text-muted"><i class="bi bi-envelope"></i> {{ $item->email }}</p>
                <p class="text-muted"><i class="bi bi-telephone"></i> {{ $item->phone }}</p>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- /Services Section -->

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
            <form action="{{ route('send.email') }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                @csrf
                <div class="row gy-4">
                    <!-- Input Name -->
                    <div class="col-md-6">
                        <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                    </div>
        
                    <!-- Input Email -->
                    <div class="col-md-6">
                        <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                    </div>
        
                    <!-- Input Subject -->
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                    </div>
        
                    <!-- Textarea Message -->
                    <div class="col-md-12">
                        <textarea class="form-control" name="emailMessage" rows="6" placeholder="Message" required></textarea>
                    </div>
        
                    <div class="col-md-12 text-center">
                        <div class="loading d-none">Loading</div>
                        <div class="sent-message d-none">Your message has been sent. Thank you!</div>
                        <div class="error-message d-none"></div>
        
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
      </div>
    </section>
    <!-- /Contact Section -->
  </main>
@endsection