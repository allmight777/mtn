<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Accueil - SiteManager </title>

    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('images/image_2.webp') }}" type="image/x-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/swiper@9.4.1/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexBiz
  * Template URL: https://bootstrapmade.com/flexbiz-bootstrap-business-template/
  * Updated: Aug 04 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header sticky-top">
        <div class="container-fluid container-xl position-relative">

            <div class="top-row d-flex align-items-center justify-content-between">
                <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                     <img src="{{ asset('images/logo.webp') }}" alt="">
                    <h1 class="sitename">SiteManager</h1>
                </a>

                <div class="d-flex align-items-center">


                    <form class="search-form ms-4">
                        <input type="text" placeholder="Search..." class="form-control">
                        <button type="submit" class="btn"><i class="bi bi-search"></i></button>
                    </form>
                </div>
            </div>

        </div>

        <div class="nav-wrap" style="background-color: rgb(161, 227, 243);">
            <div class="container d-flex justify-content-center position-relative">
                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#hero" class="active">Home</a></li>
                        <li><a href="#about">A propos</a></li>
                        <li><a href="#featured-services">Fonctions</a></li>
                       <li><a href="#contact">Contact</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
            </div>
        </div>

    </header>

    <main class="main">

        @yield('content')
    </main>

   <footer id="footer" class="footer-custom">
  <div class="container">
    <div class="row gy-4 align-items-start">

      <!-- Colonne 1 : Logo + Description -->
      <div class="col-lg-4 col-md-6">
        <div class="footer-brand">
          <a href="index.html" class="d-flex align-items-center mb-3">
            <img src="{{ asset('images/logo.webp') }}" alt="Logo" style="max-height: 60px;">
          </a>
          <p class="footer-text">SiteManager<br>
            Gérez facilement tous vos sites, suivez l’avancement et optimisez vos interventions.
          </p>
        </div>
      </div>

      <!-- Colonne 2 : Identité entreprise -->
      <div class="col-lg-4 col-md-6">
        <div class="footer-info">
          <p class="mb-1 fw-bold">A D V A N C E D  M E C H A T R O N I C</p>
          <p class="mb-1">TECHNIQUEMENT</p>
          <p class="mb-1">EFFICIENT</p>
          <p class="mb-1">AdMec Consortium Techno Industriel du Bénin</p>
        </div>
      </div>

      <!-- Colonne 3 : Coordonnées -->
      <div class="col-lg-4 col-md-12">
        <div class="footer-contact">
          <p class="mb-1">IFU : 3202267550209</p>
          <p class="mb-1">RCCM : RB/COT/22 B 33829 du 02/11/2022</p>
          <p class="mb-1">Boulevard de la Marina - COTONOU – BÉNIN</p>
          <p class="mb-1">Tel : +229 59 00 80 83</p>
          <p class="mb-0">Methodology - Engineering – Deployment</p>
        </div>
      </div>

    </div>
  </div>
</footer>



    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <!-- Vendor JS Files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9.4.1/swiper-bundle.min.js"></script>
    <!-- Initialize AOS -->
    <script>
        AOS.init();
    </script>

    <!-- Initialize GLightbox -->
    <script>
        const lightbox = GLightbox();
    </script>

    <!-- Initialize Swiper (exemple de base) -->
    <script>
        const swiper = new Swiper('.swiper', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>


    <!-- Main JS File -->
    <script src="{{ asset('js/welcome.js') }}"></script>

</body>

</html>
