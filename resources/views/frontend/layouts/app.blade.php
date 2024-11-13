<!DOCTYPE html>
<html lang="{{ Config::get('app.locale') }}">  
    <head>
        <!-- meta tag -->
        <meta charset="utf-8">

        <!-- SEO -->
        {!! SEO::generate() !!}

        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/assets/images/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/assets/images/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/assets/images/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('frontend/assets/images/favicon/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ asset('frontend/assets/images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#907761">
        
        <!-- estils personalitzats -->
        @yield('styles')

        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/font-awesome.min.css') }}">
        <!-- flaticon css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/fonts/flaticon.css') }}">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/animate.css') }}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/owl.carousel.css') }}">
        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/slick.css') }}">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/off-canvas.css') }}">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/rsmenu-main.css') }}">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/rs-spacing.css') }}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/style.css') }}"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/responsive.css') }}">

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-LBH33J42QY"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-LBH33J42QY');
        </script>

    </head>
    <body class="defult-home">
        
        <!--Preloader area start here-->
        <div id="loader" class="loader">
            <div class="loader-container"></div>
        </div>
        <!--Preloader area End here--> 
     
		<!-- Main content Start -->
        <div class="main-content">
            
            <!--Full width header Start-->
            <div class="full-width-header">
                <!--Header Start-->
                <header id="rs-header" class="rs-header style2">
                    <!-- Topbar Area Start -->
                    <div class="topbar-area style2">
                        <div class="container">
                                <div class="row y-middle">
                                    <div class="col-lg-8">
                                        <ul class="topbar-contact">
                                                <li>
                                                    <i class="flaticon-email"></i>
                                                    <a href="mailto:a8074641@xtec.cat">a8074641@xtec.cat</a>
                                                </li>
                                                <li>
                                                    <i class="flaticon-call"></i>
                                                    <a href="tel:937826644"> 937 826 644</a>
                                                </li>
                                                <li>
                                                    <i class="flaticon-location"></i>
                                                    C/ Berenguer de Palou, nº 64
                                                </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 text-right">
                                        <div class="toolbar-sl-share">
                                            <ul>
                                                <li class="opening"> <em><i class="flaticon-clock"></i> 09:00 - 16:30</em> </li>
                                                <li><a href="https://www.solarcat.cat/escola/login">Accés àrea privada</a></li>
                                                <li><a href="https://t.me/+DIPiEYdBxuQ3MzNk" target="_blank"><i class="fa fa-telegram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <!-- Topbar Area End -->
                    <!-- Menu Start -->
                    <div class="menu-area menu-sticky">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-3">
                                    <div class="logo-part">
                                        <a href="{{ route('frontend.home.index') }}">
                                            <img src="{{ asset('frontend/assets/images/logo-dark.png') }}" alt="Escola Els 30 Passos">
                                        </a>
                                    </div>
                                    <div class="mobile-menu">
                                        <a href="#" class="rs-menu-toggle rs-menu-toggle-close secondary">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-9 text-right">                                    
                                    <div class="rs-menu-area">
                                        <div class="main-menu">
                                            <nav class="rs-menu pr-100 lg-pr-50 md-pr-0">
                                                <ul class="nav-menu">
                                                    <li class="menu-item-has-children">
                                                        <a href="javascript:void(0);">Escola</a>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="{{ route('frontend.equip.index') }}">L'equip humà</a> 
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('frontend.histories.index') }}">Història</a> 
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('frontend.escolaFamilies.index') }}">Escola familia</a> 
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="javascript:void(0);">Serveis educatius</a>
                                                        <ul class="sub-menu">
                                                            @foreach ($serveisEducatius as $serveiEducatiu)
                                                                <li>
                                                                    <a href="{{ route('frontend.serveisEducatius.index', ['servei' => $serveiEducatiu->slug]) }}">
                                                                        {{ $serveiEducatiu->titol }}
                                                                    </a> 
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('frontend.consellEscolar.index') }}">Consell escolar</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('frontend.documentsCentre.index') }}">Documents del centre</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://afescola30passos.com/" target="_blank">l'AF</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('frontend.contacte.index') }}">Contacte</a>
                                                    </li>
                                                    <li class="show-mobile">
                                                        <a href="https://www.solarcat.cat/escola/login">Accés àrea privada</a>
                                                    </li>
                                                </ul> <!-- //.nav-menu -->
                                            </nav>                                        
                                        </div> <!-- //.main-menu -->                              
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu End --> 
                </header>
                <!--Header End-->
            </div>

            @yield('content')

            {!! EuCookieConsent::getPopup() !!}
     
        <!-- Footer Start -->
        <footer id="rs-footer" class="rs-footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                            <div class="footer-logo mb-30">
                                <a href="{{ route('frontend.home.index') }}">
                                    <img src="{{ asset('frontend/assets/images/logo-dark.png') }}" alt="Escola Els 30 Passos">
                                </a>
                            </div>
                            <div class="textwidget pb-30">
                                <p>L'Escola té el ferm propòsit de consolidar un projecte educatiu de centre fet i pensat pels i amb els infants.</p>
                            </div>
                            <ul class="footer-social md-mb-30">  
                                <li> 
                                    <a href="https://t.me/+DIPiEYdBxuQ3MzNk" target="_blank"><span><i class="fa fa-telegram"></i></span></a> 
                                </li>                                       
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 pl-45 md-pl-15 md-mb-30">
                            <h3 class="widget-title">Menú</h3>
                            <ul class="site-map">
                                <li><a href="{{ route('frontend.equip.index') }}">Escola</a></li>
                                <li><a href="{{ route('frontend.menus.index') }}">Serveis educatius</a></li>
                                <li><a href="{{ route('frontend.consellEscolar.index') }}">Consell escolar</a></li>
                                <li><a href="{{ route('frontend.documentsCentre.index') }}">Documents del centre</a></li>
                                <li><a href="https://afescola30passos.com/" target="_blank">l'AF</a></li>
                                <li><a href="{{ route('frontend.contacte.index') }}">Contacte</a></li>
                                <li><a href="https://www.solarcat.cat/escola/login">Accés àrea privada</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 md-mb-30">
                            <h3 class="widget-title">Contacte</h3>
                            <ul class="address-widget">
                                <li>
                                    <i class="flaticon-location"></i>
                                    <div class="desc">C/ de Berenguer de Palou, 64, Sant Andreu, 08027 Barcelona</div>
                                </li>
                                <li>
                                    <i class="flaticon-call"></i>
                                    <div class="desc">
                                        <a href="tel:+34937826644">937 82 66 44</a>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-email"></i>
                                    <div class="desc">
                                        <a href="mailto:a8074641@xtec.cat">a8074641@xtec.cat</a>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-clock-1"></i>
                                    <div class="desc">
                                        Horaris: 09:00 - 16:30  
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-telegram"></i>
                                    <div class="desc">
                                        <a href="https://t.me/+DIPiEYdBxuQ3MzNk" target="_blank">
                                            Telegram
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            {{-- <h3 class="widget-title">Newsletter</h3>
                            <p class="widget-desc">We denounce with righteous and in and dislike men who are so beguiled and demo realized.</p>
                            <p>
                                <input type="email" name="EMAIL" placeholder="Your email address" required="">
                                <em class="paper-plane"><input type="submit" value="Sign up"></em>
                                <i class="flaticon-send"></i>
                            </p> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">                    
                    <div class="row y-middle">
                        <div class="col-lg-6 text-right md-mb-10 order-last">
                            <ul class="copy-right-menu">
                                <li><a href="#">Avís legal</a></li>
                                <li><a href="#">Política de privacitat</a></li>
                                <li><a href="{{ route('frontend.legal.politica-cookies.index') }}">Política de cookies</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="copyright">
                                <p>Disseny web <a href="https://www.webmastervic.com/" target="_blank">Webmastervic</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp" class="orange-color">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->

        <!-- modernizr js -->
        <script src="{{ asset('frontend/assets/js/modernizr-2.8.3.min.js') }}"></script>
        <!-- jquery latest version -->
        <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
        <!-- Menu js -->
        <script src="{{ asset('frontend/assets/js/rsmenu-main.js') }}"></script> 
        <!-- op nav js -->
        <script src="{{ asset('frontend/assets/js/jquery.nav.js') }}"></script>
        <!-- owl.carousel js -->
        <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
        <!-- wow js -->
        <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
        <!-- Skill bar js -->
        <script src="{{ asset('frontend/assets/js/skill.bars.jquery.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script> 
         <!-- counter top js -->
        <script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
        <!-- swiper js -->
        <script src="{{ asset('frontend/assets/js/swiper.min.js') }}"></script>   
        <!-- particles js -->
        <script src="{{ asset('frontend/assets/js/particles.min.js') }}"></script>  
        <!-- magnific popup js -->
        <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>      
        <!-- plugins js -->
        <script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
        <!-- pointer js -->
        <script src="{{ asset('frontend/assets/js/pointer.js') }}"></script>
        <!-- contact form js -->
        <script src="{{ asset('frontend/assets/js/contact.form.js') }}"></script>
        <!-- main js -->
        <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

        <script>
            $(document).ready(function() {
                $(this).removeClass('rs-menu-toggle-open').addClass('rs-menu-toggle-close');
                $('.rs-menu').animate({height:'0px'},{queue:false, duration:300}).addClass('rs-menu-close');
            });
        </script>

        @yield('scripts')

    </body>
</html>