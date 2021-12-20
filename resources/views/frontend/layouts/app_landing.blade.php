
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- SEO Meta description -->
    <meta name="description" content="@yield('meta_description', 'Laravel Boilerplate')">
    <meta name="author" content="@yield('meta_author', 'Sanjaya Senevirathne')">

    @yield('meta')

    <!--favicon icon-->
    <link rel="icon" href="{{url('liyamana_theme/assets/img/favicon.png')}}" type="image/png" sizes="16x16">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <!--title-->
    <title>@yield('title', app_name())</title>

    <!--build:css-->
    <link rel="stylesheet" href="{{url('liyamana_theme/assets/css/main.css')}}">
    <!-- endbuild -->
    <link rel="stylesheet" href="{{url('liyamana_theme/assets/css/custom.css')}}">
</head>

<body data-new-gr-c-s-check-loaded="14.1036.0" data-gr-ext-installed="">

<!--loader start-->
<div id="preloader" style="display: none;">
    <div class="loader1">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!--loader end-->
<!--header section start-->
<header id="header" class="header-main">
    <!--topbar start-->
    <div id="header-top-bar" class="gray-light-bg">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-7 col-lg-7">
                    <div class="topbar-text d-none d-md-block d-lg-block">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="tell:888-1234567"><span class="fas fa-phone mr-2"></span> 24x7q Technical Support 888-1234567</a>
                            </li>
                            <li class="list-inline-item"><a href="#"><span class="fas fa-comments mr-2"></span>Live Chat</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="topbar-text">
                        <ul class="list-inline text-right">
                            @auth
                                <li class="list-inline-item"><a href="{{route('frontend.auth.login')}}"><span class="fas fa-user mr-2"></span> {{auth()->user()->first_name}} {{auth()->user()->last_name}} </a></li>
                                <li class="list-inline-item"><a href="{{route('frontend.auth.logout')}}"><span class="fas fa-user mr-2"></span> Logout</a></li>
                            @else
                                <li class="list-inline-item"><a href="{{route('frontend.auth.login')}}"><span class="fas fa-user mr-2"></span> Login</a></li>
                                <li class="list-inline-item"><a href="{{route('frontend.auth.register')}}"><span class="fas fa-lock mr-2"></span> Register</a>
                            @endauth

                            </li>
                        </ul>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--topbar end-->

    <!--main header menu start-->
    <div id="logoAndNav" class="main-header-menu-wrap white-bg border-bottom" style="background: #700a02;
    color: white;
">
        <div class="container">

                <!--responsive toggle button end-->

                <!--main menu start-->
                @include('frontend.includes.nav_landing')
        </div>
    </div>
    <!--main header menu end-->
</header>
<!--header section end-->

@yield('content')


<!--footer section start-->
<footer class="footer-section">
    <!--footer top start-->
    <div class="footer-top gradient-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="row footer-top-wrap">
                        <div class="col-12">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">SECURED BY</h4>
                                <ul class="list-inline security-icon-list">
                                    <li class="list-inline-item"><img src="assets/img/mcafee-logo.png" width="110" alt="security" class="img-fluid"></li>
                                    <li class="list-inline-item"><img src="assets/img/norton-logo.png" width="110" alt="security" class="img-fluid"></li>
                                    <li class="list-inline-item"><img src="assets/img/accredited-logo.png" width="110" alt="security" class="img-fluid"></li>
                                    <li class="list-inline-item"><img src="assets/img/secured-logo.png" width="110" alt="security" class="img-fluid"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row footer-top-wrap">
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">PRODUCTS</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">WordPress Hosting</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Shared Hosting</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Virtual Private Servers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Dedicated Servers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Domain Names</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">COMPANY</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Affiliates</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Careers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Community</a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">LEGAL</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Legal Information</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Report Abuse</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Terms of Service</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">WHOIS Lookup</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">SUPPORT</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Knowledge Base</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Forums</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">System Status</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Support Team</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer top end-->

    <!--footer copyright start-->
    <div class="footer-bottom gray-light-bg py-3">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-5 col-lg-5">
                    <p class="copyright-text pb-0 mb-0">Copyrights © 2021. All
                        rights reserved by
                        <a href="https://themeforest.net/user/themetags" target="_blank">ThemeTags</a>
                    </p>
                </div>
                <div class="col-md-7 col-lg-6">
                    <div class="payment-method text-right">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer copyright end-->
</footer>
<!--footer section end-->

<!--bottom to top button start-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="ti-rocket"></span>
</button>
<!--bottom to top button end-->
<!--build:js-->
<script src="{{url('liyamana_theme/assets/js/vendors/jquery-3.5.1.min.js')}}"></script>
<script src="{{url('liyamana_theme/assets/js/vendors/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('liyamana_theme/assets/js/vendors/bootstrap-slider.min.js')}}"></script>
<script src="{{url('liyamana_theme/assets/js/vendors/jquery.countdown.min.js')}}"></script>
<script src="{{url('liyamana_theme/assets/js/vendors/jquery.easing.min.js')}}"></script>
<script src="{{url('liyamana_theme/assets/js/vendors/owl.carousel.min.js')}}"></script>
<script src="{{url('liyamana_theme/assets/js/vendors/validator.min.js')}}"></script>
<script src="{{url('liyamana_theme/assets/js/vendors/jquery.waypoints.min.js')}}"></script>
<script src="{{url('liyamana_theme/assets/js/vendors/jquery.rcounterup.js')}}"></script>
<script src="{{url('liyamana_theme/assets/js/vendors/magnific-popup.min.js')}}"></script>
<script src="{{url('liyamana_theme/assets/js/vendors/hs.megamenu.js')}}"></script>
<script src="{{url('liyamana_theme/assets/js/app.js')}}"></script>
<!--endbuild-->



</html>