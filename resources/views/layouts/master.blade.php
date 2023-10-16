
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <title>Boy's Fashion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Favicons -->

<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>

      .animer{
          
          text-transform: capitalize;
          background-color: green;
          text-align: center;
          color: rgb(238, 224, 220);
          padding: 14px;
          margin-bottom: 20px;
          border-radius: 20px;
          box-shadow: 0 0 8px rgba(0, 0, 0, 1)
          animation: anime 0.6s ease-out;
      }

      @keyframes anime {
          from {
              transform: translateY(-100px);
          }
          
      }

      .content-form{
          background-color: #fff;
          border-radius: 25px;
          padding: 20px;
          box-shadow: 0 0 8px rgba(0, 0, 0, 1);
          margin: 20px;
      }

      


      .inp{
        
        border-radius: 25px;
        padding: 10px;
        box-shadow: 0 0 8px rgba(1, 1, 0, 1);
        margin: 10px;
      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }



                    /* stylelint-disable stylistic/selector-list-comma-newline-after */

                .blog-header-logo {
                font-family: "Playfair Display", Georgia, "Times New Roman", serif/*rtl:Amiri, Georgia, "Times New Roman", serif*/;
                font-size: 2.25rem;
                }

                .blog-header-logo:hover {
                text-decoration: none;
                }

                h1, h2, h3, h4, h5, h6 {
                font-family: "Playfair Display", Georgia, "Times New Roman", serif/*rtl:Amiri, Georgia, "Times New Roman", serif*/;
                }

                .flex-auto {
                flex: 0 0 auto;
                }

                .h-250 { height: 250px; }
                @media (min-width: 768px) {
                .h-md-250 { height: 250px; }
                }

                /* Pagination */
                .blog-pagination {
                margin-bottom: 4rem;
                }

                /*
                * Blog posts
                */
                .blog-post {
                margin-bottom: 4rem;
                }
                .blog-post-meta {
                margin-bottom: 1.25rem;
                color: #727272;
                }




    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">

    <!-- Custom Google Fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&family=Roboto:wght@300;400;700&display=auto"
    rel="stylesheet">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon/favicon-16x16.png">
  <link rel="mask-icon" href="./assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!-- Vendor CSS -->
  <link rel="stylesheet" href="./assets/css/libs.bundle.css" />

  <!-- Main CSS -->
  <link rel="stylesheet" href="./assets/css/theme.bundle.css" />

  <!-- Fix for custom scrollbar if JS is disabled-->
  <noscript>
    <style>
      /**
          * Reinstate scrolling for non-JS clients
          */
      .simplebar-content-wrapper {
        overflow: auto;
      }
    </style>
  </noscript>

  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

    
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="aperture" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
    <circle cx="12" cy="12" r="10"/>
    <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/>
  </symbol>
  <symbol id="cart" viewBox="0 0 16 16">
    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
  <symbol id="chevron-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
  </symbol>
</svg>

<div class="container">
  <div class="barre">
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <a class="navbar-brand" href="{{ route('product.index') }}">
         <img src="./assets/images/banners/banner-sale.jpg" alt="" class="rounded-circle" width="60px" height="60px">
         Boy's Fashion
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('category') }}">Catégories<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">se connecter</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}">Déconnexion</a>
            </li>
              
            <li class="nav-item">
              <a class="nav-link" href="{{ route('apropos') }}"><strong>A Propos</strong></a>
            </li>
              
            <li class="nav-item">
                <a class="nav-link" href="{{ route('cart.index') }}">
                  <i class="bi bi-cart4"></i> {{ Cart::count() }}
                </a>
            </li>
          </ul>
        </div>
      </nav>
</div><br>
  <!-- <header class="border-bottom lh-1 py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="blog-header-logo text-body-emphasis text-decoration-none" href="{{ route('cart.index') }}">Panier: {{ Cart::count() }}</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-body-emphasis text-decoration-none" href="{{ route('product.index') }}">AlY SHOP</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="link-secondary" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a> 
      </div>
    </div>
  </header>
     navbar -->
</div>
@if (session('success'))

    <div class="row justify-content-center">
      <div class="col-md-6 animer">
        <h4 class="tracking-wide fw-bold text-outline-dark text-uppercase">{{ session('success') }}</h4>

      </div>
      
    </div>
    
@endif

<main class="container">
  <!-- Main Section-->
  <section class="mt-0 overflow-hidden ">
    <!-- Page Content Goes Here -->

    <!-- / Top banner -->
    <section class="vh-75 vh-lg-60 container-fluid rounded overflow-hidden" data-aos="fade-in">
        <!-- Swiper Info -->
        <div class="swiper-container overflow-hidden rounded h-100 bg-light" data-swiper data-options='{
          "spaceBetween": 0,
          "slidesPerView": 1,
          "effect": "fade",
          "speed": 1000,
          "loop": true,
          "parallax": true,
          "observer": true,
          "observeParents": true,
          "lazy": {
            "loadPrevNext": true
            },
            "autoplay": {
              "delay": 5000,
              "disableOnInteraction": false
          },
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
            }
          }'>
          <div class="swiper-wrapper">

             <!--Slide-->
             <div class="swiper-slide position-relative h-100 w-100">
              <div class="w-100 h-100 overflow-hidden position-absolute z-index-1 top-0 start-0 end-0 bottom-0">
                <div class="w-100 h-100 bg-img-cover bg-pos-center-center overflow-hidden" data-swiper-parallax="-100"
                  style=" will-change: transform; background-image: url(./assets/images/banners/banner-7.jpg)">
                </div>
              </div>
              <div
                class="container position-relative z-index-10 d-flex h-100 align-items-start flex-column justify-content-center">
                <p class="title-small text-white opacity-75 mb-0" data-swiper-parallax="-100">Look Good Feel Good</p>
                <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white" data-swiper-parallax="100">
                  <span class="text-outline-light">Boy's</span> Fashion</h2>
                <div data-swiper-parallax-y="-25">
                  <a href="./category.html" class="btn btn-psuedo text-white" role="button">Why We Are Different</a>
                </div>
              </div>
            </div>
            <!--/Slide-->
        
            <!-- Slide-->
            <div class="swiper-slide position-relative h-100 w-100">
              <div class="w-100 h-100 overflow-hidden position-absolute z-index-1 top-0 start-0 end-0 bottom-0">
                <div class="w-100 h-100 bg-img-cover bg-pos-center-center overflow-hidden" data-swiper-parallax="-100"
                  style=" will-change: transform; background-image: url(./assets/images/banners/banner-12.jpg)">
                </div>
              </div>
              <div
                class="container position-relative z-index-10 d-flex h-100 align-items-start flex-column justify-content-center">
                <p class="title-small text-white opacity-75 mb-0" data-swiper-parallax="-100">Everything You Need</p>
                <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white" data-swiper-parallax="100">
                  <span class="text-outline-light">Air</span> Essentials</h2>
                <div data-swiper-parallax-y="-25">
                  <a href="./category.html" class="btn btn-psuedo text-white" role="button">Shop New Arrivals</a>
                </div>
              </div>
            </div>
            <!-- /Slide-->
        
            <!-- Slide-->
            <div class="swiper-slide position-relative h-100 w-100">
              <div class="w-100 h-100 overflow-hidden position-absolute z-index-1 top-0 start-0 end-0 bottom-0">
                <div class="w-100 h-100 bg-img-cover bg-pos-center-center overflow-hidden" data-swiper-parallax="-100"
                  style=" will-change: transform; background-image: url(./assets/images/banners/banner-2.jpg)">
                </div>
              </div>
              <div
                class="container position-relative z-index-10 d-flex h-100 align-items-start flex-column justify-content-center">
                <p class="title-small text-white opacity-75 mb-0" data-swiper-parallax="-100">Spring Collection</p>
                <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white" data-swiper-parallax="100">
                  Adidas <span class="text-outline-light">SS21</span></h2>
                <div data-swiper-parallax-y="-25">
                  <a href="./category.html" class="btn btn-psuedo text-white" role="button">Shop Latest Adidas</a>
                </div>
              </div>
            </div>
            <!--/Slide-->
        
            <!-- Slide-->
            <div class="swiper-slide position-relative h-100 w-100">
              <div class="w-100 h-100 overflow-hidden position-absolute z-index-1 top-0 start-0 end-0 bottom-0">
                <div class="w-100 h-100 bg-img-cover bg-pos-center-center overflow-hidden" data-swiper-parallax="-100"
                  style=" will-change: transform; background-image: url(./assets/images/banners/banner-4.jpg)">
                </div>
              </div>
              <div
                class="container position-relative z-index-10 d-flex h-100 align-items-start flex-column justify-content-center">
                <p class="title-small text-white opacity-75 mb-0" data-swiper-parallax="-100">Just Do it</p>
                <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white" data-swiper-parallax="100">
                  Nike <span class="text-outline-light">SS21</span></h2>
                <div data-swiper-parallax-y="-25">
                  <a href="./category.html" class="btn btn-psuedo text-white" role="button">Shop Latest Nike</a>
                </div>
              </div>
            </div>
            <!-- /Slide-->
        
            <!--Slide-->
            <div class="swiper-slide position-relative h-100 w-100">
              <div class="w-100 h-100 overflow-hidden position-absolute z-index-1 top-0 start-0 end-0 bottom-0">
                <div class="w-100 h-100 bg-img-cover bg-pos-center-center overflow-hidden" data-swiper-parallax="-100"
                  style=" will-change: transform; background-image: url(./assets/images/banners/banner-3.jpg)">
                </div>
              </div>
              <div
                class="container position-relative z-index-10 d-flex h-100 align-items-start flex-column justify-content-center">
                <p class="title-small text-white opacity-75 mb-0" data-swiper-parallax="-100">Look Good Feel Good</p>
                <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white" data-swiper-parallax="100">
                  <span class="text-outline-light">Boy's</span> Fashion</h2>
                <div data-swiper-parallax-y="-25">
                  <a href="./category.html" class="btn btn-psuedo text-white" role="button">Why We Are Different</a>
                </div>
              </div>
            </div>
            <!--/Slide-->

           
        
          </div>
        
          <div class="swiper-pagination swiper-pagination-bullet-light"></div>
        
        </div>
        <!-- / Swiper Info-->        </section>
    <!--/ Top Banner-->

    <!-- Featured Brands-->
    <div class="brand-section container-fluid" data-aos="fade-in">
        <div class="bg-overlay-sides-white-to-transparent bg-white py-5 py-md-7">
            <section class="marquee marquee-hover-pause">
                <div class="marquee-body">
                    <div class="marquee-section animation-marquee-50">
                        <div class="mx-3 mx-lg-5 f-w-24">
                            <a class="d-block" href="./category.html">
                                <picture>
                                    <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logo-1.svg" alt="">
                                </picture>
                            </a>
                        </div>
                        <div class="mx-3 mx-lg-5 f-w-24">
                            <a class="d-block" href="./category.html">
                                <picture>
                                    <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logo-2.svg" alt="">
                                </picture>
                            </a>
                        </div>
                        <div class="mx-3 mx-lg-5 f-w-24">
                            <a class="d-block" href="./category.html">
                                <picture>
                                    <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logo-3.svg" alt="">
                                </picture>
                            </a>
                        </div>
                        <div class="mx-3 mx-lg-5 f-w-24">
                            <a class="d-block" href="./category.html">
                                <picture>
                                    <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logo-4.svg" alt="">
                                </picture>
                            </a>
                        </div>
                        <div class="mx-3 mx-lg-5 f-w-24">
                            <a class="d-block" href="./category.html">
                                <picture>
                                    <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logo-5.svg" alt="">
                                </picture>
                            </a>
                        </div>
                        <div class="mx-3 mx-lg-5 f-w-24">
                            <a class="d-block" href="./category.html">
                                <picture>
                                    <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logo-6.svg" alt="">
                                </picture>
                            </a>
                        </div>
                        <div class="mx-3 mx-lg-5 f-w-24">
                            <a class="d-block" href="./category.html">
                                <picture>
                                    <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logo-7.svg" alt="">
                                </picture>
                            </a>
                        </div>
                        <div class="mx-3 mx-lg-5 f-w-24">
                            <a class="d-block" href="./category.html">
                                <picture>
                                    <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logo-8.svg" alt="">
                                </picture>
                            </a>
                        </div>
                        <div class="mx-3 mx-lg-5 f-w-24">
                            <a class="d-block" href="./category.html">
                                <picture>
                                    <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logo-9.svg" alt="">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="marquee-section animation-marquee-50">
                        <div class="mx-5 f-w-24">
                            <a class="d-block" href="./category.html">
                                <picture>
                                    <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logo-1.svg" alt="">
                                </picture>
                            </a>
                        </div>
                        <div class="mx-5 f-w-24">
                            <a class="d-block" href="./category.html">
                                <picture>
                                    <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logo-2.svg" alt="">
                                </picture>
                            </a>
                        </div>
                        <div class="mx-5 f-w-24">
                            <a class="d-block" href="./category.html">
                                <picture>
                                    <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logo-3.svg" alt="">
                                </picture>
                            </a>
                        </div>
                        <div class="mx-5 f-w-24">
                            <a class="d-block" href="./category.html">
                                <picture>
                                    <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logo-4.svg" alt="">
                                </picture>
                            </a>
                        </div>
                        <div class="mx-5 f-w-24">
                            <a class="d-block" href="./category.html">
                                <picture>
                                    <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logo-5.svg" alt="">
                                </picture>
                            </a>
                        </div>
                        <div class="mx-5 f-w-24">
                            <a class="d-block" href="./category.html">
                                <picture>
                                    <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logo-6.svg" alt="">
                                </picture>
                            </a>
                        </div>
                        <div class="mx-5 f-w-24">
                            <a class="d-block" href="./category.html">
                                <picture>
                                    <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logo-7.svg" alt="">
                                </picture>
                            </a>
                        </div>
                        <div class="mx-5 f-w-24">
                            <a class="d-block" href="./category.html">
                                <picture>
                                    <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logo-8.svg" alt="">
                                </picture>
                            </a>
                        </div>
                        <div class="mx-5 f-w-24">
                            <a class="d-block" href="./category.html">
                                <picture>
                                    <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logo-9.svg" alt="">
                                </picture>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!--/ Featured Brands-->
    <!-- /Page Content -->
</section>
<!-- / Main Section-->

  <div class="row mb-2">
   
    @yield('content')
    
  </div>
  

  

</main>

<!-- Footer -->
<footer class="border-top py-5 mt-4  ">
  <div class="container-fluid">
      <div class="d-flex justify-content-between align-items-center flex-column flex-lg-row">
          <div>
              <ul class="list-unstyled">
                  <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all"
                          href="#"><i class="ri-instagram-fill"></i></a></li>
                  <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all"
                          href="#"><i class="ri-facebook-fill"></i></a></li>
                  <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all"
                          href="#"><i class="ri-twitter-fill"></i></a></li>
                  <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all"
                          href="#"><i class="ri-snapchat-fill"></i></a></li>
              </ul>
          </div>
          <div class="d-flex align-items-center justify-content-end flex-column flex-lg-row">
              <p class="small m-0 text-center text-lg-start">&copy; 2021 AlY All Rights Reserved.</p>
              <ul class="list-unstyled mb-0 ms-lg-4 mt-3 mt-lg-0 d-flex justify-content-end align-items-center">
                  <li class="bg-light p-2 d-flex align-items-center justify-content-center me-2">
                      <i class="pi pi-sm pi-paypal"></i></li>
                  <li class="bg-light p-2 d-flex align-items-center justify-content-center me-2">
                      <i class="pi pi-sm pi-mastercard"></i></li>
                  <li class="bg-light p-2 d-flex align-items-center justify-content-center me-2">
                      <i class="pi pi-sm pi-american-express"></i></li>
                  <li class="bg-light p-2 d-flex align-items-center justify-content-center"><i
                          class="pi pi-sm pi-visa"></i>
                  </li>
              </ul>
          </div>
      </div>
  </div>
</footer>    <!-- / Footer-->

 <!-- Theme JS -->
    <!-- Vendor JS -->
    <script src="./assets/js/vendor.bundle.js"></script>
    
    <!-- Theme JS -->
    <script src="./assets/js/theme.bundle.js"></script>
    <script src="./assets/js/jquery-3.6.0.js"></script>
    

<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  @yield('extra-js')
    </body>
</html>
