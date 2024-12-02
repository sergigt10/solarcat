@extends('frontend.layouts.app')

@section('content')

    <section class="featured-slider-one" style="background: grey;">
        <div class="containe">
            <div class="ro f-slider-one owl-carousel">
                <div class="f-slider-layer">
                    <img src="{{ asset('frontend/assets/images/slide.jpg') }}" alt="Solarcat">
                    <div class="f-slider-one-data">
                        <h1>Instalaciones fotovoltaicas a medida</h1>
                        <p>Reduce tu factura de la luz hasta un 95 % y genera excedente para consumir cuando lo necesites.</p>
                        <a href="{{ route('frontend.contacte.index') }}" class="theme-btn">Solicitar estudio gratuito<i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
                <div class="f-slider-layer">
                    <img src="{{ asset('frontend/assets/images/slide-1.jpg') }}" alt="Solarcat">
                    <div class="f-slider-one-data">
                        <h1>Los mejores equipos del mercado</h1>
                        <p>Usamos en nuestros proyectos solo productos de máxima calidad, garantizando el perfecto funcionamiento y mejor rendimiento.</p>
                        <a href="{{ route('frontend.contacte.index') }}" class="theme-btn">Solicitar estudio gratuito <i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
                <div class="f-slider-layer">
                    <img src="{{ asset('frontend/assets/images/slide-2.jpg') }}" alt="Solarcat">
                    <div class="f-slider-one-data">
                        <h1>Asesoramiento gratuito</h1>
                        <p>Contáctanos y te informamos de todo lo necesario, resolviendo las dudas que puedas tener.</p>
                        <a href="{{ route('frontend.contacte.index') }}" class="theme-btn">Solicitar estudio gratuito <i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Slider One End -->
    <!-- Service Style One Start -->
    <section class="gap service-style-one">
        <div class="container">
            <div class="row">
                <div class="heading">
                    <figure>
                        <img src="{{ asset('frontend/assets/images/heading-icon.png') }}" alt="heading-icon">
                    </figure>
                    <span>¿Por qué invertir en energía solar?</span>
                    <h2>Autoconsumo solar</h2>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center" >
                    <div class="service-data">
                        <div class="svg-icon d-flex-all">
                            <img class="light-icon" src="{{ asset('frontend/assets/images/1-icon.png') }}" alt="Solarcat">
                            <img class="dark-icon" src="{{ asset('frontend/assets/images/1-icon.png') }}" alt="Solarcat">
                        </div>
                        <h3><a href="service-detail.html">Ahorro inmediato</a></h3>
                        <p>Reduce tu factura de la luz hasta un 95 % y genera excedente para consumir cuando lo necesites.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center" >
                    <div class="service-data">
                        <div class="svg-icon d-flex-all">
                            <img class="light-icon" src="{{ asset('frontend/assets/images/2-icon.png') }}" alt="Solarcat">
                            <img class="dark-icon" src="{{ asset('frontend/assets/images/2-icon.png') }}" alt="Solarcat">
                        </div>
                        <h3><a href="service-detail.html">Control del consumo</a></h3>
                        <p>Controla fácilmente tu consumo, energía producida y excedente generado.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center" >
                    <div class="service-data">
                        <div class="svg-icon d-flex-all">
                            <img class="light-icon" src="{{ asset('frontend/assets/images/3-icon.png') }}" alt="Solarcat">
                            <img class="dark-icon" src="{{ asset('frontend/assets/images/3-icon.png') }}" alt="Solarcat">
                        </div>
                        <h3><a href="service-detail.html">Energía sostenible</a></h3>
                        <p>Entra ya en el uso de la energía del futuro colaborando con el planeta reduciendo tu huella de CO2.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Style Two End -->
    <!-- About Style One Start -->
    <section class="gap no-top about-style-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" >
                    <div class="about-data-left">
                        <figure>
                            <img src="{{ asset('frontend/assets/images/1.jpg') }}" alt="Solarcat">
                        </figure>
                        <figure class="about-image">
                            <img src="{{ asset('frontend/assets/images/2.jpg') }}" alt="Solarcat">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6" >
                    <div class="about-data-right">
                        <span>Mas de 20 años de experiencia</span>
                        <h2>Quienes somos</h2>
                        <div class="about-info">
                            <p>
                                Somos una empresa ubicada en Catalunya nacida de una experiencia de mas de 20 años en el sector de la construcción donde, viendo las necesidades de hoy en día en la producción de energía de autoconsumo y ahorro energético, hemos focalizado nuestra dedicación al estudio, realización de proyectos e implementación de instalaciones fotovoltaicas. Nuestra actividad principal es proporcionar y facilitar el autoconsumo energético tanto para viviendas particulares como para empresas, así como para la generación industrial de energía.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Style One End -->
    <!-- Counter Style One Start -->
    <section class="gap no-top counter-style-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12" >
                    <div class="counter-data">
                        <div class="count">
                            <span class="counter">20</span>+<i>Años de experiencia</i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12" >
                    <div class="counter-data upper-space">
                        <div class="count">
                            <span class="counter">150</span><i>Proyectos realizados</i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12" >
                    <div class="counter-data">
                        <div class="count">
                            <span class="counter">25</span><i>años de Garantia en equipos</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Project Style One Start -->
    <section class="gap project-style-one light-bg-color">
        <div class="heading">
            <figure>
                <img src="{{ asset('frontend/assets/images/heading-icon.png') }}" alt="solarcat">
            </figure>
            <span>Solarcat</span>
            <h2>Proyectos realizados</h2>
        </div>
        <div class="container">
            <div class="row project-slider owl-carousel">
                @foreach ( $projectes as $projecte)
                    <div class="col-lg-12">
                        <div class="project-post">
                            <a href="{{ route('frontend.projectes.show', ['projecte' => $projecte->slug]) }}">
                                <figure>
                                    <img src="{{ asset("/storage/$projecte->imatge1") }}" alt="solarcat">
                                </figure>
                                <div class="project-data">
                                    <h6>{{ $projecte->titol_esp }}</h6>
                                    <a class="project-icon" href="#">
                                        <i class="fa-solid fa-angles-right"></i>
                                    </a>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
                
                {{-- <div class="col-lg-12">
                    <div class="project-post">
                        <figure>
                            <img src="{{ asset('frontend/assets/images/projectes2.jpg') }}" alt="solarcat">
                        </figure>
                        <div class="project-data">
                            <h6><a href="javascript:void(0)">Casa en Badalona</a></h6>
                            <a class="project-icon" href="#">
                            <i class="fa-solid fa-angles-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="project-post">
                        <figure>
                            <img src="{{ asset('frontend/assets/images/projectes3.jpg') }}" alt="solarcat">
                        </figure>
                        <div class="project-data">
                            <h6><a href="project-detail.html">Piso en Barcelona</a></h6>
                            <a class="project-icon" href="#">
                            <i class="fa-solid fa-angles-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="project-post">
                        <figure>
                            <img src="{{ asset('frontend/assets/images/projectes4.jpg') }}" alt="solarcat">
                        </figure>
                        <div class="project-data">
                            <h6><a href="javascript:void(0)">Casa en Taradell</a></h6>
                            <a class="project-icon" href="#">
                            <i class="fa-solid fa-angles-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="project-post">
                        <figure>
                            <img src="{{ asset('frontend/assets/images/projectes5.jpg') }}" alt="solarcat">
                        </figure>
                        <div class="project-data">
                            <h6><a href="project-detail.html">Piso en Sant Cugat</a></h6>
                            <a class="project-icon" href="#">
                            <i class="fa-solid fa-angles-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="project-post">
                        <figure>
                            <img src="{{ asset('frontend/assets/images/projectes6.jpg') }}" alt="solarcat">
                        </figure>
                        <div class="project-data">
                            <h6><a href="javascript:void(0)">Piso en Barcelona</a></h6>
                            <a class="project-icon" href="#">
                            <i class="fa-solid fa-angles-right"></i>
                            </a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- Project Style One End -->
    <!-- Counter Style One End -->
    <div class="gap client-style-one">
        <div class="container">
            <div class="row">
                <div class="heading">
                    <figure>
                        <img src="{{ asset('frontend/assets/images/heading-icon.png') }}" alt="solarcat">
                    </figure>
                    <h2>Preguntas frecuentes</h2>
                </div>
                <div class="col-lg-12">
                  <div class="acc2">
                    <div class="accordion" id="accordionExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-One">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-One" aria-expanded="true" aria-controls="collapse-One">
                            ¿Es rentable instalar placas solares en una vivienda?
                          </button>
                        </h2>
                        <div id="collapse-One" class="accordion-collapse collapse show" aria-labelledby="heading-One" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            Disponer de una instalación fotovoltaica en casa será siempre una buena inversión. Permite aprovechar una energía renovable y sostenible como la del sol para reducir hasta 0 el consumo eléctrico de la red. La rentabilidad de la instalación dependerá de la potencia instalada y de los hábitos de consumo en el hogar.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-Three">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-Three" aria-expanded="false" aria-controls="collapse-Three">
                            ¿Cuántos paneles necesito instalar en casa?
                          </button>
                        </h2>
                        <div id="collapse-Three" class="accordion-collapse collapse" aria-labelledby="heading-Three" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            El número de paneles a instalar en una vivienda depende de varios factores que quedan definidos y analizados con el estudio gratuito que ofrecemos (consumos, irradiación recibida, producción por m2...). Entre otros se encuentra la potencia contratada (que siempre se podrá modificar) y la superficie de cubierta disponible.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-Four">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-Four" aria-expanded="false" aria-controls="collapse-Four">
                            ¿Cuál es la vida útil de los paneles solares?
                          </button>
                        </h2>
                        <div id="collapse-Four" class="accordion-collapse collapse" aria-labelledby="heading-Four" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            Actualmente las marcas de paneles solares con las que trabajamos ofrecen una garantía de 25 años, asegurando así su correcto funcionamiento como mínimo por este período de tiempo.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-Five">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-Five" aria-expanded="false" aria-controls="collapse-Five">
                            ¿Necesito baterías para la instalación?
                          </button>
                        </h2>
                        <div id="collapse-Five" class="accordion-collapse collapse" aria-labelledby="heading-Five" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            Las baterías no son imprescindibles y, de hecho, sólo las aconsejamos en casos muy particulares como viviendas aisladas y desconectadas de la red eléctrica o en aquellas zonas donde los cortes de luz son frecuentes. Para otras situaciones es preferible el consumo directo y la compensación de los excedentes.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-Six">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-Six" aria-expanded="false" aria-controls="collapse-Six">
                            ¿Cuándo tardaré en tener la instalación en funcionamiento?
                          </button>
                        </h2>
                        <div id="collapse-Six" class="accordion-collapse collapse" aria-labelledby="heading-Six" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            El procés d'instal·lació i posta en marxa d'una instal·lació depèn del tamany d'aquesta (nombre de panells a instal·lar), però amb la proposta i estudi fets, pot estar llesta en 2 o 3 dies per a instal·lacions petites entre 3 i 6 kw o fins a 5 o 6 dies per a instal·lacions fins a 15 kw.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-Seven">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-Seven" aria-expanded="false" aria-controls="collapse-Seven">
                            ¿Qué ocurre con la electricidad que no consumo?
                          </button>
                        </h2>
                        <div id="collapse-Seven" class="accordion-collapse collapse" aria-labelledby="heading-Seven" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            Con la instalación legalizada, se puede acoger a la compensación de excedentes donde la energía eléctrica que se produce durante el día y no se consume, se acumula y se descontará de la factura final, reduciendo así el consumo que se haya producido en horas sin radiación solar.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>

@endsection