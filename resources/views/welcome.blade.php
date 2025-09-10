@extends('layouts.welcome')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row align-items-center gy-5">
                <div class="col-lg-7">
                    <div class="hero-card shadow-sm" data-aos="fade-right" data-aos-delay="150">
                        <div class="eyebrow d-inline-flex align-items-center mb-3">
                            <i class="bi bi-lightning-charge me-2"></i>
                            <span>Suivi des installations solaires</span>
                        </div>
                        <div class="content">
                            <h2 class="display-5 fw-bold mb-3">Optimisez l’avancement et l’efficacité de vos installations
                            </h2>
                            <p class="lead mb-4"
                                style="font-family: 'Arial', sans-serif; font-size: 1.15rem;  line-height: 1.6;">
                                Visualisez rapidement l’état de chaque site : installé, en cours d’installation, ou non
                                installé. Suivez les étapes clés comme la pose des panneaux, le câblage des batteries, et
                                plus encore.
                                Importez vos données, générez des courbes de performance, et gardez un historique complet
                                des interventions et maintenances.
                            </p>

                            <div class="d-flex flex-wrap gap-3">
                                <a href="{{ route('login') }}" class="btn btn-primary-ghost">
                                    <span>Se Connecter</span>
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </a>
                                  <a href="{{ route('register') }}" class="btn btn-primary-ghost">
                                    <span>S'inscrire</span>
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </a>
                                <a href="#tutorials" class="glightbox btn-video d-inline-flex align-items-center">
                                    <span class="play-icon d-inline-flex align-items-center justify-content-center me-2">
                                        <i class="bi bi-play-fill"></i>
                                    </span>
                                    <span>Regarder la démo</span>
                                </a>
                            </div>
                            <div class="mini-stats d-flex flex-wrap gap-4 mt-4" data-aos="zoom-in" data-aos-delay="250">
                                <div class="stat d-flex align-items-center">
                                    <i class="bi bi-check-circle me-2"></i>
                                    <span>Suivi des installations</span>
                                </div>
                                <div class="stat d-flex align-items-center">
                                    <i class="bi bi-bar-chart-line me-2"></i>
                                    <span>Analyse des performances</span>
                                </div>
                                <div class="stat d-flex align-items-center">
                                    <i class="bi bi-clock-history me-2"></i>
                                    <span>Historique des interventions</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-5">
                    <div class="media-stack" data-aos="zoom-in" data-aos-delay="200">
                        <figure class="media primary shadow-sm">
                            <img src="{{ asset('images/image_1.webp') }}" class="img-fluid" alt="Hero visual">
                        </figure>
                        <figure class="media secondary shadow-sm">
                            <img src="{{ asset('images/image_2.webp') }}" class="img-fluid" alt="Supporting visual">
                        </figure>
                        <div class="floating-badge d-flex align-items-center shadow-sm" data-aos="fade-down"
                            data-aos-delay="300">
                            <i class="bi bi-award me-2"></i>
                            <span>Bienvenue</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Hero Section -->
    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-4">

                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item">
                        <div class="icon">
                            <i class="bi bi-house-fill"></i>
                        </div>
                        <h3>Suivi des Sites</h3>
                        <p>Consultez l’état de chaque site : non installé, en cours d’installation ou installé. Visualisez
                            toutes les étapes et activités en cours.</p>
                        <div class="card-links">
                            <a href="#suivi-sites" class="link-item">
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
                            <i class="bi bi-bar-chart-line-fill"></i>
                        </div>
                        <h3>Analyse des Performances</h3>
                        <p>Visualisez les courbes de production, consommation et charge/décharge pour chaque site, afin
                            d’optimiser l’efficacité globale.</p>
                        <div class="card-links">
                            <a href="#analyse-performances" class="link-item">
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
                            <i class="bi bi-clock-history"></i>
                        </div>
                        <h3>Historique et Interventions</h3>
                        <p>Suivez toutes les interventions et maintenances effectuées sur chaque site avec un historique
                            détaillé et consultable à tout moment.</p>
                        <div class="card-links">
                            <a href="#historique" class="link-item">
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
                            <i class="bi bi-cloud-upload-fill"></i>
                        </div>
                        <h3>Importation de Données</h3>
                        <p>Importez vos fichiers Excel ou CSV pour mettre à jour les informations des sites et générer
                            automatiquement les courbes de performance.</p>
                        <div class="card-links">
                            <a href="#import-donnees" class="link-item">
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
                            <i class="bi bi-shield-lock-fill"></i>
                        </div>
                        <h3>Gestion des Accès</h3>
                        <p>Attribuez des rôles et niveaux d’accès pour chaque utilisateur : techniciens, ingénieurs ou
                            administrateurs. Sécurisez vos données sensibles.</p>
                        <div class="card-links">
                            <a href="#gestion-acces" class="link-item">
                                Découvrir
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item">
                        <div class="icon">
                            <i class="bi bi-gear-fill"></i>
                        </div>
                        <h3>Configuration et Paramètres</h3>
                        <p>Personnalisez les paramètres du site, configurez les alertes, et ajustez les calculs pour vos
                            analyses et visualisations de données.</p>
                        <div class="card-links">
                            <a href="#parametres" class="link-item">
                                Découvrir
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- /Featured Services Section -->


    <!-- About Section -->
    <section id="about" class="about section" style="background-color: #e6722ff6; ">

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
                                <i class="bi bi-graph-up-arrow"></i>
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
                            <span class="kicker"><i class="bi bi-stars me-1"></i>Notre Mission</span>
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
                            <div class="feature-list row gy-3">
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="250">
                                    <div class="feature-item">
                                        <i class="bi bi-speedometer2"></i>
                                        <div class="text">
                                            <h6>Dashboard Intuitif</h6>
                                            <p>Vue d’ensemble de tous les sites et de leurs états en un coup d’œil.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                    <div class="feature-item">
                                        <i class="bi bi-bar-chart-line-fill"></i>
                                        <div class="text">
                                            <h6>Analyse de Performance</h6>
                                            <p>Courbes et statistiques des installations pour optimiser la production.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Statistiques / Metrics -->
                            <div class="metric-band" data-aos="fade-up" data-aos-delay="350">
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
                                data-aos-delay="400">
                                <a href="#dashboard" class="btn btn-accent">
                                    <i class="bi bi-rocket-takeoff me-1"></i> Accéder au Dashboard
                                </a>
                                <a href="#services" class="link-more">
                                    En savoir plus sur nos fonctionnalités <i class="bi bi-arrow-right-short"></i>
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




    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Fonctionnalités</h2>
            <p>Inscrivez-vous, connectez-vous et explorez votre dashboard</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <!-- Features Grid -->
            <div class="row gy-5">

                <!-- Card 1: Inscription -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card">
                        <div class="service-number">01</div>
                        <div class="service-icon-wrapper">
                            <div class="service-icon">
                                <i class="bi bi-person-plus"></i>
                            </div>
                        </div>
                        <div class="service-content">
                            <h4>Inscription</h4>
                            <p>Créez votre compte professionnel avec votre matricule et e-mail pour accéder à votre espace
                                personnalisé.</p>
                            <a href="#inscription" class="service-btn">
                                <span>Inscrivez-vous</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Connexion -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card featured">
                        <div class="service-number">02</div>
                        <div class="service-icon-wrapper">
                            <div class="service-icon">
                                <i class="bi bi-box-arrow-in-right"></i>
                            </div>
                        </div>
                        <div class="service-content">
                            <h4>Connexion</h4>
                            <p>Connectez-vous rapidement à votre espace sécurisé pour gérer et suivre l’avancement des
                                sites.</p>
                            <a href="#connexion" class="service-btn">
                                <span>Se Connecter</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Explorer -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-number">03</div>
                        <div class="service-icon-wrapper">
                            <div class="service-icon">
                                <i class="bi bi-compass"></i>
                            </div>
                        </div>
                        <div class="service-content">
                            <h4>Explorer</h4>
                            <p>Parcourez votre dashboard pour visualiser l’état des sites, les interventions et générer des
                                rapports et courbes de performance.</p>
                            <a href="#dashboard" class="service-btn">
                                <span>Explorer</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- /Services Section -->


    <!-- Sites Section -->
    <section id="sites" class="portfolio section"  style="background-color: #e6722ff6; ">

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



    <!-- Faq Section -->
    <section id="faq" class="faq section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>F.A.Q</h2>
        <p>Questions fréquentes sur nos sites et services</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="faq-wrapper">

                    <div class="faq-item faq-active">
                        <div class="faq-header">
                            <div class="faq-icon">
                                <i class="bi bi-question-circle"></i>
                            </div>
                            <h4>Comment puis-je savoir si un site est installé ?</h4>
                            <div class="faq-toggle">
                                <i class="bi bi-plus"></i>
                                <i class="bi bi-dash"></i>
                            </div>
                        </div>
                        <div class="faq-content">
                            <div class="content-inner">
                                <p>Chaque site dispose d’un statut visible dans le tableau de bord : installé, en cours d’installation ou non installé.</p>
                            </div>
                        </div>
                    </div><!-- End FAQ Item -->

                    <div class="faq-item">
                        <div class="faq-header">
                            <div class="faq-icon">
                                <i class="bi bi-question-circle"></i>
                            </div>
                            <h4>Puis-je suivre l’avancement des installations ?</h4>
                            <div class="faq-toggle">
                                <i class="bi bi-plus"></i>
                                <i class="bi bi-dash"></i>
                            </div>
                        </div>
                        <div class="faq-content">
                            <div class="content-inner">
                                <p>Oui, vous pouvez suivre les étapes clés telles que la pose des panneaux, le câblage des batteries, et autres interventions directement depuis le dashboard.</p>
                            </div>
                        </div>
                    </div><!-- End FAQ Item -->

                    <div class="faq-item">
                        <div class="faq-header">
                            <div class="faq-icon">
                                <i class="bi bi-question-circle"></i>
                            </div>
                            <h4>Comment accéder aux données historiques des interventions ?</h4>
                            <div class="faq-toggle">
                                <i class="bi bi-plus"></i>
                                <i class="bi bi-dash"></i>
                            </div>
                        </div>
                        <div class="faq-content">
                            <div class="content-inner">
                                <p>Toutes les interventions et maintenances sont enregistrées et consultables à tout moment via l’onglet Historique de votre tableau de bord.</p>
                            </div>
                        </div>
                    </div><!-- End FAQ Item -->

                    <div class="faq-item">
                        <div class="faq-header">
                            <div class="faq-icon">
                                <i class="bi bi-question-circle"></i>
                            </div>
                            <h4>Puis-je générer des rapports de performance ?</h4>
                            <div class="faq-toggle">
                                <i class="bi bi-plus"></i>
                                <i class="bi bi-dash"></i>
                            </div>
                        </div>
                        <div class="faq-content">
                            <div class="content-inner">
                                <p>Oui, vous pouvez exporter les données et générer des courbes de performance pour chaque site ou ensemble de sites.</p>
                            </div>
                        </div>
                    </div><!-- End FAQ Item -->

                    <div class="faq-item">
                        <div class="faq-header">
                            <div class="faq-icon">
                                <i class="bi bi-question-circle"></i>
                            </div>
                            <h4>Comment contacter le support technique ?</h4>
                            <div class="faq-toggle">
                                <i class="bi bi-plus"></i>
                                <i class="bi bi-dash"></i>
                            </div>
                        </div>
                        <div class="faq-content">
                            <div class="content-inner">
                                <p>Vous pouvez contacter notre support directement depuis l’interface en cliquant sur le bouton “Support” ou via notre e-mail dédié.</p>
                            </div>
                        </div>
                    </div><!-- End FAQ Item -->

                </div>

            </div>
        </div>

    </div>

</section><!-- /Faq Section -->


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
