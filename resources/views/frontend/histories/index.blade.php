@extends('frontend.layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection

@section('content')

    <div class="rs-breadcrumbs img2">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">Història</h1>
        </div>
    </div>

    <div class="rs-industry pt-80 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mb-70">
                    <img src="{{ asset("/storage/$histories->historiaImatge") }}" alt="Història Escola Els 30 Passos"/>
                </div>
                <div class="col-sm-12">
                    <p>{!! $histories->descripcio !!}</p>
                </div>
            </div>
        </div>
        <br>

        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{ asset("/storage/$histories->imatge1") }}" alt="Història Escola Els 30 Passos" style="width:100%;">
                    </div>
                    @if ($histories->imatge2)
                        <div class="item">
                            <img src="{{ asset("/storage/$histories->imatge2") }}" alt="Història Escola Els 30 Passos" style="width:100%;">
                        </div>
                    @endif
                    @if ($histories->imatge3)
                        <div class="item">
                            <img src="{{ asset("/storage/$histories->imatge3") }}" alt="Història Escola Els 30 Passos" style="width:100%;">
                        </div>
                    @endif
                    @if ($histories->imatge4)
                        <div class="item">
                            <img src="{{ asset("/storage/$histories->imatge4") }}" alt="Història Escola Els 30 Passos" style="width:100%;">
                        </div>
                    @endif
                    @if ($histories->imatge5)
                        <div class="item">
                            <img src="{{ asset("/storage/$histories->imatge5") }}" alt="Història Escola Els 30 Passos" style="width:100%;">
                        </div>
                    @endif
                    @if ($histories->imatge6)
                        <div class="item">
                            <img src="{{ asset("/storage/$histories->imatge6") }}" alt="Història Escola Els 30 Passos" style="width:100%;">
                        </div>
                    @endif
                    @if ($histories->imatge7)
                        <div class="item">
                            <img src="{{ asset("/storage/$histories->imatge7") }}" alt="Història Escola Els 30 Passos" style="width:100%;">
                        </div>
                    @endif
                    @if ($histories->imatge8)
                        <div class="item">
                            <img src="{{ asset("/storage/$histories->imatge8") }}" alt="Història Escola Els 30 Passos" style="width:100%;">
                        </div>
                    @endif
                    @if ($histories->imatge9)
                        <div class="item">
                            <img src="{{ asset("/storage/$histories->imatge9") }}" alt="Història Escola Els 30 Passos" style="width:100%;">
                        </div>
                    @endif
                    @if ($histories->imatge10)
                        <div class="item">
                            <img src="{{ asset("/storage/$histories->imatge10") }}" alt="Història Escola Els 30 Passos" style="width:100%;">
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