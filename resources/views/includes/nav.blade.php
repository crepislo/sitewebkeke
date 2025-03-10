<!-- Header Section Start -->
<header>
    <div class="header-tops-section fix">
        <div class="container-fluid">
            <div class="header-tops-wrapper">
                <ul class="contact-list">
                    <li>
                        <i class="far fa-envelope"></i>
                        <a href="info@kekelogistic.com" class="link">contact@kekelogistic.com</a>
                    </li>
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <a href="tel:2086660112">+229 45576610</a>
                    </li>
                </ul>
                <div class="top-right">
                    <div class="social-icon d-flex align-items-center">
                        <span>{{ __('messages.réseaux sociaux') }}:</span>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/kekelogistics/"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="header-sticky" class="header-3">
        <div class="container-fluid">
            <div class="mega-menu-wrapper">
                <div class="header-main style-2">
                    <div class="header-left">
                        <div class="logo">
                            <a href="{{ route('index') }}" class="header-logo">
                                <img src="assets/img/logo/logo-keke-30.jpg" alt="logo-img">
                            </a>
                        </div>
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        <div class="mean__menu-wrapper">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="active menu-thumb">
                                            <a href="{{ route('index') }}">
                                                {{ __('messages.accueil') }}
                                                <i class=""></i>
                                            </a>

                                        </li>

                                        <li>
                                            <a href="{{ route('apropos') }}">
                                                {{ __('messages.a propos') }}
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('services') }}">
                                                {{ __('messages.services') }}

                                            </a>
                                        </li>

                                        <li class="has-dropdown">
                                            <a href="{{ route('travailler') }}"
                                                class="">{{ __('messages.travailler avec nous') }}
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu">

                                                <li><a href="" class="">CLIENT</a>
                                                </li>

                                                <li><a href="" class="">DÉPLACER DU FRET</a>
                                                </li>

                                                <li><a href="" class="">ENREGISTRER UN ENTREPÔT</a>
                                                </li>

                                                <li><a href="" class="">ENREGISTRER UN ENTREPÔT</a>
                                                </li>

                                                <li><a href="" class="">ENREGISTRER UN CAMION</a>
                                                </li>

                                            </ul>
                                        </li>

                                        <li>
                                            <a href="{{ route('contact') }}">Contact</a>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="{{ route('changeLang', 'fr') }}"
                                                class="{{ session()->get('locale') == 'fr' ? 'active' : '' }}">
                                                Français
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu">

                                                <li><a href="{{ route('changeLang', 'en') }}"
                                                        class="{{ session()->get('locale') == 'en' ? 'active' : '' }}">Anglais</a>
                                                </li>

                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <a href="#0" class="search-trigger search-icon"><i class="fal fa-search"></i></a>
                        <div class="header-button">
                            <a href="contact.html" class="theme-btn bg-second">
                                <span>
                                    get A Quote
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </span>
                            </a>
                        </div>
                        <div class="header__hamburger d-xl-block my-auto">
                            <div class="sidebar__toggle">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Search Area Start -->
<div class="search-wrap">
    <div class="search-inner">
        <i class="fas fa-times search-close" id="search-close"></i>
        <div class="search-cell">
            <form method="get">
                <div class="search-field-holder">
                    <input type="search" class="main-search-input" placeholder="Search...">
                </div>
            </form>
        </div>
    </div>
</div>
