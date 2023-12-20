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
    <section class="page-banner" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3)), url('{{ url('') }}/assets/img/about-company.webp');">
        <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">@if(isset($h1)) {{$h1}} @endif</h1>
    </section>
@endif
<section class="container mt-5">
    <span class="span-h2 text-center w-100 d-inline-block">{{ __("Vom Schwarzwald in die Welt")}}</span>
    <hr>
    <div class="text-center">
        <img src="{{ url('assets/img/map.webp') }}" alt="Irion GmbH, Schwarzeald, Deutschland, Weltweit" class="world-map">
    </div>
    <div class="row">
        <div class="col-md-6 p-md-5">
            <div class="mb-5">
                <span class="span-h2">{{ __("Jahrelang vertrauen unserem Schweißunternehmen…")}}</span>
                <ul>
                    <li>{{ __("Ausgewählte Partner der Automobilindustrie")}}</li>
                    <li>{{ __("Renommierte Stahl- und Maschinenbauer")}}</li>
                    <li>{{ __("Öffentliche Einrichtungen aus Kunst und Kultur")}}</li>
                    <li>{{ __("Premiumhersteller aus Anlagenbau & Fördertechnik")}}</li>
                    <li>{{ __("Führende Land- und Baumaschinenhersteller")}}</li>
                </ul>
            </div>
            <div class="mb-3">
                <span class="span-h2">{{ __("Historie")}}</span>
                <p align="justify">{{ __("Gegründet wurde das Schweißunternehmen 1926 durch Herrn Matthäus Irion. Die Familie Hahn akquirierte im Jahre 1978 die Matthäus Irion GmbH & Co. KG. Ab 1986 führte der studierte Maschinenbauer Eberhardt Hahn das Unternehmen, 2018 übernahmen die beiden Wirtschaftsingenieure und Flugtechniker Bernd Fleissinger und Stefan Tschirk das Schweißunternehmen.")}}</p>
                <p align="justify">{{ __("Ab 1979 entwickelte sich der Geschäftsbereich hin zur Fertigung von Transport- und Lagerbehältern vorwiegend für die Fahrzeugindustrie. Ab Anfang der 80er Jahre kam die Belieferung der Fördertechnik-Industrie mit Komponenten für deren Anlagen hinzu. Heute bedient IRION Kunden aus den Bereichen Automotive, Bau, Agrar Kultur, Logistik, Medizin- und Lebensmitteltechnik mit anforderungsvollen Schweiß-Fräs Kombinationen in Stückzahl von 30 bis 1.000 Stück.")}}</p>
            </div>
        </div>
        <div class="col-md-6 p-md-5">
            <div class="mb-5">
                <span class="span-h2">{{ __("Referenzen")}}</span>
                <p align="justify">{{ __("Durch ein gleichbleibend hohes Qualitätsniveau, professionelle Auftragsabwicklung und termingetreue Lieferung sind wir für unsere Kunden immer wieder erste Wahl im Vergleich zum Wettbewerb.")}}</p>
                <p align="justify">{{ __("Einen Auszug aus unserer Kundenliste, die viele Unternehmen mit Rang und Namen umfasst, erhalten Sie auf Anfrage.")}}</p>
            </div>
            <div class="mb-3">
                <span class="span-h2">{{ __("Zahlen, Daten, Fakten")}}</span>
                <p align="justify">{{ __("Aktuell beschäftigt die IRION GmbH 40 motivierte Köpfe in Verwaltung und Produktion. Die Produktionsfläche beträgt ca. 3500 qm.")}}</p>
                <p align="justify">{{ __("Der Maschinenpark besteht aus Schweißrobotern sowie teilmechanischen Schweißanlagen für verschiedene Lichtbogenschweißverfahren, CNC gesteuerten Maschinen für Bohr- und Fräsarbeiten, Drehmaschinen, Abkantpressen, Biegemaschinen und Sägeautomaten sowie zahlreichen Manipulationsanlagen.")}}</p>
            </div>
        </div>
    </div>
</section>

<!-- @include('contact-now') -->
@include('conversion-contact')
@endsection
