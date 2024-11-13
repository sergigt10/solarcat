@extends('frontend.layouts.app')

@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img6">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">Projectes actius</h1>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <div class="rs-inner-blog pt-70 pb-120 md-pt-50 md-pb-90">
        <div class="container">
            <div class="row">
                @foreach ( $projectes as $projecte )
                    <div class="col-lg-4 mb-35">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="{{ route('frontend.projectes.show', ['projecte' => $projecte->slug]) }}" >
                                    <img src="{{ asset("/storage/$projecte->imatge1") }}" alt="{!! $projecte->titol !!}, Escola 30 pasos">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h5 class="blog-title">
                                    <a href="{{ route('frontend.projectes.show', ['projecte' => $projecte->slug]) }}" >
                                        {!! $projecte->titol !!}
                                    </a>
                                </h5>
                                <br><br>
                                {{-- <div class="blog-desc">
                                    <a href="{{ route('frontend.projectes.show', ['projecte' => $projecte->slug]) }}" >
                                        {{ Str::of( html_entity_decode(strip_tags($projecte->descripcio)) )->limit(150, '...') }}
                                    </a>   
                                </div> --}}
                                <div class="blog-button inner-blog">
                                    <a class="blog-btn" href="{{ route('frontend.projectes.show', ['projecte' => $projecte->slug]) }}" >
                                        Més informació
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                {{ $projectes->links() }}
            </div>
        </div>
    </div>

@endsection

