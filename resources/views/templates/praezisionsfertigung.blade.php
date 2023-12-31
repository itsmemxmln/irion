@extends('layout')

@section('title', isset($meta_title) ? $meta_title : "")
@section('description', isset($meta_description) ? $meta_description : "")

@section('head')
@if (isset($hreflang))
    {{-- LANG --}}
    {!!$hreflang!!}
@endif
@endsection


@section('content')
@if(isset($img_src) && $img_src != '' && file_exists(public_path("/assets/img/landingpages/".$img_src)))  {{-- Landing Image --}}
    @include('templates.partial.landingimage')
@else
    <section class="page-banner" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/home/skids/3.webp');">
        <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">@if (isset($h1)){!!$h1!!}@endif</h1>
    </section>
@endif
<section class="container">
    <div class="container my-5">
        <div class="row align-items-center rounded-0 border shadow-lg ">
            <div class="col-lg-12 p-5 center">
                <p style="text-align:center">
                    @if (isset($seo1)){!!$seo1!!}@endif
                </p>
            </div>
        </div>
    </div>
</section>
@if(Request::is('praezisionsfertigung') || Request::is('us/precision-manufacturer') || Request::is('en/precision-manufacturing'))
<section class="container">
    <span class="span-h2 mt-5 text-center d-inline-block w-100">{{ __("Unser Wertschöpfungsnetzwerk")}}<br>- {{ __("die Garantie für Ihr Hochleistungsprodukt")}}!</span>
    <div class="leistungen">
        <div class="row justify-content-center mt-5">
            <div class="card col-md-3 mb-5">
                <img src="{{ url('assets/img/praezisionsfertigung/praezisionsfertigung-mechanische-konstruktion.webp') }}" class="card-img-top" alt="Konstruktion, Entwicklung, Berechnung, FMEA">
                <span class="card-header h5">{{ __("Mechanische Konstruktion" ) }}</span>
                <div class="card-body">
                    <ul>
                        <li>{{ __("Konstruktion") }}</li>
                        <li>{{ __("Konstruktionsoptimierung") }}</li>
                        <li>{{ __("Berechnung") }}</li>
                        <li>{{ __("CE-Dokumentation") }}</li>
                        <li>{{ __("FMEA") }}</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        <a class="btn btn-primary my-2 stretched-link" href="{{__('/praezisionsfertigung/mechanische-konstruktion')}}">{{ __("Mehr erfahren") }}</a>
                    </div>
                </div>
            </div>
            
            <div class="card col-md-3 mb-5">
                <img src="{{ url('assets/img/praezisionsfertigung/praezisionsfertigung-roboterschweissen.webp') }}" class="card-img-top" alt="CNC Schweißen">
                <span class="card-header h5">{{ __( "Roboterschweißen") }}</span>
                <div class="card-body">
                    <ul>
                        <li>{{ __("Automatisiertes Schweißen") }}</li>
                        <li>{{ __("High-Tech-Roboter") }}</li>
                        <li>{{ __("Computergesteuerte Offline-Simulation") }}</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        <a class="btn btn-primary my-2 stretched-link" href="{{__('/praezisionsfertigung/roboterschweissen')}}">{{ __("Mehr erfahren") }}</a>
                    </div>
                </div>
            </div>

            <div class="card col-md-3 mb-5">
                <img src="{{ url('assets/img/praezisionsfertigung/praezisionsfertigung-praezisionsschneiden.webp') }}" class="card-img-top" alt="CNC Schweißen">
                <span class="card-header h5">{{ __( "Präzisionsschneiden") }}</span>
                <div class="card-body">
                    <ul>
                        <li>{{ __("Konventioneller Zuschnitt") }}</li>
                        <li>{{ __("Laserschnitt") }}</li>
                        <li>{{ __("Brennschnitt") }}</li>
                        <li>{{ __("Biegen / Kanten") }}</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        <a class="btn btn-primary my-2 stretched-link" href="{{__('/praezisionsfertigung/praezisionsschneiden')}}">{{ __("Mehr erfahren") }}</a>
                    </div>
                </div>
            </div>
            <div class="card col-md-3 mb-5">
                <img src="{{ url('assets/img/praezisionsfertigung/praezisionsfertigung-praezisionszerspanung.webp') }}" class="card-img-top" alt="CNC Schweißen">
                <span class="card-header h5">{{ __( "Präzisionszerspanung") }}</span>
                <div class="card-body">
                    <ul>
                        <li>{{ __("CNC-Fräsen") }}</li>
                        <li>{{ __("CNC-Drehen") }}</li>
                        <li>{{ __("Alle Dimensionen") }}</li>
                        <li>{{ __("3-/4-/5-Achsenbearbeitung") }}</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        <a class="btn btn-primary my-2 stretched-link" href="{{__('/praezisionsfertigung/praezisionszerspanung')}}">{{ __("Mehr erfahren") }}</a>
                    </div>
                </div>
            </div>
            <div class="card col-md-3 mb-5">
                <img src="{{ url('assets/img/praezisionsfertigung/praezisionsfertigung-praezisionsschweissen.webp') }}" class="card-img-top" alt="MAG / MIG, WIG, Roboteranwendungen, Schweißnahtprüfung, Therm. / mech. Richten">
                <span class="card-header h5">{{ __( "Präzisionsschweißen") }}</span>
                <div class="card-body">
                    <ul>
                        <li>{{ __("MAG / MIG") }}</li>
                        <li>{{ __("WIG") }}</li>
                        <li>{{ __("Roboteranwendungen") }}</li>
                        <li>{{ __("Schweißnahtprüfung") }}</li>
                        <li>{{ __("Therm. / mech. Richten") }}</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                            <a class="btn btn-primary my-2 stretched-link" href="{{__('/praezisionsfertigung/praezisionsschweissen')}}">{{ __("Mehr erfahren") }}</a>
                    </div>
                </div>
            </div>
            <div class="card col-md-3 mb-5">
                <img src="{{ url('assets/img/praezisionsfertigung/praezisionsfertigung-industrielle-teilereinigung-dienstleistung.webp') }}" class="card-img-top" alt="CNC Schweißen">
                <span class="card-header h5">{{ __( "Industrielle Teilereinigung") }}</span>
                <div class="card-body">
                    <ul>
                        <li>{{ __("Entlacken") }}</li>
                        <li>{{ __("Sandstrahlen") }}</li>
                        <li>{{ __("Gleitschleifen / Trowalisieren") }}</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        <a class="btn btn-primary my-2 stretched-link" href="{{__('/praezisionsfertigung/industrielle-teilereinigung-dienstleistung')}}">{{ __("Mehr erfahren") }}</a>
                    </div>
                </div>
            </div>
            <div class="card col-md-3 mb-5">
                <img src="{{ url('assets/img/praezisionsfertigung/praezisionsfertigung-industrielle-waermebehandlung.webp') }}" class="card-img-top" alt="CNC Schweißen">
                <span class="card-header h5">{{ __( "Industrielle Wärmebehandlung") }}</span>
                <div class="card-body">
                    <ul>
                        <li>{{ __("Glühen") }}</li>
                        <li>{{ __("Nitrieren / Carbonitrieren") }}</li>
                        <li>{{ __("Härten") }}</li>
                        <li>{{ __("Vergüten") }}</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        <a class="btn btn-primary my-2 stretched-link" href="{{__('/praezisionsfertigung/industrielle-waermebehandlung')}}">{{ __("Mehr erfahren") }}</a>
                    </div>
                </div>                
            </div>
            <div class="card col-md-3 mb-5">
                <img src="{{ url('assets/img/praezisionsfertigung/praezisionsfertigung-oberflaechenbeschichtung-stahl.webp') }}" class="card-img-top" alt="CNC Schweißen">
                <span class="card-header h5">{{ __( "Oberflächenbeschichtung") }}</span>
                <div class="card-body">
                    <ul>
                        <li>{{ __("Nasslack") }}</li>
                        <li>{{ __("Pulverbeschichten") }}</li>
                        <li>{{ __("KTL") }}</li>
                        <li>{{ __("Öl") }}</li>
                        <li>{{ __("Schutzwachs") }}</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        <a class="btn btn-primary my-2 stretched-link" href="{{__('/praezisionsfertigung/oberflaechenbeschichtung-stahl')}}">{{ __("Mehr erfahren") }}</a>
                    </div>
                </div>
            </div>

            <div class="card col-md-3 mb-5">
                <img src="{{ url('assets/img/praezisionsfertigung/praezisionsfertigung-pvc-tauchbeschichtung.webp') }}" class="card-img-top" alt="CNC Schweißen">
                <span class="card-header h5">{{ __( "PVC Tauchbeschichtung") }}</span>
                <div class="card-body">
                    <ul>
                        <li>{{ __("Für verschiede Metallteile") }}</li>
                        <li>{{ __("Maßgeschneiderte Lösungen") }}</li>
                        <li>{{ __("Individuelle Beschichtungen") }}</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        <a class="btn btn-primary my-2 stretched-link" href="{{__('/praezisionsfertigung/pvc-tauchbeschichtung')}}">{{ __("Mehr erfahren") }}</a>
                    </div>
                </div>
            </div>

            <div class="card col-md-3 mb-5">
                <img src="{{ url('assets/img/praezisionsfertigung/praezisionsfertigung-baugruppenmontage-maschinenbau.webp') }}" class="card-img-top" alt="Vorrichtungsbau, Projektspezifische, getaktete Flusslinien, Pressen, Elektrik, Pneumatik">
                <span class="card-header h5">{{ __( "Baugruppenmontage") }}</span>
                <div class="card-body">
                    <ul>
                        <li>{{ __("Vorrichtungsbau") }}</li>
                        <li>{{ __("Projektspezifische, getaktete Montage, Demontage, Wartung") }}</li>
                        <li>{{ __("Flusslinien") }}</li>
                        <li>{{ __("Pressen") }}</li>
                        <li>{{ __("Elektrik, Pneumatik") }}</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        <a class="btn btn-primary my-2 stretched-link" href={{ __("/praezisionsfertigung/baugruppenmontage-maschinenbau") }}>{{ __("Mehr erfahren") }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('counter')

@endif

<!-- @include('contact-now') -->
@include('conversion-contact')

@endsection
