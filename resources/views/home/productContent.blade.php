@extends('layout.home')
@section('productContent')
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
                  <p>{{strtoupper($oil->category_type)}}</p>
                  <p>{{$oil->api}}</p>
                  <p>{{$oil->sae}}</p>
                  <p>{{$oil->content}}</p>
                  {{-- <a href="{{asset('storage/product-oli/'.$oil->image1)}}" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a> --}}
                  <div class="mt-3">
                    <a href="{{ route('detail.product', ['category' => $oil->category_type, 'barcode' => $oil->barcode]) }}" title="More Details" class="details-link">
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
                  <p>{{strtoupper($bolt->category_type)}}</p>
                  <p>{{$bolt->kode}}</p>
                  <p>{{$bolt->ukuran}}</p>
                  {{-- <a href="{{asset('storage/product-baut/'.$bolt->image1)}}" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i>
                  </a> --}}
                  <div class="mb-3">
                    <a href="{{ route('detail.product', ['category' => $bolt->category_type, 'barcode' => $bolt->barcode]) }}" title="More Details" class="details-link">
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
@endsection