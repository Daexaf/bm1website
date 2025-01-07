<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>BM1 OIL</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="{{asset('img/logo/logo.jpg')}}"
      type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="{{asset('lte/assets/js/plugin/webfont/webfont.min.js')}}"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["{{ asset('lte/assets/css/fonts.min.css')}}"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('lte/assets/css/bootstrap.min.css')}} " />
    <link rel="stylesheet" href="{{asset('lte/assets/css/plugins.min.css')}} " />
    <link rel="stylesheet" href="{{asset('lte/assets/css/kaiadmin.min.css')}} " />
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="{{route('admin.index')}}" class="logo">
              <img
                src="{{asset('img/logo/logo.jpg')}}"
                alt="navbar brand"
                class="navbar-brand"
                height="20"
              />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item active">
                <a
                  href="{{route('admin.index')}}"
                  class="collapsed"
                >
                  <i class="fas fa-home"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section">Data</h4>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#product">
                  <i class="fas fa-layer-group"></i>
                  <p>Product</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="product">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ route('admin.oli.index') }}">
                        <span class="sub-item">Oli</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('admin.baut.index') }}">
                        <span class="sub-item">Baut</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#cabang">
                  <i class="fas fa-building"></i>
                  <p>Cabang</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="cabang">
                  <a href="{{ route('admin.cabang.index') }}" class="nav-link">List Cabang</a>
                  <!-- Tambahkan link lainnya jika perlu -->
                </div>
              </li>
              <li class="nav-item">
                <!-- Tombol Logout -->
                <form id="logout-form" action="{{ route('logout') }}" method="get" style="display: none;">
                  @csrf
                </form>
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="fas fa-sign-out-alt"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="index.html" class="logo">
                <img
                  src="{{ asset('lte/')}}assets/img/kaiadmin/logo_light.svg"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
              </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          <!-- Navbar Header -->
          <nav
            class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
          >
            <div class="container-fluid">
              <nav
                class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex"
              >
              </nav>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>

        {{-- ini konten --}}
          @yield('userContent')
          @yield('productContent')
          @yield('cabangContent')
          @yield('oliContent')
          @yield('bautContent')

      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="{{asset('lte/assets/js/core/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('lte/assets/js/core/popper.min.js')}}"></script>
    <script src="{{asset('lte/assets/js/core/bootstrap.min.js')}}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{asset('lte/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>

    <!-- Chart JS -->
    <script src="{{asset('lte/assets/js/plugin/chart.js/chart.min.js')}}"></script>

    <!-- jQuery Sparkline -->
    <script src="{{asset('lte/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Chart Circle -->
    <script src="{{asset('lte/assets/js/plugin/chart-circle/circles.min.js')}}"></script>

    <!-- Datatables -->
    <script src="{{asset('lte/assets/js/plugin/datatables/datatables.min.js')}}"></script>

    <!-- jQuery Vector Maps -->
    <script src="{{asset('lte/assets/js/plugin/jsvectormap/jsvectormap.min.js')}}"></script>
    <script src="{{asset('lte/assets/js/plugin/jsvectormap/world.js')}}"></script>

    <!-- Sweet Alert -->
    <script src="{{asset('lte/assets/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

    <!-- Kaiadmin JS -->
    <script src="{{asset('lte/assets/js/kaiadmin.min.js')}}"></script>
  </body>
</html>
