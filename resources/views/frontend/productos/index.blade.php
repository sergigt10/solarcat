@extends('frontend.layouts.app')

@section('content')

    <section class="banner-style-one">
        <div class="parallax" style="background-image: url({{ asset('frontend/assets/images/pattren-3.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="banner-details">
                    <h2>Productos</h2>
                    <p>Instalamos tus Placas Solares</p>
                </div>
            </div>
        </div>
    </section>
    <section class="gap our-goal">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="data">
                        <h4>Generadores FV (placas fotovoltaicas)</h4>
                        <p>En SOLARCATGR usamos solo los mejores módulos fotovoltaicos monocristalinos, actualizándonos y buscando siempre la mejor eficiencia y rendimiento. Trabajamos con marcas punteras en desarollo de paneles como JA Solar, Trina, Longi…</p>
                        <br>
                        <img src="{{ asset('frontend/assets/images/productos/marca-producto-1.png') }}" class="img-fluid" alt="Solar cat">
                        <br><br>
                        <p>La potencia del panel fotovoltaico a instalar dependerá del tipo de instalación y superficie disponible. En el estudio gratuito que ofrecemos se podrán valorar las diferentes opciones.</p><br>
                        <p>El objetivo es ofrecer la mejor garantía tanto en los productos como en la instalación asegurando así una inversión rentable para nuestros clientes.</p><br>
                    </div>
                </div>
                <div class="col-lg-4" >
                    <div class="data">
                        <figure>
                            <img src="{{ asset('frontend/assets/images/productos/panel.png') }}" alt="Solar cat">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="data">
                        <h4>Inversores</h4>
                        <p>Los inversores son componentes clave en qualquier instalación fotovoltaica. Encargados de transformar la corriente continua generada por las placas fotovoltaicas a corriente alterna para uso doméstico, su eficiencia marcará el rendimiento final de la instalación.</p>
                        <p>En SOLARCATGR usamos inversores con una eficiencia siempre superior al 95%.</p><br>
                        <p>Trabajando con las mejores marcas del mercado podremos ofrecer el inversor que mejor se adapte a las características de la instalación.</p>
                        <br>
                        <img src="{{ asset('frontend/assets/images/productos/marca-producto-2.png') }}" class="img-fluid" alt="Solar cat">
                        <br><br>
                    </div>
                </div>
                <div class="col-lg-4" >
                    <div class="data">
                        <figure>
                            <img src="{{ asset('frontend/assets/images/productos/inversor.png') }}" alt="Solar cat">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="data">
                        <h4>Optimizadores de potencia</h4>
                        <p>Un optimizador de potencia es un dispositivo cuya función es reducir las pérdidas de un sistema solar fotovoltaico, aumentando así la eficiencia del sistema en su conjunto.</p>
                        <p>Se instala un optimizador de potencia por panel de manera que se consigue la máxima eficiencia individual sin verse afectada por las demás.</p><br>
                        <p>La instalación de optimizadores de potencia no siempre será necesaria. Ofreceremos esta opción solo en los casos que se valore un incremento notable en producción y un mejor rendimiento.</p>
                    </div>
                </div>
                <div class="col-lg-4" >
                    <div class="data">
                        <figure>
                            <img src="{{ asset('frontend/assets/images/productos/optimitzador.jpg') }}" alt="Solar cat">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="data">
                        <h4>Microinversores</h4>
                        <p>Un micro inversor tiene la función de un inversor pero con un tamaño mucho más pequeño y trabaja a nivel de panel individual, es decir, hay uno instalado en cada placa solar individual, convirtiendo la corriente continua que ésta produce en corriente alterna desde el propio tejado.</p><br>
                        <p>La utilización de microinversores está indicada para instalaciones pequeñas o para aquellas que tengan una gran variedad de orientaciones o inclinaciones en los paneles.Su uso también se valorará en el estudio realizado, ofreciendo esta opción si es la más indicada.</p>
                    </div>
                </div>
                <div class="col-lg-4" >
                    <div class="data">
                        <figure>
                            <img src="{{ asset('frontend/assets/images/productos/microinversor.png') }}" alt="Solar cat">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="data">
                        <h4>Monitorización</h4>
                        <p>Mediante la app incluida se podrá controlar fácilmente la producción de energía desde el móvil u ordenador. En ella se puede realizar un seguimiento del consumo y producción diario, historial generado, etc garantizando el buen funcionamiento de la instalación.</p>
                    </div>
                </div>
                <div class="col-lg-4" >
                    <div class="data">
                        <figure>
                            <img src="{{ asset('frontend/assets/images/productos/movil.png') }}" alt="Solar cat">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection