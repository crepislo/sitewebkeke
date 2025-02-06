@extends('layouts.template')

@section('titre', 'Services')

@section('content')
    <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('assets/img/breadcrumb.jpg');">

        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s"> {{ __('messages.services') }}</h1>

            </div>
        </div>
    </div>
    <!-- Faq Section Start -->
    <section class="feature-section fix section-padding" style="background-color:#f2ba5e;">
        <div class="container">
            <div class="feature-wrapper">
                <div class="row justify-content-between"style="background-color:#;">
                    <div class="col-xl-5 col-lg-6">
                        <div class="about-content">
                            <div class="section-title style-2">

                                <h2 class="wow fadeInUp" data-wow-delay=".3s" style="color:#427643;">
                                    {{ __('messages.CLIENTS') }}
                                </h2>
                            </div>
                            <p class="mt-md-0 wow fadeInUp mt-4" data-wow-delay=".5s" style="color:#000;">






                                <li style="color:#000;">{{ __('messages.Transporteurs ou espaces') }}</li>

                                <li style="color:#000;">{{ __('messages.Réservations ponctuelles et futures') }}</li>
                                <li style="color:#000;">{{ __('messages.Rapports détaillés') }}</li>
                                <li style="color:#000;">{{ __('messages.Tableau de bord pour la visibilité') }}</li>
                                <li style="color:#000;">
                                    {{ __('messages.Informations de qualité pour la prise de décision') }}</li>
                                <li style="color:#000;">{{ __('messages.Service client') }}</li>
                                <li style="color:#000;">{{ __('messages.Chaîne de traçabilité') }}</li>
                                <li style="color:#000;">{{ __('messages.Contrats intelligents') }}</li>

                            </p>
                            <br>
                            <div class="hero-button">
                                <a href="" data-animation="slideInRight" data-duration="2s" data-delay=".9s"
                                    class="theme-btn hover-white">
                                    {{ __('messages.CONNECTEZ-VOUS') }}
                                </a>
                                <a href="" data-animation="slideInRight" data-duration="2s" data-delay=".9s"
                                    class="theme-btn bg-BLACK">
                                    {{ __('messages.CRÉER VOTRE COMPTE') }}
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mt-lg-0 wow fadeInUp mt-5" data-wow-delay=".4s">
                        <div class="feature-image">
                            <img src="assets/img/choose/backoffice-keke.jpg" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature-section fix section-padding" style="background-color:#FFF;">

        <div class="container">
            <div class="feature-wrapper">
                <div class="row justify-content-between"style="background-color:#;">

                    <div class="col-xl-6 col-lg-6 mt-lg wow fadeInUp mt-5" data-wow-delay=".4s">
                        <div class="feature-image" style="background-color:#000;">
                            <img src="assets/img/choose/camion-keke10.jpg" alt="img">

                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="about-content">
                            <div class="section-title style-2">
                                <br><br> <br><br>

                                <h2 class="wow fadeInUp" data-wow-delay=".3s" style="color:#427643;">
                                    {{ __('messages.LOGISTIQUE TIERS') }}
                                </h2>
                            </div>
                            <p class="mt-md-0 wow fadeInUp mt-4" data-wow-delay=".5s" style="color:#000;">
                                <listyle="color:#000;"s>{{ __('messages.Augmenter vos revenus') }}</li>

                                <li style="color:#000;">{{ __('messages.Garantir') }}</li>
                                <li style="color:#000;">{{ __('messages.Verrouiller') }}</li>
                                <li style="color:#000;">{{ __('messages.Recevoir') }}</li>
                                <li style="color:#000;">
                                    {{ __('messages.Contrôler') }}</li>
                                <li style="color:#000;">{{ __('messages.Accéder') }}</li>
                                <li style="color:#000;">{{ __('messages.Optimisation') }}</li>
                                <li style="color:#000;">{{ __('messages.Service client') }}</li>
                            </p>
                            <br>
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


    <section class="feature-section fix section-padding" style="background-color:#f2ba5e;">
        <div class="container">
            <div class="feature-wrapper">
                <div class="row justify-content-between"style="background-color:#;">
                    <div class="col-xl-5 col-lg-6">
                        <div class="about-content">
                            <div class="section-title style-2">

                                <h2 class="wow fadeInUp" data-wow-delay=".3s" style="color:#427643;">
                                    {{ __('messages.GÉRANTS/PROPRIÉTAIRES D’ENTREPÔT') }}
                                </h2>
                            </div>
                            <p class="mt-md-0 wow fadeInUp mt-4" data-wow-delay=".5s" style="color:#000;">






                                <li style="color:#000;">{{ __('messages.Augmentez les revenus') }}</li>

                                <li style="color:#000;">{{ __('messages.Tableau de bord') }}</li>
                                <li style="color:#000;">{{ __('messages.Service client') }}</li>
                                <li style="color:#000;">{{ __('messages.Optimisation de') }}</li>
                                <li style="color:#000;">
                                    {{ __('messages.Aperçu des données') }}</li>
                                <li style="color:#000;">{{ __('messages.Service à la clientèle') }}</li>


                            </p>
                            <br>
                            <div class="hero-button">
                                <a href="" data-animation="slideInRight" data-duration="2s" data-delay=".9s"
                                    class="theme-btn hover-white">
                                    {{ __('messages.CONNECTEZ-VOUS') }}
                                </a>
                                <a href="" data-animation="slideInRight" data-duration="2s" data-delay=".9s"
                                    class="theme-btn bg-BLACK">
                                    {{ __('messages.CRÉER VOTRE COMPTE') }}
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mt-lg-0 wow fadeInUp mt-5" data-wow-delay=".4s">
                        <div class="feature-image">
                            <img src="assets/img/choose/magasin-keke.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature-section fix section-padding" style="background-color:#F0F0F2;">
        <div class="container">
            <div class="service-details-wrapper">
                <div class="row g-5">
                    <div class="col-12 col-lg-4 order-2 order-md-1">
                        <div class="main-sidebar">


                            <div class="service-sidebar-widget mb-4" style="background-color:#427643;">
                                <div class="service-info">
                                    <div class="icon">
                                        <i class="flaticon-telephone"></i>
                                    </div>
                                    <div class="content">
                                        <b>
                                            <p style="color:#fff;">Contact </p>
                                        </b>
                                        <h5 style="color:#fff;">
                                            +229 45576610
                                            <br>

                                        </h5>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8 order-1 order-md-2">
                        <div class="service-details-content">

                            <div class="service-details-list mt-5">
                                <div class="row g-4 justify-content-between">


                                </div>
                            </div>
                            <div class="faq-content style-3">
                                <div class="faq-accordion">
                                    <div class="accordion" id="accordion">
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq1"
                                                    aria-expanded="false" aria-controls="faq1">
                                                    {{ __('messages.KEKE+') }}
                                                </button>
                                            </h5>
                                            <div id="faq1" class="accordion-collapse collapse"
                                                data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    {{ __('messages.KEKE+ est') }}<br><br>


                                                    {{ __('messages.KEKE++') }}
                                                    <li style="color:#000;">{{ __('messages.Un tableau de bord avec') }}
                                                    </li>
                                                    <li style="color:#000;">{{ __('messages.Des services spécialisés') }}
                                                    </li>
                                                    <li style="color:#000;">
                                                        {{ __('messages.Aperçu des données') }}</li>
                                                    <li style="color:#000;">{{ __('messages.Des outils pour améliorer') }}
                                                    </li>
                                                    <li style="color:#000;">{{ __('messages.Un meilleur contrôle') }}</li>
                                                    <li style="color:#000;">{{ __('messages.Des contrats intelligents') }}
                                                    </li>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#faq2" aria-expanded="true" aria-controls="faq2">
                                                    {{ __('messages.COMMENT ÇA MARCHE') }}
                                                </button>
                                            </h5>
                                            <div id="faq2" class="accordion-collapse collapse show"
                                                data-bs-parent="#accordion">
                                                <div class="accordion-body">

                                                    <li style="color:#000;">{{ __('messages.CRÉEZ VOTRE COMPTE') }}
                                                    </li>

                                                    <li style="color:#000;">{{ __('messages.PASSEZ UNE COMMANDE') }}
                                                    </li>

                                                    <li style="color:#000;">{{ __('messages.PAYEZ EN LIGNE') }}
                                                    </li>

                                                    <li style="color:#000;">{{ __('messages.SUIVEZ EN TEMPS RÉEL') }}
                                                    </li>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq3"
                                                    aria-expanded="false" aria-controls="faq3">
                                                    {{ __('messages.PAIEMENT') }}
                                                </button>
                                            </h5>
                                            <div id="faq3" class="accordion-collapse collapse"
                                                data-bs-parent="#accordion">
                                                <div class="accordion-body">


                                                    <li style="color:#000;">{{ __('messages.Nous proposons:') }}
                                                    </li>

                                                    <li style="color:#000;">{{ __('messages.50% d\'avance') }}
                                                    </li>

                                                    <li style="color:#000;">{{ __('messages.Paiements différés') }}
                                                    </li>

                                                    <li style="color:#000;">{{ __('messages.Paiements différés1') }}
                                                    </li>

                                                    {{ __('messages.Il est important1') }}


                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq3"
                                                    aria-expanded="false" aria-controls="faq3">
                                                    {{ __('messages.PARTENAIRES') }}
                                                </button>
                                            </h5>
                                            <div id="faq3" class="accordion-collapse collapse"
                                                data-bs-parent="#accordion">
                                                <div class="accordion-body">


                                                    {{ __('messages.Keke Logistics développe') }} <br><br>
                                                    {{ __('messages.Keke Logistics développe1') }}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq3"
                                                    aria-expanded="false" aria-controls="faq3">
                                                    {{ __('messages.NOS RÈGLES') }}
                                                </button>
                                            </h5>
                                            <div id="faq3" class="accordion-collapse collapse"
                                                data-bs-parent="#accordion">
                                                <div class="accordion-body">


                                                    {{ __('messages.Tous les conducteurs') }}


                                                    <li style="color:#000;">{{ __('messages.Les conducteurs doivent') }}
                                                    </li>

                                                    <li style="color:#000;">{{ __('messages.Il est obligatoire') }}
                                                    </li>

                                                    <li style="color:#000;">{{ __('messages.Une ventilation') }}
                                                    </li>

                                                    <li style="color:#000;">{{ __('messages.Les caissess') }}
                                                    </li>

                                                    <li style="color:#000;">{{ __('messages.Les caissess') }}
                                                    </li>
                                                    <br>
                                                    {{ __('messages.Pour le stockage') }}



                                                    <li style="color:#000;">
                                                        {{ __('messages.Les installations de stockage') }}
                                                    </li>

                                                    <li style="color:#000;">
                                                        {{ __('messages.Des palettes en bois') }}
                                                    </li>

                                                    <li style="color:#000;">
                                                        {{ __('messages.Des palettes en bois') }}
                                                    </li>

                                                    <li style="color:#000;">
                                                        {{ __('messages.Les articles stockés') }}
                                                    </li>

                                                    <li style="color:#000;">
                                                        {{ __('messages.De plus') }}
                                                    </li>


                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq3"
                                                    aria-expanded="false" aria-controls="faq3">
                                                    {{ __('messages.RESPONSABILITÉ') }}
                                                </button>
                                            </h5>
                                            <div id="faq3" class="accordion-collapse collapse"
                                                data-bs-parent="#accordion">
                                                <div class="accordion-body" style="color:#000;">


                                                    {{ __('messages.Comprendre vos droits') }} <br><br>

                                                    {{ __('messages.Comprendre vos droits1') }} <br><br>

                                                    {{ __('messages.En cas de non-conformité') }} <br><br>

                                                    {{ __('messages.En créant votre compte') }} <br><br>

                                                    {{ __('messages.En créant votre compte1') }} <br><br>






                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq3"
                                                    aria-expanded="false" aria-controls="faq3">
                                                    {{ __('messages.LA MÉTHODE KÈKÈ') }}
                                                </button>
                                            </h5>
                                            <div id="faq3" class="accordion-collapse collapse"
                                                data-bs-parent="#accordion">
                                                <div class="accordion-body" style="color:#000;">


                                                    {{ __('messages.Chez Kèkè') }} <br><br>

                                                    {{ __('messages.Gagnez du temps') }} <br><br>

                                                    {{ __('messages.Automatisez votre emploi du temps') }} <br><br>

                                                    {{ __('messages.Paiements faciles et sécurisés') }} <br><br>

                                                    {{ __('messages.En créant votre compte1') }} <br><br>






                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq3"
                                                    aria-expanded="false" aria-controls="faq3">
                                                    {{ __('messages.ASSURANCE') }}
                                                </button>
                                            </h5>
                                            <div id="faq3" class="accordion-collapse collapse"
                                                data-bs-parent="#accordion">
                                                <div class="accordion-body" style="color:#000;">


                                                    {{ __('messages.Chez Kèkè Logistics') }} <br><br>

                                                    {{ __('messages.Nous travaillons en étroite') }} <br><br>

                                                    {{ __('messages.Laissez-nous vous aider1') }} <br><br>


                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>




@endsection
