<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="zxx">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>GeniTax® - Fiscalité marocaine au bout du clic</title>
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/favicon.png')}}">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
    <!--Owl Carousel CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <!--Magnific PopUp Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}">
    <!--Icofont CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/icofont.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,600" rel="stylesheet">

    <!--Mailer CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('mailer/mailer-style.css')}}">
    <!--Animate CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <!--Bootsnav CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootsnav.css')}}">
    <!--Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!--Responsive CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">

    <!--Modanizr JS-->
    <script src="{{asset('assets/js/modernizr.custom.js')}}"></script>
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
    <!--Start Preloader-->
    <div class="preloader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <!--End Preloader-->

    <!--Start Body Wrap-->
    <div id="body-wrap">
        <!--Start Header-->
        <header id="header">
            <nav class="navbar navbar-default bootsnav" data-spy="affix" data-offset-top="10">
                <div class="container">
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li><a href="{{url('/app')}} ">Version Online <i class="icofont icofont-arrow-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="icofont icofont-navigation-menu"></i>
                        </button>
                        <a class="navbar-brand" href="index.html"><img src="{{asset('assets/images/logo.png')}}" class="logo" alt=""></a>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
                            <li><a href="#about">A propos</a></li>
                            <li><a href="#features">Fonctionnalités</a></li>
                            <li><a href="#app-screenshot">Comment ça marche</a></li>
                            <li><a href="#faq">FAQ</a></li>
                            <li><a href="#testimonial">Presse</a></li>
                            <li><a href="#app-download">Télécharger</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
            </nav>
            <div class="clearfix"></div>
        </header>
        <!--End Header-->

        <!--Start Banner Section-->
        <section id="banner" class="gradient-bg full-height">
            <!--Start Container-->
            <div class="container">
                <!--Start Row-->
                <div class="row">
                    <!--Start Banner Caption-->
                    <div class="col-md-6">
                        <div class="caption-content">
                            <h1 class="font-700 color-white text-uppercase wow fadeInUp" data-wow-delay="0.1s" style=" line-height:20px !important;">GeniTax<span style="font-size:16px !important;">®</span></h1>
                            <p class="color-white wow fadeInUp oswald font200" data-wow-delay="0.2s">1ère solution digitale dédiée à la fiscalité marocaine</p>
                            <p class="color-white wow fadeInUp" data-wow-delay="0.3s" style="font-size:14px;">
                                GENITAX® est votre outil pour simplifier les procédures fiscales. Une solution facile et intuitive qui synthétise le Code Général des Impots mis à jour et offre une large gamme d'outils dédiés à la fiscalité marocaine. 
                            </p>
                            <div class="caption-btn wow fadeInUp" data-wow-delay="0.4s">
                                <a class="font-600" href="{{url('/app')}} "><i class="icofont icofont-globe"></i> Version Online</a><a class="font-600" href="#about-download"><i class="icofont icofont-download-alt"></i> Télécharger</a>
                            </div>
                        </div>
                    </div>
                    <!--End Banner Caption-->

                    <!--Start Banner Image-->
                    <div class="col-md-6">
                        <div class="banner-img wow fadeIn" data-wow-delay="0.4s">
                            <img src="{{asset('assets/images/app1.png')}}" class="img-responsive" alt="Image">
                        </div>
                    </div>
                    <!--End Banner Image-->
                </div>
                <!--End Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Banner Section-->

        <!--Start About Section-->
        <section id="about">
            <!--Start Container-->
            <div class="container">
                <!--Start Heading Row-->
                <div class="row">
                    <!--Start Heading content-->
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="section-heading text-center">
                            <h2 class="font-400 oswald color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">A propos de GeniTax<span style="font-size:12px !important;">®</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Cabinet SEDDIK & Associés offre aux entreprises et organismes publics marocaine le moyen de consulter tous les articles et circulaires de la fiscalité marocaine et bien plus de fonctionnalités...</p>
                        </div>
                    </div>
                    <!--End Heading content-->
                </div>
                <!--End Heading Row-->

                <!--Start About Row-->
                <div class="row">
                    <!--Start About Image-->
                    <div class="col-md-6">
                        <div class="about-img wow fadeIn" data-wow-delay="0.2s">
                            <img src="{{asset('assets/images/app2.png')}}" class="img-responsive" alt="Image">
                        </div>
                    </div>
                    <!--End About Image-->

                    <!--Start About Content-->
                    <div class="col-md-6" id="about-download">
                        <div class="about-content">
                            <h3 class="font-700 wow fadeInUp" data-wow-delay="0.1s">Tous les outils que vous demandez sont désormais à votre disposition.</h3>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Votre outil digital GENITAX® est maintenant disponible sur l'intégralité des dispositifs informatiques en vue de vous permettre une utilisation plus agréable et intuitive en 360°.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.3s">En plus des textes de fiscalité marocaine mis à jour, Cabinet SEDDIK & Associés a pris le soin d'enrichir votre outil fiscal de plusieurs fonctionnalités indispensables pour réussir votre mission au sein de votre organisme.</p>
                        </div>
                        <div  class="about-btn btn-lg p-0 wow fadeInUp" data-wow-delay="0.3s">
                            <h5 class="text-uppercase oswald font-400">Télécharger pour MOBILE</h5>
                            <a class="gradient-bg-1" href=""><i class="icofont icofont-brand-android-robot float-left"></i><span class="float-right text-center font-w-700"><small>Télécharger depuis<br></small> Google Store</span></a><a class="gradient-bg-1" href=""><i class="icofont icofont-brand-apple float-left"></i><span class="float-right text-center font-w-700"><small>Télécharger depuis<br></small> Apple Store</span></a>
                        
                                <h5 class="text-uppercase oswald font-400">Télécharger pour Ordinateur</h5>
                                <a class="gradient-bg-1" href=""><i class="icofont icofont-brand-windows float-left"></i><span class="float-right text-center font-w-700"><small>Télécharger pour<br></small> Windows</span></a>
                        </div>
                    </div>
                    <!--End About Content-->
                </div>
                <!--End About Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End About Section-->

        <!--Start Features Section-->
        <section id="features" class="bg-gray">
            <!--Start Container-->
            <div class="container">
                <!--Start Heading Row-->
                <div class="row">
                    <!--Start Heading content-->
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="section-heading text-center">
                            <h2 class="font-400 color-base text-uppercase wow fadeInUp oswald" data-wow-delay="0.1s">Fonctionnalités clés</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">La fiscalité marocaine a choisi pour vous les fonctionnalités indispensables à trouver dans votre outil digital GENITAX®</p>
                        </div>
                    </div>
                    <!--End Heading content-->
                </div>
                <!--End Heading Row-->

                <!--Start Feature Items Row-->
                <div class="row">
                    <!--Start Feature Item-->
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-single text-center wow fadeIn" data-wow-delay="0.1s">
                            <i class="icofont icofont-book gradient-bg-1 color-white"></i>
                            <h5 class="font-600">CGI & Taxes Locales</h5>
                            <p>Consultez et cherchez dans les articles et circulaires du Code Général des Impôts et des Taxes Locales en toute facilité</p>
                        </div>
                    </div>
                    <!--End Feature Item-->

                    <!--Start Feature Item-->
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-single text-center wow fadeIn" data-wow-delay="0.2s">
                            <i class="icofont icofont-layers gradient-bg-1 color-white"></i>
                            <h5 class="font-600">Outils Divers</h5>
                            <p>Profitez d'une large gamme d'outils pour connaître les Tarifs Fiscaux applicables, les Nomencaltures appropriées et bien plus...</p>
                        </div>
                    </div>
                    <!--End Feature Item-->

                    <!--Start Feature Item-->
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-single text-center wow fadeIn" data-wow-delay="0.3s">
                            <i class="icofont icofont-dart gradient-bg-1 color-white"></i>
                            <h5 class="font-600">FAQ</h5>
                            <p>Posez vos questions aux spécialistes de la fiscalité et consultez toutes les réponses de la communauté pour enrichir vos connaissances</p>
                        </div>
                    </div>
                    <!--End Feature Item-->

                    <!--Start Feature Item-->
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-single text-center wow fadeIn" data-wow-delay="0.4s">
                            <i class="icofont icofont-id-card gradient-bg-1 color-white"></i>
                            <h5 class="font-600">Contact Direct</h5>
                            <p>Contactez directement un agent de la fiscalité Cabinet SEDDIK & Associés en vue de vous accompagner dans toutes vos démarches</p>
                        </div>
                    </div>
                    <!--End Feature Item-->
                </div>
                <!--End Feature Items Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Features Section-->

        <!--Start Why Choose Section-->
        <section id="why-choose">
            <!--Start Container-->
            <div class="container">
                <!--Start Row-->
                <div class="row">
                    <!--Start Why Choose Content-->
                    <div class="col-md-6">
                        <div class="why-choose-content">
                            <h2 class="font-400 oswald  color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">Pourquoi GENITAX<span style="font-size:12px !important;">®</span></h2>
                            <!--Start Why Choose Item-->
                            <div class="why-choose-single fix wow fadeInUp" data-wow-delay="0.1s">
                                <div class="why-chose-icon float-left">
                                    <i class="icofont icofont-id-card"></i>
                                </div>
                                <div class="why-choose-single-details float-right">
                                    <h5 class="font-400 oswald ">FACILE</h5>
                                    <p>La solution a été conçue dans le but de vous ressembler et de vous offrir une expérience intuitive pour vous faciliter le travail.</p>
                                </div>
                            </div>
                            <!--End Why Choose Item-->

                            <!--Start Why Choose Item-->
                            <div class="why-choose-single fix wow fadeInUp" data-wow-delay="0.1s">
                                <div class="why-chose-icon float-left">
                                    <i class="icofont icofont-diamond"></i>
                                </div>
                                <div class="why-choose-single-details float-right">
                                    <h5 class="font-400 oswald ">COMPLET</h5>
                                    <p>GENITAX® englobe toutes les fonctionnalités indispensables liées à la fiscalité marocaine et vous offre aussi un large choix d'outils efficaces.</p>
                                </div>
                            </div>
                            <!--End Why Choose Item-->

                            <!--Start Why Choose Item-->
                            <div class="why-choose-single fix wow fadeInUp" data-wow-delay="0.1s">
                                <div class="why-chose-icon float-left">
                                    <i class="icofont icofont-ruler-pencil"></i>
                                </div>
                                <div class="why-choose-single-details float-right">
                                    <h5 class="font-400 oswald ">VISION 360°</h5>
                                    <p>Accessible depuis plusieurs dispositifs, mobiles et ordinateurs, notre solution a pour vision de vous accompagner sur l'ensemble de votre espace de travail.</p>
                                </div>
                            </div>
                            <!--End Why Choose Item-->

                            <!--Start Why Choose Item-->
                            <div class="why-choose-single fix wow fadeInUp" data-wow-delay="0.1s">
                                <div class="why-chose-icon float-left">
                                    <i class="icofont icofont-refresh"></i>
                                </div>
                                <div class="why-choose-single-details float-right">
                                    <h5 class="font-400 oswald ">MIS A JOUR</h5>
                                    <p>Les agents du Cabinet SEDDIK & Associés ont la mission de mettre à jour constamment les informations de GENITAX® pour vous offrir une source fidèle aux textes de lois.</p>
                                </div>
                            </div>
                            <!--End Why Choose Item-->
                        </div>
                    </div>
                    <!--End Why Choose Content-->

                    <!--Start Why Choose Image-->
                    <div class="col-md-6">
                        <div class="why-choose-img wow fadeIn" data-wow-delay="0.2s">
                            <img src="{{asset('assets/images/app3.png')}}" class="img-responsive" alt="Image">
                        </div>
                    </div>
                    <!--End Why Choose Image-->
                </div>
                <!--End Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Why Choose Section-->

        <!--Start App Screenshots Section-->
        <section id="app-screenshot" class="bg-gray">
            <!--Start Container-->
            <div class="container">
                <!--Start Heading Row-->
                <div class="row">
                    <!--Start Heading Content-->
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="section-heading text-center">
                            <h2 class="font-400 oswald color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">Comment ça marche</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Aussi facile qu'une application mobile ordinaire, il suffit de cliquer pour afficher les informations fiscales demandées</p>
                        </div>
                    </div>
                    <!--End Heading Content-->
                </div>
                <!--End Heading Row-->

                <!--Start Screenshots Slider-->
                <div class="screenshots-slider owl-carousel wow fadeIn" data-wow-delay="0.1s">
                    <img src="{{asset('assets/images/screenshot-1.jpg')}}" class="img-responsive" alt="Image">
                    <img src="{{asset('assets/images/screenshot-2.jpg')}}" class="img-responsive" alt="Image">
                    <img src="{{asset('assets/images/screenshot-3.jpg')}}" class="img-responsive" alt="Image">
                    <img src="{{asset('assets/images/screenshot-4.jpg')}}" class="img-responsive" alt="Image">
                    <img src="{{asset('assets/images/screenshot-5.jpg')}}" class="img-responsive" alt="Image">
                </div>
                <!--End Screenshots Slider-->
            </div>
            <!--End Container-->
        </section>
        <!--End App Screenshots Section-->

        <!--Start Demo Video Section-->
        <section id="demo-video" class="bg-cover position-relative">
            <div class="overlay"></div>
            <!--Start Container-->
            <div class="container">
                <!--Start Row-->
                <div class="row">
                    <!--Start Video Content-->
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="video-content text-center">
                            <h2 class="font-400 oswald text-uppercase color-white wow fadeInUp" data-wow-delay="0.1s">Vidéo</h2>
                            <p class="color-white wow fadeInUp" data-wow-delay="0.2s">Vidéo Presse de présentation de GENITAX® sur le journal télévisé 2M TV <br />- GeniTax® est 1ère au Maroc -</p>
                            <div class="video-popup-icon position-relative">
                                <div class="pulse1"></div>
                                <div class="pulse2"></div>
                                <a class="popup-video" href="http://www.youtube.com/watch?v=zhBkiw3QY9c"><i class="icofont icofont-play-alt-2"></i></a>
                            </div>

                        </div>
                    </div>
                    <!--End Video Content-->
                </div>
                <!--End Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Demo Video Section-->

        <!--Start How Work Section-->
        <section id="how-work">
            <!--Start Container-->
            <div class="container">
                <!--Start Heading Row-->
                <div class="row">
                    <!--Start Heading Content-->
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="section-heading text-center">
                            <h2 class="font-400 oswald color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">Aperçus</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Visionnez les fonctionnalités de votre solution digitale de traitement de la fiscalité marocaine GENITAX® par Cabinet SEDDIK & Associés</p>
                        </div>
                    </div>
                    <!--End Heading Content-->
                </div>
                <!--End Heading Row-->

                <!--Start Row-->
                <div class="row">
                    <!--Start How Work Single-->
                    <div class="col-md-3 col-sm-6">
                        <div class="how-work-single wow fadeIn" data-wow-delay="0.1s">
                            <div class="how-work-btn position-relative">
                                <span class="font-600 gradient-bg-1 color-white text-center"><i class="icofont icofont-book"></i> CGI</span>
                                <div class="arrow-line">
                                    <div class="round-circle"></div>
                                </div>
                            </div>
                            <div class="how-work-image">
                                <img src="{{asset('assets/images/app4.png')}}" class="img-responsive" alt="Image">
                            </div>
                        </div>
                    </div>
                    <!--End How Work Single-->

                    <!--Start How Work Single-->
                    <div class="col-md-3 col-sm-6">
                        <div class="how-work-single wow fadeIn" data-wow-delay="0.2s">
                            <div class="how-work-btn position-relative">
                                <span class="font-600 gradient-bg-1 color-white text-center"><i class="icofont icofont-folder"></i> TAXES LOCALES</span>
                                <div class="arrow-line">
                                    <div class="round-circle"></div>
                                </div>
                            </div>
                            <div class="how-work-image">
                                <img src="{{asset('assets/images/app5.png')}}" class="img-responsive" alt="Image">
                            </div>
                        </div>
                    </div>
                    <!--End How Work Single-->

                    <!--Start How Work Single-->
                    <div class="col-md-3 col-sm-6">
                        <div class="how-work-single wow fadeIn" data-wow-delay="0.3s">
                            <div class="how-work-btn position-relative">
                                <span class="font-600 gradient-bg-1 color-white text-center"><i class="icofont icofont-comment"></i> FAQ</span>
                                <div class="arrow-line">
                                    <div class="round-circle"></div>
                                </div>
                            </div>
                            <div class="how-work-image">
                                <img src="{{asset('assets/images/app6.png')}}" class="img-responsive" alt="Image">
                            </div>
                        </div>
                    </div>
                    <!--End How Work Single-->

                    <!--Start How Work Single-->
                    <div class="col-md-3 col-sm-6">
                        <div class="how-work-single wow fadeIn" data-wow-delay="0.4s">
                            <div class="how-work-btn position-relative">
                                <span class="font-600 gradient-bg-1 color-white text-center"><i class="icofont icofont-ruler-pencil"></i> OUTILS DIVERS</span>
                                <div class="arrow-line">
                                    <div class="round-circle"></div>
                                </div>
                            </div>
                            <div class="how-work-image">
                                <img src="{{asset('assets/images/app7.png')}}" class="img-responsive" alt="Image">
                            </div>
                        </div>
                    </div>
                    <!--End How Work Single-->
                </div>
                <!--End Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End How It Work Section-->

        <!--Start Faq Section-->
        <section id="faq" class="bg-gray">
            <!--Start Container-->
            <div class="container">
                <!--Start Heading Row-->
                <div class="row">
                    <!--Start Heading Content-->
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="section-heading text-center">
                            <h2 class="font-400 color-base text-uppercase wow fadeInUp oswald" data-wow-delay="0.1s">FOIRE AUX QUESTIONS</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Consultez les questions les plus fréquemment posées par notre communauté pour mieux cerner le périmètre de votre outil fiscal.</p>
                        </div>
                    </div>
                    <!--End Heading Content-->
                </div>
                <!--End Heading Row-->

                <!--Start Faq Row-->
                <div class="row">
                    <!--Start Faq Accordian-->
                    <div class="col-md-6">
                        <div class="panel-group" id="accordion">
                            <!--Start Accordian Single-->
                            <div class="panel panel-default wow fadeInUp" data-wow-delay="0.1s">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="font-600 accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1">Comment installer l'application ? </a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="font-500 panel-body">En haut de cette page internet, veuillez cliquer sur le bouton télécharger qui convient à votre dispositif Mobile ou Ordinateur. Pour les appareils de type Mobile, il suffit de télécharger la version de l'application opérationnelle sur votre SmartPhone Android ou Apple. Pour les appreils de type Ordinateur, uniquement la version Windows est disponible à télécharger pour installation sur votre ordinateur Windows 64 Bits.</div>
                                </div>
                            </div>
                            <!--End Accordian Single-->

                            <!--Start Accordian Single-->
                            <div class="panel panel-default wow fadeInUp" data-wow-delay="0.2s">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="font-600 accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse2">Recherche par Numéro d'Article ?</a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="font-500 panel-body">Il suffit d'introduire le numéro d'article recherché pour consulter le document en question ainsi que sa circulaire. Bien plus que cela GENITAX® vous offre la possibilité de naviguer par numéro d'article si vous souhaitez.</div>
                                </div>
                            </div>
                            <!--End Accordian Single-->

                            <!--Start Accordian Single-->
                            <div class="panel panel-default wow fadeInUp" data-wow-delay="0.3s">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="font-600 accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse3">Recherche par Mot clé dans Articles et Circulaires ?</a>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="font-500 panel-body">Votre outil dispose d'un moteur de recherche puissant et rapide pouvant vous apporter les résultats demandés par simple recherche par mot clés. Le moteur de recherche est totalement intuitif et respecte un algoryhtme d'indexation par ordre de pertinence des résultats.</div>
                                </div>
                            </div>
                            <!--End Accordian Single-->

                            <!--Start Accordian Single-->
                            <div class="panel panel-default wow fadeInUp" data-wow-delay="0.4s">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="font-600 accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse4">Qu'est ce que la fonctionnalité Outils Divers</a>
                                    </h4>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse">
                                    <div class="font-500 panel-body">C'est un espace dédié à plusieurs autres outils offerts par le Cabinet SEDDIK & Associés. Cet espace est alimenté au fûr et à mesure par des outils efficaces afin de mieux mener votre mission au sein de votre organisme. Ex: Tarif Fiscal, Nomenclatures, Coefficients applicables au C.A., ...etc.</div>
                                </div>
                            </div>
                            <!--End Accordian Single-->

                            <!--Start Accordian Single-->
                            <div class="panel panel-default wow fadeInUp" data-wow-delay="0.5s">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="font-600 accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse5">Comment contacter le Cabinet SEDDIK & Associés ?</a>
                                    </h4>
                                </div>
                                <div id="collapse5" class="panel-collapse collapse">
                                    <div class="font-500 panel-body">Il suffit de cliquer sur l'onglet Infos pour trouver le numéro de contact de notre bureau Cabinet SEDDIK & Associés à Casablanca ou encore nous envoyer un e-mail. Un agent prendra contact avec vous en vue de répondre à vos questions et vous accompagner dans toutes vos démarches.</div>
                                </div>
                            </div>
                            <!--End Accordian Single-->
                        </div>
                    </div>
                    <!--End Faq Accordian-->

                    <!--Start Faq Image-->
                    <div class="col-md-6">
                        <div class="faq-img float-right wow fadeIn" data-wow-delay="0.2s">
                            <img src="{{asset('assets/images/app8.png')}}" class="img-responsive" alt="Image">
                        </div>
                    </div>
                    <!--End Faq Image-->
                </div>
                <!--Start Faq Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Faq Section-->

        <!--Start Testimonial Section-->
        <section id="testimonial" class="gradient-bg">
            <!--Start Container-->
            <div class="container">
                <!--Start Heading Row-->
                <div class="row">
                    <!--Start Heading Content-->
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="section-heading text-center">
                            <h2 class="font-400 oswald color-white text-uppercase wow fadeInUp" data-wow-delay="0.1s">Presse</h2>
                            <p class="color-white wow fadeInUp" data-wow-delay="0.2s">La Presse marocaine parle de GENITAX® pour le présenter au monde des entreprises comme étant une 1ère au Maroc</p>
                        </div>
                    </div>
                    <!--End Heading Content-->
                </div>
                <!--End Heading Row-->

                <!--Start Testimonial Row-->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <!--Start Testimonial Carousel-->
                        <div class="testimonial-carousel owl-carousel">
                            <!--Start Testimonial Single-->
                            <div class="testimonial-single row">
                                <div class="col-sm-3">
                                    <div class="client-info text-center wow fadeInUp" data-wow-delay="0.1s">
                                        <img src="{{asset('assets/images/client-1.gif')}}" alt=""  style="border-radius:10px !important; padding:10px; height: auto !important;">
                                        <h4 class="font-600">2M TV</h4>
                                        <p>Journal Télévisé marocain</p>
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <div class="testimonial-border"></div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="client-comment">
                                        <h5 class="oswald font-400">Témoignage 2M TV</h5>
                                        <p class="wow fadeInUp" data-wow-delay="0.1s">...une application intuitive, simple et efficace qui synthétise les articles du Code Général des Impôts.</p>
                                        <span class="wow fadeInUp" data-wow-delay="0.2s"><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i></span><span class="float-right"><i class="icofont icofont-quote-right"></i></span>
                                    </div>
                                </div>
                            </div>
                            <!--End Testimonial Single-->

                            <!--Start Testimonial Single-->
                            <div class="testimonial-single row">
                                <div class="col-sm-3">
                                    <div class="client-info text-center">
                                        <img src="{{asset('assets/images/client-1.jpg')}}" alt="" style="border-radius:10px !important; padding:10px; height: auto !important;">
                                        <h4 class="font-600">Aujourd'hui le Maroc</h4>
                                        <p>Journal marocain</p>
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <div class="testimonial-border"></div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="client-comment">
                                        <h5 class="oswald font-400">Témoignage Aujourd'hui le Maroc</h5>
                                        <p>...avec GeniTax®, l'expert 3.0 se confirme.</p>
                                        <span><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i></span><span class="float-right"><i class="icofont icofont-quote-right"></i></span>
                                    </div>
                                </div>
                            </div>
                            <!--End Testimonial Single-->

                            <!--Start Testimonial Single-->
                            <div class="testimonial-single row">
                                <div class="col-sm-3">
                                    <div class="client-info text-center">
                                        <img src="{{asset('assets/images/client-3.jpg')}}" alt="" style="border-radius:10px !important; padding:10px; height: auto !important;">
                                        <h4 class="font-600">Medias 24</h4>
                                        <p>Journal économique marocain</p>
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <div class="testimonial-border"></div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="client-comment">
                                        <h5 class="oswald font-400">Témoignage Medias 24</h5>
                                        <p>...il s'agit de la première appli du genre pour smartphone dédiée à la fiscalité marocaine.</p>
                                        <span><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i></span><span class="float-right"><i class="icofont icofont-quote-right"></i></span>
                                    </div>
                                </div>
                            </div>
                            <!--End Testimonial Single-->
                        </div>
                        <!--End Testimonial Carousel-->
                    </div>
                </div>
                <!--End Testimonial Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Testimonial Section-->

        <!--Start Download App Section-->
        <section id="app-download">
            <!--Start Container-->
            <div class="container">
                <!--Start App Download Row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="app-downlod-img wow fadeInUp" data-wow-delay="0.2s">
                            <img src="{{asset('assets/images/app2.png')}}" class="img-responsive" alt="Image">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="app-download-content animated fadeInUp" style="padding: 0 !important;">
                            <h2 class="font-400 oswald color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">Télécharger Maintenant</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Vous souhaitez télécharger votre application sur votre appareil le plus utilisé pour votre travail ? Il suffit de cliquer pour télécharger et installer.</p>
                            
                            <div class="about-btn btn-lg p-0 wow fadeInUp" data-wow-delay="0.3s">
                                <h5 class="text-uppercase oswald font-400">Télécharger pour MOBILE</h5>
                                <a class="gradient-bg-1" href=""><i class="icofont icofont-brand-android-robot float-left"></i><span class="float-right text-center font-w-700"><small>Télécharger depuis<br></small> Google Store</span></a><a class="gradient-bg-1" href=""><i class="icofont icofont-brand-apple float-left"></i><span class="float-right text-center font-w-700"><small>Télécharger depuis<br></small> Apple Store</span></a>
                            
                                    <h5 class="text-uppercase oswald font-400">Télécharger pour Ordinateur</h5>
                                    <a class="gradient-bg-1" href=""><i class="icofont icofont-brand-windows float-left"></i><span class="float-right text-center font-w-700"><small>Télécharger pour<br></small> Windows</span></a>
                            </div>
                        </div>

                    </div>
                </div>
                <!--End App Download Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Download App Section-->

        

        <!--Start Contact Section-->
        <section id="contact" class="bg-gray">
            <!--Start Container-->
            <div class="container">
                <!--Start Heading Row-->
                <div class="row">
                    <!--Start Heading Col-->
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <!--Start Heading-->
                        <div class="section-heading text-center">
                            <h2 class="font-400 oswald color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">Contactez-nous</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Les agents du Cabinet SEDDIK & Associés sont à votre disposition pour vous apporter support et assistance dans toutes vos actions relatives à l'utilisation de l'outil GENITAX® et vos démarches fiscales</p>
                        </div>
                        <!--End Heading-->
                    </div>
                    <!--End Heading Col-->
                </div>
                <!--End Heading Row-->

                <!--Start Contact Info-->
                <div class="contact-info">
                    <!--Start Row-->
                    <div class="row">
                        <!--Start Contact Info Single-->
                        <div class="col-sm-3">
                            <div class="contact-info-single text-center wow fadeIn" data-wow-delay="0.1s">
                                <i class="icofont icofont-email gradient-bg-1 color-white"></i>
                                <p>Contact@CabinetSeddik.com <br> Contact@GeniTax.ma</p>
                            </div>
                        </div>
                        <!--End Contact Info Single-->

                        <!--Start Contact Info Single-->
                        <div class="col-sm-3">
                            <div class="contact-info-single text-center wow fadeIn" data-wow-delay="0.2s">
                                <i class="icofont icofont-phone gradient-bg-1 color-white"></i>
                                <p><a href="tel:+212 522 25 40 00">+212 522 25 40 00</a><br><a href="tel:+212 522 25 40 20">+212 522 25 40 20</a></p>
                            </div>
                        </div>
                        <!--End Contact Info Single-->

                        <!--Start Contact Info Single-->
                        <div class="col-sm-3">
                            <div class="contact-info-single text-center wow fadeIn" data-wow-delay="0.3s">
                                <i class="icofont icofont-social-google-map gradient-bg-1 color-white"></i>
                                <p>158, Bd Zerktouni, Résidence Zerktouni<br>6ème étage, Maârif - Casablanca</p>
                            </div>
                        </div>
                        <!--End Contact Info Single-->

                        <!--Start Contact Info Single-->
                        <div class="col-sm-3">
                            <div class="contact-info-single text-center wow fadeIn" data-wow-delay="0.4s">
                                <i class="icofont icofont-chat gradient-bg-1 color-white"></i>
                                <p>Live chat disponibilités<br>Lundi - Vendredi</p>
                            </div>
                        </div>
                        <!--End Contact Info Single-->
                    </div>
                    <!--End Row-->
                </div>
                <!--End Contact Info-->

                <!--Start Contact Form Content-->
                <div class="contact-form-content">
                    <!--Start Row-->
                    <div class="row">
                        <!--Start Contact Form-->
                        <div class="col-md-6">
                            <div class="contact-form">
                                <h3 class="font-400 oswald text-center">Envoyez-nous un e-mail</h3>
                                <form action="mailer/config.php" method="post" id="ajax-contact">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nom complet*" id="name" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Votre E-mail*" id="email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Sujet" id="subject" name="subject">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="10" placeholder="Votre message..." id="message" name="message" required></textarea>
                                    </div>
                                    <div class="contact-btn">
                                        <button class="font-500 gradient-bg-1 color-white" type="submit">Envoyer</button>
                                    </div>
                                </form>
                                <div id="form-messages"></div>
                            </div>
                        </div>
                        <!--End Contact Form-->

                        <!--Start Google Map-->
                        <div class="col-md-6">
                            <div class="google-map">
                                <h3 class="font-400 oswald text-center">Rendez-nous visite</h3>
                                <div id="map"></div>
                            </div>
                        </div>
                        <!--End Google Map-->
                    </div>
                    <!--End Row-->
                </div>
                <!--End Contact Form Content-->
            </div>
            <!--End Container-->
        </section>
        <!--End Contact Section-->

        <!--Start Footer-->
        <footer id="footer">
            <!--Start Container-->
            <div class="container">
                <!--Start Row-->
                <div class="row">
                    <!--Start Footer Social-->
                    <div class="col-sm-4">
                        <div class="footer-social text-left wow fadeIn" data-wow-delay="0.1s">
                            <ul>
                                <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                                <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                                <li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
                                <li><a href="#"><i class="icofont icofont-brand-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Footer Social-->

                    <!--Start Copyright Text-->
                    <div class="col-sm-8">
                        <div class="copyright-text text-right wow fadeIn" data-wow-delay="0.2s">
                            <p class="color-white">&copy; 2019 Tous droits réservés par <a class="color-base" href="http://www.CabinetSeddik.com">Cabinet SEDDIK & Associés</a></p>
                        </div>
                    </div>
                    <!--End Copyright Text-->
                </div>
                <!--End Row-->
            </div>
            <!--End Container-->

            <!--Start ClickToTop-->
            <div class="click-to-top">
                <a class="gradient-bg" href="#header"><i class="icofont icofont-simple-up"></i></a>
            </div>
            <!--End ClickToTop-->
        </footer>
        <!--End Footer-->
    </div>
    <!--End Body Wrap-->

    <!--jQuery JS-->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <!--Google Map API-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4yKUBz0tTKwfw8zY8mYOR7MAZy9coIMg&callback" async defer></script>
    <script src="{{asset('assets/js/map.js')}}"></script>
    <!--Counter JS-->
    <script src="{{asset('assets/js/waypoints.js')}}"></script>
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <!--Bootstrap JS-->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!--Magnic PopUp JS-->
    <script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>
    <!--Owl Carousel JS-->
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <!--Wow JS-->
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <!--Bootsnavs JS-->
    <script src="{{asset('assets/js/bootsnav.js')}}"></script>
    <!--Contact Form JS-->
    <script src="{{asset('mailer/ajax-contact-form.js')}}"></script>
    <!--Main-->
    <script src="{{asset('assets/js/custom.js')}}"></script>

</body>

</html>
