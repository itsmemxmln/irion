@extends('layout')

@section('title', __("Reinigung"))

@if (app()->getLocale() == "de")
    @section('description','Unser Wertschöpfungsnetzwerk - die Garantie für Ihr Hochleistungsprodukt! Kompetente Beratung steht bei uns am Beginn der Zusammenarbeit. Stellen Sie uns Ihr Projekt vor und wir suchen und finden flexibel und maßgeschneidert die Lösung für Ihr Anliegen.')
@else

    @section('description','Our value network - a guarantee for your high-performance product! Competent consultation is the very beginning of our cooperation. Tell us about your project and we will find a flexible and tailor-made solution to your request.')
@endif



@section('content')
<section class="page-banner" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/clean.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">{{ __("Reinigung") }}</h1>
</section>
<section class="container">
    <h2 class="h2 my-5 text-center">{{ __("Unser Wertschöpfungsnetzwerk")}}<br>- {{ __("die Garantie für Ihr Hochleistungsprodukt")}}!</h2>
    <div>
        <p>
            Unsere Reinigungsprozesse gewährleisten die Qualität für unsere Schweißteile, Schweißkonsolen, Schweißbaugruppen und gefrästen Schweißteile, wie Betriebsmittel etc. vor dem eigentlichen Bearbeitungsprozess des Schweißens bzw. vor der Oberflächenbehandlung wie Lackierung, Brünieren, Härten, Galvanisieren, Feuerverzinken, etc.
        </p>
        <p>
            Oberflächenreinigung, Kantenbruch, Entfettung, Befreiung von Zunder, zur Schweißnahtvorbereitung, Lackiervorbereitung, Entgraten, Instandsetzung und Entlackung. Wir bedienen  uns der Techniken des Sandstrahlen, Gleitschleifen und Trowalisieren, um die entsprechende Oberflächenreinigung im gewünschten Maße zu erzielen.
        </p>
    </div>
</section>


<!-- @include('contact-now') -->
@include('conversion-contact')
@endsection
