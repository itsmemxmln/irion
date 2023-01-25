@extends('layout')

@section('title', trans_fb("welding-fabrications.skid-construction.conveyor-systems-automotive.title"))

@if (app()->getLocale() == "de")
    @section('keywords','irion, irion gmbh, Entwicklung, Konstruktion, Konstruktionsoptimierung, Berechnung,
    CE-Dokumentation, FMEA, Vorrichtungsbau, Projektspezifische, getaktete Flusslinien, Pressen, Elektrik, Pneumatik,
    Vorrichtungsbau, Projektspezifische, getaktete Montage, Demontage, Wartung, Flusslinien, Pressen, Elektrik, Pneumatik,
    CNC Schweißen, CNC Schweißen, Laserschnitt, Biegen / Kanten')
    @section('description','Fördertechnik Automobilindustrie ✓ 30 bis 5000 Stück ☆ Konstant hohe Qualität ☆
    Verantwortungsbewusst ☆ Präzise ➨ Transfersysteme für Automotive!')
@elseif(app()->getLocale() == "en-US")
    @section('keywords','irion, irion gmbh, Construction, Construction optimization, Calculation, CE documentation, FMEAMAG
    / MIG, CNC milling, Conventional cutting, Laser cutting, Flame cutting, Waterjet cutting, Bending / Edging, CNC turning,
    All proportions, 3-/4-/5-axis machining, WIG, Robotic applications, Weld inspection, Therm. / mech. straightening')
    @section('description','Conveyor systems automotive ✓ 30 to 5000 pieces ☆ Contant high quality ☆ Responsible ☆ Precise ➨ Transfer systems for automotive!')
@else
    @section('keywords','irion, irion gmbh, Construction, Construction optimization, Calculation, CE documentation, FMEAMAG
    / MIG, CNC milling, Conventional cutting, Laser cutting, Flame cutting, Waterjet cutting, Bending / Edging, CNC turning,
    All proportions, 3-/4-/5-axis machining, WIG, Robotic applications, Weld inspection, Therm. / mech. straightening')
    @section('description','Our value network - a guarantee for your high-performance product! Competent consultation is the
    very beginning of our cooperation. Tell us about your project and we will find a flexible and tailor-made solution to
    your request.')
@endif

<link rel="alternate" hreflang="de" href="https://irion.de/schweisskonstruktionen/skid-anlagenbau/foerdertechnik-automobilindustrie" />
<link rel="alternate" hreflang="en-US" href="https://irion.de/us/welding-fabrications/skid-construction/conveyor-systems-automotive" />

@section('content')
<section class="page-banner"
    style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/zuschnitt2.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">
        {{ trans_fb("welding-fabrications.skid-construction.conveyor-systems-automotive.h1") }}</h1>
</section>

<section class="container">
    <div class="container my-5">
        <div class="row align-items-center rounded-0 border shadow-lg ">
            <div class="col-lg-12 p-5 center">
                <p style="text-align:center">
                    {!! trans_fb("welding-fabrications.skid-construction.conveyor-systems-automotive.seo") !!}
                </p>
            </div>
        </div>
    </div>
</section>
<section class="container">
    <div class="container my-5">
        <div class="row align-items-center rounded-0 border shadow-lg ">
            <div class="col-lg-12 p-5 center">
                <p style="text-align:center">
                <ul>
                    <li>Fertigung unter Berücksichtigung mechanischer und metallurgischer Aspekte (auch Beschichtung)
                    </li>
                    <li>Verschmutzungsresistenz</li>
                    <li>Temperaturbeständigkeit</li>
                    <li>Lasten ~ 300 kg</li>
                    <li>getaktete Montage, Demontage, Wartung</li>
                    <li>Einzelteileanzahl bis ca. 300 Positionen</li>
                    <li>Größe ca. 2-5m</li>
                    <li>Genauigkeit +/- 0,1 mm</li>
                    <li>Eindeutige Identifizierung</li>
                    <li>Mechanisch und elektronisch</li>
                    <li>Fertigungslose bis ca. 3.000 Stück</li>
                </ul>
                </p>
            </div>
        </div>
    </div>
</section>




<!-- @include('contact-now') -->
@include('conversion-contact')
@endsection