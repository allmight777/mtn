@extends('layouts.welcome')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-center gy-5">
                <div class="col-lg-7">
                    <div class="hero-card shadow-sm  rounded" data-aos="fade-right" data-aos-delay="150"
                        style="background-color: #4a7cc269;">

                        <!-- Login Form -->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Address -->
                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email') }}</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autofocus>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Remember Me -->
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                                <label class="form-check-label" for="remember_me">{{ __('Remember me') }}</label>
                            </div>

                            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                                <div class="d-flex align-items-center gap-3">
                                    @if (Route::has('password.request'))
                                        <a class="small text-decoration-none" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif

                                    <a href="{{ route('register') }}" class="small text-decoration-none">
                                        Pas de compte? S'inscrire
                                    </a>
                                </div>

                                <button type="submit" class="btn btn-primary w-25">
                                    {{ __('Log in') }}
                                </button>
                            </div>

                        </form>
                        <!-- End Login Form -->

                    </div>
                </div>

                <!-- Right Column (images) -->
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
                            <span>Curabitur congue pretium</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Hero Section -->



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
                                    <p>Chaque site dispose d’un statut visible dans le tableau de bord : installé, en cours
                                        d’installation ou non installé.</p>
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
                                    <p>Oui, vous pouvez suivre les étapes clés telles que la pose des panneaux, le câblage
                                        des batteries, et autres interventions directement depuis le dashboard.</p>
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
                                    <p>Toutes les interventions et maintenances sont enregistrées et consultables à tout
                                        moment via l’onglet Historique de votre tableau de bord.</p>
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
                                    <p>Oui, vous pouvez exporter les données et générer des courbes de performance pour
                                        chaque site ou ensemble de sites.</p>
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
                                    <p>Vous pouvez contacter notre support directement depuis l’interface en cliquant sur le
                                        bouton “Support” ou via notre e-mail dédié.</p>
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
