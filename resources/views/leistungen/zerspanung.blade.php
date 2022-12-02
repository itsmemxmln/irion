@extends('layout')

@section('title', __("Zerspanung"))

@if (app()->getLocale() == "de")
    @section('description','Unser Wertschöpfungsnetzwerk - die Garantie für Ihr Hochleistungsprodukt! Kompetente Beratung steht bei uns am Beginn der Zusammenarbeit. Stellen Sie uns Ihr Projekt vor und wir suchen und finden flexibel und maßgeschneidert die Lösung für Ihr Anliegen.')
@else
    @section('description','Our value network - a guarantee for your high-performance product! Competent consultation is the very beginning of our cooperation. Tell us about your project and we will find a flexible and tailor-made solution to your request.')
@endif



@section('content')
<section class="page-banner" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/bg-5.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">{{ __("Zerspanung") }}</h1>
</section>
<section class="container">
    <h2 class="h2 my-5 text-center">{{ __("Unser Wertschöpfungsnetzwerk")}}<br>- {{ __("die Garantie für Ihr Hochleistungsprodukt")}}!</h2>
    <div>
        <p>
            Eine Herzensangelegenheit unseres langjährigen Schweißfachbetriebs ist in jedem Fall das computergesteuerte Fräsen von Teilen aus Stahl, Edelstahl, Aluminium und Kunststoff.
        </p>

        <p>
            Großteils offline programmiert durch CAM,  laufen unsere 3-Achs, 4-Achs und 5 Achs CNC Maschinen bzw. Bearbeitungszentren und fertigen Teile mit Dimensionen bis zu 2m x 1m x 1m mit Hilfe unserer Postprozessoren, die in der Lage sind,  auch unsere low cost Maschinen zu bespielen.
        </p>

        <p>
            Weitere Dimensionen ermöglicht unsere verlängerte Werkbank,  basierend auf langjährigen Partnern aus der Umgebung. Erweiterte Dimensionen sind 30m x 6m x 4m auf Portalfräszentren, ebenfalls ausgelegt für Stahl, Edelstahl, Aluminium und Kunststoffe.
        </p>

        <p>
            Zeichnungsteile mit keinerlei Konstruktionsaufwand stellen wir in langjähriger Kooperation in best cost countries mit direktem Zugriff auf die Produktionskapazitäten her, um Ihnen attraktivste Preise zu garantieren. Unser Qualitätsmanagement garantiert eine fehlerfreie Auslieferung.
        </p>
    </div>
</section>


<!-- @include('contact-now') -->
@include('conversion-contact')
@endsection
