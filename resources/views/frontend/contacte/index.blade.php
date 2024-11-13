@extends('frontend.layouts.app')

@section('content')
    <div class="rs-breadcrumbs img2">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">Contacte</h1>
        </div>
    </div>

    <!-- Contact Section Start -->
    <div class="rs-contact pt-120 md-pt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 md-mb-60">
                    <div class="contact-box">
                        <div class="sec-title mb-45">
                            <h2 class="title white-color">Institut Escola Els 30 Passos</h2>
                        </div>
                        <div class="address-box mb-25">
                            <div class="address-icon">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="address-text">
                                <span class="label">Email:</span>
                                <a href="mailto:a8074641@xtec.cat">a8074641@xtec.cat</a>
                            </div>
                        </div>
                        <div class="address-box mb-25">
                            <div class="address-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="address-text">
                                <span class="label">Telèfon:</span>
                                <a href="tel:+34937826644">937 82 66 44</a>
                            </div>
                        </div>
                        <div class="address-box">
                            <div class="address-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="address-text">
                                <span class="label">Adreça:</span>
                                <div class="desc">C/ de Berenguer de Palou, 64, Sant Andreu, 08027 Barcelona</div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-8 pl-70 md-pl-15">
                    <div class="contact-widget">
                        <div class="sec-title2 mb-40">
                            <h2 class="title testi-title">Formulari de contacte</h2>
                        </div>
                        <!-- form message -->
                        @if(session('message_mail'))
                            <div class="alert alert-success contact__msg" role="alert">
                                <b>{{ session('message_mail') }}</b>
                            </div>
                            <br>
                        @endif
                        @if(session('error_message_mail'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error_message_mail') }}
                            </div>
                            <br>
                        @endif
                        <!-- form elements -->
                        <form method="post" action="{{ route('frontend.sendMail') }}">
                            @csrf 
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                        <input class="from-control" type="text" id="name" name="name" placeholder="Nom i cognoms *" required="">
                                    </div> 
                                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                        <input class="from-control" type="text" id="email" name="email" placeholder="Correu electrònic *" required="">
                                    </div>   
                                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                        <input class="from-control" type="text" id="phone" name="phone" placeholder="Telèfon *" required="">
                                    </div>   
                                    <div class="col-lg-12 mb-30">
                                        <textarea class="from-control" id="message" name="message" placeholder="Missatge *" required=""></textarea>
                                    </div>
                                </div>
                                <div class="btn-part">                                            
                                    <div class="form-group mb-0">
                                        <input class="readon learn-more submit" type="submit" value="Enviar">
                                    </div>
                                </div> 
                            </fieldset>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
        <div class="map-canvas pt-120 md-pt-80">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4482.501789441519!2d2.1905966261197207!3d41.42379051443309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4bcd24849cebb%3A0x36f650a6dd36da4f!2sEscuela%2030%20Passos!5e0!3m2!1ses!2ses!4v1715759333652!5m2!1ses!2ses" 
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div> 
    </div>
    <!-- Contact Section Start -->

@endsection