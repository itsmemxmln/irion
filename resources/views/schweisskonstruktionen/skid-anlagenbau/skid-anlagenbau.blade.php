@extends('layout')

@section('title', __("Skid Anlagenbau – Skid System Fertigung für die Industrie"))

@if (app()->getLocale() == "de")
@section('keywords','irion, irion gmbh, Entwicklung, Konstruktion, Konstruktionsoptimierung, Berechnung,
CE-Dokumentation, FMEA, Vorrichtungsbau, Projektspezifische, getaktete Flusslinien, Pressen, Elektrik, Pneumatik,
Vorrichtungsbau, Projektspezifische, getaktete Montage, Demontage, Wartung, Flusslinien, Pressen, Elektrik, Pneumatik,
CNC Schweißen, CNC Schweißen, Laserschnitt, Biegen / Kanten')
@section('description','Skid Anlagenbau ✓ 30 bis 5000 Stück ☆ Automobilindustrie ☆ Transfersysteme ☆ Sonderladungsträger ➨ Skid Systeme für die Industrie!')
@else
@section('keywords','irion, irion gmbh, Construction, Construction optimization, Calculation, CE documentation, FMEAMAG
/ MIG, CNC milling, Conventional cutting, Laser cutting, Flame cutting, Waterjet cutting, Bending / Edging, CNC turning,
All proportions, 3-/4-/5-axis machining, WIG, Robotic applications, Weld inspection, Therm. / mech. straightening')
@section('description','Our value network - a guarantee for your high-performance product! Competent consultation is the
very beginning of our cooperation. Tell us about your project and we will find a flexible and tailor-made solution to
your request.')
@endif



@section('content')
<section class="page-banner"
    style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/zuschnitt2.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">
        {{ __("Skid Anlagenbau") }}</h1>
</section>

<section class="container">
    <div class="container my-5">
        <div class="row align-items-center rounded-0 border shadow-lg ">
            <div class="col-lg-12 p-5 center">
                <p style="text-align:center">
                    Irion bietet den Skid Anlagenbau für die Automobilindustrie sowie individuelle Transfersysteme und Sonderladungsträger für die Industrie. Wir fertigen Ihr maßgeschneidertes Skid System im Projektgeschäft von 30 bis 5000 Stück in konstant hoher Qualität.
                </p>
                <strong>Beispiele</strong>
                <ul>
                    <li><a href="{{ url('schweisskonstruktionen/skid-anlagenbau/skid-automobilindustrie')}}">Skid Automobilindustrie</a></li>
                    <li><a href="{{ url('schweisskonstruktionen/skid-anlagenbau/foerdertechnik-automobilindustrie')}}">Fördertechnik Automobilindustrie</a></li>
                    <li><a href="{{ url('schweisskonstruktionen/skid-anlagenbau/hersteller-sonderladungstraeger')}}">Sonderladungsträger</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>




<!-- @include('contact-now') -->
@include('conversion-contact')
@endsection