<?php

if(isset($_POST['submit'])){
    $status=1;
    $name=$_POST['name'];  
    $email=$_POST['email'];    
    $select=$_POST['select'];
      
  $from = 'Enquiry <'.$email.'>' . "\r\n";
  $sendTo = "Enquiry <yadavpriya1425@gmail.com>";
  $subject = 'Contact Form';
  // $fields = array( 'name' => 'name' );
  $from = 'Aayushi water purifier';
  $from .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  
  
  $emailText = '
  <html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="x-apple-disable-message-reformatting"> 
      <title></title>
      <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
      <style>
        
      </style>
  </head>
  <body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
     <div>
     <h1>'.$email.'</h1>
     </div>
  </body>
  </html>';
  
  try{
    foreach($_POST as $key => $value){
      if(isset($fields[$key])){
        $emailText.="$fields[$key]: $value\n";
      }
    }
   if( mail($sendTo,$subject,$emailText, "From:" .$from)){
  echo"message send sucessfully!";
   
   }else{
      echo "$sendTo $subject $emailText $from";
   }
  }
  catch(\Exception $e){
    echo "not done";
  }
  if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
    $encode=json_encode($responseArray);
    header('content-Type: application/json');
    echo $encoded;
  }
  else{
    echo $responseArray['message'];
  }
  }
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from layerdrops.com/insurhtml/main-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Jul 2022 09:08:03 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Home One || Insur || Insur HTML 5 Template </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Insur HTML 5 Template " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="assets/vendors/insur-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/timepicker/timePicker.css" />
    <link rel="stylesheet" href="assets/vendors/ion.rangeSlider/css/ion.rangeSlider.min.css">

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/insur.css" />
    <link rel="stylesheet" href="assets/css/insur-responsive.css" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>





    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
        <header class="main-header clearfix">
            <div class="main-header__top">
                <div class="container">
                    <div class="main-header__top-inner">
                        <div class="main-header__top-address">
                            <ul class="list-unstyled main-header__top-address-list">
                                <li>
                                    <i class="icon">
                                        <span class="icon-pin"></span>
                                    </i>
                                    <div class="text">
                                        <p>30 Commercial Road Fratton, Australia</p>
                                    </div>
                                </li>
                                <li>
                                    <i class="icon">
                                        <span class="icon-email"></span>
                                    </i>
                                    <div class="text">
                                        <p><a href="mailto:needhelp@company.com">needhelp@company.com</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="main-header__top-right">
                            <div class="main-header__top-menu-box">
                                <ul class="list-unstyled main-header__top-menu">
                                    <li><a href="about.html">Make a Claim</a></li>
                                    <li><a href="faq.html"> FAQs</a></li>
                                    <li><a href="about.html">About</a></li>
                                </ul>
                            </div>
                            <div class="main-header__top-social-box">
                                <div class="main-header__top-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu clearfix">
                <div class="main-menu__wrapper clearfix">
                    <div class="container">
                        <div class="main-menu__wrapper-inner clearfix">
                            <div class="main-menu__left">
                                <div class="main-menu__logo">
                                    <a href="index.html"><img src="assets/images/resources/logo-1.png" alt=""></a>
                                </div>
                                <div class="main-menu__main-menu-box">
                                    <div class="main-menu__main-menu-box-inner">
                                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                        <ul class="main-menu__list">
                                            <li class="dropdown current megamenu">
                                                <a href="index.html">Home </a>
                                                <ul>
                                                    <li>
                                                        <section class="home-showcase">
                                                            <div class="container">
                                                                <div class="home-showcase__inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <div class="home-showcase__item">
                                                                                <div class="home-showcase__image">
                                                                                    <img src="assets/images/home-showcase/home-showcase-1-1.jpg"
                                                                                        alt="">
                                                                                    <div class="home-showcase__buttons">
                                                                                        <a href="index.html"
                                                                                            class="thm-btn home-showcase__buttons__item">Multi
                                                                                            Page</a>
                                                                                        <a href="index-one-page.html"
                                                                                            class="thm-btn home-showcase__buttons__item">One
                                                                                            Page</a>
                                                                                    </div>
                                                                                    <!-- /.home-showcase__buttons -->
                                                                                </div><!-- /.home-showcase__image -->
                                                                                <h3 class="home-showcase__title">Home 01
                                                                                </h3><!-- /.home-showcase__title -->
                                                                            </div><!-- /.home-showcase__item -->
                                                                        </div><!-- /.col-lg-3 -->
                                                                        <div class="col-lg-3">
                                                                            <div class="home-showcase__item">
                                                                                <div class="home-showcase__image">
                                                                                    <img src="assets/images/home-showcase/home-showcase-1-2.jpg"
                                                                                        alt="">
                                                                                    <div class="home-showcase__buttons">
                                                                                        <a href="index2.html"
                                                                                            class="thm-btn home-showcase__buttons__item">Multi
                                                                                            Page</a>
                                                                                        <a href="index2-one-page.html"
                                                                                            class="thm-btn home-showcase__buttons__item">One
                                                                                            Page</a>
                                                                                    </div>
                                                                                    <!-- /.home-showcase__buttons -->
                                                                                </div><!-- /.home-showcase__image -->
                                                                                <h3 class="home-showcase__title">Home 02
                                                                                </h3><!-- /.home-showcase__title -->
                                                                            </div><!-- /.home-showcase__item -->
                                                                        </div><!-- /.col-lg-3 -->
                                                                        <div class="col-lg-3">
                                                                            <div class="home-showcase__item">
                                                                                <div class="home-showcase__image">
                                                                                    <img src="assets/images/home-showcase/home-showcase-1-3.jpg"
                                                                                        alt="">
                                                                                    <div class="home-showcase__buttons">
                                                                                        <a href="index3.html"
                                                                                            class="thm-btn home-showcase__buttons__item">Multi
                                                                                            Page</a>
                                                                                        <a href="index3-one-page.html"
                                                                                            class="thm-btn home-showcase__buttons__item">One
                                                                                            Page</a>
                                                                                    </div>
                                                                                    <!-- /.home-showcase__buttons -->
                                                                                </div><!-- /.home-showcase__image -->
                                                                                <h3 class="home-showcase__title">Home 03
                                                                                </h3><!-- /.home-showcase__title -->
                                                                            </div><!-- /.home-showcase__item -->
                                                                        </div><!-- /.col-lg-3 -->
                                                                        <div class="col-lg-3">
                                                                            <div class="home-showcase__item">
                                                                                <div class="home-showcase__image">
                                                                                    <img src="assets/images/home-showcase/home-showcase-1-4.jpg"
                                                                                        alt="">
                                                                                    <div class="home-showcase__buttons">
                                                                                        <a href="index-dark.html"
                                                                                            class="thm-btn home-showcase__buttons__item">View
                                                                                            Page</a>
                                                                                    </div>
                                                                                    <!-- /.home-showcase__buttons -->
                                                                                </div><!-- /.home-showcase__image -->
                                                                                <h3 class="home-showcase__title">Home
                                                                                    Dark
                                                                                </h3><!-- /.home-showcase__title -->
                                                                            </div><!-- /.home-showcase__item -->
                                                                        </div><!-- /.col-lg-3 -->
                                                                    </div><!-- /.row -->
                                                                </div><!-- /.home-showcase__inner -->

                                                            </div><!-- /.container -->
                                                        </section>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Pages</a>
                                                <ul>
                                                    <li><a href="about.html">About</a></li>
                                                    <li><a href="team-page.html">Team</a></li>
                                                    <li><a href="team-carousel.html">Team Carousel</a></li>
                                                    <li><a href="team-details.html">Team Details</a></li>
                                                    <li><a href="testimonial.html">Testimonials</a></li>
                                                    <li><a href="testimonial-carousel.html">Teatimonials Carousel</a>
                                                    </li>
                                                    <li><a href="pricing.html">Pricing</a></li>
                                                    <li><a href="faq.html">FAQs</a></li>
                                                    <li><a href="404.html">404 Error</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Insurance </a>
                                                <ul>
                                                    <li><a href="insurance-01.html">Insurance 01</a></li>
                                                    <li><a href="insurance-02.html">Insurance 02</a></li>
                                                    <li><a href="car-insurance.html">Car insurance</a></li>
                                                    <li><a href="life-insurance.html">Life insurance</a></li>
                                                    <li><a href="home-insurance.html">Home insurance</a>
                                                    </li>
                                                    <li><a href="health-insurance.html">Health insurance</a></li>
                                                    <li><a href="business-insurance.html">Business insurance</a></li>
                                                    <li><a href="fire-insurance.html">Fire insurance</a></li>
                                                    <li><a href="marriage-insurance.html">Marriage insurance</a></li>
                                                    <li><a href="travel-insurance.html">Travel insurance</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Portfolio</a>
                                                <ul>
                                                    <li><a href="portfolio.html">Portfolio</a></li>
                                                    <li><a href="portfolio-carousel.html">Portfolio Carousel</a></li>
                                                    <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">News</a>
                                                <ul>
                                                    <li><a href="news.html">News</a></li>
                                                    <li><a href="news-carousel.html">News Carousel</a></li>
                                                    <li><a href="news-sidebar.html">News Sidebar</a></li>
                                                    <li><a href="news-details.html">News Details</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="contact.html">Contact </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="main-menu__main-menu-box-search-get-quote-btn">
                                        <div class="main-menu__main-menu-box-search">
                                            <a href="#"
                                                class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                        </div>
                                        <div class="main-menu__main-menu-box-get-quote-btn-box">
                                            <a href="contact.html"
                                                class="thm-btn main-menu__main-menu-box-get-quote-btn">Get a Quote</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-menu__right">
                                <div class="main-menu__call">
                                    <div class="main-menu__call-icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="main-menu__call-content">
                                        <a href="tel:9200368090">+92 (003) 68-090</a>
                                        <p>Call to Our Experts</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Start-->
        <section class="main-slider clearfix">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/main-slider-1-1.jpg);"></div>
                        <!-- /.image-layer -->

                        <div class="main-slider-shape-1 float-bob-x">
                            <img src="assets/images/shapes/main-slider-shape-1.png" alt="">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <h3 class="main-slider__title">Insurance <br> for the better <br> family
                                            <span>life.</span></h3>
                                        <p class="main-slider__text"><b>Save Once... and realise Your Life Goals.</b> </p>
                                        <div class="main-slider__btn-box">
                                            <a href="about.html" class="thm-btn main-slider__btn">Let’s Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/main-slider-1-2.jpg);"></div>
                        <!-- /.image-layer -->

                        <div class="main-slider-shape-1 float-bob-x">
                            <img src="assets/images/shapes/main-slider-shape-1.png" alt="">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title">Insurance <br> for the better <br> family
                                            <span>life.</span></h2>
                                        <p class="main-slider__text">Phasellus condimentum laoreet turpis, ut tincid
                                            sodales <br> in. Integer leo arcu, mollis sit amet tempor.</p>
                                        <div class="main-slider__btn-box">
                                            <a href="about.html" class="thm-btn main-slider__btn">Let’s Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/main-slider-1-3.jpg);"></div>
                        <!-- /.image-layer -->

                        <div class="main-slider-shape-1 float-bob-x">
                            <img src="assets/images/shapes/main-slider-shape-1.png" alt="">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title">Insurance <br> for the better <br> family
                                            <span>life.</span></h2>
                                        <p class="main-slider__text">Phasellus condimentum laoreet turpis, ut tincid
                                            sodales <br> in. Integer leo arcu, mollis sit amet tempor.</p>
                                        <div class="main-slider__btn-box">
                                            <a href="about.html" class="thm-btn main-slider__btn">Let’s Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-right-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-right-arrow1"></i>
                    </div>
                </div>

            </div>
        </section>
        <!--Main Slider End-->

        <!--Feature One Start-->
        <section class="feature-one">
            <div class="container">
                <div class="feature-one__inner">
                    <div class="row">
                        <!--Feature One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                            <div class="feature-one__single">
                                <div class="feature-one__single-inner">
                                    <div class="feature-one__icon">
                                        <span class="icon-insurance"></span>
                                    </div>
                                    <div class="feature-one__count"></div>
                                    <div class="feature-one__shape">
                                        <img src="assets/images/shapes/feature-one-shape-1.png" alt="">
                                    </div>
                                    <h3 class="feature-one__title"><a href="about.html">Life Insurance</a></h3>
                                    <p class="feature-one__text"> The life insurance calculator gives you the 
                                        flexibility to design your life plan as per your needs. You can pick, 
                                         choose the premium payment life and payout method as per your financial plan.
                                   </p>
                                </div>
                            </div>
                        </div>
                        <!--Feature One Single End-->
                        <!--Feature One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                            <div class="feature-one__single">
                                <div class="feature-one__single-inner">
                                    <div class="feature-one__icon">
                                        <span class="icon-cashback"></span>
                                    </div>
                                    <div class="feature-one__count"></div>
                                    <div class="feature-one__shape">
                                        <img src="assets/images/shapes/feature-one-shape-1.png" alt="">
                                    </div>
                                    <h3 class="feature-one__title"><a href="about.html">Business Insurance</a></h3>
                                    <p class="feature-one__text">Business Insurance Policy (CGL) protects your organization and your business against any liability arising due to bodily injury, property damage or any personal injury caused to a third-party.</p>
                                </div>
                            </div>
                        </div>
                        <!--Feature One Single End-->
                        <!--Feature One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                            <div class="feature-one__single">
                                <div class="feature-one__single-inner">
                                    <div class="feature-one__icon">
                                        <span class="icon-house"></span>
                                    </div>
                                    <div class="feature-one__count"></div>
                                    <div class="feature-one__shape">
                                        <img src="assets/images/shapes/feature-one-shape-1.png" alt="">
                                    </div>
                                    <h3 class="feature-one__title"><a href="about.html">Home Insurance 
                                    </a></h3>
                                    <p class="feature-one__text">Home insurance policy covers damage to the home and its contents against all the 12 perils specified under standard fire insurance policy including fire, lightning, explosion, aircraft damage, and impact damage.</p>
                                </div>
                            </div>
                        </div>
                        <!--Feature One Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!--Feature One End-->

        <!--About One Start-->
        <section class="about-one">
            <div class="about-one-bg wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms"
                style="background-image: url(assets/images/backgrounds/about-one-bg.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="about-one__img">
                                    <img src="assets/images/resources/about-one-img-1.jpg" alt="">
                                </div>
                                <div class="about-one__img-two">
                                    <img src="assets/images/resources/about-one-img-2.jpg" alt="">
                                </div>
                                <div class="about-one__experience">
                                    <h2 class="about-one__experience-year">20</h2>
                                    <p class="about-one__experience-text">Years of <br> Experience</p>
                                </div>
                                <div class="about-one__shape-1">
                                    <img src="assets/images/shapes/about-one-shape-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">About company</p>
                                    <div class="section-title-shape-1">
                                        <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">We provide the best insurance policy</h2>
                            </div>
                            <p class="about-one__text-1">A Better Future Starts Here...</p>
                            <ul class="list-unstyled about-one__points">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Customized plans from 10 different insurers.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Instant purchase, Immediate receipt.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Free Customer Support for all Endorsements Requests.</p>
                                    </div>
                                </li>
                            </ul>
                            <p class="about-one__text-2">The insurance contract or agreement is a contract whereby the insurer promises to pay benefits to the insured or on their behalf to a third party if certain defined events occur. Subject to the "fortuity principle", the event must be uncertain. The uncertainty can be either as to when the event will happen </p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About One End-->

        <!--Services One Start-->
        <section class="services-one">
            <div class="services-one__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6">
                            <div class="services-one__top-left">
                                <div class="section-title text-left">
                                    <div class="section-sub-title-box">
                                        <p class="section-sub-title">Our services</p>
                                        <div class="section-title-shape-1">
                                            <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                                        </div>
                                        <div class="section-title-shape-2">
                                            <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                                        </div>
                                    </div>
                                    <h2 class="section-title__title">We’re covering all the insurance fields</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <div class="services-one__top-right">
                                <p class="services-one__top-text">Live a Long Life with Protection. We insure quality. We GO Where You Go. A Business of Caring. We'll chase the recession </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-one__bottom">
                <div class="services-one__container">
                    <div class="row">
                        <!--Services One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-one__single">
                                <div class="service-one__img">
                                    <img src="assets/images/services/services-1-1.jpg" alt="">
                                </div>
                                <div class="service-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-drive"></span>
                                    </div>
                                    <h2 class="service-one__title"><a href="car-insurance.html">Car insurance</a></h2>
                                    <p class="service-one__text">The fastest growing sector in India as it is compulsory for all new cars. The value of the car, state where the car is registered and the year of manufacture. This amount can be reduced by asking the insurer for a no claim bonus (NCB) if no claim is made for insurance in previous year.</p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="services-one__single">
                                <div class="service-one__img">
                                    <img src="assets/images/services/services-1-2.jpg" alt="">
                                </div>
                                <div class="service-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-family"></span>
                                    </div>
                                    <h2 class="service-one__title"><a href="life-insurance.html">Life insurance</a></h2>
                                    <p class="service-one__text">A life insurance plan is a contract between an insurance policyholder, where the insurer promises to pay a sum of money in exchange for a premium after set period or upon the death of an insured person. Life insurance offers you and your family financial. </p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="services-one__single">
                                <div class="service-one__img">
                                    <img src="assets/images/services/services-1-3.jpg" alt="">
                                </div>
                                <div class="service-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-home"></span>
                                    </div>
                                    <h2 class="service-one__title"><a href="home-insurance.html">Home insurance</a></h2>
                                    <p class="service-one__text">Home insurance policy covers damage to the home and its contents against all the 12 perils specified under standard fire insurance policy including fire, lightning, explosion, aircraft damage, and impact damage.</p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="services-one__single">
                                <div class="service-one__img">
                                    <img src="assets/images/services/services-1-4.jpg" alt="">
                                </div>
                                <div class="service-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-heart-beat"></span>
                                    </div>
                                    <h2 class="service-one__title"><a href="health-insurance.html">Health insurance</a>
                                    </h2>
                                    <p class="service-one__text">Health insurance policy is a product that protects you against the financial implications of a wide variety of health-related expenses, ranging from those caused by minor illnesses and injuries to critical diseases.</p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                            <div class="services-one__single">
                                <div class="service-one__img">
                                    <img src="assets/images/services/services-1-5.jpg" alt="">
                                </div>
                                <div class="service-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-briefcase"></span>
                                    </div>
                                    <h2 class="service-one__title"><a href="business-insurance.html">Business
                                            insurance</a></h2>
                                    <p class="service-one__text">Business Insurance Policy (CGL) protects your organization and your business against any liability arising due to bodily injury, any personal injury caused to a third-party.Business insurance protects businesses from any financial loss

                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                            <div class="services-one__single">
                                <div class="service-one__img">
                                    <img src="assets/images/services/services-1-6.jpg" alt="">
                                </div>
                                <div class="service-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-fire"></span>
                                    </div>
                                    <h2 class="service-one__title"><a href="fire-insurance.html">Fire insurance</a></h2>
                                    <p class="service-one__text">Fire insurance is property insurance that provides additional coverage for loss or damage to a structure damaged or destroyed in a fire.Fire insurance may be capped at a rate that is less than the cost of the losses accrued, fire insurance policy</p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="700ms">
                            <div class="services-one__single">
                                <div class="service-one__img">
                                    <img src="assets/images/services/services-1-7.jpg" alt="">
                                </div>
                                <div class="service-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-ring"></span>
                                    </div>
                                    <h2 class="service-one__title"><a href="marriage-insurance.html">Marriage
                                            insurance</a></h2>
                                    <p class="service-one__text">Wedding is an auspicious event that marks a beginning of a new chapter in your life. It is the starting point of creating a family of your own. It is a once in a lifetime event that continues to bring you joy for the rest of your life. </p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="800ms">
                            <div class="services-one__single">
                                <div class="service-one__img">
                                    <img src="assets/images/services/services-1-8.jpg" alt="">
                                </div>
                                <div class="service-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-plane"></span>
                                    </div>
                                    <h2 class="service-one__title"><a href="travel-insurance.html">Travel insurance</a>
                                    </h2>
                                    <p class="service-one__text">Travel insurance is a unique product that offers you financial help in case something were to go wrong while you’re travelling. It covers a range of scenarios, including medical and dental emergencies, theft of your money</p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!--Services One End-->

        <!--Why Choose One Start-->
        <section class="why-choose-one">
            <div class="why-choose-one-shape-1"
                style="background-image: url(assets/images/shapes/why-choose-one-shape-1.png);"></div>
            <div class="why-choose-one-shape-2 float-bob-y">
                <img src="assets/images/shapes/why-choose-one-shape-2.png" alt="">
            </div>
            <div class="why-choose-one-shape-3 float-bob-x">
                <img src="assets/images/shapes/why-choose-one-shape-3.png" alt="">
            </div>
            <div class="why-choose-one-shape-4 float-bob-y">
                <img src="assets/images/shapes/why-choose-one-shape-4.png" alt="">
            </div>
            <div class="why-choose-one-shape-5 float-bob-y">
                <img src="assets/images/shapes/why-choose-one-shape-5.png" alt="">
            </div>
            <div class="why-choose-one-shape-6 float-bob-x">
                <img src="assets/images/shapes/why-choose-one-shape-6.png" alt="">
            </div>
            <div class="why-choose-one-img wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                <img src="assets/images/resources/why-choose-one-img.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7">
                        <div class="why-choose-one__left">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">Why choose</p>
                                    <div class="section-title-shape-1">
                                        <img src="assets/images/shapes/section-title-shape-3.png" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="assets/images/shapes/section-title-shape-4.png" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">Few reasons for people choosing insur</h2>
                            </div>
                            <p class="why-choose-one__text">Term Insurance plan is a simple and pure risk cover form of life insurance.<br> It provides financial protection to your family against a fixed premium paid for a specified term. <br>You can get a large amount of term insurance cover (sum assured)<br> at affordable premiums.<br> The nominee receives the term insurance amount in case of death of the policyholder</p>
                            <div class="why-choose-one__list-box">
                                <ul class="list-unstyled why-choose-one__list">
                                    <li>
                                        <div class="why-choose-one__single">
                                            <div class="why-choose-one__list-icon">
                                                <span class="icon-easy-to-use"></span>
                                            </div>
                                            <div class="why-choose-one__list-title-box">
                                                <div class="why-choose-one__list-title-inner">
                                                    <h3 class="why-choose-one__list-title">Fast & easy process</h3>
                                                </div>
                                                <div class="why-choose-one__list-text-box">
                                                    <p class="why-choose-one__list-text">Lorem ipsum dolor sit amet,
                                                        sectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="why-choose-one__single">
                                            <div class="why-choose-one__list-icon">
                                                <span class="icon-contract"></span>
                                            </div>
                                            <div class="why-choose-one__list-title-box">
                                                <div class="why-choose-one__list-title-inner">
                                                    <h3 class="why-choose-one__list-title">Fast & easy process</h3>
                                                </div>
                                                <div class="why-choose-one__list-text-box">
                                                    <p class="why-choose-one__list-text">Lorem ipsum dolor sit amet,
                                                        sectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="why-choose-one__single">
                                            <div class="why-choose-one__list-icon">
                                                <span class="icon-policy"></span>
                                            </div>
                                            <div class="why-choose-one__list-title-box">
                                                <div class="why-choose-one__list-title-inner">
                                                    <h3 class="why-choose-one__list-title">Control over policy</h3>
                                                </div>
                                                <div class="why-choose-one__list-text-box">
                                                    <p class="why-choose-one__list-text">Lorem ipsum dolor sit amet,
                                                        sectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="why-choose-one__single">
                                            <div class="why-choose-one__list-icon">
                                                <span class="icon-fund"></span>
                                            </div>
                                            <div class="why-choose-one__list-title-box">
                                                <div class="why-choose-one__list-title-inner">
                                                    <h3 class="why-choose-one__list-title">Save your money</h3>
                                                </div>
                                                <div class="why-choose-one__list-text-box">
                                                    <p class="why-choose-one__list-text">Lorem ipsum dolor sit amet,
                                                        sectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Why Choose One End-->

        <!--Get Insurance Start-->
        <section class="get-insurance">
            <div class="get-insurance-bg"
                style="background-image: url(assets/images/backgrounds/get-insurance-bg.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="get-insurance__left">
                            <div class="get-insurance__img wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <img src="assets/images/resources/get-insurance-img-1.png" alt="">
                            </div>
                            <div class="get-insurance__author">
                                <p>Aleesha Rose</p>
                            </div>
                            <div class="get-insurance__circle"></div>
                            <div class="get-insurance__shape-1 float-bob-x">
                                <img src="assets/images/shapes/get-insurance-shape-1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="get-insurance__right">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">Free quote</p>
                                    <div class="section-title-shape-1">
                                        <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">Get an insurance quote <br> to get started!</h2>
                            </div>
                            <div class="get-insurance__tab">
                                <div class="get-insurance__tab-box tabs-box">
                                    <ul class="tab-buttons clearfix list-unstyled">
                                        <li data-tab="#home2" class="tab-btn active-btn"><span>Home</span></li>
                                        <li data-tab="#vehicles" class="tab-btn"><span>Vehicles</span></li>
                                        <li data-tab="#health" class="tab-btn"><span>health</span></li>
                                        <li data-tab="#life" class="tab-btn"><span>Life</span></li>
                                    </ul>
                                    <div class="tabs-content">
                                        <!--tab-->
                                        <div class="tab active-tab" id="home2">
                                            <div class="get-insurance__content">
                                                <form class="get-insurance__form">
                                                    <div class="get-insurance__content-box">
                                                        <div class="get-insurance__input-box">
                                                            <input type="text" placeholder="Full name" name="name">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <input type="email" placeholder="Email address"
                                                                name="email">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <select class="selectpicker" name="select"
                                                                aria-label="Default select example">
                                                                <option selected>Select type of insurance</option>
                                                                <option value="1">Car insurance</option>
                                                                <option value="2">Life insurance</option>
                                                                <option value="3">Home insurance</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <button type="submit" class="thm-btn get-insurance__btn" name="submit">Get a Quote
                                                        Now</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <div class="tab" id="vehicles">
                                            <div class="get-insurance__content">
                                                <form class="get-insurance__form">
                                                    <div class="get-insurance__content-box">
                                                        <div class="get-insurance__input-box">
                                                            <input type="text" placeholder="Full name" name="name">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <input type="email" placeholder="Email address"
                                                                name="email">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <select class="selectpicker"
                                                                aria-label="Default select example">
                                                                <option selected>Select type of insurance</option>
                                                                <option value="1">Car insurance</option>
                                                                <option value="2">Life insurance</option>
                                                                <option value="3">Home insurance</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <button type="submit" class="thm-btn get-insurance__btn" name="submit">Get a Quote
                                                        Now</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <div class="tab" id="health">
                                            <div class="get-insurance__content">
                                                <form class="get-insurance__form">
                                                    <div class="get-insurance__content-box">
                                                        <div class="get-insurance__input-box">
                                                            <input type="text" placeholder="Full name" name="name">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <input type="email" placeholder="Email address"
                                                                name="email">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <select class="selectpicker"
                                                                aria-label="Default select example">
                                                                <option selected>Select type of insurance</option>
                                                                <option value="1">Car insurance</option>
                                                                <option value="2">Life insurance</option>
                                                                <option value="3">Home insurance</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <button type="submit" class="thm-btn get-insurance__btn" name="submit">Get a Quote
                                                        Now</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <div class="tab" id="life">
                                            <div class="get-insurance__content">
                                                <form class="get-insurance__form">
                                                    <div class="get-insurance__content-box">
                                                        <div class="get-insurance__input-box">
                                                            <input type="text" placeholder="Full name" name="name">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <input type="email" placeholder="Email address"
                                                                name="email">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <select class="selectpicker"
                                                                aria-label="Default select example">
                                                                <option selected>Select service</option>
                                                                <option value="1">service One</option>
                                                                <option value="2">service Two</option>
                                                                <option value="3">service Three</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <button type="submit" class="thm-btn get-insurance__btn" name="submit">Get a Quote
                                                        </button>
                                                </form>
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
        <!--Get Insurance End-->

        <!--Counter One Start-->
        <Section class="counter-one">
            <div class="counter-one-shape-1 float-bob-y">
                <img src="assets/images/shapes/counter-one-shape-1.png" alt="">
            </div>
            <div class="counter-one-shape-2 float-bob-y">
                <img src="assets/images/shapes/counter-one-shape-2.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <!--Counter One Single Start-->
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="counter-one__single">
                            <div class="counter-one__top">
                                <div class="counter-one__icon">
                                    <span class="icon-insurance-1"></span>
                                </div>
                                <div class="counter-one__count-box">
                                    <div class="counter-one__count-box-inner">
                                        <h3 class="odometer" data-count="2.6">00</h3>
                                        <span class="counter-one__plus">k</span>
                                    </div>
                                </div>
                            </div>
                            <p class="counter-one__text">Gave insurances</p>
                        </div>
                    </div>
                    <!--Counter One Single End-->
                    <!--Counter One Single Start-->
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="counter-one__single">
                            <div class="counter-one__top">
                                <div class="counter-one__icon">
                                    <span class="icon-group"></span>
                                </div>
                                <div class="counter-one__count-box">
                                    <div class="counter-one__count-box-inner">
                                        <h3 class="odometer" data-count="89">00</h3>
                                        <span class="counter-one__plus">+</span>
                                    </div>
                                </div>
                            </div>
                            <p class="counter-one__text">Professional team</p>
                        </div>
                    </div>
                    <!--Counter One Single End-->
                    <!--Counter One Single Start-->
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="counter-one__single">
                            <div class="counter-one__top">
                                <div class="counter-one__icon">
                                    <span class="icon-life-insurance"></span>
                                </div>
                                <div class="counter-one__count-box">
                                    <div class="counter-one__count-box-inner">
                                        <h3 class="odometer" data-count="2.8">00</h3>
                                        <span class="counter-one__plus">k</span>
                                    </div>
                                </div>
                            </div>
                            <p class="counter-one__text">Satisfied customers</p>
                        </div>
                    </div>
                    <!--Counter One Single End-->
                    <!--Counter One Single Start-->
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="counter-one__single">
                            <div class="counter-one__top">
                                <div class="counter-one__icon">
                                    <span class="icon-success"></span>
                                </div>
                                <div class="counter-one__count-box">
                                    <div class="counter-one__count-box-inner">
                                        <h3 class="odometer" data-count="99">00</h3>
                                        <span class="counter-one__plus">%</span>
                                    </div>
                                </div>
                            </div>
                            <p class="counter-one__text">Our success rate</p>
                        </div>
                    </div>
                    <!--Counter One Single End-->
                </div>
            </div>
        </Section>
        <!--Counter One End-->

        <!--Team One Start-->
        <section class="team-one">
            <div class="team-one__shape-1 float-bob-y">
                <img src="assets/images/shapes/team-one-shape-1.png" alt="">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-sub-title-box">
                        <p class="section-sub-title">Our experts</p>
                        <div class="section-title-shape-1">
                            <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                        </div>
                        <div class="section-title-shape-2">
                            <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                        </div>
                    </div>
                    <h2 class="section-title__title">Meet our experienced <br> team people</h2>
                </div>
                <div class="row">
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <div class="team-one__img-box">
                                    <img src="assets/images/team/team-1-1.jpg" alt="">
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Manager</p>
                                <h3 class="team-one__name"><a href="team-details.html">Vedant Naidu</a></h3>
                                <ul class="list-unstyled team-one__social-two">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <div class="team-one__img-box">
                                    <img src="assets/images/team/team-1-2.jpg" alt="">
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Manager</p>
                                <h3 class="team-one__name"><a href="team-details.html">Divyani Keshari</a></h3>
                                <ul class="list-unstyled team-one__social-two">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <div class="team-one__img-box">
                                    <img src="assets/images/team/team-1-3.jpg" alt="">
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Manager</p>
                                <h3 class="team-one__name"><a href="team-details.html">Aniket Nangare</a></h3>
                                <ul class="list-unstyled team-one__social-two">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="team-one__bottom">
                            <p class="team-one__bottom-text">Contact Our Expert Team Memeber To Take Our <span>Best
                                    Policies</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Team One End-->

        <!--Testimonial One Start-->
        <section class="testimonial-one">
            <div class="testimonial-one-shape-2 float-bob-y">
                <img src="assets/images/shapes/testimonial-one-shape-2.png" alt="">
            </div>
            <div class="testimonial-one-shape-3 float-bob-y">
                <img src="assets/images/shapes/testimonial-one-shape-3.png" alt="">
            </div>
            <div class="container">
                <div class="testimonial-one__top">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="testimonial-one__top-left">
                                <div class="section-title text-left">
                                    <div class="section-sub-title-box">
                                        <p class="section-sub-title">testimonials</p>
                                        <div class="section-title-shape-1">
                                            <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                                        </div>
                                        <div class="section-title-shape-2">
                                            <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                                        </div>
                                    </div>
                                    <h2 class="section-title__title">What our customers are <br> talking about</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="testimonial-one__top-right">
                                <p class="testimonial-one__top-text">Always helpful and always available. The folks at (IC) are my insurance people, for everything…cars, boats, houses and that makes my life easier. Peace of mind would be enough, but their bundled rates beat everyone else I’ve used before too. I Definitely recommend this family agency!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-one__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="owl-carousel owl-theme thm-owl__carousel testimonial-one__carousel"
                                data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 30,
                                "nav": false,
                                "dots": false,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 2
                                    },
                                    "992": {
                                        "items": 2
                                    },
                                    "1200": {
                                        "items": 2
                                    }
                                }
                            }'>
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__single-inner">
                                            <div class="testimonial-one__shape-1">
                                                <img src="assets/images/shapes/testimonial-one-shape-1.png" alt="">
                                            </div>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img-box">
                                                    <img src="assets/images/testimonial/testimonial-1-1.jpg" alt="">
                                                    <div class="testimonial-one__quote">
                                                        <img src="assets/images/testimonial/testimonial-1-quote.png"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="testimonial-one__client-content">
                                                    <div class="testimonial-one__client-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="testimonial-one__client-details">
                                                        <h3 class="testimonial-one__client-name">Sarvesh Bhosale</h3>
                                                        <p class="testimonial-one__client-sub-title">director</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="testimonial-one__text">Our goal is to epitomize the dedicated local independent insurance agency. We prioritize listening to our clients then educate and advise them on the best coverage options and provide the most competitive price in the insurance marketplace.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__single-inner">
                                            <div class="testimonial-one__shape-1">
                                                <img src="assets/images/shapes/testimonial-one-shape-1.png" alt="">
                                            </div>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img-box">
                                                    <img src="assets/images/testimonial/testimonial-1-2.jpg" alt="">
                                                    <div class="testimonial-one__quote">
                                                        <img src="assets/images/testimonial/testimonial-1-quote.png"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="testimonial-one__client-content">
                                                    <div class="testimonial-one__client-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="testimonial-one__client-details">
                                                        <h3 class="testimonial-one__client-name">Reema Varma</h3>
                                                        <p class="testimonial-one__client-sub-title">director</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="testimonial-one__text"> (the company) is committed to improving the quality of our community by insuring your life’s hard work. Setting a standard of excellence, our professional staff will help you understand your current and future risk exposures by building a lifelong relationship.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__single-inner">
                                            <div class="testimonial-one__shape-1">
                                                <img src="assets/images/shapes/testimonial-one-shape-1.png" alt="">
                                            </div>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img-box">
                                                    <img src="assets/images/testimonial/testimonial-1-3.jpg" alt="">
                                                    <div class="testimonial-one__quote">
                                                        <img src="assets/images/testimonial/testimonial-1-quote.png"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="testimonial-one__client-content">
                                                    <div class="testimonial-one__client-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="testimonial-one__client-details">
                                                        <h3 class="testimonial-one__client-name">Ruhani Shekh</h3>
                                                        <p class="testimonial-one__client-sub-title">director</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="testimonial-one__text">This agency does a fantastic job finding me the right coverage and insurance company at a very competitive price every time my insurance renews. Very happy with them as my agent  all of your information will be  secure and private!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__single-inner">
                                            <div class="testimonial-one__shape-1">
                                                <img src="assets/images/shapes/testimonial-one-shape-1.png" alt="">
                                            </div>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img-box">
                                                    <img src="assets/images/testimonial/testimonial-1-4.jpg" alt="">
                                                    <div class="testimonial-one__quote">
                                                        <img src="assets/images/testimonial/testimonial-1-quote.png"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="testimonial-one__client-content">
                                                    <div class="testimonial-one__client-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="testimonial-one__client-details">
                                                        <h3 class="testimonial-one__client-name">Snehal Ambvale</h3>
                                                        <p class="testimonial-one__client-sub-title">director</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="testimonial-one__text">Great local insurance company for personal and business related insurance. Get immediate insurance proof and easy payment options. Our mission is to help people manage the risks of everyday life, recover from the unexpected and realize their dreams.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial One End-->

        <!--News One Start-->
      
        <!--News One End-->

       

        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer-bg" style="background-image: url(assets/images/backgrounds/site-footer-bg.png);">
            </div>
            <div class="container">
                <div class="site-footer__top">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__logo">
                                    <a href="index.html"><img src="assets/images/resources/footer-logo.png" alt=""></a>
                                </div>
                                <div class="footer-widget__about-text-box">
                                    <p class="footer-widget__about-text">Caring You because your Life is important.</p>
                                </div>
                                <div class="site-footer__social">
                                    <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__contact clearfix">
                                <h3 class="footer-widget__title">Contact</h3>
                                <ul class="footer-widget__contact-list list-unstyled clearfix">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-email"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="mailto:needhelp@company.com">needhelp@company.com</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-pin"></span>
                                        </div>
                                        <div class="text">
                                            <p>30 Commercial Road Fratton, Australia</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="footer-widget__open-hour">
                                    <h3 class="footer-widget__open-hour-title">Open Hours</h3>
                                    <h3 class="footer-widget__open-hour-text">Mon – Sat: 8:00 am to 6:00 pm Sunday:
                                        Closed</h3>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__newsletter">
                                <h3 class="footer-widget__title">Newsletter</h3>
                                <p class="footer-widget__newsletter-text">Subscribe our newsletter to get our <br>
                                    latest update & news.</p>
                                <form class="footer-widget__newsletter-form">
                                    <div class="footer-widget__newsletter-input-box">
                                        <input type="email" placeholder="Email address" name="email">
                                        <button type="submit" class="footer-widget__newsletter-btn"><i
                                                class="far fa-paper-plane"></i></button>
                                    </div>
                                </form>
                                <div class="footer-widget__phone">
                                    <div class="footer-widget__phone-icon">
                                        <span class="icon-telephone"></span>
                                    </div>
                                    <div class="footer-widget__phone-text">
                                        <a href="tel:9200368090">+92 (003) 68-090</a>
                                        <p>Call to Our Experts</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-footer__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text">© All Copyright 2022 by <a href="#">Insur.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/resources/logo-2.png" width="143"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@insur.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/vegas/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>
    <script src="assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/circleType/jquery.lettering.min.js"></script>
    <script src="assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>



    <!-- template js -->
    <script src="assets/js/insur.js"></script>
</body>


<!-- Mirrored from layerdrops.com/insurhtml/main-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Jul 2022 09:08:03 GMT -->
</html>