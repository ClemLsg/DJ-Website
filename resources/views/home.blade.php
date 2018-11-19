<?php
/**
 * Created by PhpStorm.
 * User: Darkdady
 * Date: 11/06/18
 * Time: 08:50
 */
?>
<!Doctype html>
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths" lang="en" style=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Djiin est un service de DJ et d'animations pour faire de vos soirées un moment innoubliable partout en Normandie. Nous faisons des mariages, anniversaires ou tout autre event !">
    <meta name="keywords" content="DJ, pas cher, animation, photographie, souvenir, mariage, anniversaire, normandie, djiin">
    <meta name="author" content="Djiin">

    <title>DJIIN, votre service DJ et PHOTO !</title>

    <!-- favicon -->

    <link rel="apple-touch-icon" sizes="120x120" href="/pictures/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/pictures/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/pictures/icons/favicon-16x16.png">
    <link rel="manifest" href="/pictures/icons/site.webmanifest">
    <link rel="mask-icon" href="/pictures/icons/safari-pinned-tab.svg" color="#f2a658">
    <link rel="shortcut icon" href="/pictures/icons/favicon.ico">
    <meta name="msapplication-TileColor" content="#f2a658">
    <meta name="msapplication-config" content="/pictures/icons/browserconfig.xml">
    <meta name="theme-color" content="#f2a658">

    <!-- style css -->
    <link rel="stylesheet" href="{{asset("/css/style.css")}}">
    <!-- modernizr js -->
    <script src="{{asset('/js/modernizr-2.8.3.min.js')}}"></script>
    <!-- TrustBox script -->
    <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
    <!-- End TrustBox script -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128892180-1%22%3E"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-128892180-1');
    </script>

</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<div id="loading-wrap" style="display: none;">
    <div class="cp-preloader cp-preloader_type1">
        <span class="cp-preloader__letter" data-preloader="L">L</span>
        <span class="cp-preloader__letter" data-preloader="O">O</span>
        <span class="cp-preloader__letter" data-preloader="A">A</span>
        <span class="cp-preloader__letter" data-preloader="D">D</span>
        <span class="cp-preloader__letter" data-preloader="I">I</span>
        <span class="cp-preloader__letter" data-preloader="N">N</span>
        <span class="cp-preloader__letter" data-preloader="G">G</span>
    </div>
</div>

<div id="home"></div>
<!-- Header Section Start -->
<header id="active-sticky" class="fixed">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="d-flex justify-end">
                    <div class="logo mr-auto">
                        <a href=""><img class="logoHead" src="{{asset('/pictures/Logos/Logo_white.png')}}" alt="Djiin"></a>
                        <a href=""><img class="logoHead-2" src="{{asset('/pictures/Logos/Logo_orange.png')}}" alt="Djiin"></a>
                    </div>
                    <div class="mainmenu">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                                <span>Menu</span>
                                <span>Close</span>
                            </button>
                        </div>
                        <nav class="navbar-collapse clearfix smooth-scroll">
                            <ul>
                                <li class="active"><a href="http://regaltheme.com/tf/onepage/mearts/mearts/index.html#home">Home</a></li>
                                <li><a href="http://regaltheme.com/tf/onepage/mearts/mearts/index.html#about">A propos</a></li>
                                <li><a href="http://regaltheme.com/tf/onepage/mearts/mearts/index.html#service">Nos prestations en Normandie</a></li>
                                <li><a href="http://regaltheme.com/tf/onepage/mearts/mearts/index.html#contact">Votre devis</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Section End -->

<!-- Slider Section Start -->
<div class="slider-area height-100 bg-img-1 overlay rt-animate rt-animate-show" data-rt-offset="50%">
    <div class="d-table">
        <div class="dt-cell">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="slide-caption mt-100 smooth-scroll">
                            <h3 class="white-color">Bienvenue chez</h3>
                            <h1 class="white-color">DJIIN</h1>
                            <h4 class="white-color">DJ &amp; Animation</h4>
                            <p class="white-color">Nous sommes à votre service pour faire de vos soirées (anniversaire, mariage, ect...) un moment inoubliable partout en normandie.</p>
                            <a href="#service" class="btn border">Nos prestations</a>
                            <a href="#contact" class="btn">Devis gratuit</a>
                            <!-- TrustBox widget - Micro Review Count -->
                            <div class="trustpilot-widget" data-locale="fr-FR" data-template-id="5419b6a8b0d04a076446a9ad" data-businessunit-id="5beecfcfd3db7b0001a0e67b" data-style-height="24px" data-style-width="100%" data-theme="dark">
                                <a href="https://fr.trustpilot.com/review/djiin.fr" target="_blank">Trustpilot</a>
                            </div>
                            <!-- End TrustBox widget -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Slider Section End -->
<!-- About Section Start -->
<div id="about" class="about-area white-bg section-padding rt-animate" data-rt-offset="50%">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 column-center">
                <div class="mlr-minus clearfix pt-40">
                    <div class="col-lg-3">
                        <div class="my-img pull-left mobi-mb-50 mb-55">
                            <div class="shape">
                                <img src="{{asset('/pictures/P1070918-Edit.jpg')}}" alt="Paul Fontaine -- Anniversaire" style="height: 100px;">
                            </div>
                        </div>
                        <div class="my-img pull-left mobi-mb-50">
                            <div class="shape">
                                <img src="{{asset('/pictures/P107028405x.jpg')}}" alt="Clement Lesage -- Mariage" style="height: 100px;">
                            </div>
                        </div>
                    </div>

                    <div class="myself">
                        <div class="heading">
                            <h5>Introduction</h5/>
                            <h2>Qui sommes nous </h2>
                            <p>Nous sommes des autos entrepreneurs dans le domaine de l'animation et de l'évènementiel. Musicien, mais surtout DJ. Nous sommes passionnés des musiques de tous les horizons ! Notre équipe est principalement composée d'étudiants en école d'ingénieur d'environ 20 ans. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Section End -->
<!-- Services Section Start -->
<div id="service" class="services-area light-bg ptb-100 relative rt-animate" data-rt-offset="50%">
    <div class="container-outside bg-img-2">
        <div class="overlay-shape overlay overlay-1"></div>
        <div class="d-table">
            <div class="dt-cell">
                <div class="heading white pl-60 relative">
                    <h5>Prestation  &amp; </h5>
                    <h2>services</h2>
                    <p>Nous proposons des prestations professionnelles<br>
                        à travers toute la région normande. <br> Anniversaire, mariage, reception, etc...</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-6">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 mobi-mb-30">
                        <div class="single-service mb-50 mobi-mb-30">
                            <i class="icon-adjustments"></i>
                            <h5>DJ &amp; Mixing</h5>
                            <hr class="line">
                            <p class="mt-15">Nous vous proposons de mixer des musiques qui vous correspondent et de mettre l'ambiance de vos soirées les plus folles !</p>
                        </div>
                        <div class="single-service">
                            <i class="icon-lightbulb"></i>
                            <h5>Materiel &amp; Lumiere</h5>
                            <hr class="line">
                            <p class="mt-15">Nous apportons lors de nos prestations des équipements professionnels et de qualités, comprennent sons, lumières et bien d'autres !</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 pl-20">
                        <div class="single-service mb-50 mobi-mb-30">
                            <i class="icon-camera"></i>
                            <h5>Drone &amp; Photographie</h5>
                            <hr class="line">
                            <p class="mt-15">Notre photographe créera des souvenirs de votre soirée et la vue par drone offre une nouvelle perspective à un événement déjà magique !</p>
                        </div>
                        <div class="single-service">
                            <i class="icon-gift"></i>
                            <h5>Atelier &amp; Souvenirs</h5>
                            <hr class="line">
                            <p class="mt-15">Nous pouvons organiser des ateliers et créer des souvenirs pour ne jamais oublier cette superbe soirée.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Section End -->

<!-- Contact Section Start -->
<div id="contact" class="contact-area theme-bg section-padding rt-animate overlay lighter" data-rt-offset="215%">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <div class="heading white mb-75">
                    <h2>Votre devis</h2>
                    <p>Vous pouvez utiliser notre formulaire pour faire votre demande de devis <br>
                        ou nous contacter directement via mail ou mobile.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 mobi-mb-30">
                <div class="contact-info">
                    <ul>
                        <li>
                            <i class="icon-phone"></i>
                            <div class="text">
                                <a href="tel:+33668284505">+33 6 68 28 45 05</a> <br>
                                <a href="tel:+33781761861">+33 7 81 76 18 61</a> <br>
                            </div>
                        </li>
                        <li>
                            <i class="icon-envelope"></i>
                            <div class="text">
                                <a href="mailto:paul.fontaine@viacesi.fr">paul.fontaine@viacesi.fr</a> <br>
                                <a href="mailto:clement.lesage@viacesi.fr">clement.lesage@viacesi.fr</a>
                            </div>
                        </li>
                        <li>
                            <i class="icon-streetsign"></i>
                            <div class="text">
                                <p class="white-color">Nous intervenons sur dans <br>
                                    toute la region normandie.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="contact-form">
                    <form class="custom-input contact_form" id="contact_form" action="{{route('homecontact')}}" method="post" novalidate="novalidate">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 pr-5">
                                <input type="text" id="contact_name" name="name" placeholder="Nom / Prenom" required="">
                            </div>
                            <div class="col-xs-12 col-sm-4 pr-5 pl-5">
                                <input type="email" id="contact_email" name="email" placeholder="Email" required="">
                            </div>
                            <div class="col-xs-12 col-sm-4 pl-5">
                                <input type="text" id="contact_subject" name="telephone" placeholder="Telephone">
                            </div>
                        </div>
                        <textarea name="message" id="contact_message" rows="2" placeholder="Parlez nous de votre evenement et de vos besoins !"></textarea>
                        <button class="btn white" type="submit" name="submit" id="submit">
                            Demander votre devis
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Section End -->
<!-- Divider Start -->
<div class="divider light-bg">
    <hr class="line white">
</div>
<!-- Divider End -->
<!-- Footer Section Start -->
<footer class="white-bg ptb-20 ">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="copyright pt-10">
                    <p class="theme-color">© Tous droits réservés @Djiin 2018</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- All JS Here -->
<!-- jQuery Latest Version -->
<script src="{{asset('/js/jquery-1.12.4.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<!-- Plugins JS -->
<script src="{{asset('/js/plugins.js')}}"></script>
<!-- main JS -->
<script src="{{asset('/js/main.js')}}"></script><a id="scrollUp" href="#top" style="display: none; position: fixed; z-index: 2147483647;"><i class="zmdi zmdi-chevron-up"></i></a>

@if(session()->has('message'))
    <div class="alert alert-success alert-dismissible" style="position: fixed; top: 0; z-index: 999; width: 100%; text-align: center">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session()->get('message') }}
    </div>
@endif

</body></html>
