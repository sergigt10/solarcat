@extends('frontend.layouts.app')

@section('content')

    <div class="rs-breadcrumbs img5">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">{{ $projectes->titol }}</h1>
        </div>
    </div>

    <div class="rs-industry pt-80 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    {!! $projectes->descripcio_1 !!}
                </div>

                <div class="col-lg-12">
                    <b>Els nostres pilars</b>
                    <br><br>
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{ asset("/storage/$projectes->imatge_pilar_1") }}">
                            <p class="mt-50">
                                {!! $projectes->descripcio_pilar_1 !!}
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <img src="{{ asset("/storage/$projectes->imatge_pilar_2") }}">
                            <p class="mt-50">
                                {!! $projectes->descripcio_pilar_2 !!}
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <img src="{{ asset("/storage/$projectes->imatge_pilar_3") }}">
                            <p class="mt-50">
                                {!! $projectes->descripcio_pilar_3 !!}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mt-20">
                    {!! $projectes->descripcio_2 !!}
                </div>

            </div>
        </div>
    </div>

@endsection