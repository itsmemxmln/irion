@extends('layout')

@section('title', __("Wärmebehandlung"))

@if (app()->getLocale() == "de")
    @section('description','Unser Wertschöpfungsnetzwerk - die Garantie für Ihr Hochleistungsprodukt! Kompetente Beratung steht bei uns am Beginn der Zusammenarbeit. Stellen Sie uns Ihr Projekt vor und wir suchen und finden flexibel und maßgeschneidert die Lösung für Ihr Anliegen.')
@else
    @section('description','Our value network - a guarantee for your high-performance product! Competent consultation is the very beginning of our cooperation. Tell us about your project and we will find a flexible and tailor-made solution to your request.')
@endif



@section('content')
<section class="page-banner" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/gluehen.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">{{ __("Wärmebehandlung") }}</h1>
</section>
<section class="container">
    <h2 class="h2 my-5 text-center">{{ __("Unser Wertschöpfungsnetzwerk")}}<br>- {{ __("die Garantie für Ihr Hochleistungsprodukt")}}!</h2>
    <div>
        <p>
            Werkstückberührende Teile unserer geschweißten und gefrästen Produkte behandeln wir, um erhöhte Härte bzw. Entspannungsgrade zu erreichen. Je nach Verwendung unserer Schweißbauteile, Schweißbaugruppen, Schweißkonstruktionen und Schweißkonsolen kommen diverse Wärmebehandlungen zum Einsatz.
        </p>
        Je nach Härtegrad und Härtetiefe sind wir langjährig erfahren mit den Prozessen des:
        <ul>
            <li>Carbonitrieren</li>
            <li>Nitrocarburieren</li>
            <li>Plasmanitrieren</li>
            <li>Einsatzhärten</li>
            <li>Gasnitrieren</li>
            <li>Weichglühen</li>
        </ul>
        samt dem Prozsesswissen, welches Verfahren wann zur Anwendung kommt.
        <ul>
            <li>Haltezeiten</li>
            <li>Härtegrade</li>
            <li>Entspannungsgrade</li>
        </ul>
        um für Sie das optimale Ergebnis aus Kosten, Termin und Qualität zu erzielen.
        <p>
            Benötigen Sie alternative Wärmebehandlungsverfahren für Ihre Schweißbaugruppen, Schweißteile, Schweißkonstruktionen und Schweißkonsolen und geschweißten Zeichnungsteile? Kontaktieren Sie uns gerne - wir finden die ideale Lösung für Ihr Produkt.
        </p>
    </div>
</section>


<!-- @include('contact-now') -->
@include('conversion-contact')
@endsection
