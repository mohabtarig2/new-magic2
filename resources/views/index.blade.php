@include('header')
<meta name="csrf-token" content="{{ csrf_token() }}">
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
                <div class="main-header__top-social-box">
                    <div class="container">
                        <div class="main-header__top-social-box-inner">
                            <p class="main-header__top-social-text">{{__('message.Welcome_to_our_Magic_Hand_Services')}}</p>
                            <div class="main-header__top-social">
                                @php
                                if( app()->getLocale()=='en'){
                                 echo '<img src="https://cdn.cdnlogo.com/logos/f/67/flag-of-united-arab-emirates.svg" style="width: 20px; hieght: 20px;"> ';
                                }else{
 
                                 echo '<img src="https://flagicons.lipis.dev/flags/1x1/um.svg" style="width: 20px;hieght: 20px;"> ';
                                }
 
                                 @endphp
         
                                 <b>  <a href="{{__('message.langLink') }}" style="font-size:16px">{{__('message.lang')}} </a></b>       
                          



                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-header__top-details">
                    <div class="container">
                        <div class="main-header__top-details-inner">
                            <div class="main-header__logo">
                                <a href=""><img src="assets/images/resources/logo-1.png" alt=""></a>
                            </div>
                            <ul class="list-unstyled main-header__top-details-list">
                                <li>
                                    <div class="icon">
                                        <span class="icon-message"></span>
                                    </div>
                                    <div class="text">
                                        <h5><a href="mailto:info@magichand.ae">info@magichand.ae  </a></h5>
                                        <p>{{__('message.send_mail')}}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-time"></span>
                                    </div>
                                    <div class="text">
                                        <h5>{{__('message.Mon_to_Sat')}}</h5>
                                        <p>08am - 09pm</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-phone-call"></span>
                                    </div>
                                    <div class="text">
                                        <h5>{{__('message.Call_Anytime')}}</h5>
                                        <p><a href="tel:+971 50 160 1473">+971 50 160 1473</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-location"></span>
                                    </div>
                                    <div class="text">
                                        <h5>Name Road</h5>
                                        <p>{{__('message.Abu_Dabhi_UAE')}}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu clearfix">
                <div class="main-menu__wrapper clearfix">
                    <div class="container">
                        <div class="main-menu__wrapper-inner clearfix">
                            <div class="main-menu__left">
                                <div class="main-menu__main-menu-box">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list one-page-scroll-menu">
                                        <li class="dropdown current megamenu scrollToLink">
                                            <a href="#home">{{__('message.Home')}} </a>
                                  
                                        </li>
                                        <li class="scrollToLink">
                                            <a href="#about"> {{__('message.About')}}  </a>
                                        </li>
                                        <li class="scrollToLink">
                                            <a href="#services"> {{__('message.OurServices')}} </a>
                                        </li>
                                        <li class="scrollToLink">
                                            <a href="#team"> {{__('message.Offers')}}</a>
                                        </li>
                                        <li class="scrollToLink">
                                            <a href="#testimonial"> {{__('message.Testimonial')}}</a>
                                        </li>
                                        <li class="scrollToLink">
                                            <a href="#contact"> {{__('message.contact')}}</a>
                                        </li>
                                        {{-- <li class="scrollToLink">
                                            <a href="#blog">Blog</a>
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                            {{-- <div class="main-menu__right">
                                <div class="main-menu__search-box">
                                    <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </nav>
        </header>

  

        <!--Main Slider Start-->
        <section class="main-slider clearfix" id="home">
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

                        <div class="main-slider-bubble">
                            <div class="main-slider-bubble-bg"
                                style="background-image: url(assets/images/shapes/main-slider-bubble-bg.png);"></div>
                        </div>

                        <div class="main-slider-star-1 zoominout">
                            <img src="assets/images/shapes/main-slider-star-1.png" alt="">
                        </div>
                        <div class="main-slider-star-2 zoominout-2">
                            <img src="assets/images/shapes/main-slider-star-2.png" alt="">
                        </div>
                        <div class="main-slider-star-3 zoominout">
                            <img src="assets/images/shapes/main-slider-star-3.png" alt="">
                        </div>
                        


                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <p class="main-slider__sub-title">{{__('message.Welcome_to_our_Magic_Hand_Services')}}</p>
                                        <h2 class="main-slider__title">{{__('message.dys1')}}<br> {{__('message.dys2')}} <br> {{__('message.dys3')}}</h2>
                                        <div class="main-slider__btn-box">
                                            <a href="" class="thm-btn main-slider__btn">{{__('message.learn_more')}} 
                                                <i
                                                    class="bx bxl-whatsapp"></i>
                                                </a>
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

                        <div class="main-slider-bubble">
                            <div class="main-slider-bubble-bg"
                                style="background-image: url(assets/images/shapes/main-slider-bubble-bg.png);"></div>
                        </div>

                        <div class="main-slider-star-1 zoominout">
                            <img src="assets/images/shapes/main-slider-star-1.png" alt="">
                        </div>
                        <div class="main-slider-star-2 zoominout-2">
                            <img src="assets/images/shapes/main-slider-star-2.png" alt="">
                        </div>
                        <div class="main-slider-star-3 zoominout">
                            <img src="assets/images/shapes/main-slider-star-3.png" alt="">
                        </div>


                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <p class="main-slider__sub-title">{{__('message.Welcome_to_our_Magic_Hand_Services')}}</p>
                                        <h2 class="main-slider__title">{{__('message.decor1')}} <br> {{__('message.decor2')}} <br> {{__('message.decor3')}}</h2>
                                        <div class="main-slider__btn-box">
                                            <a href="" class="thm-btn main-slider__btn">{{__('message.learn_more')}}
                                                <i class='bx bxl-whatsapp'></i>
                                                </a>
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

                        <div class="main-slider-bubble">
                            <div class="main-slider-bubble-bg"
                                style="background-image: url(assets/images/shapes/main-slider-bubble-bg.png);"></div>
                        </div>

                        <div class="main-slider-star-1 zoominout">
                            <img src="assets/images/shapes/main-slider-star-1.png" alt="">
                        </div>
                        <div class="main-slider-star-2 zoominout-2">
                            <img src="assets/images/shapes/main-slider-star-2.png" alt="">
                        </div>
                        <div class="main-slider-star-3 zoominout">
                            <img src="assets/images/shapes/main-slider-star-3.png" alt="">
                        </div>


                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <p class="main-slider__sub-title">{{__('message.Welcome_to_our_Magic_Hand_Services')}}</p>
                                        <h2 class="main-slider__title">{{__('message.swimP')}}</h2>
                                        <div class="main-slider__btn-box">
                                            <a href="" class="thm-btn main-slider__btn">{{__('message.learn_more')}} <i
                                                    class="bx bxl-whatsapp"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/main-slider-1-4.jpg);"></div>
                        <!-- /.image-layer -->

                        <div class="main-slider-bubble">
                            <div class="main-slider-bubble-bg"
                                style="background-image: url(assets/images/shapes/main-slider-bubble-bg.png);"></div>
                        </div>

                        <div class="main-slider-star-1 zoominout">
                            <img src="assets/images/shapes/main-slider-star-1.png" alt="">
                        </div>
                        <div class="main-slider-star-2 zoominout-2">
                            <img src="assets/images/shapes/main-slider-star-2.png" alt="">
                        </div>
                        <div class="main-slider-star-3 zoominout">
                            <img src="assets/images/shapes/main-slider-star-3.png" alt="">
                        </div>


                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <p class="main-slider__sub-title">{{__('message.Welcome_to_our_Magic_Hand_Services')}}</p>
                                        <h2 class="main-slider__title">{{__('message.PaintP')}}</h2>
                                        <div class="main-slider__btn-box">
                                            <a href="" class="thm-btn main-slider__btn">{{__('message.learn_more')}} <i
                                                    class="bx bxl-whatsapp"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/main-slider-1-5.jpg);"></div>
                        <!-- /.image-layer -->

                        <div class="main-slider-bubble">
                            <div class="main-slider-bubble-bg"
                                style="background-image: url(assets/images/shapes/main-slider-bubble-bg.png);"></div>
                        </div>

                        <div class="main-slider-star-1 zoominout">
                            <img src="assets/images/shapes/main-slider-star-1.png" alt="">
                        </div>
                        <div class="main-slider-star-2 zoominout-2">
                            <img src="assets/images/shapes/main-slider-star-2.png" alt="">
                        </div>
                        <div class="main-slider-star-3 zoominout">
                            <img src="assets/images/shapes/main-slider-star-3.png" alt="">
                        </div>


                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <p class="main-slider__sub-title">{{__('message.Welcome_to_our_Magic_Hand_Services')}}</p>
                                        <h2 class="main-slider__title">{{__('message.safty1')}}</h2>
                                        <div class="main-slider__btn-box">
                                            <a href="a" class="thm-btn main-slider__btn">{{__('message.learn_more')}} <i
                                                    class="bx bxl-whatsapp"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/main-slider-1-6.jpg);"></div>
                        <!-- /.image-layer -->

                        <div class="main-slider-bubble">
                            <div class="main-slider-bubble-bg"
                                style="background-image: url(assets/images/shapes/main-slider-bubble-bg.png);"></div>
                        </div>

                        <div class="main-slider-star-1 zoominout">
                            <img src="assets/images/shapes/main-slider-star-1.png" alt="">
                        </div>
                        <div class="main-slider-star-2 zoominout-2">
                            <img src="assets/images/shapes/main-slider-star-2.png" alt="">
                        </div>
                        <div class="main-slider-star-3 zoominout">
                            <img src="assets/images/shapes/main-slider-star-3.png" alt="">
                        </div>


                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <p class="main-slider__sub-title">{{__('message.Welcome_to_our_Magic_Hand_Services')}}</p>
                                        <h2 class="main-slider__title">{{__('message.umber1')}} <br> {{__('message.umber2')}} <br> {{__('message.umber3')}}</h2>
                                        <div class="main-slider__btn-box">
                                            <a href="" class="thm-btn main-slider__btn">{{__('message.learn_more')}} <i
                                                    class="bx bxl-whatsapp"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/main-slider-1-7.jpg);"></div>
                        <!-- /.image-layer -->

                        <div class="main-slider-bubble">
                            <div class="main-slider-bubble-bg"
                                style="background-image: url(assets/images/shapes/main-slider-bubble-bg.png);"></div>
                        </div>

                        <div class="main-slider-star-1 zoominout">
                            <img src="assets/images/shapes/main-slider-star-1.png" alt="">
                        </div>
                        <div class="main-slider-star-2 zoominout-2">
                            <img src="assets/images/shapes/main-slider-star-2.png" alt="">
                        </div>
                        <div class="main-slider-star-3 zoominout">
                            <img src="assets/images/shapes/main-slider-star-3.png" alt="">
                        </div>


                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <p class="main-slider__sub-title">{{__('message.Welcome_to_our_Magic_Hand_Services')}}</p>
                                        <h2 class="main-slider__title">{{__('message.decor1')}} <br> {{__('message.decor2')}} <br> {{__('message.decor3')}}</h2>
                                        <div class="main-slider__btn-box">
                                            <a href="" class="thm-btn main-slider__btn">{{__('message.learn_more')}} <i
                                                    class="bx bxl-whatsapp"></i></a>
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
                        <i class="fa fa-angle-left"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="fa fa-angle-right"></i>
                    </div>
                </div>

            </div>
        </section>
        <!--Main Slider End-->

        <!--Feature One Start-->
        <section class="feature-one">
            <div class="container">
                <div class="row">
                    <!--Feature One single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-one__single">
                            <div class="feature-one-single-bg"
                                style="background-image: url(assets/images/backgrounds/feature-one-single-bg.jpg);">
                            </div>
                            <div class="feature-one__icon">
                                <img src="assets/images/icon/eye.png" alt="" width="60" height="60">
                                <div class="feature-one__icon-shape">
                                    <img src="assets/images/shapes/feature-one-icon-shape.png" alt="">
                                </div>
                            </div>
                            <div class="feature-one__title-box">
                                <div class="feature-one__title-border"></div>
                                <h3 class="feature-one__title"><a href="">{{__('message.Our_vission')}}</a></h3>
                            </div>
                            <p class="feature-one__text">{{__('message.visionP')}}</p>
                            {{-- <div class="feature-one__btn-box">
                                <a href="" class="feature-one__btn">View more</a>
                            </div> --}}
                        </div>
                    </div>
                    <!--Feature One single End-->
                    <!--Feature One single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="feature-one__single">
                            <div class="feature-one-single-bg"
                                style="background-image: url(assets/images/backgrounds/feature-one-single-bg.jpg);">
                            </div>
                            <div class="feature-one__icon">
                                <img src="assets/images/icon/envelope.png" alt="" width="60 " height="60">
                                <div class="feature-one__icon-shape">
                                    <img src="assets/images/shapes/feature-one-icon-shape.png" alt="">
                                </div>
                            </div>
                            <div class="feature-one__title-box">
                                <div class="feature-one__title-border"></div>
                                <h3 class="feature-one__title"><a href="">{{__('message.Our_message')}}</a></h3>
                            </div>
                            <p class="feature-one__text">{{__('message.goalsP')}}</p>
                            {{-- <div class="feature-one__btn-box">
                                <a href="" class="feature-one__btn">View more</a>
                            </div> --}}
                        </div>
                    </div>
                    <!--Feature One single End-->
                    <!--Feature One single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="feature-one__single">
                            <div class="feature-one-single-bg"
                                style="background-image: url(assets/images/backgrounds/feature-one-single-bg.jpg);">
                            </div>
                            <div class="feature-one__icon">
                                <img src="assets/images/icon/goal.png" alt="" width="60" height="60">
                                <div class="feature-one__icon-shape">
                                    <img src="assets/images/shapes/feature-one-icon-shape.png" alt="">
                                </div>
                            </div>
                            <div class="feature-one__title-box">
                                <div class="feature-one__title-border"></div>
                                <h3 class="feature-one__title"><a href="">{{__('message.Our_misson')}}</a></h3>
                            </div>
                            <p class="feature-one__text">{{__('message.MissionP')}}</p>
                            {{-- <div class="feature-one__btn-box">
                                <a href="" class="feature-one__btn">View more</a>
                            </div> --}}
                        </div>
                    </div>
                    <!--Feature One single End-->
                </div>
            </div>
        </section>
        <!--Feature One End-->

        <!--Welcome One Start-->
        <section class="welcome-one" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="welcome-one__left">
                            <div class="welcome-one__bg"
                                style="background-image: url(assets/images/backgrounds/welcome-one-bg.png);"></div>
                            <div class="welcome-one__main-box wow fadeInUp" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="welcome-one__circle-one"></div>
                                <div class="welcome-one__img-1">
                                    <img src="assets/images/resources/welcome-one-img-1.jpg" alt="">
                                    <div class="welcome-one__small-img-1 float-bob-x">
                                        <img src="assets/images/resources/welcome-one-small-img-1.jpg" alt="">
                                    </div>
                                    <div class="welcome-one__small-img-2 float-bob-y">
                                        <img src="assets/images/resources/welcome-one-small-img-2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="welcome-one__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">{{__('message.About')}}</span>
                                <h4 class="section-title__title">{{__('message.downloadLicense')}}</h4>
                            </div>
                            <p class="welcome-one__text-2">{{__('message.aboutP')}}</p>
                       
                            <div class="welcome-one__points-box">
                                <ul class="list-unstyled welcome-one__points">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-tick"></span>
                                        </div>
                                        <div class="text">
                                            <p>{{__('message.Quality')}}</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-tick"></span>
                                        </div>
                                        <div class="text">
                                            <p>{{__('message.Support')}}</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-unstyled welcome-one__points welcome-one__points-two">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-tick"></span>
                                        </div>
                                        <div class="text">
                                            <p>{{__('message.Customer')}}</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-tick"></span>
                                        </div>
                                        <div class="text">
                                            <p>{{__('message.Support')}}</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="welcome-one__btn-call-box">
                                <div class="welcome-one__btn-box">
                                    <a href="https://wa.me/+971501601473" class="thm-btn welcome-one__btn">
                                        {{__('message.contact')}} <i
                                            class="bx bxl-whatsapp"></i></a>
                                </div>
                                <div class="welcome-one__call-box">
                                    <div class="welcome-one__call-icon">
                                        <span class="icon-phone-call"></span>
                                    </div>
                                    <div class="welcome-one__call-content">
                                        <p class="welcome-one__call-sub-title">{{__('message.Call_Anytime')}}</p>
                                        <h5 class="welcome-one__call-number"><a href="tel:+971 50 160 1473">+971 50 160 1473</a></h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Welcome One End-->

        <!--Services One Start-->
        <section class="services-one" id="services">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">{{__('message.What_We’re_Offering')}}</span>
                    <h2 class="section-title__title">{{__('message.Providing the Best Services')}} <br> {{__('message.for Our Customers')}}</h2>
                </div>

                <div class="row">
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-one__single">
                            <div class="services-one__single-top-bubble"
                                style="background-image: url(assets/images/shapes/services-one-single-top-bubble.png);">
                            </div>
                            <div class="services-one__icon">
                                <span class='bx bxs-paint-roll'></span>
                            </div>
                            <div class="services-one__single-inner">
                                <div class="services-one__title-box">
                                    <h3 class="services-one__title"><a href="">{{__('message.Painting and decorating')}}</a></h3>
                                </div>
                                <div class="services-one__text-box">
                                    <p class="services-one__text text-center"> {{__('message.decor_services')}}</p>
                                        
                                </div>
                            </div>
                            <div class="services-one__overly-box"
                                style="background-image: url(assets/images/shapes/services-one-single-overlay-bg-1.png);">
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="services-one__single">
                            <div class="services-one__single-top-bubble"
                                style="background-image: url(assets/images/shapes/services-one-single-top-bubble.png);">
                            </div>
                            <div class="services-one__icon">
                                <span class="bx bxs-pyramid"></span>
                            </div>
                            <div class="services-one__single-inner">
                                <div class="services-one__title-box">
                                    <h3 class="services-one__title"><a href="">{{__('message.Councils and tents')}}</a>
                                    </h3>
                                </div>
                                <div class="services-one__text-box">
                                    <p class="services-one__text text-center">{{__('message.tents_services')}}</p>
                                </div>
                            </div>
                            <div class="services-one__overly-box"
                                style="background-image: url(assets/images/shapes/services-one-single-overlay-bg-1.png);">
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="services-one__single">
                            <div class="services-one__single-top-bubble"
                                style="background-image: url(assets/images/shapes/services-one-single-top-bubble.png);">
                            </div>
                            <div class="services-one__icon">
                                <span class="bx bxs-car-garage"></span>
                                
                            </div>
                            <div class="services-one__single-inner">
                                <div class="services-one__title-box">
                                    <h3 class="services-one__title"><a href="">{{__('message.Car umbrellas')}}</a>
                                    </h3>
                                </div>
                                <div class="services-one__text-box">
                                    <p class="services-one__text text-center">{{__('message.cars_services')}}.</p>
                                </div>
                            </div>
                            <div class="services-one__overly-box"
                                style="background-image: url(assets/images/shapes/services-one-single-overlay-bg-1.png);">
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="services-one__single">
                            <div class="services-one__single-top-bubble"
                                style="background-image: url(assets/images/shapes/services-one-single-top-bubble.png);">
                            </div>
                            <div class="services-one__icon">
                                <span class="fa fa-fan"></span>
                               
                            </div>
                            <div class="services-one__single-inner">
                                <div class="services-one__title-box">
                                    <h3 class="services-one__title"><a href="">{{__('message.maintenance')}}</a>
                                    </h3>
                                </div>
                                <div class="services-one__text-box">
                                    <p class="services-one__text text-center">{{__('message.aircond_services')}}.</p>
                                </div>
                            </div>
                            <div class="services-one__overly-box"
                                style="background-image: url(assets/images/shapes/services-one-single-overlay-bg-1.png);">
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="services-one__single">
                            <div class="services-one__single-top-bubble"
                                style="background-image: url(assets/images/shapes/services-one-single-top-bubble.png);">
                            </div>
                            <div class="services-one__icon">
                                <span class="bx bx-swim"></span>
                               
                            </div>
                            <div class="services-one__single-inner">
                                <div class="services-one__title-box">
                                    <h3 class="services-one__title"><a href="">{{__('message.swimingpool')}}</a>
                                    </h3>
                                </div>
                                <div class="services-one__text-box">
                                    <p class="services-one__text text-center">{{__('message.swiming_services')}}</p>
                                </div>
                            </div>
                            <div class="services-one__overly-box"
                                style="background-image: url(assets/images/shapes/services-one-single-overlay-bg-1.png);">
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="600ms">
                        <div class="services-one__single">
                            <div class="services-one__single-top-bubble"
                                style="background-image: url(assets/images/shapes/services-one-single-top-bubble.png);">
                            </div>
                            <div class="services-one__icon">
                                <span class="bx bx-landscape"></span>
                            </div>
                            <div class="services-one__single-inner">
                                <div class="services-one__title-box">
                                    <h3 class="services-one__title"><a href="">{{__('message.landscape')}}</a>
                                    </h3>
                                </div>
                                <div class="services-one__text-box">
                                    <p class="services-one__text text-center">
                                        {{__('message.lanscape_services')}}
                                        </p>
                                </div>
                            </div>
                            <div class="services-one__overly-box"
                                style="background-image: url(assets/images/shapes/services-one-single-overlay-bg-1.png);">
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                </div>

            </div>
        </section>
        <!--Services One End-->

        <!--Counter One Start-->
        <section class="counter-one">
            <div class="container">
                <div class="counter-one__inner wow fadeInUp" data-wow-delay="100ms">
                    <div class="counter-one-bg-1"
                        style="background-image: url(assets/images/backgrounds/counter-one-bg-1.png);"></div>
                    <div class="counter-one-bg-2"
                        style="background-image: url(assets/images/backgrounds/counter-one-bg-2.png);"></div>
                    <ul class="list-unstyled counter-one__list">
                        <li>
                            <div class="counter-one__icon">
                                <span class="icon-trophy"></span>
                            </div>
                            <div class="counter-one__count-box">
                                <div class="counter-one__count-box-inner">
                                    <h3 class="odometer" data-count="2562">00</h3>
                                    <span class="counter-one__plus">+</span>
                                </div>
                                <p class="counter-one__text">{{__('message.Satisfied_Clients')}}</p>
                            </div>
                        </li>
                        <li>
                            <div class="counter-one__icon">
                                <span class="icon-checked"></span>
                            </div>
                            <div class="counter-one__count-box">
                                <div class="counter-one__count-box-inner">
                                    <h3 class="odometer" data-count="562">00</h3>
                                    <span class="counter-one__plus">+</span>
                                </div>
                                <p class="counter-one__text">{{__('message.under_process_project')}}</p>
                            </div>
                        </li>
                        <li>
                            <div class="counter-one__icon">
                                <span class="icon-house-cleaning"></span>
                            </div>
                            <div class="counter-one__count-box">
                                <div class="counter-one__count-box-inner">
                                    <h3 class="odometer" data-count="33">00</h3>
                                    <span class="counter-one__plus">+</span>
                                </div>
                                <p class="counter-one__text">{{__('message.project')}}</p>
                            </div>
                        </li>
                        <li>
                            <div class="counter-one__icon">
                                <span class="icon-teamwork"></span>
                            </div>
                            <div class="counter-one__count-box">
                                <div class="counter-one__count-box-inner">
                                    <h3 class="odometer" data-count="552">00</h3>
                                    <span class="counter-one__plus">+</span>
                                </div>
                                <p class="counter-one__text">{{__('message.Expert_teams')}}</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Counter One End-->

        <!--Team One Start-->
        <section class="team-one" id="team">
            <div class="team-one__bubbles wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms"
                style="background-image: url(assets/images/shapes/team-one-bubbles.png);">
            </div>
            <div class="team-one__shape-bg" style="background-image: url(assets/images/shapes/team-one-shape-bg.png);">
            </div>
            <div class="team-one-start-1 zoominout"><img src="assets/images/shapes/team-one-star-1.png" alt=""></div>
            <div class="team-one-start-2 zoominout-2"><img src="assets/images/shapes/team-one-star-2.png" alt=""></div>
            <div class="team-one-start-3 zoominout"><img src="assets/images/shapes/team-one-star-3.png" alt=""></div>
            <div class="team-one-start-4 zoominout-2"><img src="assets/images/shapes/team-one-star-4.png" alt=""></div>
            <div class="team-one-start-5 zoominout"><img src="assets/images/shapes/team-one-star-5.png" alt=""></div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">{{__('message.offers')}}</span>
                    <h2 class="section-title__title">{{__('message.seeOffers')}}</h2>
                </div>
                <div class="row">
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="assets/images/team/team-1-1.jpg" alt="">
                         
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__title-box">
                                    <h3 class="team-one__name"><a href="">{{__('message.maintenance')}}</a></h3>
                                    <ul class="list-unstyled team-one__social-two">
                                        <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-one__sub-title-box">
                                    <p class="team-one__sub-title">50%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="assets/images/team/team-1-2.jpg" alt="">
                         
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__title-box">
                                    <h3 class="team-one__name"><a href="">{{__('message.installation')}}</a></h3>
                                    <ul class="list-unstyled team-one__social-two">
                                        <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-one__sub-title-box">
                                    <p class="team-one__sub-title">25%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="assets/images/team/team-1-3.jpg" alt="">
                          
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__title-box">
                                    <h3 class="team-one__name"><a href="">{{__('message.Painting and decorating')}}</a></h3>
                                    <ul class="list-unstyled team-one__social-two">
                                        <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-one__sub-title-box">
                                    <p class="team-one__sub-title">30%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="assets/images/team/team-1-4.jpg" alt="">
                          
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__title-box">
                                    <h3 class="team-one__name"><a href="">{{__('message.landscape')}}</a></h3>
                                    <ul class="list-unstyled team-one__social-two">
                                        <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-one__sub-title-box">
                                    <p class="team-one__sub-title">25 %</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                </div>
            </div>
        </section>
        <!--Team One End-->


        
        <!--Testimonial One Start-->
        <section class="testimonial-one" id="testimonial">
            <div class="testimonial-shape wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms"
                style="background-image: url(assets/images/shapes/testimonial-shape.png);">
            </div>
            <div class="container">
                <div class="section-title text-left">
                    <span class="section-title__tagline">What They’re Saying</span>
                    <h2 class="section-title__title">Some Feedbacks <br> from Our Customers</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testimonial-one__inner">
                            <div class="owl-carousel owl-theme thm-owl__carousel testimonial-one__carousel"
                                data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 30,
                                "nav": true,
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
                                <!--Testimonial One Single Start-->
                                <div class="testimonial-one__single">
                                    <p class="testimonial-one__text">Lorem ipsum dolor sit amet, consectetur elit sed,
                                        adipisicing do eiusmod tempor incididunt labore et dolore Lorem ipsum dolor
                                        consectetur adipisicing elit, sed do eiusmod</p>
                                    <div class="testimonial-one__client-details">
                                        <h3 class="testimonial-one__client-name">Kevin Martin</h3>
                                        <p class="testimonial-one__client-sub-title">Marketing Manager</p>
                                    </div>
                                    <div class="testimonial-one__client-img">
                                        <img src="assets/images/testimonial/testimonial-1-1.jpg" alt="">
                                        <div class="testimonial-one__client-img-boxs"></div>
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quote"></span>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                                <!--Testimonial One Single Start-->
                                <div class="testimonial-one__single">
                                    <p class="testimonial-one__text">Lorem ipsum dolor sit amet, consectetur elit sed,
                                        adipisicing do eiusmod tempor incididunt labore et dolore Lorem ipsum dolor
                                        consectetur adipisicing elit, sed do eiusmod</p>
                                    <div class="testimonial-one__client-details">
                                        <h3 class="testimonial-one__client-name">Jessica Brown</h3>
                                        <p class="testimonial-one__client-sub-title">Marketing Manager</p>
                                    </div>
                                    <div class="testimonial-one__client-img">
                                        <img src="assets/images/testimonial/testimonial-1-2.jpg" alt="">
                                        <div class="testimonial-one__client-img-boxs"></div>
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quote"></span>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                                <!--Testimonial One Single Start-->
                                <div class="testimonial-one__single">
                                    <p class="testimonial-one__text">Lorem ipsum dolor sit amet, consectetur elit sed,
                                        adipisicing do eiusmod tempor incididunt labore et dolore Lorem ipsum dolor
                                        consectetur adipisicing elit, sed do eiusmod</p>
                                    <div class="testimonial-one__client-details">
                                        <h3 class="testimonial-one__client-name">Kevin Martin</h3>
                                        <p class="testimonial-one__client-sub-title">Marketing Manager</p>
                                    </div>
                                    <div class="testimonial-one__client-img">
                                        <img src="assets/images/testimonial/testimonial-1-1.jpg" alt="">
                                        <div class="testimonial-one__client-img-boxs"></div>
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quote"></span>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                                <!--Testimonial One Single Start-->
                                <div class="testimonial-one__single">
                                    <p class="testimonial-one__text">Lorem ipsum dolor sit amet, consectetur elit sed,
                                        adipisicing do eiusmod tempor incididunt labore et dolore Lorem ipsum dolor
                                        consectetur adipisicing elit, sed do eiusmod</p>
                                    <div class="testimonial-one__client-details">
                                        <h3 class="testimonial-one__client-name">Jessica Brown</h3>
                                        <p class="testimonial-one__client-sub-title">Marketing Manager</p>
                                    </div>
                                    <div class="testimonial-one__client-img">
                                        <img src="assets/images/testimonial/testimonial-1-2.jpg" alt="">
                                        <div class="testimonial-one__client-img-boxs"></div>
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quote"></span>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                                <!--Testimonial One Single Start-->
                                <div class="testimonial-one__single">
                                    <p class="testimonial-one__text">Lorem ipsum dolor sit amet, consectetur elit sed,
                                        adipisicing do eiusmod tempor incididunt labore et dolore Lorem ipsum dolor
                                        consectetur adipisicing elit, sed do eiusmod</p>
                                    <div class="testimonial-one__client-details">
                                        <h3 class="testimonial-one__client-name">Kevin Martin</h3>
                                        <p class="testimonial-one__client-sub-title">Marketing Manager</p>
                                    </div>
                                    <div class="testimonial-one__client-img">
                                        <img src="assets/images/testimonial/testimonial-1-1.jpg" alt="">
                                        <div class="testimonial-one__client-img-boxs"></div>
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quote"></span>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                                <!--Testimonial One Single Start-->
                                <div class="testimonial-one__single">
                                    <p class="testimonial-one__text">Lorem ipsum dolor sit amet, consectetur elit sed,
                                        adipisicing do eiusmod tempor incididunt labore et dolore Lorem ipsum dolor
                                        consectetur adipisicing elit, sed do eiusmod</p>
                                    <div class="testimonial-one__client-details">
                                        <h3 class="testimonial-one__client-name">Jessica Brown</h3>
                                        <p class="testimonial-one__client-sub-title">Marketing Manager</p>
                                    </div>
                                    <div class="testimonial-one__client-img">
                                        <img src="assets/images/testimonial/testimonial-1-2.jpg" alt="">
                                        <div class="testimonial-one__client-img-boxs"></div>
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quote"></span>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial One End-->

        <!--Brand One Start-->
        {{-- <section class="brand-one">
            <div class="container">
                <div class="brand-one__inner">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="brand-one__main-content">
                                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                           "0": {
                               "spaceBetween": 30,
                               "slidesPerView": 2
                           },
                           "375": {
                               "spaceBetween": 30,
                               "slidesPerView": 2
                           },
                           "575": {
                               "spaceBetween": 30,
                               "slidesPerView": 3
                           },
                           "767": {
                               "spaceBetween": 50,
                               "slidesPerView": 4
                           },
                           "991": {
                               "spaceBetween": 50,
                               "slidesPerView": 5
                           },
                           "1199": {
                               "spaceBetween": 100,
                               "slidesPerView": 5
                           }
                       }}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-1.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-2.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-3.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-4.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-5.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-1.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-2.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-3.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-4.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-5.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--Brand One End-->
      <!--Process Start-->
      <section class="process mt-5">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">{{__('message.How_It_Works')}}</span>
                <h2 class="section-title__title">{{__('message.how_to_easy_works')}}</h2>
            </div>
            <div class="process__inner">
                <div class="process-line">
                    <img src="assets/images/shapes/process-line.png" alt="">
                </div>
                <div class="row">
                    <!--Process Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="process__single">
                            <div class="process__icon-box">
                                <div class="process__icon">
                                    <span class="icon-find-my-friend"></span>
                                    <div class="process-icon-shape"
                                        style="background-image: url(assets/images/shapes/process-icon-shape.png);">
                                    </div>
                                </div>
                                <div class="process__count"></div>
                            </div>
                            <div class="process__content">
                                <h4 class="process__title"><a href="">{{__('message.step1')}}</a></h4>
                                <p class="process__text">{{__('message.stepPh1')}}</p>
                            </div>
                        </div>
                    </div>
                    <!--Process Single End-->
                    <!--Process Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="process__single process__single-two">
                            <div class="process__icon-box">
                                <div class="process__icon">
                                    <span class="icon-choose"></span>
                                    <div class="process-icon-shape"
                                        style="background-image: url(assets/images/shapes/process-icon-shape.png);">
                                    </div>
                                </div>
                                <div class="process__count"></div>
                            </div>
                            <div class="process__content">
                                <h4 class="process__title"><a href="services-page-1.html">{{__('message.step2')}}</a></h4>
                                <p class="process__text">{{__('message.stepPh2')}}</p>
                            </div>
                        </div>
                    </div>
                    <!--Process Single End-->
                    <!--Process Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="process__single">
                            <div class="process__icon-box">
                                <div class="process__icon">
                                    <span class="icon-tick-mark"></span>
                                    <div class="process-icon-shape"
                                        style="background-image: url(assets/images/shapes/process-icon-shape.png);">
                                    </div>
                                </div>
                                <div class="process__count"></div>
                            </div>
                            <div class="process__content">
                                <h4 class="process__title"><a href="contact-page-1.html">{{__('message.step3')}}</a></h4>
                                <p class="process__text">{{__('message.stepPh3')}}</p>
                            </div>
                        </div>
                    </div>
                    <!--Process Single End-->
                </div>
            </div>
        </div>
    </section>

        <!--Contact One Start-->
        <section class="contact-one" id="contact">
            <div class="contact-one-shape-4 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                <img src="assets/images/shapes/contact-one-shape-4.png" alt="">
            </div>
            <div class="contact-one__container">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7">
                            <div class="contact-one__left">
                                <div class="section-title text-left">
                                    <span class="section-title__tagline">{{__('message.Get_a_Free_Estimate')}}</span>
                                    <h2 class="section-title__title">{{__('message.Contact_for_Services')}}</h2>
                                </div>
                                <form id="myForm" class="contact-one__form contact-form-validated"
                                    novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="contact-one__form-input-box">
                                                <input type="text" placeholder="{{__('message.FullName')}}" name="name" required>
                                                <span id="name_error"></span>
                                            </div>
                                           

                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="contact-one__form-input-box">
                                                <input type="email" placeholder="{{__('message.Email')}}" name="email" required>
                                                <span id="email_error"></span>
                                            </div>
                                            
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="contact-one__form-input-box">
                                                <input type="text" placeholder="{{__('message.Phone')}}" name="phone" required>
                                                <span id="phone_error"></span>
                                            </div>
                                            
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="contact-one__form-input-box">
                                                <select class="selectpicker" aria-label="Default select example" name="services" required>
                                                    <option value={{__('message.maintenance')}} selected>{{__('message.maintenance')}} </option>
                                                    <option value={{__('message.Car umbrellas')}} >{{__('message.Car umbrellas')}} </option>
                                                    <option value={{__('message.landscape')}} >{{__('message.landscape')}} </option>
                                                    <option value={{__('message.swimingpool')}} >{{__('message.swimingpool')}} </option>
                                                    <option value={{__('message.Painting and decorating')}} >{{__('message.Painting and decorating')}} </option>
                                                    <option value={{__('message.Councils and tents')}} >{{__('message.Councils and tents')}} </option>
                                                   

                                                    
                                                </select>
                                                <span id="services_error"></span>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="contact-one__form-input-box text-message-box">
                                                <textarea name="message"   placeholder="{{__('message.writeMessage')}}" required></textarea>
                                                {{-- <span id="message_error" ></span> --}}
                                            </div>
                                          
                                    
                                        

                                            <div class="contact-one__btn-box">
                                                <button type="submit" class="thm-btn contact-one__btn" id="ajaxSubmit">
                                                    <span id="span"></span> {{__('message.send')}} <i
                                                        class="fa fa-angle-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5">
                            <div class="contact-one__right">
                                <div class="contact-one-shape-1"></div>
                                <div class="contact-one-shape-2"></div>
                                <div class="contact-one-shape-3"></div>
                                <div class="contact-one__img">
                                    <img src="assets/images/resources/contact-one-img-1.jpg" alt="">
                                </div>
                                <div class="contact-one__call">
                                    <div class="contact-one__call-icon">
                                        <span class="icon-phone-call"></span>
                                    </div>
                                    <div class="contact-one__call-content">
                                        <p class="contact-one__call-sub-title">{{__('message.Call_Anytime')}}</p>
                                        <h5 class="contact-one__call-number"><a href="tel:+971 50 160 1473">+971 50 160 1473</a></h5>

                                              
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <!--Contact One End-->

        <!--Blog One Start-->
        {{-- <section class="blog-one" id="blog">
            <div class="blog-one-shape" style="background-image: url(assets/images/shapes/blog-one-shape.png);"></div>
            <div class="container">
                <div class="section-title text-left">
                    <span class="section-title__tagline">Latest News & Articles</span>
                    <h2 class="section-title__title">Learn More from Our <br> Blog Posts</h2>
                </div>
                <div class="owl-carousel owl-theme thm-owl__carousel blog-one__carousel" data-owl-options='{
                    "loop": true,
                    "autoplay": true,
                    "margin": 30,
                    "nav": true,
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
                            "items": 3
                        },
                        "1200": {
                            "items": 3
                        }
                    }
                }'>
                    <!--Blog One Single Start-->
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="assets/images/blog/blog-1-1.jpg" alt="">
                            <a href="">
                                <span class="blog-one__plus"></span>
                            </a>
                            <div class="blog-one__date">
                                <p>25 <br> <span>Mar</span></p>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="list-unstyled blog-one__meta">
                                <li><a href=""><i class="far fa-user-circle"></i> by Admin </a>
                                </li>
                                <li><a href=""><i class="far fa-comments"></i> 02 Comments</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="">Simple servicestips you can use
                                    everyday</a></h3>
                            <div class="blog-one__btn-box">
                                <a href="">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="blog-one__tag">
                                <p>Plumber</p>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="assets/images/blog/blog-1-2.jpg" alt="">
                            <a href="">
                                <span class="blog-one__plus"></span>
                            </a>
                            <div class="blog-one__date">
                                <p>25 <br> <span>Mar</span></p>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="list-unstyled blog-one__meta">
                                <li><a href=""><i class="far fa-user-circle"></i> by Admin </a>
                                </li>
                                <li><a href=""><i class="far fa-comments"></i> 02 Comments</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="">Make your home cleaner than it's
                                    ever been</a></h3>
                            <div class="blog-one__btn-box">
                                <a href="">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="blog-one__tag">
                                <p>Kitchen</p>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="assets/images/blog/blog-1-3.jpg" alt="">
                            <a href="">
                                <span class="blog-one__plus"></span>
                            </a>
                            <div class="blog-one__date">
                                <p>25 <br> <span>Mar</span></p>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="list-unstyled blog-one__meta">
                                <li><a href=""><i class="far fa-user-circle"></i> by Admin </a>
                                </li>
                                <li><a href=""><i class="far fa-comments"></i> 02 Comments</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="">My secret to serviceseast &
                                    effectively!</a></h3>
                            <div class="blog-one__btn-box">
                                <a href="">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="blog-one__tag">
                                <p>Kitchen</p>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="assets/images/blog/blog-1-1.jpg" alt="">
                            <a href="">
                                <span class="blog-one__plus"></span>
                            </a>
                            <div class="blog-one__date">
                                <p>25 <br> <span>Mar</span></p>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="list-unstyled blog-one__meta">
                                <li><a href=""><i class="far fa-user-circle"></i> by Admin </a>
                                </li>
                                <li><a href=""><i class="far fa-comments"></i> 02 Comments</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="">Simple servicestips you can use
                                    everyday</a></h3>
                            <div class="blog-one__btn-box">
                                <a href="">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="blog-one__tag">
                                <p>Plumber</p>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="assets/images/blog/blog-1-2.jpg" alt="">
                            <a href="">
                                <span class="blog-one__plus"></span>
                            </a>
                            <div class="blog-one__date">
                                <p>25 <br> <span>Mar</span></p>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="list-unstyled blog-one__meta">
                                <li><a href=""><i class="far fa-user-circle"></i> by Admin </a>
                                </li>
                                <li><a href=""><i class="far fa-comments"></i> 02 Comments</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="">Make your home cleaner than it's
                                    ever been</a></h3>
                            <div class="blog-one__btn-box">
                                <a href="">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="blog-one__tag">
                                <p>Kitchen</p>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="assets/images/blog/blog-1-3.jpg" alt="">
                            <a href="">
                                <span class="blog-one__plus"></span>
                            </a>
                            <div class="blog-one__date">
                                <p>25 <br> <span>Mar</span></p>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="list-unstyled blog-one__meta">
                                <li><a href=""><i class="far fa-user-circle"></i> by Admin </a>
                                </li>
                                <li><a href=""><i class="far fa-comments"></i> 02 Comments</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="">My secret to serviceseast &
                                    effectively!</a></h3>
                            <div class="blog-one__btn-box">
                                <a href="">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="blog-one__tag">
                                <p>Kitchen</p>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                </div>
            </div>
        </section> --}} 
        <!--Blog One End-->

        <!--Google Map Start-->
        <section class="google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d232565.83038806362!2d54.55862045!3d24.386830550000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e440f723ef2b9%3A0xc7cc2e9341971108!2sAbu%20Dhabi!5e0!3m2!1sen!2sae!4v1683631648726!5m2!1sen!2sae"
                class="google-map__one" allowfullscreen></iframe>

        </section>
        <!--Google Map End-->

        <!--Information Start-->
        <section class="information">
            <div class="container">
                <div class="information__inner">
                    <div class="information__logo-box">
                        <div class="information__border-1"></div>
                        <div class="information__border-2"></div>
                        <a href=""><img src="assets/images/resources/information-logo.png" alt=""></a>
                    </div>
                    <ul class="list-unstyled information__list">
                        <li>
                            <div class="information__icon">
                                <span class="icon-phone"></span>
                            </div>
                            <div class="information__content">
                                <p class="information__sub-title">{{__('message.Call_Anytime')}}</p>
                                <h5 class="information__number">
                                    <a href="tel:+971 50 160 1473">+971 50 160 1473</a>
                                </h5>
                            </div>
                        </li>
                        <li>
                            <div class="information__icon">
                                <span class="icon-envelope"></span>
                            </div>
                            <div class="information__content">
                                <p class="information__sub-title">{{__('message.contact')}}</p>
                                <h5 class="information__number">
                                    <a href="mailto:info@magichand.ae">info@magichand.ae</a>
                                </h5>
                            </div>
                        </li>
                        <li>
                            <div class="information__icon">
                                <span class="icon-location-1"></span>
                            </div>
                            <div class="information__content">
                                <p class="information__sub-title">Visit office</p>
                                <h5 class="information__number"> <p>{{__('message.Abu_Dabhi_UAE')}}</p> </h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Information End-->

        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer-shape-1"
                style="background-image: url(assets/images/shapes/site-footer-shape-1.png);">
            </div>
            <div class="site-footer-shape-two">
                <img src="assets/images/shapes/site-footer-shape-2.png" alt="">
            </div>
            <div class="site-footer__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <h3 class="footer-widget__title">{{__('message.magic_hand')}}</h3>
                                <div class="footer-widget__about-text-box">
                                    <p class="footer-widget__about-text">{{__('message.aboutP')}}</p>
                                </div>
                                <div class="site-footer__social">
                           
                                    <a href="https://www.instagram.com/magichand160/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__links clearfix">
                                <h3 class="footer-widget__title">{{__('message.Links')}}</h3>
                                <ul class="footer-widget__links-list list-unstyled clearfix">
                                    <li class=" scrollToLink">
                                        <a href="#home">{{__('message.Home')}} </a>
                              
                                    </li>
                                    <li class="scrollToLink">
                                        <a href="#about"> {{__('message.About')}}  </a>
                                    </li>
                                    <li class="scrollToLink">
                                        <a href="#services"> {{__('message.OurServices')}} </a>
                                    </li>
                                    <li class="scrollToLink">
                                        <a href="#team"> {{__('message.Offers')}}</a>
                                    </li>
                                    <li class="scrollToLink">
                                        <a href="#testimonial"> {{__('message.Testimonial')}}</a>
                                    </li>
                                    <li class="scrollToLink">
                                        <a href="#contact"> {{__('message.contact')}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                   
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__newsletter">
                                <h3 class="footer-widget__title">{{__('message.license')}}</h3>
                                <div class="services-two__img-box">
                                    <div class="services-two__img">
                                        <img src="assets/images/li.jpg" alt="">
                                    </div>
                                    <div class="services-two__icon">
                                        
                                        <span class="bx bx-paperclip"></span>
                                    </div>
                                </div>
                                    <div class="services-two__content">
                             <p class="services-two__text">
                                {{__('message.downloadLicense')}}
                             </p>
                                            <a href="assets/file/li.pdf" target="_blanl" class="services-two__btn">
                                                {{__('message.download')}}
                                               
                                                </a>
                           
                                    </div>
                                   
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text">© Copyright  {{ now()->year }}  by <a href="#">MagicHand.ae</a>
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
                <a href="" aria-label="logo image"><img src="assets/images/resources/logo-1.png" width="89"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">info@MagicHand.ae</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:+971 50 160 1473"> +971 50 160 1473</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    @php
                    if( app()->getLocale()=='en'){
                     echo '<img src="https://cdn.cdnlogo.com/logos/f/67/flag-of-united-arab-emirates.svg" style="width: 20px; hieght: 20px;"> ';
                    }else{

                     echo '<img src="https://flagicons.lipis.dev/flags/1x1/um.svg" style="width: 20px;hieght: 20px;"> ';
                    }

                     @endphp

                     <b>  <a href="{{__('message.langLink') }}" style="font-size:16px">{{__('message.lang')}} </a></b>       
              



                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>


    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>



</body>


    </html>
@include('footer')
<script type="text/javascript">
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $("#ajaxSubmit").click(function(e){
    e.preventDefault();
    $('#ajaxSubmit').prop("disabled", true)
    $("#span").append('<div class="spinner-border text-light" role="status"><span class="sr-only">Loading...</span></div>');
    var name = $("input[name=name]").val();
    var email = $("input[name=email]").val();
    var message = $("textarea[name=message]").val();
    var services = $("select[name=services]").val();
    var phone = $("input[name=phone]").val();
    $.ajax({
    type:'POST',
    url:"{{ route('send-email') }}",
    data:{message:message, services:services, email:email, services:services,phone:phone,name:name},
    success:function(data){

        
    // alert(data.success);
   

    
            $("#span").remove();

                    if($.isEmptyObject(data.error)){
                     
    $("#message").append(data.success).addClass('alert alert-success');
    $('#ajaxSubmit').prop("disabled", false)
    

                    }

                  

   

 
    
    
    
    },
    error: function (err) {
     
      
        $.each(err.responseJSON.errors, function (key, value) {
            
            console.log("#" + key + '_error'+'.'+ value[0]);
            var errors = $.parseJSON(err.responseText);
                   

            // $("#message").append(err.responseJSON.errors).addClass('alert alert-danger');
            $("#span").remove();


            if( err.status === 422 ) {

            
                    
                        $("#" + key + "_error").text(value[0]).addClass('alert alert-danger');
                        $('#ajaxSubmit').prop("disabled", false)
                   
                }
       
            });

    
    },
    });
    });
    </script>