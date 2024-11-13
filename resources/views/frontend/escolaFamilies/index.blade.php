@extends('frontend.layouts.app')

@section('content')

    <div class="rs-breadcrumbs img2">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">Escola familia</h1>
        </div>
    </div>

    <div class="rs-industry pt-80 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mb-20">
                    {{ $escolaFamilia->titol }}
                </div>
                <div class="col-sm-12">
                    {!! $escolaFamilia->descripcio !!}
                </div>
            </div>
            <div class="row mt-70">
                <div class="col-sm-7">
                    {!! $escolaFamilia->descripcio_1 !!}
                </div>
                <div class="col-sm-5">
                    <img src="{{ asset("/storage/$escolaFamilia->imatge1") }}" alt="Escola Familia Insitut Escola Els 30 Passos">
                </div>
            </div>
            <div class="row mt-70">
                <div class="col-sm-7">
                    {!! $escolaFamilia->descripcio_2 !!}
                </div>
                <div class="col-sm-5">
                    <img src="{{ asset("/storage/$escolaFamilia->imatge2") }}" alt="Escola Familia Insitut Escola Els 30 Passos">
                </div>
            </div>
            <div class="row mt-70">
                <div class="col-sm-7">
                    {!! $escolaFamilia->descripcio_3 !!}
                </div>
                <div class="col-sm-5">
                    <img src="{{ asset("/storage/$escolaFamilia->imatge3") }}" alt="Escola Familia Insitut Escola Els 30 Passos">
                </div>
            </div>
            <div class="row mt-70">
                <div class="col-sm-7">
                    {!! $escolaFamilia->descripcio_4 !!}
                </div>
                <div class="col-sm-5">
                    <img src="{{ asset("/storage/$escolaFamilia->imatge4") }}" alt="Escola Familia Insitut Escola Els 30 Passos">
                </div>
            </div>
        </div>
        <br>


    </div>

@endsection