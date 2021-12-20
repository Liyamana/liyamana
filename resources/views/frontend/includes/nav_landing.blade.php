<nav class="js-mega-menu navbar navbar-expand-md header-nav hs-menu-initialized hs-menu-horizontal">

    <!--logo start-->
    <a class="navbar-brand" href="http://localhost:8000" style="">
        <img style="width: 160px;filter: invert(1);" src="http://localhost:8000/liyamana_theme/assets/img/liyamana_logo.png" width="120" alt="logo" class="img-fluid"></a>
    <!--logo end-->

    <!--responsive toggle button start-->
    <button type="button" class="navbar-toggler btn" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
                        <span id="hamburgerTrigger">
                          <span class="fas fa-bars"></span>
                        </span>
    </button>
<div id="navBar" class="collapse navbar-collapse">
    <ul class="navbar-nav ml-auto main-navbar-nav">
        <li class="nav-item hs-has-mega-menu custom-nav-item" data-position="left">
            <a id="homeMegaMenu" class="nav-link custom-nav-link" href="{{url('/')}}" aria-haspopup="true" aria-expanded="false">
                Home
            </a>

        </li>


        <!--home start-->
        <li class="nav-item hs-has-mega-menu custom-nav-item" data-position="left">
            <a id="homeMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false">Explorer</a>

            <!--home mega menu start-->
            <div class="hs-mega-menu w-100 main-sub-menu animated hs-position-left" aria-labelledby="homeMegaMenu" style="display: none;background: #aa1104;">
                <div class="row no-gutters">
                    <div class="col-lg-5">
                        <!-- Banner Image -->
                        <div class="menu-banner-wrap d-none d-md-none d-lg-block gray-light-bg" style="background: #700a02;">
                            <div class="menu-banner-content">
                                <div class="mb-4">
                                    <h5 class="mb-3 h6">Explorer</h5>
                                    <ul class="list-unstyled tech-feature-list">
                                        <li class="py-1"><span class="ti-control-forward mr-2"></span>Greetings Mails</li>
                                        <li class="py-1"><span class="ti-control-forward mr-2"></span><strong>Unmetered</strong> Bandwidth</li>
                                        <li class="py-1"><span class="ti-control-forward mr-2"></span><strong>Unmetered</strong> Sub Domains, FTP Accounts</li>
                                        <li class="py-1"><span class="ti-control-forward mr-2"></span><strong>99%</strong> Uptime Guarantee</li>
                                        <li class="py-1"><span class="ti-control-forward mr-2"></span><strong>45-Day</strong> Money-Back Guarantee</li>
                                    </ul>
                                </div>
                                <a class="btn primary-solid-btn" href="#">Learn More <span class="fas fa-angle-right ml-2"></span></a>
                            </div>
                        </div>
                        <!-- End Banner Image -->
                    </div>

                    <div class="col-lg-7">
                        <div class="row mega-menu-wrap">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <span class="sub-menu-title">Letters Type</span>
                                <ul class="sub-menu-nav-group">
                                    <li><a class="nav-link sub-menu-nav-link" href="{{route('frontend.explorer.template',['category_slug','search_keyword','type'])}}">Greetings Letters</a></li>
                                    <li><a class="nav-link sub-menu-nav-link" href="index-image.html">Romantic</a></li>
                                    <li><a class="nav-link sub-menu-nav-link" href="index-domain-search.html">New Year Wishes</a></li>
                                    <li><a class="nav-link sub-menu-nav-link" href="index-domain-search-2.html">Halloween Cards</a>
                                    </li>
                                    <li><a class="nav-link sub-menu-nav-link" href="index-bg-image.html">Invitation Letters</a>
                                    </li>
                                    <li><a class="nav-link sub-menu-nav-link" href="index-bg-video.html">Professional Letters</a></li>

                                </ul>
                            </div>

                            <div class="col-md-6">
                                <ul class="sub-menu-nav-group mb-3">
                                    <li><a class="nav-link sub-menu-nav-link" href="index-offer.html">Send Annual Bill</a></li>
                                    <li><a class="nav-link sub-menu-nav-link" href="index-slider.html">HR Management Letters</a>
                                    </li>
                                    <li><a class="nav-link sub-menu-nav-link" href="index-content-slider.html">Wedding Invitations</a></li>
                                    <li><a class="nav-link sub-menu-nav-link" href="index-reseller-hosting.html">Wesak Cards</a></li>
                                    <li><a class="nav-link sub-menu-nav-link" href="index-reseller-hosting.html">Post Card</a></li>
                                    <li><a class="nav-link sub-menu-nav-link" href="index-reseller-hosting.html">Calibration Letters</a></li>
                                </ul>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--home mega menu end-->
        </li>
        <!--home end-->

        <li class="nav-item hs-has-mega-menu custom-nav-item" data-position="left">
            <a id="homeMegaMenu" class="nav-link custom-nav-link" href="" aria-haspopup="true" aria-expanded="false">
                About Us
            </a>

        </li>

        <li class="nav-item hs-has-mega-menu custom-nav-item" data-position="left">
            <a id="homeMegaMenu" class="nav-link custom-nav-link" href="" aria-haspopup="true" aria-expanded="false">
                Contact Us
            </a>

        </li>


        @auth
    <!--button start-->
        <li class="nav-item header-nav-last-item d-flex align-items-center">
            <a class="btn primary-solid-btn animated-btn" href="{{route('frontend.user.dashboard')}}">
               Dashboard
            </a>
        </li>

        <li class="nav-item hs-has-mega-menu custom-nav-item" data-max-width="360px" data-position="right">
            <a id="supportMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">
                MyBox
            </a>
            <!--support submenu start-->
            <div class="hs-mega-menu main-sub-menu" aria-labelledby="supportMegaMenu" style="min-width: 330px;">

                <!--menu title with subtitle and icon item start-->
                <div class="title-with-icon-item">
                    <a class="title-with-icon-link" href="submit-request.html">
                        <div class="media align-items-center">
                            <img class="menu-titile-icon" src="{{url('liyamana_theme/assets/img/poem.png')}}" alt="SVG">
                            <div class="media-body">
                                <span class="u-header__promo-title"> Content Template </span>
                                <small class="u-header__promo-text"> LKR 10.00
                                </small>
                            </div>
                        </div>
                    </a>
                </div>
                <!--menu title with subtitle and icon item end-->

                <!--menu title with subtitle and icon item start-->
                <div class="title-with-icon-item">
                    <a class="title-with-icon-link" href="{{url('liyamana_theme/assets/img/envelope.png')}}">
                        <div class="media align-items-center">
                            <img class="menu-titile-icon" src="{{url('liyamana_theme/assets/img/envelope.png')}}" alt="SVG">
                            <div class="media-body">
                                <span class="u-header__promo-title">Mail Envelope Customize</span>
                                <small class="u-header__promo-text">LKR 100.00</small>
                            </div>
                        </div>
                    </a>
                </div>
                <!--menu title with subtitle and icon item end-->
                <!--menu title with subtitle and icon item start-->
                <div class="title-with-icon-item">
                    <a class="title-with-icon-link" href="network.html">
                        <div class="media align-items-center">
                            <img class="menu-titile-icon" src="{{url('liyamana_theme/assets/img/validation.png')}}" alt="SVG">
                            <div class="media-body">
                                <span class="u-header__promo-title">Stamp</span>
                                <small class="u-header__promo-text">LKR 50.00</small>
                            </div>
                        </div>
                    </a>
                </div>
                <!--menu title with subtitle and icon item end-->
                <!--menu title with subtitle and icon item start-->

                <!--menu title with subtitle and icon item end-->

                <!--submenu footer start-->
                <div class="u-header__promo-footer">
                    <!-- List -->
                    <div class="row no-gutters">
                        <div class="col-6">
                            <div class="u-header__promo-footer-item">
                                <small class="text-muted d-block">Check what's new</small>
                                <a class="small" href="#">
                                    Changelog
                                </a>
                            </div>
                        </div>
                        <div class="col-6 u-header__promo-footer-ver-divider">
                            <div class="u-header__promo-footer-item">
                                <small class="text-muted d-block">Have a question?</small>
                                <a class="small" href="contact-us.html">
                                    Contact us
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End List -->
                </div>
                <!--submenu footer end-->
            </div>
            <!--support submenu end-->
        </li>
        <!--support end-->
        <!--button end-->
        @elseauth
    <!--button start-->
        <li class="nav-item header-nav-last-item d-flex align-items-center">
            <a class="btn primary-solid-btn animated-btn" href="#" target="_blank">
                Get Started
            </a>
        </li>
        <!--button end-->
        @endauth




    </ul>
</div>
<!--main menu end-->
</nav>