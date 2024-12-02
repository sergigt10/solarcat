@extends('frontend.layouts.app')

@section('content')

    <section class="banner-style-one">
        <div class="parallax" style="background-image: url({{ asset('frontend/assets/images/pattren-3.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="banner-details">
                    <h2>Empresa</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="gap about-style-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-data-left">
                        <figure>
                            <img src="{{ asset('frontend/assets/images/paques.jpg') }}" alt="Solar cat">
                        </figure>
                        <figure class="about-image">
                            <img src="{{ asset('frontend/assets/images/paques2.jpg') }}" alt="Solar cat">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-data-right">
                        <span>Mas de 20 años de experiencia</span>
                        <h2>Nuestra empresa</h2>
                        <div class="about-info">
                            <p>
                                Somos una empresa ubicada en Catalunya nacida de una experiencia de mas de 20 años en el sector de la construcción donde, viendo las necesidades de hoy en día en la producción de energía de autoconsumo y ahorro energético, hemos focalizado nuestra dedicación al estudio, realización de proyectos e implementación de instalaciones fotovoltaicas.<br>Nuestra actividad principal es proporcionar y facilitar el autoconsumo energético tanto para viviendas particulares como para empresas, así como para la generación industrial de energía. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Style One End -->
    <section class="gap about-how-it-works light-bg-color">
        <div class="heading">
            <figure>
                <img src="{{ asset('frontend/assets/images/heading-icon.png') }}" alt="Solar cat">
            </figure>
            <span>SOLAR CAT</span>
            <h2>Como trabajamos</h2>
        </div>
        <div class="container">
            <figure style="position: relative; z-index: 9;">
                <img class="w-100" src="{{ asset('frontend/assets/images/em.jpg') }}" alt="Solar cat">
            </figure>
        </div>
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-3 col-md-6 col-sm-12" >
                    <div class="plans">
                        <div class="y-box d-flex-all">
                            1.
                        </div>
                        <h3>Asesoramiento gratuito</h3>
                        <p>Contáctanos y te informamos de todo lo necesario, resolviendo las dudas que puedas tener.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12" >
                    <div class="plans">
                        <div class="y-box d-flex-all">
                            2.
                        </div>
                        <h3>Proyecto a medida</h3>
                        <p>Nos adaptamos a tus necesidades y presentamos el proyecto a medida a la ubicación de la futura instalación fotovoltaica.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12" >
                    <div class="plans">
                        <div class="y-box d-flex-all">
                            3.
                        </div>
                        <h3>Permisos y registro</h3>
                        <p>Nos encargamos de todos los trámites administrativos de su instalación, licencias, certificados y registro de la instalación.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12" >
                    <div class="plans">
                        <div class="y-box d-flex-all">
                            4.
                        </div>
                        <h3>Instalación</h3>
                        <p>Nuestros instaladores especializados se encargaran de todo el proceso finalizando la instalación con la puesta en marcha de la misma.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br> 
    <section class="gap no-top core-values">
        <div class="container">
            <div class="row">
                <div class="heading">
                    <figure>
                        <img src="{{ asset('frontend/assets/images/heading-icon.png') }}" alt="Solar cat">
                    </figure>
                    <span>Trabajamos con las mejores marcas</span>
                    <h2>Nuestras marcas</h2>
                </div>
                <div class="col-lg-12">
                    <div class="client-slider owl-carousel">
                        <img class="w-auto m-auto" src="{{ asset('frontend/assets/images/fronius.png') }}" alt="Solar cat">
                        <img class="w-auto m-auto" src="{{ asset('frontend/assets/images/green.png') }}" alt="Solar cat">
                        <img class="w-auto m-auto" src="{{ asset('frontend/assets/images/solar.png') }}" alt="Solar cat">
                        <img class="w-auto m-auto" src="{{ asset('frontend/assets/images/huawei.png') }}" alt="Solar cat">
                        <img class="w-auto m-auto" src="{{ asset('frontend/assets/images/sunfer.png') }}" alt="Solar cat">
                        <img class="w-auto m-auto" src="{{ asset('frontend/assets/images/sungrow.png') }}" alt="Solar cat">
                        <img class="w-auto m-auto" src="{{ asset('frontend/assets/images/trinasolar.png') }}" alt="Solar cat">
                        <img class="w-auto m-auto" src="{{ asset('frontend/assets/images/solarb.png') }}" alt="Solar cat">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection