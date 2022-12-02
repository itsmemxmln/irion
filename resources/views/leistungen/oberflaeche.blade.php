@extends('layout')

@section('title', __("Oberfläche"))

@if (app()->getLocale() == "de")
    @section('description','Unser Wertschöpfungsnetzwerk - die Garantie für Ihr Hochleistungsprodukt! Kompetente Beratung steht bei uns am Beginn der Zusammenarbeit. Stellen Sie uns Ihr Projekt vor und wir suchen und finden flexibel und maßgeschneidert die Lösung für Ihr Anliegen.')
@else
    @section('description','Our value network - a guarantee for your high-performance product! Competent consultation is the very beginning of our cooperation. Tell us about your project and we will find a flexible and tailor-made solution to your request.')
@endif


@section('content')
<section class="page-banner" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/home/oberflaechen/1.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">{{ __("Oberfläche") }}</h1>
</section>
<section class="container">
    <h2 class="h2 my-5 text-center">{{ __("Unser Wertschöpfungsnetzwerk")}}<br>- {{ __("die Garantie für Ihr Hochleistungsprodukt")}}!</h2>
    <div>
        Das Gesicht unserer Schweißbaugruppen, Schweißkonsolen, Schweißteile und Schweißkonstruktionen ist in vielen Fällen die Oberflächenbeschichtung.

        <p>
            Die Veredelung unserer geschweißten Produkte reicht von Korrosionsschutz für z.B. Überseetransporte mit imprägnierten und maßgeschneiderten Holzpaletten über Grundierungen bis hin zu Mehrschichtlackierung mit 2K Lack.
        </p>

        <p>
            Langjährige Partnerschaften mit unseren Lacklieferanten und Equipment-Lieferanten sowie interne Erfahrung mit dem Thema Beschichtung ermöglichen es uns, optimale Prozesse mit exakten Schichtdicken und geringem Materialaufwand bei optimaler Oberflächenbeschaffenheit zu erzielen.
        </p>

        <p>
            Weitere Beschichtungen, die wir für unsere Schweißprodukte anbieten, sind die Pulverbeschichtung, Gummierung, Brünieren, Galvanisieren, das Feuerverzinken, Eloxieren sowie die KTL-Beschichtung, Schutzwachs und Öl.
        </p>

        Wir bieten Ihnen die komplette Palette an RAL Tönen sowie spezielle Farbmischungen aus CMYK Werten und RGB Werten. Gerne ermöglichen wir auch Ihre Sonderwünsche.
    </div>
</section>


<!-- @include('contact-now') -->
@include('conversion-contact')
@endsection
