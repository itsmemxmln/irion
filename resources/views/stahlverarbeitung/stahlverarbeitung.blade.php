@extends('layout')

@section('title', __("Stahlverarbeitung in Deutschland seit 1926 – Firma Irion"))

@if (app()->getLocale() == "de")

@section('description','Stahlverarbeitung in Deutschland ✓ 100 bis 500.000 Stück ☆ Stahlteile lasern lassen ☆
Stahlbearbeitung ☆ Präzise ➨ Qualität seit 1926!')
@else

@section('description','Our value network - a guarantee for your high-performance product! Competent consultation is the
very beginning of our cooperation. Tell us about your project and we will find a flexible and tailor-made solution to
your request.')
@endif



@section('content')
<section class="page-banner"
    style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/zuschnitt2.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">
        {{ __("Stahlverarbeitung") }}</h1>
</section>

<section class="container">
    <div class="container my-5">
        <div class="row align-items-center rounded-0 border shadow-lg ">
            <div class="col-lg-12 p-5 center">
                <p style="text-align:center">
                    Die Firma Irion bietet seit 1926 präzise Stahlverarbeitung in Deutschland. An unserem Standort im Schwarzwald können Stahlteile im Volumen von 100 bis 500.000 im Projektgeschäft produziert werden.
                    Dabei bieten wir industrielle Stahlbearbeitung nach Maß bis hin zur Möglichkeit Stahlteile in gleichbleibend hoher Qualität lasern zu lassen.
                </p>
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
            </div>
        </div>
    </div>
</section>




<!-- @include('contact-now') -->
@include('conversion-contact')
@endsection
