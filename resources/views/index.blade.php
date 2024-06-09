@extends('layouts.template')

@section('titre', 'Accueil')

@section('content')

    <!-- Hero Section Start -->
    <section class="hero-section fix hero-2">
        <div class="array-button">
            <button class="array-prev"><i class="fal fa-arrow-right"></i></button>
            <button class="array-next"><i class="fal fa-arrow-left"></i></button>
        </div>
        <div class="swiper hero-slider-2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slider-image bg-cover"
                        style="background-image: url('assets/img/hero/slider-1-magazin.jpg');">

                    </div>
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-8">
                                <div class="hero-content">
                                    <h5 data-animation="slideInRight" data-duration="2s" data-delay=".3s">
                                        {{ __('messages.la logistique simplifiée') }}</h5>
                                    <h1 data-animation="slideInRight" data-duration="2s" data-delay=".5s">
                                        KÈKÈ LOGISTIC<br>

                                    </h1>
                                    <p data-animation="slideInRight" data-duration="2s" data-delay=".9s">
                                        {{ __('messages.slider') }}
                                    </p>
                                    <div class="hero-button">
                                        <a href="service.html" data-animation="slideInRight" data-duration="2s"
                                            data-delay=".9s" class="theme-btn hover-white">
                                            {{ __('messages.commander une course') }}
                                        </a>
                                        <a href="contact.html" data-animation="slideInRight" data-duration="2s"
                                            data-delay=".9s" class="theme-btn bg-white">
                                            {{ __('messages.Reservez un espace de stockage') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-image bg-cover"
                        style="background-image: url('assets/img/hero/slider2-magazin.jpg');">

                    </div>
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-8">
                                <div class="hero-content">
                                    <h5 data-animation="slideInRight" data-duration="2s" data-delay=".3s">LA
                                        {{ __('messages.la logistique simplifiée') }}</h5>
                                    <h1 data-animation="slideInRight" data-duration="2s" data-delay=".5s">
                                        KÈKÈ LOGISTIC <br>

                                    </h1>
                                    <p data-animation="slideInRight" data-duration="2s" data-delay=".9s">
                                        {{ __('messages.slider') }}
                                    </p>
                                    <div class="hero-button">
                                        <a href="contact.html" data-animation="slideInRight" data-duration="2s"
                                            data-delay=".9s" class="theme-btn hover-white">
                                            {{ __('messages.Enregistrer un camion') }}
                                        </a>
                                        <a href="contact.html" data-animation="slideInRight" data-duration="2s"
                                            data-delay=".9s" class="theme-btn bg-white">
                                            {{ __('messages.Enregistrer un magasin') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-image bg-cover" style="background-image: url('assets/img/hero/slider-3-.jpg');">

                    </div>
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-8">
                                <div class="hero-content">
                                    <h5 data-animation="slideInRight" data-duration="2s" data-delay=".3s">LA
                                        {{ __('messages.la logistique simplifiée') }}</h5>
                                    <h1 data-animation="slideInRight" data-duration="2s" data-delay=".5s">
                                        KÈKÈ LOGISTIC <br>

                                    </h1>
                                    <p data-animation="slideInRight" data-duration="2s" data-delay=".9s">
                                        {{ __('messages.slider') }}
                                    </p>
                                    <div class="col-lg-8">
                                        <div class="hero-button">
                                            <a href="" data-animation="slideInRight" data-duration="2s"
                                                data-delay=".9s" class="theme-btn hover-white">
                                                {{ __('messages.commander une course') }}
                                            </a>
                                            <a href="" data-animation="slideInRight" data-duration="2s"
                                                data-delay=".9s" class="theme-btn bg-white">
                                                {{ __('messages.Reservez un espace de stockage') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section Start -->


    <section class="feature-section fix section-padding" style="background-color:#FFF;">
        <div class="container">
            <div class="feature-wrapper">
                <div class="row justify-content-between"style="background-color:#;">
                    <div class="col-xl-5 col-lg-6">
                        <div class="about-content">
                            <div class="section-title style-2">

                                <h2 class="wow fadeInUp" data-wow-delay=".3s" style="color:#427643;">
                                    {{ __('messages.la logistique simplifiée') }}
                                </h2>
                            </div>
                            <p class="mt-md-0 wow fadeInUp mt-4" data-wow-delay=".5s" style="color:#000;">
                                {{ __('messages.SIMPLIFIE1') }}<br><br>
                                {{ __('messages.SIMPLIFIE2') }}<br><br>

                            </p>
                            <div class="hero-content">
                                <div class="hero-button">
                                    <a href="" data-animation="slideInRight" data-duration="2s" data-delay=".9s"
                                        class="theme-btn hover-white">
                                        {{ __('messages.Enregistrer un magasin') }}
                                    </a>
                                    <a href="" data-animation="slideInRight" data-duration="2s" data-delay=".9s"
                                        class="theme-btn bg-BLACK">
                                        {{ __('messages.Enregistrer un camion') }}
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mt-lg-0 wow fadeInUp mt-5" data-wow-delay=".4s">
                        <div class="feature-image">
                            <img src="assets/img/choose/camion-keke1.jpg" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature-section fix section-padding" style="background-color:#f2ba5e;">

        <div class="container">
            <div class="feature-wrapper">
                <div class="row justify-content-between"style="background-color:#;">

                    <div class="col-xl-6 col-lg-6 mt-lg wow fadeInUp mt-5" data-wow-delay=".4s">
                        <div class="feature-image" style="background-color:#000;">
                            <img src="assets/img/choose/backoffice-keke.jpg" alt="img">

                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="about-content">
                            <div class="section-title style-2">
                                <br><br>


                                <h2 class="wow fadeInUp" data-wow-delay=".3s" style="color:#427643;">
                                    {{ __('messages.NOTRE OBJECTIFS') }}
                                </h2>
                            </div>
                            <p class="mt-md-0 wow fadeInUp mt-4" data-wow-delay=".5s" style="color:#000;">
                                {{ __('messages.OBJECTIF') }} <br><br>
                                {{ __('messages.OBJECTIF1') }} <br><br>

                            </p>
                            <div class="hero-button">
                                <a href="about.html" data-animation="slideInRight" data-duration="2s" data-delay=".9s"
                                    class="theme-btn hover-white">
                                    {{ __('messages.commander une course') }}
                                </a>
                                <a href="" data-animation="slideInRight" data-duration="2s" data-delay=".9s"
                                    class="theme-btn bg-white">
                                    {{ __('messages.Reservez un espace de stockage') }}
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Service Provide Section Start -->
    <section class="service-provide section-padding">
        <div class="shape-image">
            <img src="assets/img/service/arrow-shape.png" alt="shape-img">
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div class="section-title style-2">
                        <span class="wow fadeInUp">KÈKÈ LOGISTICS</span>
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">

                            <span> {{ __('messages.NOS VALEURS') }}</span>
                        </h2>
                    </div>
                </div>
                <div class="col-lg-5 wow fadeInUp" data-wow-delay=".5s">
                    <!-- <p> </p> -->
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-5 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-provide-items active text-center">
                        <div class="icon">
                            <i class="flaticon-cargo-boat"></i>
                        </div>
                        <div class="content">
                            <h5>
                                <a href="">
                                    {{ __('messages.Optimisation et Agrégation') }}
                                </a>
                            </h5>
                            <p>
                                {{ __('messages.Optimisation et Agrégation1') }}

                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-5 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="service-provide-items text-center">
                        <div class="icon">
                            <i class="flaticon-truck"></i>
                        </div>
                        <div class="content">
                            <h5>
                                <a href="">
                                    {{ __('messages.Traçabilité') }}
                                </a>
                            </h5>
                            <p>
                                {{ __('messages.Traçabilité1') }}

                            </p>
                            <br><br>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-5 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="service-provide-items text-center">
                        <div class="icon">
                            <i class="flaticon-container-3"></i>
                        </div>
                        <div class="content">
                            <h5>
                                <a href="service-details.html">
                                    {{ __('messages.Visibilité') }}
                                </a>
                            </h5>
                            <p>
                                {{ __('messages.Visibilité1') }}
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-5 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                    <div class="service-provide-items text-center">
                        <div class="icon">
                            <i class="flaticon-steam-locomotive"></i>
                        </div>
                        <div class="content">
                            <h5>
                                <a href="service-details.html">
                                    {{ __('messages.Sécurité') }}
                                </a>
                            </h5>
                            <p>
                                {{ __('messages.Sécurité1') }}
                            </p>
                            <br><br>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="feature-section fix section-padding" style="background-color:#F0F0F2;">
        <div class="container">
            <div class="feature-wrapper">
                <div class="row justify-content-between"style="background-color:#;">
                    <div class="col-xl-5 col-lg-6">
                        <div class="about-content">
                            <div class="section-title style-2">

                                <h2 class="wow fadeInUp" data-wow-delay=".3s" style="color:#427643;">
                                    {{ __('messages.NOTRE VISION') }}
                                </h2>
                            </div>
                            <p class="mt-md-0 wow fadeInUp mt-4" data-wow-delay=".5s" style="color:#000;">
                                {{ __('messages.NOTRE VISION1') }}

                            </p>

                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mt-lg-0 wow fadeInUp mt-5" data-wow-delay=".4s">
                        <div class="feature-image">
                            <img src="assets/img/choose/camionette-keke.jpg" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section Start -->
    <section class="testimonial-section-2 section-padding" style="background-color:#427643;">
        <div class="shape-left">
            <img src="assets/img/project/shape-left.png" alt="shape-img">
        </div>
        <div class="right-shape">
            <img src="assets/img/project/shape-right.png" alt="shape-img">
        </div>
        <div class="container">
            <div class="testimonial-wrapper">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="section-title style-2">
                            <span class="wow fadeInUp" style="color:#fff;">
                                {{ __('messages.Partenaires Satisfaits') }}</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">

                                <span style="color:#f2ba5e;"> {{ __('messages.Temoignages') }}</span>
                            </h2>
                        </div>

                    </div>
                    <div class="col-xl-6 col-lg-6 mt-lg-0 mt-5">
                        <div class="swiper testimonial-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-items">
                                        <div class="client-image bg-cover"
                                            style="background-image: url('assets/img/client/site-icon.png');"></div>
                                        <div class="testiminial-content">
                                            <p style="color:#fff;">
                                                {{ __('messages.Isidore') }}
                                            </p>
                                            <h4 style="color:#fff;">Isidore TOWANOU</h4>

                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-items">
                                        <div class="client-image bg-cover"
                                            style="background-image: url('assets/img/client/site-icon.png');"></div>
                                        <div class="testiminial-content">
                                            <p style="color:#fff;">
                                                {{ __('messages.Morel') }}
                                            </p>
                                            <h4 style="color:#fff;"> Morel ZINSOU</h4>

                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-items">
                                        <div class="client-image bg-cover"
                                            style="background-image: url('assets/img/client/site-icon.png');"></div>
                                        <div class="testiminial-content">
                                            <p style="color:#fff;">
                                                {{ __('messages.Chantal') }}
                                            </p>
                                            <h4 style="color:#fff;">Chantal CLOUSSE</h4>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="array-button pt-5 text-end">
                                <button class="array-next"><i class="fal fa-arrow-left"></i></button>
                                <button class="array-prev"><i class="fal fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="feature-section fix section-padding" style="background-color:#fff;">

        <div class="container">
            <div class="feature-wrapper">
                <div class="row justify-content-between"style="background-color:#;">

                    <div class="col-xl-6 col-lg-6 mt-lg wow fadeInUp mt-5" data-wow-delay=".4s">
                        <div class="feature-image" style="background-color:#000;">
                            <img src="assets/img/choose/application-keke.jpg" alt="img">

                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="about-content">
                            <div class="section-title style-2">
                                <br><br>


                                <h2 class="wow fadeInUp" data-wow-delay=".3s" style="color:#427643;">
                                    {{ __('messages.POURQUOI NOUS CHOISIR') }}
                                </h2>
                            </div>
                            <p class="mt-md-0 wow fadeInUp mt-4" data-wow-delay=".5s" style="color:#000;">
                                {{ __('messages.POURQUOI NOUS CHOISIR1') }} <br><br>


                            </p>

                            <div class="section-title style-2">



                                <h2 class="wow fadeInUp" data-wow-delay=".3s" style="color:#427643;">
                                    {{ __('messages.NOTRE MISSION') }}
                                </h2>
                            </div>

                            <p class="mt-md-0 wow fadeInUp mt-4" data-wow-delay=".5s" style="color:#000;">
                                {{ __('messages.NOTRE MISSION1') }}


                            </p>


                            <div class="hero-button">
                                <a href="about.html" data-animation="slideInRight" data-duration="2s" data-delay=".9s"
                                    class="theme-btn hover-white">
                                    {{ __('messages.commander une course') }}
                                </a>
                                <a href="" data-animation="slideInRight" data-duration="2s" data-delay=".9s"
                                    class="theme-btn bg-white">
                                    {{ __('messages.Reservez un espace de stockage') }}
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- Cta Section Start -->
    <section class="cta-section-2 style-2 fix section-padding bg-cover"
        style="background-image: url('assets/img/cta-banner/slider-1-magazin.jpg');">
        <div class="container">
            <div class="cta-wrapper-2">
                <div class="cta-content">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        {{ __('messages.VIDÉO DEMO') }} <br>

                    </h2>
                    <a href="" class="video-icon video-popup wow fadeInUp" data-wow-delay=".5s">
                        <i class="far fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Successful Section Start -->

    <!-- Pricing Section Start -->

    <!-- Contact Section Start -->

@endsection
