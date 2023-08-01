<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/auth/img/favicon/favicon.ico')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('assets/auth/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('assets/auth/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('assets/auth/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('assets/auth/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('assets/auth/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/auth/vendor/libs/apex-charts/apex-charts.css')}}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{asset('assets/auth/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('assets/auth/js/config.js')}}"></script>
    @yield('css')
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
                <a href="index.html" class="app-brand-link">
                {{-- <span class="app-brand-logo demo">
                    Service public
                </span> --}}
                <span class="app-brand-text demo menu-text fw-bolder ms-2">Service public</span>
                </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
              <a href="{{url('auth')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics" >Dashboard</div>
              </a>
            </li>

            <!-- Layouts -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Layouts</div>
              </a>

            <ul class="menu-sub">
                <li class="menu-item">
                <a href="layouts-without-menu.html" class="menu-link">
                    <div data-i18n="Without menu">Without menu</div>
                </a>
                </li>
            </ul>
            </li>
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Pages</span>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Gestion Services</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{route('showServe')}}" class="menu-link">
                    {{-- <div data-i18n="Account">Account</div> --}}
                    Service Action
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Authentications">Categories</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{route('show')}}" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Ctegorie Action</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                {{-- <i class="menu-icon tf-icons fa-regular fa-user "></i> --}}
                <div data-i18n="Misc">Gestion d'utilurateure</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                <a href="{{route('showUsers')}}" class="menu-link">
                    <div data-i18n="#">utilisateur Action</div>
                </a>
                </li>
            </ul>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Gestion structure</div>
                </a>
                <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{route('showStucture')}}" class="menu-link">
                    <div data-i18n="Account">structure Action</div>
                    </a>
                </li>
                </ul>
            </li>
            </li>
            {{-- <li class="menu-header s mall text-uppercase"><span class="menu-header-text">Misc</span></li> --}}
        </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            @include('layouts.navbars')
            <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
                {{-- @yield('content') --}}
                @section('content')
                <div class="container">
                    <div class="card">
                        <div class="card-header">
                          Featured
                        </div>
                        <div class="card-body text-center">
                          <h5 class="card-title">welcome admin to the Dashboard </h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                      </div>

                </div>
                @show

            </div>
            <!-- / Content -->

           @include('layouts.footer')

            {{-- <div class="content-backdrop fade"></div> --}}
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <!-- Core JS -->
@include('layouts.scripts')
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

@include('sweetalert::alert')
@stack('scripts')
  </body>
</html>
