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
    <title>Zeeper App Landing Page</title>
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="{{asset('images/favicon.png')}}">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
    <!--Owl Carousel CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css')}}">
    <!--Magnific PopUp Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.css')}}">
    <!--Icofont CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/icofont.css')}}">
    <!--Mailer CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('mailer/mailer-style.css')}}">
    <!--Animate CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
    <!--Bootsnav CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootsnav.css')}}">
    <!--Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <!--Responsive CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">

    <!--Modanizr JS-->
    <script src="{{asset('js/modernizr.custom.js')}}"></script>
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
                            <li><a href="{{url('/app')}} "><i class="icofont icofont-download-alt"></i> Découvrir </a></li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="icofont icofont-navigation-menu"></i>
                        </button>
                        <a class="navbar-brand" href="index.html"><img src="{{asset('images/logo.png')}}" class="logo" alt=""></a>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
                            <li class="active"><a href="#header">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#features">Feature</a></li>
                            <li><a href="#app-screenshot">Screenshot</a></li>
                            <li><a href="#pricing">Pricing</a></li>
                            <li><a href="#faq">Faq</a></li>
                            <li><a href="#team">Team</a></li>
                            <li><a href="#latest-blog">Blog</a></li>
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
                <div class="row genitax_header">
                    <!--Start Banner Caption-->
                    <div class="col-md-6">
                        <div class="caption-content">
                            <h1 class="font-700 color-white text-uppercase wow fadeInUp" data-wow-delay="0.1s">GENITAX</h1>
                            <p class="color-white wow fadeInUp" data-wow-delay="0.2s">SEDDIK & ASSOCIES <br> Experts Comptables - Consultants</p>
                            <div class="caption-btn wow fadeInUp" data-wow-delay="0.3s">
                                <a class="font-600" href="{{url('/app')}} ">Découvrir</a><a class="font-600" href="#features">Features</a>
                            </div>
                        </div>
                    </div>
                    <!--End Banner Caption-->

                    <!--Start Banner Image-->
                    <div class="col-md-6">
                        <div class=" wow fadeIn" data-wow-delay="0.4s">
                            <img src="{{asset('images/bg-genitax.png')}}" class="img-responsive" alt="Image">
                        </div>
                    </div>
                    <!--End Banner Image-->
                </div>
                <!--End Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Banner Section-->

         <!--Start Features Section-->
         <section id="features" class="bg-gray">
            <!--Start Container-->
            <div class="container">
                <!--Start Heading Row-->
                <div class="row">
                    <!--Start Heading content-->
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="section-heading text-center">
                            <h2 class="font-700 color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">NOS SPÉCIALITÉS</h2>
                        </div>
                    </div>
                    <!--End Heading content-->
                </div>
                <!--End Heading Row-->

                <!--Start Feature Items Row-->
                <div class="row ">
                    <!--Start Feature Item-->
                    <div class="col-md-4 col-sm-6">
                        <div class="feature-single text-center wow fadeIn" data-wow-delay="0.1s">
                            <h5 class="font-600">Audit & Commissariat aux Comptes</h5>
                        </div>
                    </div>
                    <!--End Feature Item-->

                    <!--Start Feature Item-->
                    <div class="col-md-4 col-sm-6">
                        <div class="feature-single text-center wow fadeIn" data-wow-delay="0.2s">
                            <h5 class="font-600">Conseil Juridique & Fiscal</h5>
                        </div>
                    </div>
                    <!--End Feature Item-->

                    <!--Start Feature Item-->
                    <div class="col-md-4 col-sm-6">
                        <div class="feature-single text-center wow fadeIn" data-wow-delay="0.3s">
                            <h5 class="font-600">Assistance Comptable</h5>
                        </div>
                    </div>
                    <!--End Feature Item-->

                    <!--Start Feature Item-->
                    <div class="col-md-4 col-sm-6">
                        <div class="feature-single text-center wow fadeIn" data-wow-delay="0.4s">
                            <h5 class="font-600">Conseil en Management</h5>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="feature-single text-center wow fadeIn" data-wow-delay="0.4s">
                            <h5 class="font-600">Organisation & Systèmes d'Information</h5>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="feature-single text-center wow fadeIn" data-wow-delay="0.4s">
                            <h5 class="font-600">Formation</h5>
                        </div>
                    </div>
                    <!--End Feature Item-->
                </div>
                <!--End Feature Items Row-->
            </div>
            <!--End Container-->
        </section>

        <!--Start About Section-->
        <section id="about">
            <!--Start Container-->
            <div class="container">
                <!--Start Heading Row-->
                <div class="row">
                    <!--Start Heading content-->
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="section-heading text-center">
                            <h2 class="font-700 color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">Notre application Genitax</h2>
                        </div>
                    </div>
                    <!--End Heading content-->
                </div>
                <!--End Heading Row-->

                <!--Start About Row-->
                <div class="row">
                      <div class="col-md-12 text-center">
                        <div class="about-content">
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Genitax est la première application dans son genre qui permet de consulter instantanément les textes fiscaux et la doctrine fiscale de manière intuitive</p>
                        </div>
                        <div class="about-btn btn-lg p-0 wow fadeInUp" data-wow-delay="0.3s">
                            <a class="gradient-bg-1" href=""><i class="icofont icofont-brand-android-robot float-left"></i><span class="float-right text-center font-w-700"><small>Available On<br></small> Google Store</span></a><a class="gradient-bg-1" href=""><i class="icofont icofont-brand-apple float-left"></i><span class="float-right text-center font-w-700"><small>Available On<br></small> Apple Store</span></a>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <div class=" wow fadeIn" data-wow-delay="0.2s">
                            <img style="    margin: 70px auto;" src="{{asset('images/app2.png')}}" class="img-responsive" alt="Image">
                        </div>
                    </div>
                    <!--End About Image-->

                  
                    <!--End About Content-->
                </div>
                <!--End About Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End About Section-->

       
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
                            <h2 class="font-700 color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">Why Choose Our App</h2>
                            <!--Start Why Choose Item-->
                            <div class="why-choose-single fix wow fadeInUp" data-wow-delay="0.1s">
                                <div class="why-chose-icon float-left">
                                    <i class="icofont icofont-id-card"></i>
                                </div>
                                <div class="why-choose-single-details float-right">
                                    <h5 class="font-600">User Friendly</h5>
                                    <p>Dicta facere ipsa doloremque autem dolores et, quibusdam delectus saepe omnis earum, sequi explicabo vero similique.</p>
                                </div>
                            </div>
                            <!--End Why Choose Item-->

                            <!--Start Why Choose Item-->
                            <div class="why-choose-single fix wow fadeInUp" data-wow-delay="0.1s">
                                <div class="why-chose-icon float-left">
                                    <i class="icofont icofont-diamond"></i>
                                </div>
                                <div class="why-choose-single-details float-right">
                                    <h5 class="font-600">Awesome Features</h5>
                                    <p>Dicta facere ipsa doloremque autem dolores et, quibusdam delectus saepe omnis earum, sequi explicabo vero similique.</p>
                                </div>
                            </div>
                            <!--End Why Choose Item-->

                            <!--Start Why Choose Item-->
                            <div class="why-choose-single fix wow fadeInUp" data-wow-delay="0.1s">
                                <div class="why-chose-icon float-left">
                                    <i class="icofont icofont-ruler-pencil"></i>
                                </div>
                                <div class="why-choose-single-details float-right">
                                    <h5 class="font-600">Easy To Customize</h5>
                                    <p>Dicta facere ipsa doloremque autem dolores et, quibusdam delectus saepe omnis earum, sequi explicabo vero similique.</p>
                                </div>
                            </div>
                            <!--End Why Choose Item-->

                            <!--Start Why Choose Item-->
                            <div class="why-choose-single fix wow fadeInUp" data-wow-delay="0.1s">
                                <div class="why-chose-icon float-left">
                                    <i class="icofont icofont-refresh"></i>
                                </div>
                                <div class="why-choose-single-details float-right">
                                    <h5 class="font-600">Free Lifetime Update</h5>
                                    <p>Dicta facere ipsa doloremque autem dolores et, quibusdam delectus saepe omnis earum, sequi explicabo vero similique.</p>
                                </div>
                            </div>
                            <!--End Why Choose Item-->
                        </div>
                    </div>
                    <!--End Why Choose Content-->

                    <!--Start Why Choose Image-->
                    <div class="col-md-6">
                        <div class="why-choose-img wow fadeIn" data-wow-delay="0.2s">
                            <img src="{{asset('images/app3.png')}}" class="img-responsive" alt="Image">
                        </div>
                    </div>
                    <!--End Why Choose Image-->
                </div>
                <!--End Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Why Choose Section-->


        <!--End Demo Video Section-->



        <!--Start Faq Section-->
        <section id="faq" class="bg-gray">
            <!--Start Container-->
            <div class="container">
                <!--Start Heading Row-->
                <div class="row">
                    <!--Start Heading Content-->
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="section-heading text-center">
                            <h2 class="font-700 color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">Frequently Asked Questions</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quisquam soluta dignissimos, libero autem praesentium consequatur dolor.</p>
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
                                        <a class="font-600 accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1">How can I install the app ? </a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="font-500 panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                </div>
                            </div>
                            <!--End Accordian Single-->

                            <!--Start Accordian Single-->
                            <div class="panel panel-default wow fadeInUp" data-wow-delay="0.2s">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="font-600 accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse2">Where are the setting options ? </a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="font-500 panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                </div>
                            </div>
                            <!--End Accordian Single-->

                            <!--Start Accordian Single-->
                            <div class="panel panel-default wow fadeInUp" data-wow-delay="0.3s">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="font-600 accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse3">How can I manage the settings ?</a>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="font-500 panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                </div>
                            </div>
                            <!--End Accordian Single-->

                            <!--Start Accordian Single-->
                            <div class="panel panel-default wow fadeInUp" data-wow-delay="0.4s">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="font-600 accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse4">Is there any authentication system 
                                        ?</a>
                                    </h4>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse">
                                    <div class="font-500 panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                </div>
                            </div>
                            <!--End Accordian Single-->

                            <!--Start Accordian Single-->
                            <div class="panel panel-default wow fadeInUp" data-wow-delay="0.5s">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="font-600 accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse5">How can I start notification option ?</a>
                                    </h4>
                                </div>
                                <div id="collapse5" class="panel-collapse collapse">
                                    <div class="font-500 panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                </div>
                            </div>
                            <!--End Accordian Single-->
                        </div>
                    </div>
                    <!--End Faq Accordian-->

                    <!--Start Faq Image-->
                    <div class="col-md-6">
                        <div class="faq-img float-right wow fadeIn" data-wow-delay="0.2s">
                            <img src="{{asset('images/app8.png')}}" class="img-responsive" alt="Image">
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
                            <h2 class="font-700 color-white text-uppercase wow fadeInUp" data-wow-delay="0.1s">Testimonial</h2>
                            <p class="color-white wow fadeInUp" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quisquam soluta dignissimos, libero autem praesentium consequatur dolor.</p>
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
                                        <img src="{{asset('images/client-2.jpg')}}" alt="">
                                        <h4 class="font-600">Emma Smith</h4>
                                        <p>Marketer</p>
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <div class="testimonial-border"></div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="client-comment">
                                        <p class="wow fadeInUp" data-wow-delay="0.1s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, quam! Distinctio fugit asperiores, tenetur enim sint neque animi provident atque sed labore delectus esse repellat illum ea, in iste. Ratione!</p>
                                        <span class="wow fadeInUp" data-wow-delay="0.2s"><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i></span><span class="float-right"><i class="icofont icofont-quote-right"></i></span>
                                    </div>
                                </div>
                            </div>
                            <!--End Testimonial Single-->

                            <!--Start Testimonial Single-->
                            <div class="testimonial-single row">
                                <div class="col-sm-3">
                                    <div class="client-info text-center">
                                        <img src="{{asset('images/client-1.jpg')}}" alt="">
                                        <h4 class="font-600">Jack Morkel</h4>
                                        <p>Developer</p>
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <div class="testimonial-border"></div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="client-comment">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, quam! Distinctio fugit asperiores, tenetur enim sint neque animi provident atque sed labore delectus esse repellat illum ea, in iste. Ratione!</p>
                                        <span><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i></span><span class="float-right"><i class="icofont icofont-quote-right"></i></span>
                                    </div>
                                </div>
                            </div>
                            <!--End Testimonial Single-->

                            <!--Start Testimonial Single-->
                            <div class="testimonial-single row">
                                <div class="col-sm-3">
                                    <div class="client-info text-center">
                                        <img src="{{asset('images/client-3.jpg')}}" alt="">
                                        <h4 class="font-600">Jhon Doe</h4>
                                        <p>Designer</p>
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <div class="testimonial-border"></div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="client-comment">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, quam! Distinctio fugit asperiores, tenetur enim sint neque animi provident atque sed labore delectus esse repellat illum ea, in iste. Ratione!</p>
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
                            <img src="{{asset('images/app2.png')}}" class="img-responsive" alt="Image">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="app-download-content animated fadeInUp">
                            <h2 class="font-700 color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">Download Zeeper App Now</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate corrupti vero corporis eaque dolores distinctio vitae repellendus nobis eveniet! Suscipit aliquid officia minus tempore molestiae voluptatum.</p>
                            <div class="app-download-btn btn-lg p-0 wow fadeInUp" data-wow-delay="0.3s">
                                <a class="gradient-bg-1" href=""><i class="icofont icofont-brand-android-robot float-left"></i><span class="float-right text-center font-w-700"><small>Available On<br></small> Google Store</span></a><a class="gradient-bg-1" href=""><i class="icofont icofont-brand-apple float-left"></i><span class="float-right text-center font-w-700"><small>Available On<br></small> Apple Store</span></a>
                            </div>
                        </div>

                    </div>
                </div>
                <!--End App Download Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Download App Section-->

        <!--Start Latest Blog Section-->
        <section id="latest-blog">
            <!--Start Container-->
            <div class="container">
                <!--Start Heading Row-->
                <div class="row">
                    <!--Start Heading Content-->
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="section-heading text-center">
                            <h2 class="font-700 color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">Our Latest Blog</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quisquam soluta dignissimos, libero autem praesentium consequatur dolor.</p>
                        </div>
                    </div>
                    <!--End Heading Content-->
                </div>
                <!--End Heading Row-->

                <!--Start Latest Blog Row-->
                <div class="row">
                    <!--Start Blog Post Single-->
                    <div class="col-md-4">
                        <article class="blog-post-single wow fadeIn" data-wow-delay="0.1s">
                            <div class="post-media">
                                <a href="blog-details.html">
                                    <img class="img-responsive" src="{{asset('images/blog-1.jpg')}}" alt="image">
                                </a>
                            </div>
                            <div class="post-details">
                                <div class="post-meta">
                                    <h2 class="post-title">
                                        <a class="font-600" href="blog-details.html">How to Use App Properly</a>
                                    </h2>
                                    <span><a href=""><i class="icofont icofont-user"></i> John Doe</a></span>
                                    <small>&#124;</small>
                                    <span><a href=""><i class="icofont icofont-ui-calendar"></i> 8 June, 2017</a></span>
                                    <small>&#124;</small>
                                    <span><a href=""><i class="icofont icofont-comment"></i> 12 comments</a></span>
                                </div>
                                <div class="post-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse repellat in ipsam modi sunt facere id officia distinctio quidem.</p>
                                    <a class="font-500 color-base" href="blog-details.html">Read More <i class="icofont icofont-double-right"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!--End Blog Post Single-->

                    <!--Start Blog Post Single-->
                    <div class="col-md-4">
                        <article class="blog-post-single wow fadeIn" data-wow-delay="0.2s">
                            <div class="post-media">
                                <a href="blog-details.html">
                                    <img class="img-responsive" src="{{asset('images/blog-2.jpg')}}" alt="image">
                                </a>
                            </div>
                            <div class="post-details">
                                <div class="post-meta">
                                    <h2 class="post-title">
                                        <a class="font-600" href="blog-details.html">Best Apps for Personal Use</a>
                                    </h2>
                                    <span><a href=""><i class="icofont icofont-user"></i> John Doe</a></span>
                                    <small>&#124;</small>
                                    <span><a href=""><i class="icofont icofont-ui-calendar"></i> 8 June, 2017</a></span>
                                    <small>&#124;</small>
                                    <span><a href=""><i class="icofont icofont-comment"></i> 12 comments</a></span>
                                </div>
                                <div class="post-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse repellat in ipsam modi sunt facere id officia distinctio quidem.</p>
                                    <a class="font-500 color-base" href="blog-details.html">Read More <i class="icofont icofont-double-right"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!--End Blog Post Single-->

                    <!--Start Blog Post Single-->
                    <div class="col-md-4">
                        <article class="blog-post-single wow fadeIn" data-wow-delay="0.3s">
                            <div class="post-media">
                                <a href="blog-details.html">
                                    <img class="img-responsive" src="{{asset('images/blog-3.jpg')}}" alt="image">
                                </a>
                            </div>
                            <div class="post-details">
                                <div class="post-meta">
                                    <h2 class="post-title">
                                        <a class="font-600" href="blog-details.html">How to Customize Zeeper App</a>
                                    </h2>
                                    <span><a href=""><i class="icofont icofont-user"></i> John Doe</a></span>
                                    <small>&#124;</small>
                                    <span><a href=""><i class="icofont icofont-ui-calendar"></i> 8 June, 2017</a></span>
                                    <small>&#124;</small>
                                    <span><a href=""><i class="icofont icofont-comment"></i> 12 comments</a></span>
                                </div>
                                <div class="post-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse repellat in ipsam modi sunt facere id officia distinctio quidem.</p>
                                    <a class="font-500 color-base" href="blog-details.html">Read More <i class="icofont icofont-double-right"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!--End Blog Post Single-->
                </div>
                <!--End Latest Blog Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Latest Blog Section-->

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
                            <h2 class="font-700 color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">Contactez-nous</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quisquam soluta dignissimos, libero autem praesentium consequatur dolor.</p>
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
                                <p>support@email.com <br> example@email.com</p>
                            </div>
                        </div>
                        <!--End Contact Info Single-->

                        <!--Start Contact Info Single-->
                        <div class="col-sm-3">
                            <div class="contact-info-single text-center wow fadeIn" data-wow-delay="0.2s">
                                <i class="icofont icofont-phone gradient-bg-1 color-white"></i>
                                <p>+11 012345 6789 <br> +22 012345 6789</p>
                            </div>
                        </div>
                        <!--End Contact Info Single-->

                        <!--Start Contact Info Single-->
                        <div class="col-sm-3">
                            <div class="contact-info-single text-center wow fadeIn" data-wow-delay="0.3s">
                                <i class="icofont icofont-social-google-map gradient-bg-1 color-white"></i>
                                <p>345, Mountain View, <br> New York, USA</p>
                            </div>
                        </div>
                        <!--End Contact Info Single-->

                        <!--Start Contact Info Single-->
                        <div class="col-sm-3">
                            <div class="contact-info-single text-center wow fadeIn" data-wow-delay="0.4s">
                                <i class="icofont icofont-social-skype gradient-bg-1 color-white"></i>
                                <p>support.live <br> livesupport24</p>
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
                                <h3 class="font-600 text-center">Send Us A Message</h3>
                                <form action="mailer/config.php" method="post" id="ajax-contact">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name*" id="name" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email*" id="email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Subject" id="subject" name="subject">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="10" placeholder="Write Your Message" id="message" name="message" required></textarea>
                                    </div>
                                    <div class="contact-btn">
                                        <button class="font-500 gradient-bg-1 color-white" type="submit">Submit</button>
                                    </div>
                                </form>
                                <div id="form-messages"></div>
                            </div>
                        </div>
                        <!--End Contact Form-->

                        <!--Start Google Map-->
                        <div class="col-md-6">
                            <div class="google-map">
                                <h3 class="font-600 text-center">Find Us In Google Map</h3>
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
                    <!--End Footer Social-->

                    <!--Start Copyright Text-->
                    <div class="col-sm-12 text-center">
                        <div class="text-center copyright-text text-right wow fadeIn" data-wow-delay="0.2s">
                            <p class="color-white">&copy; 2018 Genitax</p>
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
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!--Google Map API-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4yKUBz0tTKwfw8zY8mYOR7MAZy9coIMg&callback" async defer></script>
    <script src="{{asset('js/map.js')}}"></script>
    <!--Counter JS-->
    <script src="{{asset('js/waypoints.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <!--Bootstrap JS-->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!--Magnic PopUp JS-->
    <script src="{{asset('js/magnific-popup.min.js')}}"></script>
    <!--Owl Carousel JS-->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <!--Wow JS-->
    <script src="{{asset('js/wow.min.js')}}"></script>
    <!--Bootsnavs JS-->
    <script src="{{asset('js/bootsnav.js')}}"></script>
    <!--Contact Form JS-->
    <script src="{{asset('mailer/ajax-contact-form.js')}}"></script>
    <!--Main-->
    <script src="{{asset('js/custom.js')}}"></script>

</body>

</html>
