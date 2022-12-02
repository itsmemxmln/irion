@extends('layout')

@section('title', __("Montage"))

@if (app()->getLocale() == "de")
    @section('description','Unser Wertschöpfungsnetzwerk - die Garantie für Ihr Hochleistungsprodukt! Kompetente Beratung steht bei uns am Beginn der Zusammenarbeit. Stellen Sie uns Ihr Projekt vor und wir suchen und finden flexibel und maßgeschneidert die Lösung für Ihr Anliegen.')
@else
    @section('description','Our value network - a guarantee for your high-performance product! Competent consultation is the very beginning of our cooperation. Tell us about your project and we will find a flexible and tailor-made solution to your request.')
@endif



@section('content')
<section class="page-banner" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/home/foerdertechnik/0.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">{{ __("Montage") }}</h1>
</section>
<section class="container">
    <h2 class="h2 my-5 text-center">{{ __("Unser Wertschöpfungsnetzwerk")}}<br>- {{ __("die Garantie für Ihr Hochleistungsprodukt")}}!</h2>
    <div>
        Unser exzellenter Vorrichtungsbau ermöglicht es, durch unsere intern ausgebildeten Zerspanungsmechaniker, Industriemechaniker und Metallfacharbeiter, die geschweißten Bauteile, geschweißten Konsolen, geschweißten Konstruktionen und geschweißten Baugruppen wiederholgenau in Stückzahlen ab 30 bis hin zu 3.000 und mehr Stück für Sie zu fertigen.

        <p>
            Nach der Oberflächenbeschichtung sind wir in der Lage, unter Zuhilfenahme moderner Prozess- und Qualitätswerkzeuge und Überwachungssystemen sowie unseren eigenverantwortlichen Teams mechanische, elektrische und elektronische Montage und Installationen vorzunehmen, um aus unseren geschweißten und gefrästen sowie lackierten Teilen ein Gesamtprodukt entstehen zu lassen.
        </p>

        <p>
            Unter Zuhilfenahme von modernsten Digitalwerkzeugen ermöglichen wir Änderungen und Optimierungen im Zuge von simultaneous engineering. In Echtzeit übermitteln wir diese auf die digitalen Anzeigensysteme unseres Fachpersonals.
        </p>

        So verlassen täglich Produkte wie
        <ul>
            <li>Hochvoltspeicher Warenträger inkl. Spezialbeschichtung für Batterie berührende Teile</li>
            <li>EBB Fahrzeuge (elektrische Bodenbahnfahrzeuge)</li>
            <li>AGV/FTS Chassis</li>
            <li>EHB Gehänge</li>
            <li>Lastaufnahmemittel</li>
            <li>Schwerlastgehänge</li>
            <li>Fahrzeugaufnahmen</li>
            <li>Werkstückpaletten</li>
            <li>Skids / Transportschlitten/ Lackierschlitten / Montageschlitten /  Skid Adapter</li>
            <li>Lackiertraversen / Crossbars</li>
            <li>Montagetraversen</li>
            <li>Achspaletten / Achsskids </li>
            <li>Montagewerkstückträger</li>
            <li>Cockpitvormontagevorrichtungen</li>
            <li>Cockpittrolleys</li>
            <li>EHB Weichen</li>
            <li>Wagenzüge</li>
            <li>Lackfixturen</li>
            <li>Türenmontageaufnahmen (L-Bügel, C-Rahmen)</li>
            <li>Lackiertraversen</li>
            <li>Lackiertrolleys</li>
            <li>Pendelgehänge</li>
            <li>Scherenrahmen inkl. Scheren für Schwerlastgehänge</li>
            <li>Unterbodenschutz Drehgehänge</li>
            <li>Schubplattformen / Skillets</li>
            <li>Karosserieaufnahmen</li>
            <li>Teleskoparme für Fahrzeugaufnahmen</li>
            <li>Betriebsmittelersatzteile</li>
            <li>KTL Verriegelungen</li>
            <li>Fahrwägen, C-Bügel / Dehnstöße / zerspante Vahle Schienen</li>
            <li>FTS Tablare / FTS Adapter</li>
        </ul>


        Neben der internen Montage und Inbetriebnahme, vorrangig unserer Schweißbaugruppen und Schweißkonstruktionen, warten wir die Fördertechnikanlagen unserer Kunden im Zuge der vorbeugenden Instandhaltung. Auch in diesem Bereich sorgen unsere fest angestellten Industriemechaniker, Zerspanungsmechaniker und Metallfacharbeiter für die Umsetzung höchster Ansprüche.
    </div>
</section>


<!-- @include('contact-now') -->
@include('conversion-contact')
@endsection
