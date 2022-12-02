@extends('layout')

@section('title', __("Kompetenzen / Leistungen der Irion GmbH"))

@if (app()->getLocale() == "de")
    @section('description','Unser Wertschöpfungsnetzwerk - die Garantie für Ihr Hochleistungsprodukt! Kompetente Beratung steht bei uns am Beginn der Zusammenarbeit. Stellen Sie uns Ihr Projekt vor und wir suchen und finden flexibel und maßgeschneidert die Lösung für Ihr Anliegen.')
@elseif (app()->getLocale() == "en-US")
    @section('description','Our value network - a guarantee for your high-performance product! Competent consultation is the very beginning of our cooperation. Tell us about your project and we will find a flexible and tailor-made solution to your request.')
@else
    @section('description','Our value network - a guarantee for your high-performance product! Competent consultation is the very beginning of our cooperation. Tell us about your project and we will find a flexible and tailor-made solution to your request.')
@endif

@section('head')
<!-- Lang -->
<link rel="alternate" hreflang="x-default" href="https://irion.de/en/competences" />
<link rel="alternate" hreflang="de" href="https://irion.de/kompetenzen" />
<link rel="alternate" hreflang="en" href="https://irion.de/en/competences" />
@endsection


@section('content')
<section class="page-banner" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/home/skids/3.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">{{ __("Kompetenzen") }}</h1>
</section>
<section class="container">
    <h2 class="h2 mt-5 text-center">{{ __("Unser Wertschöpfungsnetzwerk")}}<br>- {{ __("die Garantie für Ihr Hochleistungsprodukt")}}!</h2>
    <div class="leistungen">
        <div class="row justify-content-center mt-5">
            <div class="card col-md-3 mb-5">
                <img src="{{ url('assets/img/dev.webp') }}" class="card-img-top" alt="Konstruktion, Entwicklung, Berechnung, FMEA">
                <span class="card-header h5">{{ __("Entwicklung") }}</span>
                <div class="card-body">
                    <ul>
                        <li>{{ __("Konstruktion") }}</li>
                        <li>{{ __("Konstruktionsoptimierung") }}</li>
                        <li>{{ __("Berechnung") }}</li>
                        <li>{{ __("CE-Dokumentation") }}</li>
                        <li>{{ __("FMEA") }}</li>
                    </ul>
                </div>
                @if (app()->getLocale() == "de")
                <div class="card-footer">
                    <div class="text-center">
                        <a class="btn btn-primary my-2 stretched-link" href="entwicklung">{{ __("Mehr erfahren") }}</a>
                    </div>
                </div>
                @endif
            </div>
            <div class="card col-md-3 mb-5">
                <img src="{{ url('assets/img/zuschnitt2.webp') }}" class="card-img-top" alt="CNC Schweißen">
                <span class="card-header h5">{{ __("Zuschnitt") }}</span>
                <div class="card-body">
                    <ul>
                        <li>{{ __("Konventioneller Zuschnitt") }}</li>
                        <li>{{ __("Laserschnitt") }}</li>
                        <li>{{ __("Brennschnitt") }}</li>
                        <li>{{ __("Wasserstrahl") }}</li>
                        <li>{{ __("Biegen / Kanten") }}</li>
                    </ul>
                </div>
                @if (app()->getLocale() == "de")
                <div class="card-footer">
                    <div class="text-center">
                        <a class="btn btn-primary my-2 stretched-link" href="zuschnitt">{{ __("Mehr erfahren") }}</a>
                    </div>
                </div>
                @endif
            </div>
            <div class="card col-md-3 mb-5">
                <img src="{{ url('assets/img/bg-5.webp') }}" class="card-img-top" alt="CNC Schweißen">
                <span class="card-header h5">{{ __("Zerspanung") }}</span>
                <div class="card-body">
                    <ul>
                        <li>{{ __("CNC-Fräsen") }}</li>
                        <li>{{ __("CNC-Drehen") }}</li>
                        <li>{{ __("Alle Dimensionen") }}</li>
                        <li>{{ __("3-/4-/5-Achsenbearbeitung") }}</li>
                    </ul>
                </div>
                @if (app()->getLocale() == "de")
                <div class="card-footer">
                    <div class="text-center">
                        <a class="btn btn-primary my-2 stretched-link" href="zerspanung">{{ __("Mehr erfahren") }}</a>
                    </div>
                </div>
                @endif
            </div>
            <div class="card col-md-3 mb-5">
                <img src="{{ url('assets/img/home/schweissbaugruppen/0.webp') }}" class="card-img-top" alt="MAG / MIG, WIG, Roboteranwendungen, Schweißnahtprüfung, Therm. / mech. Richten">
                <span class="card-header h5">{{ __("Schweißen") }}</span>
                <div class="card-body">
                    <ul>
                        <li>{{ __("MAG / MIG") }}</li>
                        <li>{{ __("WIG") }}</li>
                        <li>{{ __("Roboteranwendungen") }}</li>
                        <li>{{ __("Schweißnahtprüfung") }}</li>
                        <li>{{ __("Therm. / mech. Richten") }}</li>
                    </ul>
                </div>
                @if (app()->getLocale() == "de")
                <div class="card-footer">
                    <div class="text-center">
                        <a class="btn btn-primary my-2 stretched-link" href="schweissen">{{ __("Mehr erfahren") }}</a>
                    </div>
                </div>
                @endif
            </div>
            <div class="card col-md-3 mb-5">
                <img src="{{ url('assets/img/clean.webp') }}" class="card-img-top" alt="CNC Schweißen">
                <span class="card-header h5">{{ __("Reinigen") }}</span>
                <div class="card-body">
                    <ul>
                        <li>{{ __("Entlacken") }}</li>
                        <li>{{ __("Sandstrahlen") }}</li>
                        <li>{{ __("Gleitschleifen / Trowalisieren") }}</li>
                    </ul>
                </div>
                @if (app()->getLocale() == "de")
                <div class="card-footer">
                    <div class="text-center">
                        <a class="btn btn-primary my-2 stretched-link" href="reinigung">{{ __("Mehr erfahren") }}</a>
                    </div>
                </div>
                @endif
            </div>
            <div class="card col-md-3 mb-5">
                <img src="{{ url('assets/img/gluehen.webp') }}" class="card-img-top" alt="CNC Schweißen">
                <span class="card-header h5">{{ __("Wärmebehandlung") }}</span>
                <div class="card-body">
                    <ul>
                        <li>{{ __("Glühen") }}</li>
                        <li>{{ __("Nitrieren / Carbonitrieren") }}</li>
                        <li>{{ __("Härten") }}</li>
                        <li>{{ __("Vergüten") }}</li>
                    </ul>
                </div>
                @if (app()->getLocale() == "de")
                <div class="card-footer">
                    <div class="text-center">
                        <a class="btn btn-primary my-2 stretched-link" href="waermebehandlung">{{ __("Mehr erfahren") }}</a>
                    </div>
                </div>
                @endif
            </div>
            <div class="card col-md-3 mb-5">
                <img src="{{ url('assets/img/home/oberflaechen/1.webp') }}" class="card-img-top" alt="CNC Schweißen">
                <span class="card-header h5">{{ __("Oberfläche") }}</span>
                <div class="card-body">
                    <ul>
                        <li>{{ __("Nasslack") }}</li>
                        <li>{{ __("Pulverbeschichten") }}</li>
                        <li>{{ __("KTL") }}</li>
                        <li>{{ __("Öl") }}</li>
                        <li>{{ __("Schutzwachs") }}</li>
                    </ul>
                </div>
                @if (app()->getLocale() == "de")
                <div class="card-footer">
                    <div class="text-center">
                        <a class="btn btn-primary my-2 stretched-link" href="oberflaeche">{{ __("Mehr erfahren") }}</a>
                    </div>
                </div>
                @endif
            </div>
            <div class="card col-md-3 mb-5">
                <img src="{{ url('assets/img/home/foerdertechnik/0.webp') }}" class="card-img-top" alt="Vorrichtungsbau, Projektspezifische, getaktete Flusslinien, Pressen, Elektrik, Pneumatik">
                <span class="card-header h5">{{ __("Montage") }}</span>
                <div class="card-body">
                    <ul>
                        <li>{{ __("Vorrichtungsbau") }}</li>
                        <li>{{ __("Projektspezifische, getaktete Montage, Demontage, Wartung") }}</li>
                        <li>{{ __("Flusslinien") }}</li>
                        <li>{{ __("Pressen") }}</li>
                        <li>{{ __("Elektrik, Pneumatik") }}</li>
                    </ul>
                </div>
                @if (app()->getLocale() == "de")
                <div class="card-footer">
                    <div class="text-center">
                        <a class="btn btn-primary my-2 stretched-link" href="montage">{{ __("Mehr erfahren") }}</a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

@include('counter')

<!-- @include('contact-now') -->
@include('conversion-contact')

@endsection
