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
            </ul>
  
            <div class="row mb-4">
              <form action="{{ route('product') }}" method="GET" class="d-flex w-100">
                  <div class="col-md-11">
                      <input type="text" name="search" id="searchInput" class="form-control" placeholder="Cari produk..." value="{{ $search ?? '' }}">
                  </div>
                  <div class="col-md-1">
                      <button class="btn btn-primary btn-block ms-2">Cari</button>
                  </div>
              </form>
          </div>
  
            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
              @foreach($oli as $oil)
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
  
              @foreach($baut as $bolt)
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
            </div>
          </div>
        </div>
    </section>

    <style>
      .product-img {
        width: 100%; /* Lebar penuh */
        height: 250px; /* Tinggi tetap */
        object-fit: contain; /* Menyesuaikan tanpa memotong */
        /* background-color: #f8f8f8; Tambahkan latar belakang jika gambar tidak penuh */
        padding: 10px;
      }
    </style>
</main>
@endsection
