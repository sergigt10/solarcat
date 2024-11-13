@extends('frontend.layouts.app')

@section('content')

    <div class="rs-breadcrumbs img1">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">Equip humà</h1>
        </div>
    </div>

    <div class="rs-industry pt-80 pb-120 md-pt-80 md-pb-80">

        @if (!$equipAdministracio->isEmpty())
            <div class="container">
                <div class="sec-title2 text-center mb-45">
                    <h2 class="title">
                        Personal d'administració i serveis
                    </h2>
                </div>
                <div class="all-services">
                    @foreach ($equipAdministracio as $equip)
                        <div class="services-item">
                            <div class="services-wrap">
                                <div class="services-icon">
                                    <img src="{{ asset("/storage/$equip->foto") }}" alt="Escola Els 30 Passos">
                                </div>
                                <div class="services-text">
                                    <h4 class="title">{{ $equip->nom }}</h4> 
                                    <h5 style="font-size: 12px ;" class="title">{{ $equip->carrec }} <br> {{ $equip->mail }}</h5> 
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <br>
        @endif
        
        @if (!$equipInfantil->isEmpty())
            <div class="container">
                <div class="sec-title2 text-center mb-45">
                    <h2 class="title">
                        Equip docent d'infantil
                    </h2>
                </div>
                <div class="all-services">
                    @foreach ($equipInfantil as $equip)
                        <div class="services-item">
                            <div class="services-wrap">
                                <div class="services-icon">
                                    <img src="{{ asset("/storage/$equip->foto") }}" alt="Escola Els 30 Passos">
                                </div>
                                <div class="services-text">
                                    <h4 class="title">{{ $equip->nom }}</h4> 
                                    <h5 style="font-size: 12px ;" class="title">{{ $equip->carrec }} <br> {{ $equip->mail }}</h5> 
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <br>
        @endif
        
        @if (!$equipPrimaria->isEmpty())
            <div class="container">
                <div class="sec-title2 text-center mb-45">
                    <h2 class="title">
                        Equip docent de primària
                    </h2>
                </div>
                <div class="all-services">
                    @foreach ($equipPrimaria as $equip)
                        <div class="services-item">
                            <div class="services-wrap">
                                <div class="services-icon">
                                    <img src="{{ asset("/storage/$equip->foto") }}" alt="Escola Els 30 Passos">
                                </div>
                                <div class="services-text">
                                    <h4 class="title">{{ $equip->nom }}</h4> 
                                    <h5 style="font-size: 12px ;" class="title">{{ $equip->carrec }} <br> {{ $equip->mail }}</h5> 
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <br>
        @endif
        
        @if (!$equipEspecial->isEmpty())
            <div class="container">
                <div class="sec-title2 text-center mb-45">
                    <h2 class="title">
                        Mestres especialistes
                    </h2>
                </div>
                <div class="all-services">
                    @foreach ($equipEspecial as $equip)
                        <div class="services-item">
                            <div class="services-wrap">
                                <div class="services-icon">
                                    <img src="{{ asset("/storage/$equip->foto") }}" alt="Escola Els 30 Passos">
                                </div>
                                <div class="services-text">
                                    <h4 class="title">{{ $equip->nom }}</h4>
                                    <h5 style="font-size: 12px ;" class="title">{{ $equip->carrec }} <br> {{ $equip->mail }}</h5> 
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <br>
        @endif
        
    </div>

@endsection