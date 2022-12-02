@extends('layout')

@section('title', __("Werkstückträgersysteme – Werkstückträger Transportsystem"))

@if (app()->getLocale() == "de")
@section('keywords','irion, irion gmbh, Entwicklung, Konstruktion, Konstruktionsoptimierung, Berechnung,
CE-Dokumentation, FMEA, Vorrichtungsbau, Projektspezifische, getaktete Flusslinien, Pressen, Elektrik, Pneumatik,
Vorrichtungsbau, Projektspezifische, getaktete Montage, Demontage, Wartung, Flusslinien, Pressen, Elektrik, Pneumatik,
CNC Schweißen, CNC Schweißen, Laserschnitt, Biegen / Kanten')
@section('description','Werkstückträgersysteme aus Stahl ✓ Konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨
Werkstückträger Transportsystem Hersteller!')
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
        {{ __("Werkstückträgersysteme") }}</h1>
</section>

<section class="container">
    <div class="container my-5">
        <div class="row align-items-center rounded-0 border shadow-lg ">
            <div class="col-lg-12 p-5 center">
                <p style="text-align:center">
                    Irion ist ein Hersteller für hochwertige Werkstückträgersysteme aus Stahl.
                    Unsere Transportsysteme erfüllen die speziellen Anforderungen der Industrie und werden in der
                    Logistik, Instandhaltung und Produktion eingesetzt.
                    <br><br>
                    Unser zertifizierter Schweißfachbetrieb liefert Ihr maßgeschneidertes Werkstückträger
                    Transportsystem. Wir stehen für konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.
                </p>
            </div>
        </div>
    </div>
</section>




<!-- @include('contact-now') -->
@include('conversion-contact')
@endsection