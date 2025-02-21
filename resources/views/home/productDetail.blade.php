@extends('layout.home')
@section('detailProductContent')
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
                    <p>CATEGORY: {{strtoupper($oli->category_type)}}</p>
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
                  <h2>Coding: {{$baut->coding}}</h2>
                  <p>CATEGORY: {{strtoupper($baut->category_type)}}</p>
                  <p>Kode: {{$baut->kode}}</p>
                  <p>Ukuran: {{$baut->ukuran}}</p>
                  <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                    <h4>Contoh Penggunaan</h4>
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item fiselr-app">
                      <img src="{{asset('storage/product-baut-modal/'.$baut->image_modal1)}}" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <a href="{{asset('storage/product-baut-modal/'.$baut->image_modal1)}}" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item fiselr-app">
                      <img src="{{asset('storage/product-baut-modal/'.$baut->image_modal2)}}" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <a href="{{asset('storage/product-baut-modal/'.$baut->image_modal2)}}" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item fiselr-app">
                      <img src="{{asset('storage/product-baut-modal/'.$baut->image_modal3)}}" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <a href="{{asset('storage/product-baut-modal/'.$baut->image_modal3)}}" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      </div>
                    </div><!-- End Portfolio Item -->
                  </div>

                </div>
            </div>

            <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="portfolio-info">
                <h3>Informasi Produk</h3>
                <ul>
                    <li><strong>Jenis Baut</strong>{{$baut->deskripsi}}</li>
                    <li><strong>Kunci</strong>{{$baut->kunci}}</li>
                </ul>
                </div>
            </div>
            </div>
            @endforeach
        </div>
    </section><!-- /Portfolio Details Section -->
  </main>
@endsection