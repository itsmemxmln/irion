@extends('layout')

@section('title', __("Schweissen"))

@if (app()->getLocale() == "de")
    @section('description','Unser Wertschöpfungsnetzwerk - die Garantie für Ihr Hochleistungsprodukt! Kompetente Beratung steht bei uns am Beginn der Zusammenarbeit. Stellen Sie uns Ihr Projekt vor und wir suchen und finden flexibel und maßgeschneidert die Lösung für Ihr Anliegen.')
@else
    @section('description','Our value network - a guarantee for your high-performance product! Competent consultation is the very beginning of our cooperation. Tell us about your project and we will find a flexible and tailor-made solution to your request.')
@endif



@section('content')
<section class="page-banner" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/bg-2.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">{{ __("Schweissen") }}</h1>
</section>
<section class="container">
    <h2 class="h2 my-5 text-center">{{ __("Unser Wertschöpfungsnetzwerk")}}<br>- {{ __("die Garantie für Ihr Hochleistungsprodukt")}}!</h2>
    <div>
        <p>
            Da kommen wir her und da gehören wir hin, SCHWEISSEN ist unsere Religion! Unsere Kernkompetenz neben der CNC Bearbeitung von Stahl, Edelstahl und Aluminium sowie Kunststoffen ist das Schweißen selbiger Materialien. Seit mehr als 2 Dekaden beherrschen wir das Lichtbogenschweißen von Stahl, Edelstahl und Aluminium mit unserem High-End-Schweißequipment von Cloos made in Germany!
        </p>

        <p>
            Schweißen bedeutet für uns nicht nur Teile zusammenzufügen. Wir nehmen uns das Thema zu Herzen und gehen dabei täglich an unsere Grenzen. Ein Schwerpunkt unseres Schaffens liegt im Bereich zwischen additiver Fertigung (3D Druck) und Stahlguss. Als ihr Partner für Schweißbaugruppen, Schweißteile, Schweißkonstruktionen und Schweißkonsolen fertigen wir wiederholgenau und repetitiv kritische Projektserien ab 30 bis mehrere tausend Stück für Sie.
        </p>

        <p>
            Über 20 hochmotivierte und zertifizierte Schweißer sind verantwortlich für Ihre anspruchsvollen Schweißteile, Konsolen, Schweißkonstruktionen, unbeweglich (starr) sowie beweglich (Kulissen, Raster, etc.).
            Bei IRION schweißen wir manuell und stückzahlenintensive Schweißbaugruppen robotisch mit High-tech-Robotern mit bis zu 9 interpolierenden Achsen.
        </p>

        <p>
            Dimensionen unserer Schweißbaugruppen, Schweißteile, Schweißkonstruktionen und Schweißkonsolen sind bis zu 8m x 4m x 2,5m groß. Wir beginnen bei Dimensionen ab 20mm x 20mm x 1 mm.
        </p>

        <p>
            Made in Germany und gleichzeitig konkurrenzfähig zu sein. Dies wird möglich durch computergesteuerte offline Robotersimulation unseres geschulten und hochmotivierten Personals. Stolz sind wir dabei auf unsere AZUBI Quote von nahezu 15%. Nur so schaffen wir es, dem Fachkräftemangel entgegenzusteuern.  Ausbildungsberufe, die wir in unserem Hause anbieten, sind Industriemechaniker, Zerspanungsmechaniker und Fachkraft für Metallberufe, zu dem auch der Lehrberuf des Schweißers gehört.
        </p>

        <p>
            Wir schweißen Stahl, Edelstahl und Aluminium. Nehmen Sie gerne mit uns Kontakt auf! Wir gehen gerne auf Ihre Anforderungen ein und unterstützen Sie bei Ihrem Vorhaben.
            Schweißkompetenz im Hause IRION:
        </p>
        <ul>
            <li>MAG Schweißen von Stahl / Edelstahl / Aluminium</li>
            <li>MIG Schweißen von Stahl / Edelstahl / Aluminium</li>
            <li>Roboter Schweißen mit 6 Achs Schweißrobotern / 7 Achs Schweißrobotern / 8 Achs Schweißrobotern / 9 Achs Schweißrobotern</li>
            <li>WIG Schweißen von Stahl / Edelstahl / Aluminium</li>
        </ul>

        <p>
            Unser Spektrum liegt zwischen Einzelteilen und langjährigen Serien. Kritische Massen sind sogenannte Projektserien, die einmalig abgerufen werden und wiederholgenau in Stückzahlen ab 30 Stück bis zu 3.000 Stück und mehr in präzisen Dimensionen mit Abweichungen von 0,5mm auf Längen von bis zu 5m gefertigt werden. Geschweißte Skids (Förderschlitten), geschweißte Maschinenrahmen, geschweißte Betriebsmittel, geschweißte Konsolen für Ihre Maschinen, Baumaschinen, Agrarmaschinen, Erdbewegungsmaschinen, Hebemittel wie Krane sowie Lackierhilfsmittel wie Traversen, Warenträger, Bauteilträger und vieles mehr in der Welt des Schweißens und gefrästen Schweißens.
        </p>

        <p>
            Ein Garant für Ihre intelligente Schweißbaugruppe ist unsere auf jahrelanger Erfahrung basierte Kompetenz der Antizipation der Wärmeveränderung von geschweißten Bauteilen. Wir richten kalt bzw. mechanisch und warm bzw. thermisch. Bevorzugt setzen wir auf unseren bewährten Vorrichtungsbau, der in der Lage ist, Ihre Teile nach dem Schweißen ohne weitere Bearbeitung in die korrekte Position zu bekommen. Dabei schaffen wir es, eine kostenintensive Nachbearbeitung mittels CNC zu vermeiden.
        </p>

        <p>
            Komplettiert wird unsere Schweißkompetenz durch erfahrene Qualitätsmanager, die sich der gängigen Schweißprüfverfahren bedienen. Wir beherrschen Validierungsprozesse der Eindringprüfung, optische Prüfung (visuelles Schweißprüfverfahren), in externer Ausführung auch das Röntgenschweißprüfverfahren und das Ultraschallschweißprüfverfahren, um unseren und vor allem Ihren maximalen Qualitätsansprüchen gerecht zu werden.
        </p>

    </div>
</section>


<!-- @include('contact-now') -->
@include('conversion-contact')
@endsection
