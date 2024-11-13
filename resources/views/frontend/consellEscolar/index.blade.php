@extends('frontend.layouts.app')

@section('content')
    <div class="rs-breadcrumbs img9">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">Composició del Consell Escolar</h1>
        </div>
    </div>

    <div class="rs-about pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="desc">
                        {!! $consellEscolarCampText->descripcio !!}
                    </div>
                </div>
                <div class="col-lg-6 mt-60">
                    <div class="sec-title4">
                        <div class="desc">
                            {!! $consellEscolarInformacio->descripcio !!}
                        </div>
                        <br>
                        <a href="{{ $consellEscolarInformacio->carpeta_drive }}" target="_blank">
                            <img src="{{ asset('frontend/assets/images/pdf.png') }}">
                            <br>
                            Documents del consell escolar
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="software-img">
                        <img src="{{ asset('frontend/assets/images/about-2.png') }}" alt="Escola Els 30 Passos">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection