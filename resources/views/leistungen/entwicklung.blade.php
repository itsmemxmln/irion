@extends('layout')

@section('title', __("Entwicklung"))

@if (app()->getLocale() == "de")
    @section('description','Unser Wertschöpfungsnetzwerk - die Garantie für Ihr Hochleistungsprodukt! Kompetente Beratung steht bei uns am Beginn der Zusammenarbeit. Stellen Sie uns Ihr Projekt vor und wir suchen und finden flexibel und maßgeschneidert die Lösung für Ihr Anliegen.')
@else
    @section('description','Our value network - a guarantee for your high-performance product! Competent consultation is the very beginning of our cooperation. Tell us about your project and we will find a flexible and tailor-made solution to your request.')
@endif



@section('content')
<section class="page-banner" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/home/skids/3.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">{{ __("Entwicklung") }}</h1>
</section>
<section class="container">
    <h2 class="h2 my-5 text-center">{{ __("Unser Wertschöpfungsnetzwerk")}}<br>- {{ __("die Garantie für Ihr Hochleistungsprodukt")}}!</h2>
    <div>
        <p>
            Bei IRION beherrschen wir es seit Jahren mit CAD Werkzeugen zu arbeiten, um unsere Schweißbaugruppen, Schweißkonstruktionen, Schweißkonsolen und Zeichnungsteile gemeinsam mit unseren Kunden und Partnern zu entwickeln.
        </p>
        <p>
            Wir sind der Überzeugung, dass Kosten in der Serie zu einem sehr großen Teil in der Entwicklung entstehen. Deshalb legen wir großes Augenmerk in die Entwicklung unserer Schweißbaugruppen, Schweißteile, Schweißkonstruktionen, Schweißkonsolen und Zeichnungsteile, die wir im Übrigen gerne mit Ihnen feinjustieren bzw. produktionstechnisch optimieren.
            Wir setzen Autodesk Inventor und Autodesk AutoCAD ein und sind gleichzeitig in der Lage, in weitere Systeme wie Siemens NX, Catia, Solid Edge, Solid Works, Creo Elements oder Microstation zu konvertieren. Des Weiteren bedienen wir uns auch der offenen Formate, wie zum Beispiel Step Dateien, dxf oder dwg.
        </p>
        <p>
            Die Absicherung unserer geschweißten Teile, Schweißbaugruppen, Schweißkonstruktionen und Schweißkonsolen erfolgt in FEM Programmen. Im ersten Schritt über den integrierten Nastran Postprozessor. Bei weiteren Untersuchungen greifen wir auf Ansys und Abaqus zurück.
        </p>
        <p>
            Die eigene Abteilung umfasst 5 Mitarbeiter, die durch externe Ressourcen mit jahrzehntelanger Erfahrung im Entwicklungs- und Konstruktionsbereich aufwarten können, gerade mit Schwerpunkt geschweißte Bauteile, Schweißkonsolen, Schweißkonstruktionen wie Maschinenteile, Fassadenhalter, Betriebsmittel, etc für unsere Partner aus der Erdbewegung, Agrarindustrie, Fassadenbau, Automobilindustrie, Bauindustrie, Maschinenbau, Lackiertechnik, Kunst und Kultur sowie viele mehr!
        </p>
        <p>
            Irion beherrscht neben Frästeilen, Schweißteilen und gefrästen Schweißteilen sowie Schweißkonsolen, Schweißbaugruppen und Schweißkonstruktionen auch die vor allem mechanische, aber auch elektrische Installation und Inbetriebnahme im Haus sowie beim Kunden vor Ort. Abgerundet werden unsere Serviceleistungen durch Konstruktion, Konstruktionsoptimierung, FEM Berechnung, statische Berechnung, und FMEA Risikountersuchung sowie die CE-Kennzeichnung nach erfolgter CE-Dokumentation.
        </p>
        Selbstverständlich sind wir bei IRION nach IPMA Projektmanagement zertifiziert.
    </div>
</section>


<!-- @include('contact-now') -->
@include('conversion-contact')
@endsection
