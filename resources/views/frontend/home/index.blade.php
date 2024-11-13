@extends('frontend.layouts.app')

@section('content')

    <!-- Slider Section Start -->
    <div class="rs-slider style1">
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
            
            @if ($slider1->url) <a href="{{ $slider1->url }}" target="_blank"> @endif
                <div class="slider-content slide1" style="background-image: url('{{ asset("/storage/$slider1->imatge") }}')">
                    <div class="container">
                        <div class="content-part text-center">
                            <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms"></div>
                            <h1 class="sl-title mb-mb-10 wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">
                                @if ($slider1->text) {{ $slider1->text }} @else &nbsp; @endif
                            </h1>
                            <div class="sl-desc wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms"></div>
                        </div>
                    </div>
                </div>
            @if ($slider1->url) </a> @endif
            
            @if ($slider2->url) <a href="{{ $slider2->url }}" target="_blank"> @endif
                <div class="slider-content slide2" style="background-image: url('{{ asset("/storage/$slider2->imatge") }}')">
                    <div class="container">
                        <div class="content-part text-center">
                            <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms"></div>
                            <h1 class="sl-title mb-mb-10 wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">
                                @if ($slider2->text) {{ $slider2->text }} @else &nbsp; @endif
                            </h1>
                            <div class="sl-desc wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms"></div>
                        </div>
                    </div>
                </div>
            @if ($slider2->url) </a> @endif

            @if ($slider3->url) <a href="{{ $slider3->url }}" target="_blank"> @endif
                <div class="slider-content slide3" style="background-image: url('{{ asset("/storage/$slider3->imatge") }}')">
                    <div class="container">
                        <div class="content-part text-center">
                            <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms"></div>
                            <h1 class="sl-title mb-mb-10 wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">
                                @if ($slider3->text) {{ $slider3->text }} @else &nbsp; @endif
                            </h1>
                            <div class="sl-desc fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms"></div>
                        </div>
                    </div>
                </div>
            @if ($slider3->url) </a> @endif
            
        </div>
    </div>

    <div class="rs-about bg4 pt-120 pb-60 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 md-mb-50">
                    <div class="images">
                       <img src="{{ asset('frontend/assets/images/about-2.png') }}" alt="Escola Els 30 Passos"> 
                    </div> 
                </div>
                <div class="col-lg-6 pl-60 md-pl-15">
                    <div class="contact-wrap">
                        <div class="sec-title mb-30">
                            <div class="sub-text style2">Institut Escola Els 30 Passos</div>
                            <h2 style="color: #473728;" class="title pb-38">
                                Benvinguts a l'Institut Escola Els 30 Passos
                            </h2>
                            <div class="desc pb-35">
                                L'Escola té el ferm propòsit de consolidar un projecte educatiu de centre fet i pensat pels i amb els infants.
                            </div>
                            <p class="margin-0 pb-15">
                                Un projecte escolar que pretén consolidar un model educatiu pensat per afavorir l'acompanyament respectuós de cada infant, per potenciar els aprenentatges amb sentit fent que cada infant i jove trobi el seu lloc a l'escola, impulsant el treball col·lectiu en equip i en societat tot mantenint una actitud oberta, crítica i compromesa amb la comunitat, l'entorn proper.
                            </p>
                        </div>
                        <div class="btn-part">
                            <a class="readon learn-more contact-us" href="{{ route('frontend.projecteEducatiu.index') }}">+ Informació</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-relative rs-services style4 modify1 services3 gray-color pt-60 md-pt-80">
        <div class="container">
            <div class="sec-title2 text-center mb-45">
                <h2 style="color: #473728;" class="title">
                    Destaquem...
                </h2>
            </div>
        </div>
        <div class="bg-section pb-60 md-pb-80">
            <div class="container">
                <div class="row gray-color pb-35 pl-25 pr-25 md-pl-0 md-pr-0">
                    <div class="col-lg-4 col-md-6 mb-20" onclick="location.href='{{ route('frontend.projecteEducatiu.index') }}';">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src="{{ asset('frontend/assets/images/1.png') }}" alt="Escola Els 30 Passos">
                            </div>
                            <div class="services-content">
                                <h2 class="title">
                                    Projecte Educatiu de Centre
                                </h2>
                                <p class="desc">
                                    A l'escola entenem l'aprenentatge com un procés social, cognitiu i vital. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-20" onclick="location.href='{{ route('frontend.menus.index') }}';">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src="{{ asset('frontend/assets/images/2.png') }}" alt="Escola Els 30 Passos">
                            </div>
                            <div class="services-content">
                                <h2 class="title">
                                    Menú de l'Espai<br>Migdia
                                </h2>
                                <p class="desc">
                                    Descrobriu els nostres menús de l'Espai Migdia en format PDF.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-20" onclick="location.href='{{ route('frontend.calendari.index') }}';">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src="{{ asset('frontend/assets/images/3.png') }}" alt="Escola Els 30 Passos">
                            </div>
                            <div class="services-content">
                                <h2 class="title">
                                    Calendari Escolar
                                </h2>
                                <p class="desc">
                                    Consulteu el nostre Calendari Escolar.
                                    <br><br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 md-mb-20" onclick="location.href='{{ route('frontend.noticies.index') }}';">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src="{{ asset('frontend/assets/images/4.png') }}" alt="Escola Els 30 Passos">
                            </div>
                            <div class="services-content">
                                <h2 class="title">
                                    Notícies de l'escola
                                </h2>
                                <p class="desc">
                                    Consulteu les noticies de la nostra escola.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sm-mb-20" onclick="location.href='{{ route('frontend.projectes.index') }}';">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src="{{ asset('frontend/assets/images/5.png') }}" alt="Escola Els 30 Passos">
                            </div>
                            <div class="services-content">
                                <h2 class="title">
                                    Projectes actius
                                </h2>
                                <p class="desc">
                                    Visita tots els nostres projectes actius de l'escola.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" onclick="location.href='{{ route('frontend.instalacions.index') }}';">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src="{{ asset('frontend/assets/images/6.png') }}" alt="Escola Els 30 Passos">
                            </div>
                            <div class="services-content">
                                <h2 class="title">
                                    Instal·lacions i espais
                                </h2>
                                <p class="desc">
                                    Descobreix la nostra escola per dins i per fora.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="rs-blog" class="rs-blog pb-60 pt-60 md-pt-80 md-pb-80">
        <div class="container">  
            <div class="sec-title2 text-center mb-45">
                    <h2 class="title testi-title">
                        Últimes notícies
                    </h2>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
                @foreach ( $noticies as $noticia )
                    <div class="blog-item">
                        <div class="image-wrap">
                            <a href="{{ route('frontend.noticies.show', ['noticia' => $noticia->slug]) }}">
                                <img src="{{ asset("/storage/$noticia->imatge1") }}" alt="{{ $noticia->titol }}" class="height-img">
                            </a>
                        </div>
                        <div class="blog-content">
                            <ul class="blog-meta">
                                <li class="date"><i class="fa fa-calendar-check-o"></i> {{ date('d-m-Y', strtotime($noticia->data)) }}</li>
                            </ul>
                            <h3 class="blog-title">
                                <a href="{{ route('frontend.noticies.show', ['noticia' => $noticia->slug]) }}">
                                    {{ $noticia->titol }}
                                </a>
                            </h3>
                            {{-- <p class="desc">{{ Str::limit(strip_tags($noticia->descripcio), 50, '...') }}</p> --}}
                            <div class="blog-button">
                                <a href="{{ route('frontend.noticies.show', ['noticia' => $noticia->slug]) }}">
                                    + Informació
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="btn-part mt-55 text-center">
                <a class="readon learn-more" href="{{ route('frontend.noticies.index', ['year' => $latestYear]) }}">Més notícies</a>
            </div>
        </div>
    </div>

@endsection