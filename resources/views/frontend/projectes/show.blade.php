@extends('frontend.layouts.app')

@section('content')

    <section class="banner-style-one">
        <div class="parallax" style="background-image: url({{ asset('frontend/assets/images/pattren-3.png') }});"></div>
            <div class="container">
                <div class="row">
                    <div class="banner-details">
                        <h2>{{ $projecte->titol_esp }}</h2>
                    </div>
                </div>
            </div>
    </section>

    <section class="gap blog-style-one blog-detail detail-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-post">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="blog-image">
                                    <figure>
                                        <img src="{{ asset("/storage/$projecte->imatge1") }}" alt="{{ $projecte->titol_esp }}">
                                    </figure>
                                </div>
                                <div class="blog-data">
                                    <span class="blog-date">{{ $projecte->kw }} Kw</span>
                                    <h2>
                                        {{ $projecte->titol_esp }}
                                    </h2>
                                    <br>
                                    {!! $projecte->descripcio_esp !!}
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 50px; margin-bottom: 20px">
                            @if( $projecte->imatge2 )
                                <div class="col-lg-6" style="margin-bottom: 20px">
                                    <img src="{{ asset("/storage/$projecte->imatge2") }}" alt="{{ $projecte->titol_esp }}">
                                </div>
                            @endif

                            @if( $projecte->imatge3 )
                                <div class="col-lg-6" style="margin-bottom: 20px">
                                    <img src="{{ asset("/storage/$projecte->imatge3") }}" alt="{{ $projecte->titol_esp }}">
                                </div>
                            @endif

                            @if( $projecte->imatge4 )
                                <div class="col-lg-6" style="margin-bottom: 20px">
                                    <img src="{{ asset("/storage/$projecte->imatge4") }}" alt="{{ $projecte->titol_esp }}">
                                </div>
                            @endif

                            @if( $projecte->imatge5 )
                                <div class="col-lg-6" style="margin-bottom: 20px">
                                    <img src="{{ asset("/storage/$projecte->imatge5") }}" alt="{{ $projecte->titol_esp }}">
                                </div>
                            @endif

                            @if( $projecte->imatge7 )
                                <div class="col-lg-6" style="margin-bottom: 20px">
                                    <img src="{{ asset("/storage/$projecte->imatge7") }}" alt="{{ $projecte->titol_esp }}">
                                </div>
                            @endif

                            @if( $projecte->imatge8 )
                                <div class="col-lg-6" style="margin-bottom: 20px">
                                    <img src="{{ asset("/storage/$projecte->imatge8") }}" alt="{{ $projecte->titol_esp }}">
                                </div>
                            @endif

                            @if( $projecte->imatge9 )
                                <div class="col-lg-6" style="margin-bottom: 20px">
                                        <img src="{{ asset("/storage/$projecte->imatge9") }}" alt="{{ $projecte->titol_esp }}">
                                </div>
                            @endif

                            @if( $projecte->imatge10 )
                                <div class="col-lg-6" style="margin-bottom: 20px">
                                        <img src="{{ asset("/storage/$projecte->imatge10") }}" alt="{{ $projecte->titol_esp }}">
                                </div>
                            @endif
                        </div>
                    </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <br>
                                <a href="{{ route('frontend.projectes.index') }}" class="theme-btn">
                                    Ver más proyectos
                                    <i class="fa-solid fa-angles-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection