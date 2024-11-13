@extends('frontend.layouts.app')

@section('content')

    <div class="rs-breadcrumbs img3">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">Menú migdia</h1>
        </div>
    </div>

    <div class="rs-about pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 pr-40 md-pr-15 md-mb-50">
                    <div class="sec-title4">
                        <h2 class="title">Menú de l'Espai Migdia</h2>
                        <br>
                        <div class="desc">
                            @foreach ($menus as $menu)
                                <a href="{{ asset("/storage/$menu->pdf") }}" target="_blank"> 
                                    <h5> {{ $menu->titol }} </h5>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="software-img">
                        <img src="{{ asset('frontend/assets/images/1.jpg') }}" alt="Escola Els 30 Passos">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection