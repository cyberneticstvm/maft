<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/assets/images/favicon.png') }}">
    <title>Manarat Al Falah Trading LLC - Premium Lifting & Safety Equipments Supplier</title>

    <!-- fontawesome css -->
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins/fontawesome-5.css') }}">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins/metismenu.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins/hover-revel.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins/timepickers.min.css') }}">
    <link href="{{ asset('/assets/css/mystickyelement.css') }}" rel="stylesheet">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('/assets/css/vendor/bootstrap.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
</head>

<body class="index-twelve">
    <!-- Whatsapp -->
    <div class="mystickyelements-fixed mystickyelements-position-right mystickyelements-position-screen-center mystickyelements-position-mobile-right mystickyelements-on-hover mystickyelements-size-medium mystickyelements-mobile-size-medium mystickyelements-templates-default">
        <div class="mystickyelement-lists-wrap">
            <ul class="mystickyelements-lists mystickyno-minimize">
                <li id="mystickyelements-social-whatsapp" class="mystickyelements-social-icon-li mystickyelements-social-whatsapp  element-desktop-on element-mobile-on">
                    <span class="mystickyelements-social-icon social-whatsapp social-custom" style="background: #FF3E3E">
                        <a href="https://api.whatsapp.com/send?phone=971501003687&text=Hello!%20I%20am%20interested%20in%20your products" target="_blank" rel="noopener"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                    </span>
                    <span class="mystickyelements-social-text " style="background: #FF3E3E">
                        <a href="https://api.whatsapp.com/send?phone=971501003687&text=Hello!%20I%20am%20interested%20in%20your products" target="_blank" rel="noopener">WhatsApp</a>
                    </span>
                </li>
            </ul>
        </div>
    </div>
    <!-- End Whatsapp -->
    <!-- rts header area twelve -->
    <div class="header-area-twelve header--sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-mid-one-wrapper">
                        <div class="logo-area">
                            <a href="{{ route('index') }}">
                                <img src="{{ asset('/assets/images/logo/maft-logo-final.webp') }}" alt="maft logo">
                            </a>
                        </div>
                        <div class="header-right">
                            <div class="single-component info-con">
                                <div class="icon">
                                    <i class="fal fa-mobile"></i>
                                </div>
                                <div class="info">
                                    <span>Call Us</span>
                                    <a href="tel:+97165791070">+971 6 579 1070</a>
                                </div>
                            </div>
                            <!-- sinle map area -->
                            <div class="single-component info-con">
                                <div class="icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <span>Our Location</span>
                                    <a href="#">Sharjah, UAE</a>
                                </div>
                            </div>
                            <!-- sinle map area -->
                            <!-- sinle map area -->
                            <div class="single-component info-con">
                                <div class="icon">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="info">
                                    <span>Send Us Mail</span>
                                    <a href="mailto:sales@maft.ae">sales@maft.ae</a>
                                </div>
                            </div>
                            <!-- sinle map area -->
                            <!-- sinle map area -->
                            <div class="single-component">
                                <a href="{{ route('contact') }}" class="rts-btn btn-primary">Send Message
                                </a>
                                <div class="menu-area d-block d-lg-none" id="menu-btn">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none">
                                            <rect width="18" height="2" fill="#0C0A0A"></rect>
                                            <rect y="7" width="18" height="2" fill="#0C0A0A"></rect>
                                            <rect y="14" width="18" height="2" fill="#0C0A0A"></rect>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <!-- sinle map area -->
                        </div>
                    </div>
                    <div class="header-botton-12">
                        <!-- nav area start -->
                        <div class="main-nav-desk nav-area">
                            @include("nav")
                        </div>
                        <!-- nav-area end -->
                        <!--<div class="icon-area">
                            <div class="search" id="search">
                                <i class="fa-regular fa-magnifying-glass"></i>
                            </div>
                            <div class="cart cart-icon">
                                <i class="fa-regular fa-cart-shopping"></i>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts header area twelve end-->
    @yield("content")
    <!-- Footer two -->
    <!-- rts footer area start -->
    <div class="rts-footer-two rts-section-gap2Top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- ,main footer area start -->
                    <div class="main-footer-wrapper-two">
                        <div class="single-footer-wized-two logo-area" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                            <a href="{{ route('index') }}" class="logo">
                                <img src="{{ asset('/assets/images/logo/maft-logo-footer.webp') }}" alt="maft-logo">
                            </a>
                            <p class="disc-f">
                                We are ISO 9001:2015 Certified specialized supplier of top-notch lifting and safety equipments, catering to a wide range of industries including Marine, Oil & Gas, Off-shore, Construction, Piling & Foundation, Crane, and Engineering.
                            </p>
                            <div class="rts-social-wrapper-three">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-footer-wized-two pages" data-sal="slide-up" data-sal-delay="250" data-sal-duration="800">
                            <div class="footer-header-two pages">
                                <h6 class="title">Useful Links</h6>
                                <div class="pages">
                                    <ul>
                                        <li><a href="{{ route('index') }}"><i class="fa-solid fa-arrow-right"></i> About Us</a></li>
                                        <li><a href="{{ route('index') }}"><i class="fa-solid fa-arrow-right"></i> Our Projects</a></li>
                                        <li><a href="{{ route('index') }}"><i class="fa-solid fa-arrow-right"></i>Our Services</a></li>
                                        <li><a href="{{ route('index') }}"><i class="fa-solid fa-arrow-right"></i> Our Team</a></li>
                                        <li><a href="{{ route('contact') }}"><i class="fa-solid fa-arrow-right"></i> Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="iso">
                                <img src="{{ asset('/assets/images/1.png') }}" alt="iso" />
                            </div>
                        </div>
                        <div class="single-footer-wized-two user-number" data-sal="slide-up" data-sal-delay="350" data-sal-duration="800">
                            <div class="user-number-wrapper mt--10">
                                <!-- single number -->
                                <div class="single-number">
                                    <h6 class="title">Phone Number</h6>
                                    <div class="number">
                                        <i class="fa-solid fa-phone"></i>
                                        <a href="tel:+97165791070">+971 6 579 1070</a>
                                    </div>
                                </div>
                                <!-- single number end -->
                                <!-- single number -->
                                <div class="single-number">
                                    <h6 class="title">Email address</h6>
                                    <div class="number">
                                        <i class="fa-light fa-envelope"></i>
                                        <a href="mailto:sales@maft.ae">sales@maft.ae</a>
                                    </div>
                                </div>
                                <!-- single number end -->
                                <!-- single number -->
                                <div class="single-number">
                                    <h6 class="title">Office Location</h6>
                                    <div class="number">
                                        <i class="fa-light fa-location-dot"></i>
                                        <a class="mt-dec" href="#">Industrial Area 1, Sharjah, UAE</a>
                                    </div>
                                </div>
                                <!-- single number end -->
                            </div>
                        </div>
                        <div class="single-footer-wized-two newsletter" data-sal="slide-up" data-sal-delay="550" data-sal-duration="800">
                            <div class="footer-header-two newsletter">
                                <h6 class="title">Newsletter</h6>
                                <p class="letters">
                                    Subscribe our Newsletter
                                </p>
                                <form class="subscribe-2-footer">
                                    <input type="email" required placeholder="Email Address">
                                    <button class="rts-btn btn-primary">Subscribe Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- ,main footer area end -->
                </div>
            </div>
        </div>

        <!-- copy right area start -->
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-footer-two">
                            <p class="disc">
                                © {{ date('Y') }} Manarat Al Falah Trading LLC. All rights reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright area end -->
    </div>
    <!-- rts footer area end -->
    <!-- Footer two End -->

    <!-- header style two -->
    <!-- progress area start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
    <!-- progress area end -->

    <div id="anywhere-home" class=""></div>

    <!-- pre loader start -->
    <div id="elevate-load">
        <div class="loader-wrapper">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- pre loader end -->


    <!-- jquery js -->
    <script src="{{ asset('/assets/js/plugins/jquery.min.js') }}"></script>
    <!-- jquery ui -->
    <script src="{{ asset('/assets/js/vendor/jqueryui.js') }}"></script>
    <!-- counter up -->
    <script src="{{ asset('/assets/js/plugins/counter-up.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/swiper.js') }}"></script>
    <!-- twinmax -->
    <script src="{{ asset('/assets/js/vendor/twinmax.js') }}"></script>
    <!-- split text js -->
    <script src="{{ asset('/assets/js/vendor/split-text.js') }}"></script>
    <!-- text plugins -->
    <script src="{{ asset('/assets/js/plugins/text-plugins.js') }}"></script>
    <!-- metismenu js -->
    <script src="{{ asset('/assets/js/plugins/metismenu.js') }}"></script>
    <!-- waypoint js -->
    <script src="{{ asset('/assets/js/vendor/waypoint.js') }}"></script>
    <!-- waw -->
    <script src="{{ asset('/assets/js/vendor/waw.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('/assets/js/vendor/magnific-popup.js') }}"></script>
    <!-- aos js -->
    <script src="{{ asset('/assets/js/plugins/aos.js') }}"></script>
    <!-- jquery ui js -->
    <script src="{{ asset('/assets/js/plugins/jquery-ui.js') }}"></script>
    <!-- timepickers -->
    <script src="{{ asset('/assets/js/plugins/jquery-timepicker.js') }}"></script>
    <!-- sal animation -->
    <script src="{{ asset('/assets/js/vendor/sal.min.js') }}"></script>
    <!-- bootstrap JS -->
    <script src="{{ asset('/assets/js/plugins/bootstrap.min.js') }}"></script>
    <!-- easing JS -->
    <script src="{{ asset('/assets/js/plugins/jquery-slideNav.js') }}"></script>
    <!-- easing JS -->
    <script src="{{ asset('/assets/js/plugins/hover-revel.js') }}"></script>
    <!-- contact form js -->
    <script src="{{ asset('/assets/js/plugins/contact-form.js') }}"></script>

    <script src="{{ asset('/assets/js/mystickyelement.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('/assets/js/main.js') }}"></script>
    <!-- swip image -->
    <script src="{{ asset('/assets/js/plugins/swip-img.js') }}"></script>
    <script src="{{ asset('/assets/js/script.js') }}"></script>

    @include("message")
</body>

</html>