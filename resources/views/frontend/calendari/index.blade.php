@extends('frontend.layouts.app')

@section('content')

    <div class="rs-breadcrumbs img7">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">{{ $calendari->titol }}</h1>
        </div>
    </div>

    <div class="rs-industry pt-80 pb-120 md-pt-80 md-pb-80">
        <div class="container text-center">
            <img src="{{ asset("/storage/$calendari->imatge") }}" alt="{{ $calendari->titol }} Escola Els 30 Passos"/>
            <br>
            <div class="btn-part mt-55 text-center">
                <a class="readon learn-more" href="{{ asset("/storage/$calendari->pdf") }}" target="_blank">Descarregar en format PDF</a>
            </div>
        </div>
    </div>

@endsection