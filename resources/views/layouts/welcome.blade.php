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
                <a href="index.html" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <!-- <img src="assets/img/logo.webp" alt=""> -->
                    <h1 class="sitename">SiteManager</h1>
                </a>

                <div class="d-flex align-items-center">
                    <div class="social-links">
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    </div>

                    <form class="search-form ms-4">
                        <input type="text" placeholder="Search..." class="form-control">
                        <button type="submit" class="btn"><i class="bi bi-search"></i></button>
                    </form>
                </div>
            </div>

        </div>

        <div class="nav-wrap">
            <div class="container d-flex justify-content-center position-relative">
                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#hero" class="active">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#team">Team</a></li>
                        <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Dropdown 1</a></li>
                                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                        <li><a href="#">Deep Dropdown 1</a></li>

                                    </ul>
                                </li>
                                <li><a href="#">Dropdown 2</a></li>

                            </ul>
                        </li>
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

    <footer id="footer" class="footer position-relative">

        <div class="container">
            <div class="row gy-5">

                <!-- Branding & Social -->
                <div class="col-lg-4">
                    <div class="footer-brand">
                        <a href="index.html" class="logo d-flex align-items-center mb-3">
                            <span class="sitename">SiteManager</span>
                        </a>
                        <p class="tagline">Gérez facilement tous vos sites, suivez l’avancement et optimisez vos
                            interventions.</p>

                        <div class="social-links mt-4">
                            <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                            <a href="#" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-6">
                    <div class="footer-links-grid">
                        <div class="row">
                            <div class="col-6 col-md-4">
                                <h5>Entreprise</h5>
                                <ul class="list-unstyled">
                                    <li><a href="#">À propos</a></li>
                                    <li><a href="#">Équipe</a></li>
                                    <li><a href="#">Carrières</a></li>
                                    <li><a href="#">Actualités</a></li>
                                </ul>
                            </div>
                            <div class="col-6 col-md-4">
                                <h5>Services</h5>
                                <ul class="list-unstyled">
                                    <li><a href="#">Installation des sites</a></li>
                                    <li><a href="#">Suivi & maintenance</a></li>
                                    <li><a href="#">Rapports de performance</a></li>
                                    <li><a href="#">Optimisation énergétique</a></li>
                                </ul>
                            </div>
                            <div class="col-6 col-md-4">
                                <h5>Support</h5>
                                <ul class="list-unstyled">
                                    <li><a href="#">Centre d’aide</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Politique de confidentialité</a></li>
                                    <li><a href="#">Conditions d’utilisation</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CTA -->
                <div class="col-lg-2">
                    <div class="footer-cta">
                        <h5>Restons Connectés</h5>
                        <a href="contact.html" class="btn btn-outline">Nous Contacter</a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-bottom-content d-flex justify-content-between align-items-center">
                            <p class="mb-0">© <span class="sitename">SiteManager</span>. Tous droits réservés.</p>

                        </div>
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
