@extends('layout')

@section('title', __("Stahlbearbeitung in Deutschland seit 1926 – Firma Irion"))

@if (app()->getLocale() == "de")

@section('description','Stahlbearbeitung in Deutschland ✓ Qualität seit 1926 ☆ Schweißen ☆ Schneiden ☆ Biegen ☆ Fräsen ☆
Kanten ➨ Stahlteile bearbeiten lassen!')
@else

@section('description','Our value network - a guarantee for your high-performance product! Competent consultation is the
very beginning of our cooperation. Tell us about your project and we will find a flexible and tailor-made solution to
your request.')
@endif



@section('content')
<section class="page-banner"
    style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/zuschnitt2.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">
        {{ __("Stahlbearbeitung") }}</h1>
</section>

<section class="container">
    <div class="container my-5">
        <div class="row align-items-center rounded-0 border shadow-lg ">
            <div class="col-lg-12 p-5 center">
                <p style="text-align:center">
                    Die Firma Irion bietet seit 1926 präzise Stahlbearbeitung in Deutschland.
                    Sie können Stahlteile in großer Fertigungstiefe bearbeiten lassen, wie schweißen, schneiden, biegen,
                    fräsen oder abkanten in Lohnfertigung.
                    <br><br>
                    Unsere Fertigung erfüllt die speziellen Anforderungen der Industrie mit konstant hohe Qualität,
                    Verantwortungsbewusstsein und Präzision.
                    <br><br>
                    Benötigen Sie darüber hinaus weitere Metallbearbeitung oder Oberflächenveredelung kümmern wir uns um
                    eine zufriedenstellende Lösung mit ausgewählten Kooperationspartnern.
                </p>
                <strong>Beispiele</strong>
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
