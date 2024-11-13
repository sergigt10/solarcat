@extends('frontend.layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection

@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img6">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">{{ $noticia->titol }}</h1>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <div class="rs-inner-blog pt-120 pb-120 md-pt-90 md-pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details">
                        <div class="bs-img mb-35">
                            <div class="container">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img src="{{ asset("/storage/$noticia->imatge1") }}" alt="{{ $noticia->titol }}" style="width:100%;">
                                        </div>
                                        @if ($noticia->imatge2)
                                            <div class="item">
                                                <img src="{{ asset("/storage/$noticia->imatge2") }}" alt="{{ $noticia->titol }}" style="width:100%;">
                                            </div>
                                        @endif
                                        @if ($noticia->imatge3)
                                            <div class="item">
                                                <img src="{{ asset("/storage/$noticia->imatge3") }}" alt="{{ $noticia->titol }}" style="width:100%;">
                                            </div>
                                        @endif
                                        @if ($noticia->imatge4)
                                            <div class="item">
                                                <img src="{{ asset("/storage/$noticia->imatge4") }}" alt="{{ $noticia->titol }}" style="width:100%;">
                                            </div>
                                        @endif
                                        @if ($noticia->imatge5)
                                            <div class="item">
                                                <img src="{{ asset("/storage/$noticia->imatge5") }}" alt="{{ $noticia->titol }}" style="width:100%;">
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
                        <div class="blog-full">
                            <ul class="single-post-meta">
                                <li>
                                    <span class="p-date"><i class="fa fa-calendar-check-o"></i> {{ date('d-m-Y', strtotime($noticia->data)) }}</span>
                                </li> 
                            </ul>
                            {!! $noticia->descripcio !!}
                        </div>
                        <br>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <a class="readon learn-more" href="{{ route('frontend.noticies.index', ['year' => $noticia->any]) }}">Més notícies</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>

@endsection

