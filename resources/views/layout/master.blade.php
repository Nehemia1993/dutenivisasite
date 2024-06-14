<!doctype html>
<html lang="zxx">


<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Duteni Visa</title>

    <link rel="shortcut icon" href="assets/img/favicon-1.png" type="images/x-icon"/>

    <!-- css include -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/main.css">


</head>

<body>

<!-- backtotop - start -->
<div class="xb-backtotop">
    <a href="#" class="scroll">
        <i class="far fa-arrow-up"></i>
    </a>
</div>
<!-- backtotop - end -->

<!-- preloader start -->
<div id="xb-loadding">
    <div class="loader">
        <div class="plane">
            <img class="plane-img" src="assets/img/icon/plane.gif" alt="">
        </div>
        <div class="earth-wrapper">
            <div class="earth"></div>
        </div>
    </div>
</div>
<!-- preloader end -->

<div class="body_wrap">

    <!-- header start -->
    <header class="site-header header-style-one">
        
        <div class="header__wrap stricky">
            <div class="container">
                <div class="header__inner ul_li_between">
                    <div class="header__logo">
                        <a href="index.html"><img src="assets/img/logo/logo-5.png" alt=""></a>
                    </div>
                    <div class="main-menu__wrap ul_li navbar navbar-expand-lg">
                        <nav class="main-menu collapse navbar-collapse">
                            <ul>
                                <li class="{{ (request()->segment(1) == '') ? 'active' : '' }}"><a href="/"><span>Home</span></a></li>
                                <li class="{{ (request()->segment(1) == 'about') ? 'active' : '' }}"><a href="/about"><span>About us</span></a></li>
                                <li class="{{ (request()->segment(1) == 'contact') ? 'active' : '' }}"><a href="/contact"><span>Contact us</span></a></li>
                                <li class="menu-item-has-children {{ (request()->segment(1) == 'services') ? 'active' : '' }}">
                                    <a href="/services"><span>Services</span></a>
                                    <ul class="submenu">
                                        <li class="{{ (request()->segment(2) == 'visa-processing') ? 'active' : '' }}"><a href="/services/visa-processing"><span>VISA processing and application</span></a></li>
                                        <li class="{{ (request()->segment(2) == 'immigration-services') ? 'active' : '' }}"><a href="/services/immigration-services"><span>Immigration services</span></a></li>
                                        <li class="{{ (request()->segment(2) == 'appointments-booking') ? 'active' : '' }}"><a href="/services/appointments-booking"><span>Hotels and Flights appointments bookings</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="xb-hamburger-menu">
                        <div class="xb-nav-mobile">
                            <div class="xb-nav-mobile-button"><i class="fal fa-bars"></i></div>
                        </div>
                    </div>
                    <ul class="header__action ul_li">
                        <li>
                            <a class="header__search header-search-btn" href="javascript:void(0);">
                                <img src="assets/img/icon/search.svg" alt="">Search
                            </a>
                        </li>
                        <li>
                            <div class="header__language">
                                <ul>
                                    <li><a href="#!" class="lang-btn">
                                        <div class="flag"><img src="assets/img/icon/us_flag.png" alt=""></div>
                                        English
                                        <div class="arrow_down"><img src="assets/img/icon/arrow_down.svg" alt=""></div>
                                    </a>
                                        <ul class="lang_sub_list">
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">Arabic</a></li>
                                            <li><a href="#">Bangla</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
    </header>
    <!-- header end -->


    @yield('content')


     <!-- footer start -->
     <footer class="site-footer gray-bg pt-65">
        <div class="container">
            <div class="row mt-none-30 pb-60">
                <div class="col-lg-3 mt-30 col-md-6 footer__custom-col">
                    <div class="footer__widget">
                        <h3 class="widget-title">Do you have questions or went more information? Contact us now</h3>
                        <ul class="footer__cta list-unstyled mt-50">
                            <li class="ul_li"><span><img src="assets/img/icon/f_call.svg" alt=""></span>+255 765 826 765
                            </li>
                            <li class="ul_li"><span><img src="assets/img/icon/f_mail.svg" alt=""></span>hello@dutenivisa.com
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 mt-30 col-md-6 footer__custom-col">
                    <div class="footer__widget">
                        <h3 class="widget-title">Useful Link</h3>
                        <ul class="footer__links list-unstyled">
                            <li><a href="#!"><span><svg xmlns="http://www.dutenitours.com/2000/svg" width="13" height="13"
                                                        viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                          fill="#B1B4BA"/>
                                    </svg></span>www.dutenitours.com</a></li>
                            <li><a href="/about"><span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                          fill="#B1B4BA"/>
                                    </svg></span>www.duteni.com</a></li>
                            <li><a href="#!"><span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                          fill="#B1B4BA"/>
                                    </svg></span>VIP Transportation services</a></li>
                            <li><a href="#!"><span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                          fill="#B1B4BA"/>
                                    </svg></span>Car hire & rental</a></li>
                            <li><a href="#!"><span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                          fill="#B1B4BA"/>
                                    </svg></span>Personal development training</a></li>
                                    </svg></span>Translation & Transcribing</a></li>
                                    </svg></span>Terms & Condition of services</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 mt-30 col-md-6 footer__custom-col">
                    <div class="footer__widget">
                        <h3 class="widget-title">Services</h3>
                        <ul class="footer__links list-unstyled">
                            <li><a href="#!"><span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                          fill="#B1B4BA"/>
                                    </svg></span>Tourist Visa</a></li>
                            <li><a href="#!"><span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                          fill="#B1B4BA"/>
                                    </svg></span>Commercial Visa</a></li>
                            <li><a href="#!"><span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                          fill="#B1B4BA"/>
                                    </svg></span>Student Visa</a></li>
                            <li><a href="#!"><span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                          fill="#B1B4BA"/>
                                    </svg></span>Residence Visa</a></li>
                            <li><a href="#!"><span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                          fill="#B1B4BA"/>
                                    </svg></span>Working Visa</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 mt-30 col-md-6 footer__custom-col">
                    <div class="footer__widget">
                        <h3 class="widget-title">Our branches</h3>
                        <ul class="footer__links list-unstyled">
                            <li><a href="#!"><span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                          fill="#B1B4BA"/>
                                    </svg></span>Canada</a></li>
                            <li><a href="#!"><span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                          fill="#B1B4BA"/>
                                    </svg></span>Coimbatore</a></li>
                            <li><a href="#!"><span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                          fill="#B1B4BA"/>
                                    </svg></span>Tirunelveli</a></li>
                            <li><a href="#!"><span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                          fill="#B1B4BA"/>
                                    </svg></span>Germany</a></li>
                            <li><a href="#!"><span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 0C6.72067 3.49437 9.5056 6.27934 13 6.5C9.5056 6.72067 6.72067 9.5056 6.5 13C6.27934 9.5056 3.49437 6.72067 0 6.5C3.49437 6.27934 6.27934 3.49437 6.5 0Z"
                                          fill="#B1B4BA"/>
                                    </svg></span>Chennai</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__copyright ul_li_between">
                <div class="footer__copyright-text mt-15">
                    Copyright © 2023 e.visa All rights reserved.
                </div>
                <div class="footer__copyright-img mt-20">
                    <img src="assets/img/icon/card_img.png" alt="">
                </div>
            </div>
        </div>
    </footer>
    <!-- footer start -->

</div>

<!-- jquery include -->
<script src="assets/js/jquery-3.7.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/parallax-scroll.js"></script>
<script src="assets/js/main.js"></script>

</body>


<!-- Mirrored from html.xpressbuddy.com/e.visa/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Apr 2024 18:27:30 GMT -->
</html>


