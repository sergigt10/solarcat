@extends('frontend.layouts.app')

@section('content')

    <section class="banner-style-one">
        <div class="parallax" style="background-image: url({{ asset('frontend/assets/images/pattren-3.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="banner-details">
                    <h2>Fotovoltaicas</h2>
                    <p>Instalamos tus Placas Solares</p>
                </div>
            </div>
        </div>
    </section>
    <section class="gap our-goal">
        <div class="heading">
            <figure>
                <img src="{{ asset('frontend/assets/images/heading-icon.png') }}" alt="Solar cat">
            </figure>
            <span>Energía limpia y renovable</span>
            <h2>Instalación fotovoltaica en viviendas</h2>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8" >
                    <div class="data">
                        <h4>Ahorro:</h4>
                        <p>El ahorro es uno de los beneficios más atractivos del autoconsumo fotovoltaico, ya que tus facturas se verán reducidas mas de un 70%. Esto te permitirá ser mucho más independiente de la red eléctrica y mantenerte al margen de los constantes cambios y subidas del precio de la luz.</p><br>
                        <h4>Genera excedente</h4>
                        <p>Acumula le energía que generas y no consumes vertiéndola a la red para consumirla cuando necesites.</p><br>
                        <h4>Revaloriza tu vivienda</h4>
                        <p>Una instalación fotovoltaica es una inversión no solo por el ahorro que supone sino porque también incrementa el valor del inmueble.</p><br>
                        <h4>Bajo mantenimiento</h4>
                        <p>Aunque sí es necesario mantener las placas solares limpias y evitar en la medida de lo posible agresiones externas, el mantenimiento de una instalación fotovoltaica es fácil y económico.</p><br>
                        <h4>Energía limpia y renovable</h4>
                        <p>Con el uso de una instalación fotovoltaica reduces tu huella de carbono y estarás contribuyendo directamente a la sostenibilidad y a la reducción de las emisiones de CO2.</p>
                    </div>
                </div>
                <div class="col-lg-4" >
                    <div class="data">
                        <figure class="goal-img">
                            <img src="{{ asset('frontend/assets/images/solar.jpg') }}" alt="Solar cat">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gap no-top project-style-one extra addition">
        <div class="heading">
            <figure>
                <img src="{{ asset('frontend/assets/images/heading-icon.png') }}" alt="Solar cat">
            </figure>
            <span>Pídenos presupuesto sin compromiso</span>
            <h2>Que ofrecemos?</h2>
        </div>
        <div class="container">
            <div class="row project-slider">
                <div class="col-lg-4" >
                    <div class="project-post">
                        <figure>
                            <img src="{{ asset('frontend/assets/images/estudio.jpg') }}" alt="Solar cat">
                        </figure>
                        <div class="project-data">
                            <h3><a href="project-detail.html">Estudio y proyecto personalizado</a></h3>
                            <p>Después de la visita del lugar de instalación analizaremos las mejores opciones valorando irradiación recibida, ángulo de inclinación, sombras,… para garantizar la máxima eficiencia y mejor rendimiento.</p>
                            <a class="project-icon" href="#">
                                <i class="fa-solid fa-angles-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" >
                    <div class="project-post">
                        <figure>
                            <img src="{{ asset('frontend/assets/images/placas.jpg') }}" alt="Solar cat">
                        </figure>
                        <div class="project-data">
                            <h3><a href="project-detail.html">Montaje preciso y profesional</a></h3>
                            <p>Con el proyecto aprobado, los instaladores técnicos llevaran a cabo el montaje con los mejores materiales asegurando la perfecta instalación y durabilidad de la misma.</p>
                            <a class="project-icon" href="#">
                                <i class="fa-solid fa-angles-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" >
                    <div class="project-post">
                        <figure>
                            <img src="{{ asset('frontend/assets/images/placas-solares.jpg') }}" alt="Solar cat">
                        </figure>
                        <div class="project-data">
                            <h3>Entrega de instalación</h3>
                            <p>La instalación se entrega lista para su uso, con el test de funcionamiento realizado y toda la documentación de certificación y registro entregada.</p>
                            <a class="project-icon" href="#">
                                <i class="fa-solid fa-angles-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection