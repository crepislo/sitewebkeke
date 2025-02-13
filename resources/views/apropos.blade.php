@extends('layouts.template')

@section('titre', 'Apropos')

@section('content')

    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('assets/img/breadcrumb.jpg');">

        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s"> {{ __('messages.a propos') }}</h1>

            </div>
        </div>
    </div>
    <!-- Faq Section Start -->
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
                                {{ __('messages.Pageapropos') }}



                            <p><strong>{{ __('messages.Bénéfices de nos services') }}:</strong> </p>

                            <li> {{ __('messages.Autonomiser nos clients') }}</li>
                            <li>{{ __('messages.Solution centrée sur l\'utilisateur') }}</li>
                            <li>{{ __('messages.Support et service client') }}</li>
                            <li>{{ __('messages.Analyze prédictive') }}</li>
                            <li>{{ __('messages.Intégration complète') }}</li>
                            <li>{{ __('messages.Évolutivité et flexibilité') }}</li>
                            </p>

                        </div>


                    </div>
                    <div class="col-xl-6 col-lg-6 mt-lg-0 wow fadeInUp mt-5" data-wow-delay=".4s">
                        <div class="feature-image">
                            <img src="assets/img/choose/camion-keke1.jpg" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>

        <div class="container" style="background-color:#F0F0F2;">
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
                                                    data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false"
                                                    aria-controls="faq1">
                                                    {{ __('messages.Focus') }}
                                                </button>
                                            </h5>
                                            <div id="faq1" class="accordion-collapse collapse"
                                                data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    {{ __('messages.Focus1') }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#faq2" aria-expanded="true" aria-controls="faq2">
                                                    {{ __('messages.Mission') }}
                                                </button>
                                            </h5>
                                            <div id="faq2" class="accordion-collapse collapse show"
                                                data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    {{ __('messages.Mission1') }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false"
                                                    aria-controls="faq3">
                                                    {{ __('messages.Vision') }}
                                                </button>
                                            </h5>
                                            <div id="faq3" class="accordion-collapse collapse"
                                                data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    {{ __('messages.Vision1') }}
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




@endsection
