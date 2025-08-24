<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Short pump cab Booking">
    <meta name="author" content="DynamicLayers">

    <title>Short pump cab - VA</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}img/favicon.png">

    <link rel="stylesheet" href="{{ asset('/') }}css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/line-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/keyframe-animation.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/venobox.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/swiper.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/elements.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/header.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/slider.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/blog.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/main.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/responsive.css">
</head>

<body>

    <div class="site-preloader">
        <div class="car">
            <div class="strike"></div>
            <div class="strike strike2"></div>
            <div class="strike strike3"></div>
            <div class="strike strike4"></div>
            <div class="strike strike5"></div>
            <div class="car-detail spoiler"></div>
            <div class="car-detail back"></div>
            <div class="car-detail center"></div>
            <div class="car-detail center1"></div>
            <div class="car-detail front"></div>
            <div class="car-detail wheel"></div>
            <div class="car-detail wheel wheel2"></div>
        </div>
    </div><!--/.site-preloader-->

    <header class="main-header">
        <div class="mid-header">
            <div class="container">
                <div class="mid-header-wrap">
                    <div class="site-logo">
                        <a href="index.html"><img src="{{ asset('/') }}img/logo-dark.png" alt="Logo"></a>
                    </div><!--/.site-logo-->
                    <ul class="header-info">
                        <li>
                            <div class="header-info-icon">
                                <i class="las la-phone-volume"></i>
                            </div>
                            <div class="header-info-text">
                                <h3><span>Call us now</span><a href="tel:5267214392">804-437-7254</a></h3>
                            </div>
                        </li>
                        <li>
                            <div class="header-info-icon">
                                <i class="las la-envelope-open"></i>
                            </div>
                            <div class="header-info-text">
                                <h3><span>Email now</span>Info.Short pump cab@mail.com</h3>
                            </div>
                        </li>
                        <li>
                            <div class="header-info-icon">
                                <i class="las la-map-marked-alt"></i>
                            </div>
                            <div class="header-info-text">
                                <h3><span>Halk Street</span>New York, USA - 2386</h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!--/.mid-header-->
        <div class="nav-menu-wrapper">
            <div class="container">
                <div class="nav-menu-inner">
                    <div class="site-logo">
                        <a href="index.html"><img src="{{ asset('/') }}img/logo-dark.png" alt="Logo"></a>
                    </div><!--/.site-logo-->
                    <div class="header-menu-wrap">
                        <ul class="nav-menu">
                            <li><a href={{ route('home') }}>Home</a></li>
                            <li><a href={{ route('quote') }}>Quote</a></li>
                            <li><a href={{ route('rates') }}>Rate</a></li>
                            <li><a href={{ route('locations') }}>Location</a></li>
                            <li><a href={{ route('services') }}>Services</a></li>
                            <li><a href={{ route('contact') }}>Contact</a></li>
                        </ul>
                    </div>
                    <div class="menu-right-item">
                        <div class="sidebox-icon dl-sidebox-icon">
                            <i class="las la-bars"></i>
                        </div>
                        @if (!Str::contains(Request::fullUrl(), 'booking'))
                            <a href={{ route('booking') }} class="menu-btn">Book a Taxi</a>
                        @endif
                    </div>
                    <div class="mobile-menu-icon">
                        <div class="burger-menu">
                            <div class="line-menu line-half first-line"></div>
                            <div class="line-menu"></div>
                            <div class="line-menu line-half last-line"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.nav-menu-->
    </header>
    <!--/.main-header-->

    <div id="popup-sidebox" class="popup-sidebox">
        <div class="sidebox-content">
            <div class="site-logo">
                <a href="index.html"><img src="{{ asset('/') }}img/logo-light.png" alt="logo"></a>
            </div>
            <p>Everything your taxi business needs is already here! Short pump cab, a theme
                made for taxi service companies.</p>
            <ul class="sidebox-list">
                <li class="call"><span>Call for ride:</span>804-437-7254</li>
                <li>
                    <span>You can find us at:</span>Halk Street New York, USA - 2386
                </li>
                <li><span>Email now:</span>Info.Short pump cab@mail.com</li>
            </ul>
        </div>
    </div>
    <!--/.popup-sidebox-->
    <div id="sidebox-overlay"></div>

    @yield('content')

    <footer class="footer-section">
        <div class="footer-top-wrap bg-grey">
            <div class="container">
                <div class="footer-top">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="brand">
                                <a class="footer-logo" href="index.html"><img src="{{ asset('/') }}img/logo-light.png" alt="logo"></a>
                                <p>We successfully cope with tasks of varying complexity, provide long-term guarantees
                                    and regularly master new technologies.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="footer-call">
                                <i class="las la-phone-volume"></i>
                                <p><span>Call For Taxi</span><a href="tel:5267214392">804-437-7254</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.footer-top-wrap-->
        <div class="footer-mid-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 sm-padding">
                        <div class="footer-item">
                            <div class="widget-title">
                                <h3>Working Hours</h3>
                            </div>
                            <ul class="footer-contact">
                                <li><span>Monday - Friday:</span>9.00am To 8.00pm</li>
                                <li><span>Saturday:</span>10.00am To 7.30pm</li>
                                <li><span>Sunday:</span>Close Day!</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 sm-padding">
                        <div class="footer-item footer-list">
                            <div class="widget-title">
                                <h3>Usefull Links</h3>
                            </div>
                            <ul class="footer-links">
                                <li><a href="book-taxi.html">Taxi Booking</a></li>
                                <li><a href="faqs.html">Help Center</a></li>
                                <li><a href="about-us.html">Privacy and Policy</a></li>
                                <li><a href="about-company.html">Terms of Use</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 sm-padding">
                        <div class="footer-item">
                            <div class="widget-title">
                                <h3>Head Office</h3>
                            </div>
                            <ul class="footer-contact">
                                <li><span>Location:</span>153 Williamson Plaza, Maggieberg, MT 09514</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="running-taxi">
                <div class="taxi"></div>
                <div class="taxi-2"></div>
                <div class="taxi-3"></div>
            </div>
        </div>
        <!--/.footer-mid-wrap-->
        <div class="copyright-wrap">
            <div class="container">
                <p>© <span id="currentYear"></span> All Rights Reserved.</p>
            </div>
        </div>
        <!--/.copyright-wrap-->
    </footer>
    <!--/.footer-section-->

    <div id="scrollup">
        <button id="scroll-top" class="scroll-to-top">
            <i class="las la-arrow-up"></i>
        </button>
    </div>
    <!--scrollup-->

    <div class="dl-cursor">
        <div class="cursor-icon-holder"><i class="las la-times"></i></div>
    </div>
    <!--/.dl-cursor-->

    <!--jQuery Lib-->
    <script src="{{ asset('/') }}js/vendor/jquary-3.6.0.min.js"></script>
    <script src="{{ asset('/') }}js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script src="{{ asset('/') }}js/vendor/jquery.ajaxchimp.min.js"></script>
    <script src="{{ asset('/') }}js/vendor/bootstrap.min.js"></script>
    <script src="{{ asset('/') }}js/vendor/popper.min.js"></script>
    <script src="{{ asset('/') }}js/vendor/swiper.min.js"></script>
    <script src="{{ asset('/') }}js/vendor/jquery.datetimepicker.full.js"></script>
    <script src="{{ asset('/') }}js/vendor/jquery.nice-select.min.js"></script>
    <script src="{{ asset('/') }}js/vendor/venobox.min.js"></script>
    <script src="{{ asset('/') }}js/vendor/smooth-scroll.js"></script>
    <script src="{{ asset('/') }}js/vendor/wow.min.js"></script>
    <script src="{{ asset('/') }}js/book-ride.js"></script>
    <script src="{{ asset('/') }}js/main.js"></script>
</body>

</html>
