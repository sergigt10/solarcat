@extends('frontend.layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection

@section('content')

    <div class="rs-breadcrumbs img2">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">Instal·lacions i espais</h1>
        </div>
    </div>

    <div class="rs-industry pt-80 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="desc">
                {!! $instalacions->descripcio !!}
            </div>
            <br><br>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{ asset("/storage/$instalacions->imatge1") }}" alt="Instal·lacions Escola Els 30 Passos" style="width:100%;">
                    </div>
                    @if ($instalacions->imatge2)
                        <div class="item">
                            <img src="{{ asset("/storage/$instalacions->imatge2") }}" alt="Instal·lacions Escola Els 30 Passos" style="width:100%;">
                        </div>
                    @endif
                    @if ($instalacions->imatge3)
                        <div class="item">
                            <img src="{{ asset("/storage/$instalacions->imatge3") }}" alt="Instal·lacions Escola Els 30 Passos" style="width:100%;">
                        </div>
                    @endif
                    @if ($instalacions->imatge4)
                        <div class="item">
                            <img src="{{ asset("/storage/$instalacions->imatge4") }}" alt="Instal·lacions Escola Els 30 Passos" style="width:100%;">
                        </div>
                    @endif
                    @if ($instalacions->imatge5)
                        <div class="item">
                            <img src="{{ asset("/storage/$instalacions->imatge5") }}" alt="Instal·lacions Escola Els 30 Passos" style="width:100%;">
                        </div>
                    @endif
                    @if ($instalacions->imatge6)
                        <div class="item">
                            <img src="{{ asset("/storage/$instalacions->imatge6") }}" alt="Instal·lacions Escola Els 30 Passos" style="width:100%;">
                        </div>
                    @endif
                    @if ($instalacions->imatge7)
                        <div class="item">
                            <img src="{{ asset("/storage/$instalacions->imatge7") }}" alt="Instal·lacions Escola Els 30 Passos" style="width:100%;">
                        </div>
                    @endif
                    @if ($instalacions->imatge8)
                        <div class="item">
                            <img src="{{ asset("/storage/$instalacions->imatge8") }}" alt="Instal·lacions Escola Els 30 Passos" style="width:100%;">
                        </div>
                    @endif
                    @if ($instalacions->imatge9)
                        <div class="item">
                            <img src="{{ asset("/storage/$instalacions->imatge9") }}" alt="Instal·lacions Escola Els 30 Passos" style="width:100%;">
                        </div>
                    @endif
                    @if ($instalacions->imatge10)
                        <div class="item">
                            <img src="{{ asset("/storage/$instalacions->imatge10") }}" alt="Instal·lacions Escola Els 30 Passos" style="width:100%;">
                        </div>
                    @endif
                </div>
            
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </div>

@endsection