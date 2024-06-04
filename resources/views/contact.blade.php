@extends('layouts.template')

@section('titre', 'Contact')

@section('content')



    <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('assets/img/breadcrumb.jpg');">

        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s"> {{ __('messages.Contactez-nous') }}</h1>

            </div>
        </div>
    </div>

    <?php
    // S'il y des données de postées
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // (1) Code PHP pour traiter l'envoi de l'email
    
        // Récupération des variables et sécurisation des données
        $nom = htmlentities($_POST['name']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
        $email = htmlentities($_POST['email']);
        $numero = htmlentities($_POST['phone']);
        $message = htmlentities($_POST['message']);
    
        // Variables concernant l'email
    
        $destinataire = 'crepislo@gmail.com'; // Adresse email du webmaster (à personnaliser)
        $sujet = 'Nouveau message '; // Titre de l'email
        $contenu = '<html><head><title>Jct-Tech</title></head><body>';
        $contenu .= '<p>Bonjour, vous avez recu un message à partir de votre site web Jct-tech.</p>';
        $contenu .= '<p><strong>Nom</strong>: ' . $name . '</p>';
        $contenu .= '<p><strong>Email</strong>: ' . $email . '</p>';
        $contenu .= '<p><strong>Numero</strong>: ' . $phone . '</p>';
        $contenu .= '<p><strong>Message</strong>: ' . $message . '</p>';
        $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)
    
        // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
    
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'Content-transfert-encoding: 8bit; charset=iso-8859-1' . "\r\n";
    
        // Envoyer l'email
        mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
        //echo '<h2>Votre message a été bien envoyé.Nous allons traiter votre demande dans les plus brefs délais.</h2>';
        // Afficher un message pour indiquer que le message a été envoyé
        // (2) Fin du code pour traiter l'envoi de l'email
    }
    ?>



    <section class="contact-page-wrap section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-contact-card card1">
                        <div class="top-part">
                            <div class="icon">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="title">
                                <h4>{{ __('messages.Adresse Email') }}</h4>

                            </div>
                        </div>
                        <div class="bottom-part">
                            <div class="info">
                                <p> info@kekelogistic.com</p>

                            </div>
                            <div class="icon">
                                <i class="fal fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-contact-card card2">
                        <div class="top-part">
                            <div class="icon">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="title">
                                <h4>{{ __('messages.Numero de téléphone') }}</h4>

                            </div>
                        </div>
                        <div class="bottom-part">
                            <div class="info">
                                <p>+229 45576610</p>
                                <p>++1 (617) 309-8535</p>
                            </div>
                            <div class="icon">
                                <i class="fal fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-contact-card card3">
                        <div class="top-part">
                            <div class="icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="title">
                                <h4>{{ __('messages.Adresse') }}</h4>

                            </div>
                        </div>
                        <div class="bottom-part">
                            <div class="info">
                                <p>Boston, MA USA</p>

                            </div>
                            <div class="icon">
                                <i class="fal fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-section-2 fix section-padding pt-0">
        <div class="container">
            <div class="contact-form-items">
                <div class="title text-center">
                    <h2>{{ __('messages.Contactez-nous') }}</h2>

                </div>
                <form action="contact.php" id="contact-form" method="POST" action="{{ route('contact') }}">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="form-clt">
                                <input type="text" name="name" id="name"
                                    placeholder="{{ __('messages.Votre nom et prenom') }}*">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-clt">
                                <input type="text" name="email" id="email"
                                    placeholder="{{ __('messages.Votre nom et prenom') }}*">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-clt">
                                <input type="numeric" name="phone" id="text"
                                    placeholder="{{ __('messages.Téléphone') }}*">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-clt">
                                <textarea name="message" id="message" placeholder="{{ __('messages.Ecrivez votre message') }}*"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <button type="submit" class="theme-btn">
                                {{ __('messages.ENVOYER') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>




@endsection
