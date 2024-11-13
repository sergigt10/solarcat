@extends('frontend.layouts.app')

@section('content')

    <div class="rs-breadcrumbs img4">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">Documents del centre</h1>
        </div>
    </div>

    <div class="rs-industry pt-80 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">
                @if ( $texteDocumentsCentre->descripcio )
                    <div class="col-lg-12 mb-70">
                        {!! $texteDocumentsCentre->descripcio !!}
                    </div>
                @endif
                <div class="col-lg-12">
                    <div class="container">
                        <div class="row">
                            @foreach ($documentsCentre as $documentCentre)
                                <div class="col-lg-4 text-center">
                                    <a href="{{ $documentCentre->url_drive }}" target="_blank">
                                        <img src="{{ asset('frontend/assets/images/pdf.png') }}">
                                        <br>
                                        {{ $documentCentre->titol }}
                                        <br><br><br>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection