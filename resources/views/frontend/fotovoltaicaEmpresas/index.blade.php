@extends('frontend.layouts.app')

@section('content')

    <section class="banner-style-one">
        <div class="parallax" style="background-image: url({{ asset('frontend/assets/images/pattren-3.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="banner-details">
                    <h2>Fotovoltaicas para empresa</h2>
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
            <span>Nuestro servicio a empresas</span>
            <h2>Instalación fotovoltaica para empresas</h2>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" >
                    <div class="data">
                        <p>	&#x2714; Instalaciones para cubiertas de naves industriales.</p><br>
                        <p>	&#x2714; Instalaciones de alta potencia para autocunsumo con excedentes.</p><br>
                        <p>&#x2714; Valoración y estudio de producción de energia anual en función de la superfície disponible, irradiación recibida y elementos constructivos.</p><br>
                        <p>&#x2714; Instalación a medida para cumplir con la poténcia mínima a instalar para construcciones de mas de 1000 m2.</p>
                    </div>
                </div>
                <div class="col-lg-6" >
                    <div class="data">
                        <figure class="goal-img">
                            <img src="{{ asset('frontend/assets/images/empresa.jpg') }}" alt="Solar Cat">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gap no-top project-style-one extra addition">
        <div class="heading">
            <figure>
                <img src="{{ asset('frontend/assets/images/heading-icon.png') }}" alt="Solar Cat">
            </figure>
            <span>Pídenos presupuesto sin compromiso</span>
            <h2>Que ofrecemos?</h2>
        </div>
        <div class="container">
            <div class="row project-slider">
                <div class="col-lg-4" >
                    <div class="project-post">
                        <figure>
                            <img src="{{ asset('frontend/assets/images/estudio.jpg') }}" alt="Solar Cat">
                        </figure>
                        <div class="project-data">
                            <h3><a href="#">Estudio y proyecto personalizado</a></h3>
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
                        <img src="{{ asset('frontend/assets/images/placas.jpg') }}" alt="Solar Cat">
                    </figure>
                    <div class="project-data">
                        <h3><a href="#">Montaje preciso y profesional</a></h3>
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
                        <img src="{{ asset('frontend/assets/images/placas-solares.jpg') }}" alt="Solar Cat">
                    </figure>
                    <div class="project-data">
                        <h3><a href="#">Entrega de instalación</a></h3>
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