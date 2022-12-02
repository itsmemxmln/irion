@extends('layout')

@section('title', __("Skid Automobilindustrie – Skid Fördertechnik Automotive"))

@if (app()->getLocale() == "de")
@section('keywords','irion, irion gmbh, Entwicklung, Konstruktion, Konstruktionsoptimierung, Berechnung,
CE-Dokumentation, FMEA, Vorrichtungsbau, Projektspezifische, getaktete Flusslinien, Pressen, Elektrik, Pneumatik,
Vorrichtungsbau, Projektspezifische, getaktete Montage, Demontage, Wartung, Flusslinien, Pressen, Elektrik, Pneumatik,
CNC Schweißen, CNC Schweißen, Laserschnitt, Biegen / Kanten')
@section('description','Skid Automobilindustrie ✓ 30 bis 5000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Skid Fördertechnik für Automotive!')
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
        {{ __("Skid Automobilindustrie") }}</h1>
</section>

<section class="container">
    <div class="container my-5">
        <div class="row align-items-center rounded-0 border shadow-lg ">
            <div class="col-lg-12 p-5 center">
                <p style="text-align:center">
                    Irion bietet Skid Systeme für die Automobilindustrie.
                    Die Karosserietransportgestelle sind beispielsweise für die spezifischen Anforderungen im Automobil Rohbau und in Lackstraßen ausgelegt. Beipspiele wären Rohbauskids, Tauchskids zur KTL Lackierung, Lackierskids oder eine Skidprüfelehre.
                    <br>
                    Unser zertifizierter Schweißfachbetrieb fertigt maßgeschneiderte Skid Fördertechnik für Automotive von 30 bis 5000 Stück. Wir stehen für konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.
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
                    <li>Fertigung unter Berücksichtigung mechanischer und metallurgischer Aspekte</li>
                    <li>Verschmutzungsresistenz</li>
                    <li>Temperaturbeständigkeit</li>
                    <li>Lasten > 1.000 kg</li>
                    <li>getaktete Montage, Demontage, Wartung</li>
                    <li>Einzelteileanzahl bis ca. 150 Positionen</li>
                    <li>Größe > 4 m</li>
                    <li>Genauigkeit +/- 0,1 mm</li>
                    <li>Eindeutige Identifizierung</li>
                    <li>Mechanisch und elektronisch</li>
                    <li>Fertigungslose bis über 1.000 Stück</li>

                </ul>
                </p>
            </div>
        </div>
    </div>
</section>



<!-- @include('contact-now') -->
@include('conversion-contact')
@endsection
