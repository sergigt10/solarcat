@extends('frontend.layouts.app')

@section('content')

    <div class="rs-breadcrumbs img8">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">{{ $serveisEducatius->titol }}</h1>
        </div>
    </div>

    <div class="rs-industry pt-80 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>{!! $serveisEducatius->descripcio !!}</p>
                </div>
            </div>
        </div>
    </div>

@endsection