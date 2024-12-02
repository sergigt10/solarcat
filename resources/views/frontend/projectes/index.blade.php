@extends('frontend.layouts.app')

@section('content')

    <section class="banner-style-one">
        <div class="parallax" style="background-image: url({{ asset('frontend/assets/images/pattren-3.png') }});"></div>
            <div class="container">
                <div class="row">
                    <div class="banner-details">
                        <h2>Proyectos</h2>
                    </div>
                </div>
            </div>
    </section>

    <section class="gap blog-style-one our-blog-one">
        <div class="container">
            <div class="row">
                @foreach ( $projectes as $projecte)
                    <div class="col-lg-4">
                        <div class="blog-post">
                            <div class="blog-image">
                                <figure>
                                    <img src="{{ asset("/storage/$projecte->imatge1") }}" alt="{{ $projecte->titol_esp }}" onclick="location.href='{{ route('frontend.projectes.show', ['projecte' => $projecte->slug]) }}'" style="cursor: pointer;">
                                </figure>
                                <a href="{{ route('frontend.projectes.show', ['projecte' => $projecte->slug]) }}">
                                    <i class="fa-solid fa-angles-right"></i>
                                </a>
                            </div>
                            <div class="blog-data" style="height: 220px">
                                <a href="{{ route('frontend.projectes.show', ['projecte' => $projecte->slug]) }}">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <span class="blog-date">{{ $projecte->kw }} Kw</span>
                                        </div>
                                        <div class="col-lg-6">
                                            <h2>
                                                {{ $projecte->titol_esp }}
                                            </h2>
                                        </div>
                                    </div>
                                    @if( $projecte->descripcio_esp )
                                        <br>
                                        <span>
                                            {!! $projecte->descripcio_esp !!}
                                        </span>
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="text-center">
                    {{ $projectes->links() }}
                </div>
            </div>
        </div>
    </section>

@endsection