@extends('layout')

@section('title', __("Zuschnitt"))

@if (app()->getLocale() == "de")
    @section('description','Unser Wertschöpfungsnetzwerk - die Garantie für Ihr Hochleistungsprodukt! Kompetente Beratung steht bei uns am Beginn der Zusammenarbeit. Stellen Sie uns Ihr Projekt vor und wir suchen und finden flexibel und maßgeschneidert die Lösung für Ihr Anliegen.')
@else

    @section('description','Our value network - a guarantee for your high-performance product! Competent consultation is the very beginning of our cooperation. Tell us about your project and we will find a flexible and tailor-made solution to your request.')
@endif



@section('content')
<section class="page-banner" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/zuschnitt2.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">{{ __("Zuschnitt") }}</h1>
</section>
<section class="container">
    <h2 class="h2 my-5 text-center">{{ __("Unser Wertschöpfungsnetzwerk")}}<br>- {{ __("die Garantie für Ihr Hochleistungsprodukt")}}!</h2>
    <div>
        <p>
            Die Basis  unserer Produkte sind neben CADCAM gefrästen Kunststoffen und CADCAM gefrästen Stahl-, Edelstahl-, und Aluminiumteilen gesägte Profile aus Stahl, Edelstahl und Aluminium sowie geschnittene Metallteile (Stahl, Edelstahl, Aluminium. Ob Laserteile, Biegeteile, Laserbiegeteile, Kantteile, Laserkantteile, Plasmastrahlteile oder Wasserstrahlteile.
        </p>

        Je nach Dicke und Wärmeeinbringung verarbeiten wir wie folgt:
        <ul>
            <li>Konventioneller Zuschnitt / Sägen / gesägte Profile bis 250mm</li>
            <li>Plasmaschneiden bis 150mm</li>
            <li>Wasserstrahlschneiden bis 120mm</li>
            <li>Laserschneiden bis 25mm</li>
            <li>Biegeteile bis 25mm</li>
            <li>Laserbiegeteile bis 25mm</li>
            <li>Laserkantteile bis 25mm</li>
            <li>Kantteile bis 25mm</li>
        </ul>
        <p>Die Basisdimensionen der Teile, hergestellt aus Laserschneiden, Plasmaschneiden, Wasserstrahlschneiden, Biegen, Kanten, Laserkantteile und Laserbiegeteile sind Rohlinge aus 6m x 4m mit einer Dicke von bis zu 150 mm. Die übliche Dicke beträgt 40mm.</p>
        Durch unsere Schweißkompetenz,  gewährleistet durch unsere hausinternen Schweißfachingenieure, als auch Schweißfachpersonen,  bearbeiten wir mit unserem jährlich zertifizierten Fachpersonal nach ISO 3834, ISO 1090 ECX-2 & EXC-3 (Execution Class 2 und Execution Class 3) auch Feinkornbaustahl S460, S690, S960 und viele mehr.
    </div>
</section>


<!-- @include('contact-now') -->
@include('conversion-contact')
@endsection
