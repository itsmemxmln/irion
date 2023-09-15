@extends('layout')

@section('title', __("Zertifikate der Irion GmbH"))

@if (app()->getLocale() == "de")
    @section('description','Wir arbeiten ständig an der Verschiebung technologischer Grenzen. Bei uns gibt es kein 0815. Wir verbinden Wissen mit Können. Wir schaffen Mehrwerte, die uns von anderen Anbietern unterscheiden und für Sie der Grund sein könnte, unser Kunde werden zu wollen.')
@else
    @section('description','We are constantly working on pushing technological boundaries. There is no run-of-the-mill with us. We combine knowledge with skills. We create added value that sets us apart from other providers and might be the reason for you to want to become our customer.')
@endif


@section('head')
@if (isset($hreflang))
    {{-- LANG --}}
    {!!$hreflang!!}
@endif
    <meta name="robots" content="noindex, follow">
@endsection

@section('content')
<section class="page-banner" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/bg-2.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">{{ __("Zertifikate") }}</h1>
</section>
<section class="container">
    <h2 class="h2 mt-5 text-center">{{ __("Unser Wertschöpfungsnetzwerk")}}<br>- {{ __("die Garantie für Ihr Hochleistungsprodukt")}}!</h2>
    <div id="certificates" class="row justify-content-center mt-5">
        <div class="card col-md-3 col-6 mb-5 animate__animated animate__fadeIn">
            <a class="btn btn-primary btn-lg rounded-0" target="_blank" href="{{ url('schweissunternehmen/en-1090-zertifizierte-betriebe') }}">
                <i class="bi bi-eye"></i>
                <img src="{{ url('assets/certificates/en-1090-zertifizierte-betriebe.webp') }}" class="card-img-top cert-preview" alt="CNC Schweißen">
            </a>
        </div>
        {{-- @if (app()->getLocale() == "de") --}}
        <div class="card col-md-3 col-6 mb-5 animate__animated animate__fadeIn">
            <a class="btn btn-primary btn-lg rounded-0" target="_blank" href="{{ url('schweissunternehmen/konstante-schweissqualitaet') }}">
                <i class="bi bi-eye"></i>
                <img src="{{ url('assets/certificates/konstante-schweissqualitaet.webp') }}" class="card-img-top cert-preview" alt="CNC Schweißen">
            </a>
        </div>
        {{-- @else
        <div class="card col-md-3 col-6 mb-5 animate__animated animate__fadeIn">
            <a class="btn btn-primary btn-lg rounded-0" target="_blank" href="{{ url('assets/certificates/DIN_EN_ISO_3834-2_2021_Zertifikat_2022-2025-englisch.pdf') }}">
                <i class="bi bi-eye"></i>
                <img src="{{ url('assets/certificates/DIN_EN_ISO_3834-2_2021_Zertifikat_2022-2025-englisch-cover.webp') }}" class="card-img-top cert-preview" alt="CNC Schweißen">
            </a>
        </div>
        @endif --}}
        <!-- TÜV Zertifikat -->
        {{-- @if (app()->getLocale() == "de") --}}
        <div class="card col-md-3 col-6 mb-5 animate__animated animate__fadeIn">
            <a class="btn btn-primary btn-lg rounded-0" target="_blank" href="{{ url('schweissunternehmen/qualitaetssicherung-schweissen') }}">
                <i class="bi bi-eye"></i>
                <img src="{{ url('assets/certificates/qualitaetssicherung-schweissen.webp') }}" class="card-img-top" alt="CNC Schweißen">
            </a>
        </div>
        {{-- @else
        <div class="card col-md-3 col-6 mb-5 animate__animated animate__fadeIn">
            <a class="btn btn-primary btn-lg rounded-0" target="_blank" href="{{ url('assets/certificates/en-ISO-9001-2015-Certificate-2019-2022.pdf') }}">
                <i class="bi bi-eye"></i>
                <img src="{{ url('assets/certificates/en-ISO-9001-2015-Certificate-2019-2022-cover.webp') }}" class="card-img-top" alt="CNC Schweißen">
            </a>
        </div>
        @endif --}}
    </div>
    <div class="text-center animate__animated animate__fadeInUp">
        <img src="{{ url('assets/certificates/iso-9001.png') }}" alt="TüV ISO 9001" height="250px" width="250px">
    </div>
</section>

<!-- @include('contact-now') -->
@include('conversion-contact')
@endsection
