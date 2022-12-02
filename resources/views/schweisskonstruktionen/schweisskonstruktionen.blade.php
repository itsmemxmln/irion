@extends('layout')

@section('title', __("Schweißkonstruktionen – Schweißteile Fertigung seit 1926"))

@if (app()->getLocale() == "de")
@section('keywords','irion, irion gmbh, Entwicklung, Konstruktion, Konstruktionsoptimierung, Berechnung,
CE-Dokumentation, FMEA, Vorrichtungsbau, Projektspezifische, getaktete Flusslinien, Pressen, Elektrik, Pneumatik,
Vorrichtungsbau, Projektspezifische, getaktete Montage, Demontage, Wartung, Flusslinien, Pressen, Elektrik, Pneumatik,
CNC Schweißen, CNC Schweißen, Laserschnitt, Biegen / Kanten')
@section('description','Schweißkonstruktionen ✓ Skids ☆ Lastaufnahmemittel ☆ Maschinenbau ☆ Transportsysteme ☆
Ersatzteile ➨ Schweißteile Fertigung seit 1926!')
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
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">{{ __("Schweißkonstruktionen") }}</h1>
</section>

<section class="container">
    <div class="container my-5">
        <div class="row align-items-center rounded-0 border shadow-lg ">
            <div class="col-lg-12 p-5 center">
                <p style="text-align:center">
                    Irion steht seit 1926 für Schweißkonstruktionen in konstant hoher Qualität wie Skids,
                    Lastaufnahmemittel, Maschinenbau- und Stahlbaukonstruktionen sowie Transportsysteme für die
                    Produktion und Industrie Ersatzteile. Unsere Schweißteile Fertigung ist dabei spezialisiert auf das
                    Projektgeschäft von 30 bis 5000 Stück.
                </p>
                <strong><a href="{{ url('schweisskonstruktionen/skid-anlagenbau')}}">Skid Anlagenbau</a></strong>
                <ul>
                    <li><a href="{{ url('schweisskonstruktionen/skid-anlagenbau/skid-automobilindustrie')}}">Skid Automobilindustrie</a></li>
                    <li><a href="{{ url('schweisskonstruktionen/skid-anlagenbau/foerdertechnik-automobilindustrie')}}">Fördertechnik Automobilindustrie</a></li>
                    <li><a href="{{ url('schweisskonstruktionen/skid-anlagenbau/hersteller-sonderladungstraeger')}}">Sonderladungsträger</a></li>
                </ul>
                <strong><a href="{{ url('schweisskonstruktionen/lastaufnahmemittel-hersteller')}}">Lastaufnahmemittel</a></strong>
                <ul>
                    <li><a href="{{ url('schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlastpaletten-stahl')}}">Schwerlastpaletten</a></li>
                    <li><a href="{{ url('schweisskonstruktionen/lastaufnahmemittel-hersteller/industriebehaelter-metall')}}">Industriebehälter</a></li>
                    <li><a href="{{ url('schweisskonstruktionen/lastaufnahmemittel-hersteller/transportbehaelter-metall')}}">Transportbehälter</a></li>
                    <li><a href="{{ url('schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlasttraversen')}}">Schwerlasttraversen</a></li>
                    <li><a href="{{ url('schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlastboecke')}}">Schwerlastböcke</a></li>
                    <li><a href="{{ url('schweisskonstruktionen/lastaufnahmemittel-hersteller/rungengestelle-hersteller')}}">Rungengestelle</a></li>
                    <li><a href="{{ url('schweisskonstruktionen/lastaufnahmemittel-hersteller/stapelgestelle-hersteller')}}">Stapelgestelle</a></li>
                </ul>
                <strong><a href="{{ url('schweisskonstruktionen/maschinenbau')}}">Maschinenbau</a></strong>
                <ul>
                    <li><a href="{{ url('schweisskonstruktionen/maschinenbau/scherenhubtische-hersteller')}}">Scherenhubtische</a></li>
                    <li><a href="{{ url('schweisskonstruktionen/maschinenbau/schweissgestelle')}}">Schweißgestelle</a></li>
                    <li><a href="{{ url('schweisskonstruktionen/maschinenbau/fahrzeugaufbauten-hersteller')}}">Fahrzeugaufbauten</a></li>
                    <li><a href="{{ url('schweisskonstruktionen/maschinenbau/werkstuecktraegersysteme')}}">Werkstückträgersysteme</a></li>
                </ul>
                <strong><a href="{{ url('schweisskonstruktionen/transportsysteme-produktion')}}">Transportsysteme</a></strong>
                <ul>
                    <li><a href="{{ url('schweisskonstruktionen/transportsysteme-produktion/buehnenwagen')}}">Bühnenwagen</a></li>
                    <li><a href="{{ url('schweisskonstruktionen/transportsysteme-produktion/schwerlast-plattformwagen')}}">Schwerlast Plattformwagen</a></li>
                    <li><a href="{{ url('schweisskonstruktionen/transportsysteme-produktion/elektrohaengebahn-hersteller')}}">Elektrohängebahn</a></li>
                    <li><a href="{{ url('schweisskonstruktionen/transportsysteme-produktion/power-and-free-foerderer')}}">Power and Free Förderer</a></li>
                    <li><a href="{{ url('schweisskonstruktionen/transportsysteme-produktion/kreiskettenfoerderer')}}">Kreiskettenförderer</a></li>
                    <li><a href="{{ url('schweisskonstruktionen/transportsysteme-produktion/unterflurschleppkettenfoerderer')}}">Unterflurschleppkettenförderer</a></li>
                    <li><a href="{{ url('schweisskonstruktionen/transportsysteme-produktion/fahrerlose-transportsysteme-hersteller')}}">Fahrerlose Transportsysteme</a></li>
                </ul>
                <strong><a href="{{ url('schweisskonstruktionen/foerdertechnik-zubehoer-ersatzteile')}}">Zubehör und Ersatzteile</a></strong>
                <ul>
                    <li><a href="{{ url('schweisskonstruktionen/foerdertechnik-zubehoer-ersatzteile')}}">Zubehör und Ersatzteile</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- @include('contact-now') -->
@include('conversion-contact')
@endsection
