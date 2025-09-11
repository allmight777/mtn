@extends('layouts.welcome')

@section('content')
    <!-- Hero Section -->

    <style>
        /* On force le body et html à avoir 100% hauteur */
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        #hero-section {
            position: relative;
            width: 100%;
            min-height: 700px;
            background: url('{{ asset('images/2.webp') }}') no-repeat center center;
            background-size: cover;
            color: #fff;
            overflow: hidden;
            z-index: 1;
        }

        .hero-overlay {
            position: absolute;
            /* on positionne l’overlay par dessus */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 35, 71, 0.7);
            /* overlay sombre */
            z-index: 2;
            padding: 60px 0;
            display: flex;
            align-items: center;
            /* vertical centering */
        }

        .hero-overlay .container {
            position: relative;
            z-index: 3;
            /* au-dessus de l’overlay */
            max-width: 1200px;
            margin: 0 auto;
        }


        #hero-content-box {
            background-color: rgba(255, 255, 255, 0.95);
            color: #003147;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        #hero-title {
            font-size: 2rem;
            color: #003147;
        }

        #hero-description {
            font-size: 1rem;
            line-height: 1.6;
            color: #1a1a1a;
        }

        #hero-buttons a {
            min-width: 140px;
        }

        #hero-stats li {
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 6px;
            color: #333;
        }

        /* Cartes (droite) */
        .hero-card {
            background-color: rgb(198, 245, 255);

            border: none;
            border-radius: 16px;
            transition: all 0.3s ease;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.08);
        }

        .hero-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 22px rgba(0, 0, 0, 0.12);
        }

        .hero-card .card-title {
            color: #003147;
            font-weight: 700;
        }

        .hero-card .card-text {
            color: #1a1a1a;
            font-size: 0.95rem;
        }

        .hero-card a {
            font-weight: 600;
            color: #003147;
            text-decoration: none;
        }

        .hero-card a:hover {
            color: #007bff;
        }

        /* Responsive padding */
        @media (max-width: 768px) {
            #hero-section {
                background-position: center top;
            }

            .hero-overlay {
                padding: 40px 0;
            }

            #hero-content-box {
                padding: 20px;
            }
        }
    </style>

    <section id="hero-section">
        <div class="hero-overlay">
            <div class="container py-5">
                <div class="row align-items-start gy-5">

                    <!-- Colonne gauche -->
                    <div class="col-lg-6" id="hero-left">
                        <div id="hero-content-box">
                            <div class="mb-3 d-flex align-items-center">
                                <i class="bi bi-lightning-charge me-2 text-primary fs-4"></i>
                                <span class="fw-semibold">Suivi des installations solaires</span>
                            </div>

                            <h2 class="fw-bold mb-3" id="hero-title">
                                Optimisez l’avancement et l’efficacité de vos installations
                            </h2>

                            <p id="hero-description">
                                Visualisez rapidement l’état de chaque site : installé, en cours d’installation, ou non
                                installé.<br>
                                Suivez les étapes clés comme la pose des panneaux, le câblage des batteries, etc.<br>
                                Importez vos données, générez des courbes de performance, et gardez un historique complet.
                            </p>

                            <div class="d-flex flex-wrap gap-3 my-4" id="hero-buttons">
                                <a href="{{ route('login') }}" class="btn" style="background-color: rgb(161, 227, 243);">
                                    Se Connecter <i class="bi bi-arrow-right ms-2"></i>
                                </a>
                                <a href="{{ route('register') }}" class="btn "
                                    style="background-color: rgb(161, 227, 243);">
                                    S'inscrire <i class="bi bi-arrow-right ms-2"></i>
                                </a>
                                <a href="#tutorials" class="btn btn-secondary">
                                    <i class="bi bi-play-fill me-2"></i> Regarder la démo
                                </a>
                            </div>

                            <ul class="list-unstyled d-flex flex-wrap gap-3" id="hero-stats">
                                <li><i class="bi bi-check-circle me-1 text-success"></i> Suivi des installations</li>
                                <li><i class="bi bi-bar-chart-line me-1 text-info"></i> Analyse des performances</li>
                                <li><i class="bi bi-clock-history me-1 text-warning"></i> Historique des interventions</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Colonne droite -->
                    <div class="col-lg-6" id="hero-right">
                        <div class="row g-4">

                            <!-- Carte 1 -->
                            <div class="col-md-6">
                                <div class="card h-100 text-center hero-card" id="card-inscription">
                                    <div class="card-body">
                                        <i class="bi bi-person-plus fs-2 mb-3 text-primary"></i>
                                        <h5 class="card-title">Inscription</h5>
                                        <p class="card-text">
                                            Créez votre compte professionnel avec votre matricule et e-mail pour accéder à
                                            votre espace personnalisé.
                                        </p>
                                        <a href="{{ route('register') }}" class="btn btn-link" style="">Inscrivez-vous
                                            <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Carte 2 -->
                            <div class="col-md-6">
                                <div class="card h-100 text-center hero-card" id="card-connexion">
                                    <div class="card-body">
                                        <i class="bi bi-box-arrow-in-right fs-2 mb-3 text-primary"></i>
                                        <h5 class="card-title">Connexion</h5>
                                        <p class="card-text">
                                            Connectez-vous rapidement à votre espace sécurisé pour gérer et suivre
                                            l’avancement des sites.
                                        </p>
                                        <a href="{{ route('login') }}" class="btn btn-link">Se Connecter <i
                                                class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Carte 3 -->
                            <div class="col-12">
                                <div class="card h-100 text-center hero-card" id="card-explorer">
                                    <div class="card-body">
                                        <i class="bi bi-compass fs-2 mb-3 text-primary"></i>
                                        <h5 class="card-title">Explorer</h5>
                                        <p class="card-text">
                                            Parcourez votre dashboard pour visualiser l’état des sites, les interventions et
                                            générer des rapports et courbes de performance.
                                        </p>
                                        <a href="#dashboard" class="btn btn-link">Explorer <i
                                                class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>






    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-4">

                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item">
                        <div class="icon">
                            <i class="bi bi-house-fill" style="color: rgb(161, 227, 243);"></i>
                        </div>
                        <h3>Suivi des Sites</h3>
                        <p>Consultez l’état de chaque site : non installé, en cours d’installation ou installé. Visualisez
                            toutes les étapes et activités en cours.</p>
                        <div class="card-links">
                            <a href="#suivi-sites" class="link-item" style="color: rgba(1, 81, 255, 0.986);">
                                Découvrir
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item">
                        <div class="icon">
                            <i class="bi bi-bar-chart-line-fill" style="color: rgb(161, 227, 243);"></i>
                        </div>
                        <h3>Analyse des Performances</h3>
                        <p>Visualisez les courbes de production, consommation et charge/décharge pour chaque site, afin
                            d’optimiser l’efficacité globale.</p>
                        <div class="card-links">
                            <a href="#analyse-performances" class="link-item" style="color: rgba(1, 81, 255, 0.986);">
                                Découvrir
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item">
                        <div class="icon">
                            <i class="bi bi-clock-history" style="color: rgb(161, 227, 243);"></i>
                        </div>
                        <h3>Historique et Interventions</h3>
                        <p>Suivez toutes les interventions et maintenances effectuées sur chaque site avec un historique
                            détaillé et consultable à tout moment.</p>
                        <div class="card-links">
                            <a href="#historique" class="link-item" style="color: rgba(1, 81, 255, 0.986);">
                                Découvrir
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item">
                        <div class="icon">
                            <i class="bi bi-cloud-upload-fill" style="color: rgb(161, 227, 243);"></i>
                        </div>
                        <h3>Importation de Données</h3>
                        <p>Importez vos fichiers Excel ou CSV pour mettre à jour les informations des sites et générer
                            automatiquement les courbes de performance.</p>
                        <div class="card-links">
                            <a href="#import-donnees" class="link-item" style="color: rgba(1, 81, 255, 0.986);">
                                Découvrir
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item">
                        <div class="icon">
                            <i class="bi bi-shield-lock-fill" style="color: rgb(161, 227, 243);"></i>
                        </div>
                        <h3>Gestion des Accès</h3>
                        <p>Attribuez des rôles et niveaux d’accès pour chaque utilisateur : techniciens, ingénieurs ou
                            administrateurs. Sécurisez vos données sensibles.</p>
                        <div class="card-links">
                            <a href="#gestion-acces" class="link-item" style="color: rgba(1, 81, 255, 0.986);">
                                Découvrir
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Card 6: Gestion des Stocks -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item">
                        <div class="icon">
                            <i class="bi bi-box-seam-fill" style="color: rgb(161, 227, 243);"></i>
                        </div>
                        <h3>Gestion des Stocks</h3>
                        <p>Suivez l’état de vos équipements, gérez les entrées/sorties de matériel, et évitez les ruptures
                            pour une continuité de service optimale.</p>
                        <div class="card-links">
                            <a href="#stocks" class="link-item" style="color: rgba(1, 81, 255, 0.986);">
                                Gérer les Stocks
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </section><!-- /Featured Services Section -->

    <!-- About Section -->
    <section id="about" class="about section" style="background-color: rgb(161, 227, 243);">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2 style="color: white;">À propos</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-4 align-items-stretch">

                <!-- Image / Illustration -->
                <div class="col-lg-5 order-lg-2" data-aos="fade-left" data-aos-delay="200">
                    <aside class="showcase">
                        <figure class="showcase-main">
                            <img src="{{ asset('images/image_3.webp') }}" alt="Our Project" class="img-fluid">
                            <figcaption class="badge-note" data-aos="zoom-in" data-aos-delay="350">
                                <i class="bi bi-graph-up-arrow blue-icon"></i>
                                <div>
                                    <strong>Suivi en temps réel</strong>
                                    <small>Analyse et reporting précis des installations</small>
                                </div>
                            </figcaption>
                        </figure>
                    </aside>
                </div>

                <!-- Texte / Description -->
                <div class="col-lg-7 order-lg-1" data-aos="fade-right" data-aos-delay="200">
                    <article class="intro-card">
                        <div class="intro-head">
                            <span class="kicker"><i class="bi bi-stars me-1 blue-icon"></i>Notre Mission</span>
                            <h2>Assurer un suivi fiable et efficace de chaque site</h2>
                        </div>

                        <div class="intro-body">
                            <p class="lead" style="font-family: 'Arial', sans-serif; line-height: 1.6; color: #333;">
                                Nous permettons de visualiser l’état de chaque site, de suivre les interventions et
                                d’optimiser les performances de chaque installation solaire.
                            </p>
                            <p>Importez vos données, générez des courbes de production et de consommation, et consultez
                                l’historique complet des maintenances et interventions.</p>

                            <!-- Liste des fonctionnalités -->
                            <div id="feature-list" class="feature-list row gy-3">
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="250">
                                    <div class="feature-item">
                                        <i class="bi bi-speedometer2 blue-icon"></i>
                                        <div class="text">
                                            <h6>Dashboard Intuitif</h6>
                                            <p>Vue d’ensemble de tous les sites et de leurs états en un coup d’œil.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                    <div class="feature-item">
                                        <i class="bi bi-bar-chart-line-fill blue-icon"></i>
                                        <div class="text">
                                            <h6>Analyse de Performance</h6>
                                            <p>Courbes et statistiques des installations pour optimiser la production.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Nouveau bloc gestion des stocks -->
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="350">
                                    <div class="feature-item">
                                        <i class="bi bi-box-seam blue-icon"></i>
                                        <div class="text">
                                            <h6>Gestion des Stocks</h6>
                                            <p>Suivi précis des matériaux et composants pour une meilleure planification.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Statistiques / Metrics -->
                            <div id="metric-band" class="metric-band" data-aos="fade-up" data-aos-delay="400">
                                <div class="metric">
                                    <span class="value">1000+</span>
                                    <span class="label">Sites suivis</span>
                                </div>
                                <div class="divider"></div>
                                <div class="metric">
                                    <span class="value">500+</span>
                                    <span class="label">Interventions réalisées</span>
                                </div>
                                <div class="divider"></div>
                                <div class="metric">
                                    <span class="value">50</span>
                                    <span class="label">Experts disponibles</span>
                                </div>
                            </div>

                            <!-- Boutons d'action -->
                            <div class="actions d-flex flex-wrap align-items-center gap-3" data-aos="fade-up"
                                data-aos-delay="450">
                                <a href="#dashboard" class="btn btn-accent" style="background-color: rgb(0, 203, 253);">
                                    <i class="bi bi-rocket-takeoff me-1 blue-icon"></i> Accéder au Dashboard
                                </a>
                                <a href="#services" class="link-more">
                                    En savoir plus sur nos fonctionnalités <i
                                        class="bi bi-arrow-right-short blue-icon"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>

            </div>

        </div>

    </section><!-- /About Section -->



    <!-- Clients Section -->
    <section id="clients" class="clients section">

        <div class="container" data-aos="fade-up">
            <div class="clients-wrapper">
                <div class="clients-track">
                    <div class="client-logo">
                        <img src="{{ asset('images/image_3.webp') }}" class="img-fluid" alt="Client 1" loading="lazy">
                    </div>

                    <div class="client-logo">
                        <img src="{{ asset('images/image_4.webp') }}" class="img-fluid" alt="Client 2" loading="lazy">
                    </div>

                    <div class="client-logo">
                        <img src="{{ asset('images/image_5.webp') }}" class="img-fluid" alt="Client 3" loading="lazy">
                    </div>

                    <div class="client-logo">
                        <img src="{{ asset('images/image_6.webp') }}" class="img-fluid" alt="Client 4" loading="lazy">
                    </div>

                    <div class="client-logo">
                        <img src="{{ asset('images/image_2.webp') }}" class="img-fluid" alt="Client 5" loading="lazy">
                    </div>

                    <div class="client-logo">
                        <img src="{{ asset('images/image_7.webp') }}" class="img-fluid" alt="Client 6" loading="lazy">
                    </div>

                    <div class="client-logo">
                        <img src="{{ asset('images/image_1.webp') }}" class="img-fluid" alt="Client 7" loading="lazy">
                    </div>

                    <div class="client-logo">
                        <img src="{{ asset('images/image_5.webp') }}" class="img-fluid" alt="Client 8" loading="lazy">
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Clients Section -->







    <!-- Sites Section -->
    <section id="sites" class="portfolio section" style="background-color: rgb(161, 227, 243);">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2 style="color: white;">Nos Sites</h2>

        </div><!-- End Section Title -->

        <div class="container" class="mt-0">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">



                <!-- Sites Grid -->
                <div class="row gy-4 portfolio-container isotope-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-installed">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('images/image_8.webp') }}" class="img-fluid" alt="Site 1"
                                loading="lazy" style="height: 200%">
                            <div class="portfolio-info">
                                <h4>Site Alpha</h4>
                                <p>Installé - Panneaux et batteries opérationnels</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/sites/site-1.webp" class="glightbox" title="Site Alpha"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="#site-details" title="Plus de détails"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-in-progress">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('images/image_9.webp') }}" class="img-fluid" alt="Site 2"
                                loading="lazy">
                            <div class="portfolio-info">
                                <h4>Site Beta</h4>
                                <p>En cours d'installation - Pose des panneaux en cours</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/sites/site-2.webp" class="glightbox" title="Site Beta"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="#site-details" title="Plus de détails"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-not-installed">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('images/image_7.webp') }}" class="img-fluid" alt="Site 3"
                                loading="lazy">
                            <div class="portfolio-info">
                                <h4>Site Gamma</h4>
                                <p>Non installé - Prêt pour installation future</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/sites/site-3.webp" class="glightbox" title="Site Gamma"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="#site-details" title="Plus de détails"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-in-progress">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('images/image_9.webp') }}" class="img-fluid" alt="Site 2"
                                loading="lazy">
                            <div class="portfolio-info">
                                <h4>Site Beta</h4>
                                <p>En cours d'installation - Pose des panneaux en cours</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/sites/site-2.webp" class="glightbox" title="Site Beta"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="#site-details" title="Plus de détails"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-not-installed">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('images/image_7.webp') }}" class="img-fluid" alt="Site 3"
                                loading="lazy">
                            <div class="portfolio-info">
                                <h4>Site Gamma</h4>
                                <p>Non installé - Prêt pour installation future</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/sites/site-3.webp" class="glightbox" title="Site Gamma"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="#site-details" title="Plus de détails"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-in-progress">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('images/image_9.webp') }}" class="img-fluid" alt="Site 2"
                                loading="lazy">
                            <div class="portfolio-info">
                                <h4>Site Beta</h4>
                                <p>En cours d'installation - Pose des panneaux en cours</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/sites/site-2.webp" class="glightbox" title="Site Beta"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="#site-details" title="Plus de détails"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div><!-- End Sites Grid -->

            </div>

        </div>

    </section><!-- /Sites Section -->





    <!-- Contact Section -->
    <section id="contact" class="contact section dark-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Need Help? Contact Us</p>
        </div><!-- End Section Title -->

        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-5">
                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Address</h3>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p>info@example.com</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="col-lg-7">
                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                    required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject"
                                    required="">
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
@endsection
