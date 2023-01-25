@extends('layout')

@section('title', trans_fb("welding-fabrications.lifting-eq-ma.title"))

@if (app()->getLocale() == "de")
    @section('keywords','irion, irion gmbh, Entwicklung, Konstruktion, Konstruktionsoptimierung, Berechnung,
    CE-Dokumentation, FMEA, Vorrichtungsbau, Projektspezifische, getaktete Flusslinien, Pressen, Elektrik, Pneumatik,
    Vorrichtungsbau, Projektspezifische, getaktete Montage, Demontage, Wartung, Flusslinien, Pressen, Elektrik, Pneumatik,
    CNC Schweißen, CNC Schweißen, Laserschnitt, Biegen / Kanten')
    @section('description','Lastaufnahmemittel Hersteller ✓ Schwerlast ☆ Paletten ☆ Gestelle ☆ Traversen ☆ Behälter ➨
    Lastaufnahmemittel und Behälterbau mit Stahl!')
@elseif(app()->getLocale() == "en-US")
    @section('keywords','irion, irion gmbh, Construction, Construction optimization, Calculation, CE documentation, FMEAMAG
    / MIG, CNC milling, Conventional cutting, Laser cutting, Flame cutting, Waterjet cutting, Bending / Edging, CNC turning,
    All proportions, 3-/4-/5-axis machining, WIG, Robotic applications, Weld inspection, Therm. / mech. straightening')
    @section('description','Lifting equipment manufacturer ✓ Pallets ☆ Racks ☆ Cross beams ➨ Load handling equipment and container construction with steel!')
@else
    @section('keywords','irion, irion gmbh, Construction, Construction optimization, Calculation, CE documentation, FMEAMAG
    / MIG, CNC milling, Conventional cutting, Laser cutting, Flame cutting, Waterjet cutting, Bending / Edging, CNC turning,
    All proportions, 3-/4-/5-axis machining, WIG, Robotic applications, Weld inspection, Therm. / mech. straightening')
    @section('description','Our value network - a guarantee for your high-performance product! Competent consultation is the
    very beginning of our cooperation. Tell us about your project and we will find a flexible and tailor-made solution to
    your request.')
@endif

@section('head')
<!-- Lang -->
<link rel="alternate" hreflang="de" href="https://irion.de/schweisskonstruktionen/lastaufnahmemittel-hersteller" />
<link rel="alternate" hreflang="en-US" href="https://irion.de/us/welding-fabrications/lifting-equipment-manufacturer" />
@endsection

@section('content')
<section class="page-banner"
    style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/zuschnitt2.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">
        {{ trans_fb("welding-fabrications.lifting-eq-ma.h1") }}</h1>
</section>

<section class="container">
    <div class="container my-5">
        <div class="row align-items-center rounded-0 border shadow-lg ">
            <div class="col-lg-12 p-5 center">
                <p style="text-align:center">
                    {!! trans_fb("welding-fabrications.lifting-eq-ma.seo") !!}
                </p>
                @if (app()->getLocale() == "de")
                    <strong>Beispiele</strong>
                    <ul>
                        <li><a href="{{ url('schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlastpaletten-stahl')}}">Schwerlastpaletten</a></li>
                        <li><a href="{{ url('schweisskonstruktionen/lastaufnahmemittel-hersteller/industriebehaelter-metall')}}">Industriebehälter</a></li>
                        <li><a href="{{ url('schweisskonstruktionen/lastaufnahmemittel-hersteller/transportbehaelter-metall')}}">Transportbehälter</a></li>
                        <li><a href="{{ url('schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlasttraversen')}}">Schwerlasttraversen</a></li>
                        <li><a href="{{ url('schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlastboecke')}}">Schwerlastböcke</a></li>
                        <li><a href="{{ url('schweisskonstruktionen/lastaufnahmemittel-hersteller/rungengestelle-hersteller')}}">Rungengestelle</a></li>
                        <li><a href="{{ url('schweisskonstruktionen/lastaufnahmemittel-hersteller/stapelgestelle-hersteller')}}">Stapelgestelle</a></li>
                    </ul>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- @include('contact-now') -->
@include('conversion-contact')
@endsection
