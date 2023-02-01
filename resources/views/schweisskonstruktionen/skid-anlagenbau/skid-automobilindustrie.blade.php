@extends('layout')

@section('title', trans_fb("welding-fabrications.skid-construction.skid-automotive.title"))

@if (app()->getLocale() == "de")
    @section('keywords','irion, irion gmbh, Entwicklung, Konstruktion, Konstruktionsoptimierung, Berechnung,
    CE-Dokumentation, FMEA, Vorrichtungsbau, Projektspezifische, getaktete Flusslinien, Pressen, Elektrik, Pneumatik,
    Vorrichtungsbau, Projektspezifische, getaktete Montage, Demontage, Wartung, Flusslinien, Pressen, Elektrik, Pneumatik,
    CNC Schweißen, CNC Schweißen, Laserschnitt, Biegen / Kanten')
    @section('description','Skid Automobilindustrie ✓ 30 bis 5000 Stück ☆ konstant hohe Qualität ☆ Verantwortungsbewusst ☆ Präzise ➨ Skid Fördertechnik für Automotive!')
@elseif(app()->getLocale() == "en-US")
    @section('keywords','irion, irion gmbh, Construction, Construction optimization, Calculation, CE documentation, FMEAMAG
    / MIG, CNC milling, Conventional cutting, Laser cutting, Flame cutting, Waterjet cutting, Bending / Edging, CNC turning,
    All proportions, 3-/4-/5-axis machining, WIG, Robotic applications, Weld inspection, Therm. / mech. straightening')
    @section('description','Welding fabrications ✓ Skids ☆ Mechanical engineering ☆ Transport systems ☆ Industry spare parts ➨ Get more information now!')
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
<link rel="alternate" hreflang="de" href="https://irion.de/schweisskonstruktionen/skid-anlagenbau/skid-automobilindustrie" />
<link rel="alternate" hreflang="en-US" href="https://irion.de/us/welding-fabrications/skid-construction/skid-automotive" />
@endsection

@section('content')
<section class="page-banner"
    style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/zuschnitt2.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">
        {{ trans_fb("welding-fabrications.skid-construction.skid-automotive.h1") }}</h1>
</section>

<section class="container">
    <div class="container my-5">
        <div class="row align-items-center rounded-0 border shadow-lg ">
            <div class="col-lg-12 p-5 center">
                <p style="text-align:center">
                    {!! trans_fb("welding-fabrications.skid-construction.skid-automotive.seo") !!}
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
                        <li>{!! trans_fb("welding-fabrications.skid-construction.skid-automotive.seoLower.1") !!}</li>
                        <li>{!! trans_fb("welding-fabrications.skid-construction.skid-automotive.seoLower.2") !!}</li>
                        <li>{!! trans_fb("welding-fabrications.skid-construction.skid-automotive.seoLower.3") !!}</li>
                        <li>{!! trans_fb("welding-fabrications.skid-construction.skid-automotive.seoLower.4") !!}</li>
                        <li>{!! trans_fb("welding-fabrications.skid-construction.skid-automotive.seoLower.5") !!}</li>
                        <li>{!! trans_fb("welding-fabrications.skid-construction.skid-automotive.seoLower.6") !!}</li>
                        <li>{!! trans_fb("welding-fabrications.skid-construction.skid-automotive.seoLower.7") !!}</li>
                        <li>{!! trans_fb("welding-fabrications.skid-construction.skid-automotive.seoLower.8") !!}</li>
                        <li>{!! trans_fb("welding-fabrications.skid-construction.skid-automotive.seoLower.9") !!}</li>
                        <li>{!! trans_fb("welding-fabrications.skid-construction.skid-automotive.seoLower.10") !!}</li>
                        <li>{!! trans_fb("welding-fabrications.skid-construction.skid-automotive.seoLower.11") !!}</li>
                    </ul>

                </p>
            </div>
        </div>
    </div>
</section>



<!-- @include('contact-now') -->
@include('conversion-contact')
@endsection
