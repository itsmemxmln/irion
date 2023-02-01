@extends('layout')

@section('title', __("steel-processing.steel-machining.title"))

@if (app()->getLocale() == "de")

@section('description','Stahlbearbeitung in Deutschland ✓ Qualität seit 1926 ☆ Schweißen ☆ Schneiden ☆ Biegen ☆ Fräsen ☆
Kanten ➨ Stahlteile bearbeiten lassen!')
@elseif(app()->getLocale() == "en-US")

@section('description','Steel machining in Germany ✓ Quality since 1926 ☆ Welding ☆ Cutting ☆ Bending ☆ Milling ☆ Edging ➨ Have steel parts processed!')
@endif

@section('head')
<!-- Lang -->
<link rel="alternate" hreflang="de" href="https://irion.de/stahlverarbeitung/stahlbearbeitung" />
<link rel="alternate" hreflang="en-US" href="https://irion.de/us/steel-processing-company/steel-machining" />
@endsection

@section('content')
<section class="page-banner"
    style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/zuschnitt2.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">
        {{ __("steel-processing.steel-machining.h1") }}</h1>
</section>

<section class="container">
    <div class="container my-5">
        <div class="row align-items-center rounded-0 border shadow-lg ">
            <div class="col-lg-12 p-5 center">
                <p style="text-align:center">
                    {!! __("steel-processing.steel-machining.seo") !!}
                </p>

                @if(app()->getLocale() == "de")
                <strong>Beispiele</strong>
                <ul>
                    <li><a href="{{ url('stahlverarbeitung/stahlbearbeitung/stahl-schweissen-lassen')}}">Stahl schweißen lassen</a></li>
                    <li><a href="{{ url('stahlverarbeitung/stahlbearbeitung/stahl-schneiden-lassen')}}">Stahl schneiden lassen</a></li>
                    <li><a href="{{ url('stahlverarbeitung/stahlbearbeitung/stahl-biegen-lassen')}}">Stahl biegen lassen</a></li>
                    <li><a href="{{ url('stahlverarbeitung/stahlbearbeitung/stahl-fraesen-lassen')}}">Stahl fräsen lassen</a></li>
                    <li><a href="{{ url('stahlverarbeitung/stahlbearbeitung/stahl-kanten-lassen')}}">Stahl kanten lassen</a></li>
                </ul>

                @elseif(app()->getLocale() == "en-US")
                <strong>Examples</strong>
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
