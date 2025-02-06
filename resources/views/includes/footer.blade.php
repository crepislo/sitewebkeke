<!-- Footer Section Start -->
<footer class="footer-section" style="background-color:#f2ba5e;">
    <div class="container">
        <div class="footer-widgets-wrapper">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <a href="{{ route('index') }}"> </a>
                        </div>
                        <div class="footer-content" style="color:#000;">
                            <h6 style="color:#000;"><a href="" style="color:#000;">Contact Bénin</a></h6>
                            <p style="color:#000;">
                                Cotonou <br>
                                Bénin<br>
                                E-mail: contact@kekelogistic.com
                            </p>
                            <p style="color:#000;"><a href="" style="color:#000;">+229 45576610</a></p><br>

                            <h6 style="color:#000;"><a href="" style="color:#000;">Contact USA</a></h6>
                            <p style="color:#000;">
                                Cotonou <br>
                                Bénin<br>
                                E-mail: contact@kekelogistic.com
                            </p>

                            <p style="color:#000;"><a href="" style="color:#000;">+1 (617) 309-8535</a></p>

                            <div class="social-icon d-flex align-items-center">
                                <a href="#"style="color:#000;"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" style="color:#000;"><i class="fab fa-twitter"></i></a>
                                <a href="#"style="color:#000;" class="active"><i class="fab fa-youtube"></i></a>
                                <a href="#" style="color:#000;"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3 style="color:#000;"> {{ __('messages.Navigation') }}</h3>
                        </div>
                        <ul class="list-area">
                            <li><a href=""style="color:#000;">{{ __('messages.a propos') }}</a></li>

                            <li><a href="#" style="color:#000;"> {{ __('messages.Enregistrer un camion') }}</a>
                            </li>
                            <li><a href="#" style="color:#000;"> {{ __('messages.Enregistrer un magasin') }}</a>
                            </li>
                            <li><a href="#" style="color:#000;">
                                    {{ __('messages.Reservez un espace de stockage') }}</a></li>
                            <li><a href="" style="color:#000;">{{ __('messages.commander une course') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 ps-lg-5 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3 style="color:#000;">{{ __('messages.Navigation') }}</h3>
                        </div>
                        <ul class="list-area">
                            <li><a href="{{ route('contact') }}" style="color:#000;">Services</a></li>
                            {{-- <li><a href="" style="color:#000;">{{ __('messages.Connexion') }}</a></li> --}}
                            {{-- <li><a href="" style="color:#000;">{{ __('messages.Paiement') }} </a></li> --}}
                            {{-- <li><a href="" style="color:#000;">{{ __('messages.Partenaires') }}</a></li> --}}
                            <li><a href="{{ route('politiques') }}"
                                    style="color:#000;">{{ __('messages.Nos règles') }}</a></li>
                            <li><a href="" style="color:#000;">Kèkè+</a></li>
                            <li><a href="{{ route('services') }}" style="color:#000;">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3 style="color:#000;">Newsletter</h3>
                        </div>
                        <div class="footer-content">
                            <div class="footer-input">
                                <input type="email" placeholder="Subscribe our newsletter"style="color:#000;">
                                <button class="newsletter-button" type="submit">
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                            <p style="color:#000;">
                                {{ __('messages.Merci de vous abonner à notre newsletter') }} <br>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom" style="background-color:#427643;">
        <div class="container">
            <div class="footer-bottom-wrapper">
                <p style="color:#fff;">
                    Copyright © 2025 <a href="" style="color:#fff;">Kèkè Logistic</a>.
                </p>
                <p style="color:#fff;">All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>

<!-- Back To Top Start -->
<div class="scroll-up">
    <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
