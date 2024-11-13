@extends('frontend.layouts.app')

@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img6">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">Notícies {{ $any }}</h1>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <div class="rs-inner-blog pt-70 pb-120 md-pt-50 md-pb-90">
        <div class="container">
            <div class="row">
                <div class="row text-center">
                    @foreach ($years as $year)
                        <div class="col-lg-1 col-xs-4 mr-40 mb-40">
                            <a class="readon learn-more" href="{{ route('frontend.noticies.index', ['year' => $year->any]) }}">
                                {{ $year->any }}
                            </a>
                        </div>
                    @endforeach
                </div>
                <br>
                @foreach ( $noticies as $noticia )
                    <div class="col-lg-4 mb-35">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="{{ route('frontend.noticies.show', ['noticia' => $noticia->slug]) }}" >
                                    <img class="height-img" src="{{ asset("/storage/$noticia->imatge1") }}" alt="{!! $noticia->titol !!}, Escola 30 pasos">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h5 class="blog-title">
                                    <a href="{{ route('frontend.noticies.show', ['noticia' => $noticia->slug]) }}" >
                                        {!! $noticia->titol !!}
                                    </a>
                                </h5>
                                <a href="{{ route('frontend.noticies.show', ['noticia' => $noticia->slug]) }}" >
                                    <i class="fa fa-calendar-check-o"></i> {{ date('d-m-Y', strtotime($noticia->data)) }}
                                </a>
                                <br><br>
                                {{-- <div class="blog-desc">
                                    <a href="{{ route('frontend.noticies.show', ['noticia' => $noticia->slug]) }}" >
                                        {{ Str::of( html_entity_decode(strip_tags($noticia->descripcio)) )->limit(150, '...') }}
                                    </a>   
                                </div> --}}
                                <div class="blog-button inner-blog">
                                    <a class="blog-btn" href="{{ route('frontend.noticies.show', ['noticia' => $noticia->slug]) }}" >
                                        Més informació
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                {{ $noticies->links() }}
            </div>
        </div>
    </div>

@endsection

