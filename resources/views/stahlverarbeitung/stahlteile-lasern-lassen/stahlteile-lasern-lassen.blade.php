@extends('layout')

@section('title', trans_fb("steel-processing.laser-cut.title"))

@if (app()->getLocale() == "de")

@section('description','Stahlteile lasern lassen ✓ Stahlbleche ☆ Stahlplatten ☆ Edelstahl ☆ Schwarzblech ☆ Grobblech ☆
uvm. ➨ Industrie Laserteile aus Stahl!')
@elseif(app()->getLocale() == "en-US")

@section('description','Laser cut steel parts ✓ Steel sheets ☆ Steel plates ☆ Stainless steel ☆ Black plate ☆ and more ➨ Industrial steel laser parts')
@endif

@section('head')
<!-- Lang -->
<link rel="alternate" hreflang="de" href="https://irion.de/stahlverarbeitung/stahlteile-lasern-lassen" />
<link rel="alternate" hreflang="en-US" href="https://irion.de/us/steel-processing-company/laser-cut-steel-parts" />
@endsection

@section('content')
<section class="page-banner"
    style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/zuschnitt2.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">
        {{ trans_fb("steel-processing.laser-cut.h1") }}</h1>

</section>

<section class="container">
    <div class="container my-5">
        <div class="row align-items-center rounded-0 border shadow-lg ">
            <div class="col-lg-12 p-5 center">
                <p style="text-align:center">
                    {!! trans_fb("steel-processing.laser-cut.seo") !!}
                    
                </p>
                
                @if(app()->getLocale() == "de")
                <strong>Beispiele</strong>
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

                @elseif(app()->getLocale() == "en-US")
                <strong>Examples</strong>
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
                @endif
            </div>
        </div>
    </div>
</section>




<!-- @include('contact-now') -->
@include('conversion-contact')
@endsection
