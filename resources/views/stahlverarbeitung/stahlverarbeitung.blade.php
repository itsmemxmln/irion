@extends('layout')

@section('title', trans_fb("steel-processing.title"))

@if (app()->getLocale() == "de")

@section('description','Stahlverarbeitung in Deutschland ✓ 100 bis 500.000 Stück ☆ Stahlteile lasern lassen ☆
Stahlbearbeitung ☆ Präzise ➨ Qualität seit 1926!')
@elseif(app()->getLocale() == "en-US")

@section('description','Steel processing company from Germany ✓ 100 to 500,000 pieces ☆ Lasered steel parts ☆ Precise ➨ Consistently high quality since 1926!')
@endif

@section('head')
<!-- Lang -->
<link rel="alternate" hreflang="de" href="https://irion.de/stahlverarbeitung" />
<link rel="alternate" hreflang="en-US" href="https://irion.de/us/steel-processing-company/" />
@endsection

@section('content')
<section class="page-banner"
    style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/zuschnitt2.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">
         {{ trans_fb("steel-processing.h1") }}</h1>
</section>

<section class="container">
    <div class="container my-5">
        <div class="row align-items-center rounded-0 border shadow-lg ">
            <div class="col-lg-12 p-5 center">
                <p style="text-align:center">
                    {{ trans_fb("steel-processing.seo") }}
                    
                </p>
                
                @if (app()->getLocale() == "de")
                <strong><a href="{{ url('stahlverarbeitung/stahlteile-lasern-lassen')}}">Stahlteile lasern lassen</a></strong>
                <ul>
                    <li><a href="{{ url('stahlverarbeitung/stahlteile-lasern-lassen/stahlblech-zuschnitt')}}">Stahlblech Zuschnitt</a></li>
                    <li><a href="{{ url('stahlverarbeitung/stahlteile-lasern-lassen/stahlplatten-zuschnitt')}}">Stahlplatten Zuschnitt</a></li>
                    <li><a href="{{ url('stahlverarbeitung/stahlteile-lasern-lassen/edelstahl-zuschnitt')}}">Edelstahl Zuschnitt</a></li>
                    <li><a href="{{ url('stahlverarbeitung/stahlteile-lasern-lassen/schwarzblech-zuschnitt')}}">Schwarzblech Zuschnitt</a></li>
                    <li><a href="{{ url('stahlverarbeitung/stahlteile-lasern-lassen/grobblech-zuschnitt')}}">Grobblech Zuschnitt</a></li>
                    <li><a href="{{ url('stahlverarbeitung/stahlteile-lasern-lassen/federstahl-zuschnitt')}}">Federstahl Zuschnitt</a></li>
                    <li><a href="{{ url('stahlverarbeitung/stahlteile-lasern-lassen/werkzeugstahl-zuschnitt')}}">Werkzeugstahl Zuschnitt</a></li>
                    <li><a href="{{ url('stahlverarbeitung/stahlteile-lasern-lassen/winkelstahl-zuschnitt')}}">Winkelstahl Zuschnitt</a></li>
                    <li><a href="{{ url('stahlverarbeitung/stahlteile-lasern-lassen/elektroblech-zuschnitt')}}">Elektroblech Zuschnitt</a></li>
                </ul>
                <strong><a href="{{ url('stahlverarbeitung/stahlbearbeitung')}}">Stahlbearbeitung</a></strong>
                <ul>
                    <li><a href="{{ url('stahlverarbeitung/stahlbearbeitung/stahl-schweissen-lassen')}}">Stahl schweißen lassen</a></li>
                    <li><a href="{{ url('stahlverarbeitung/stahlbearbeitung/stahl-schneiden-lassen')}}">Stahl schneiden lassen</a></li>
                    <li><a href="{{ url('stahlverarbeitung/stahlbearbeitung/stahl-biegen-lassen')}}">Stahl biegen lassen</a></li>
                    <li><a href="{{ url('stahlverarbeitung/stahlbearbeitung/stahl-fraesen-lassen')}}">Stahl fräsen lassen</a></li>
                    <li><a href="{{ url('stahlverarbeitung/stahlbearbeitung/stahl-kanten-lassen')}}">Stahl kanten lassen</a></li>
                </ul>

                @elseif(app()->getLocale() == "en-US")

                <strong><a href="{{ url('us/steel-processing-company/laser-cut-steel-parts')}}">Laser cut steel parts</a></strong>
                <ul>
                    <li><a href="{{ url('us/steel-processing-company/laser-cut-steel-parts/steel-sheet-cutting')}}">Steel sheet cutting</a></li>
                    <li><a href="{{ url('us/steel-processing-company/laser-cut-steel-parts/steel-plate-cutting')}}">Steel plate cutting</a></li>
                    <li><a href="{{ url('us/steel-processing-company/laser-cut-steel-parts/cutting-of-stainless steel')}}">Stainless steel cutting</a></li>
                    <li><a href="{{ url('us/steel-processing-company/laser-cut-steel-parts/black-metal-sheet-cut-to-size')}}">Black sheet metal cutting</a></li>
                    <li><a href="{{ url('us/steel-processing-company/laser-cut-steel-parts/cutting-thick-sheet-metal')}}">Thick sheet metal cutting</a></li>
                    <li><a href="{{ url('us/steel-processing-company/laser-cut-steel-parts/spring-steel-cut-to-size')}}">Spring steel cutting</a></li>
                    <li><a href="{{ url('us/steel-processing-company/laser-cut-steel-parts/tool-steel-cut-to-size')}}">Tool steel cutting</a></li>
                    <li><a href="{{ url('us/steel-processing-company/laser-cut-steel-parts/angle-iron-cut-to-size')}}">Angle iron cutting</a></li>
                    <li><a href="{{ url('us/steel-processing-company/laser-cut-steel-parts/electrical-steel-cutting')}}">Electrical steel cutting</a></li>
                </ul>
                <strong><a href="{{ url('us/steel-processing-company/steel-machining')}}">Steel machining</a></strong>
                <ul>
                    <li><a href="{{ url('us/steel-processing-company/steel-machining/welding-business')}}">Welding business</a></li>
                    <li><a href="{{ url('us/steel-processing-company/steel-machining/laser-steel-cutting services')}}">Steel cutting services</a></li>
                    <li><a href="{{ url('us/steel-processing-company/steel-machining/steel-bending-services')}}">Steel bending services</a></li>
                    <li><a href="{{ url('us/steel-processing-company/steel-machining/steel-milling')}}">Steel milling</a></li>
                    <li><a href="{{ url('us/steel-processing-company/steel-machining/press-brake-metal-forming')}}">Brake forming</a></li>
                </ul>

                @endif
            </div>
        </div>
    </div>
</section>




<!-- @include('contact-now') -->
@include('conversion-contact')
@endsection
