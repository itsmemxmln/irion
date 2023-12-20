@extends('layout')

@section('title', __("Die Qualität der Irion GmbH"))

@if (app()->getLocale() == "de")
    @section('description','Wir arbeiten ständig an der Verschiebung technologischer Grenzen. Bei uns gibt es kein 0815. Wir verbinden Wissen mit Können. Wir schaffen Mehrwerte, die uns von anderen Anbietern unterscheiden und für Sie der Grund sein könnte, unser Kunde werden zu wollen.')
@else
    @section('description','We are constantly working on pushing technological boundaries. There is no run-of-the-mill with us. We combine knowledge with skills. We create added value that sets us apart from other providers and might be the reason for you to want to become our customer.')
@endif

@section('head')
@if (isset($hreflang))
    {{-- LANG --}}
    {!!$hreflang!!}
@endif
    <meta name="robots" content="noindex, follow">
@endsection

@section('content')
<section class="page-banner" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/bg-2.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">@yield('title')</h1>
</section>

<section class="container">
    <h2 class="h2 my-5 text-center">{{ __("Unsere Qualitätspolitik")}}</h2>
    <div>
        <p>
            Im Rahmen der unternehmerischen Sorgfaltspflicht hinsichtlich der Qualitätssicherung unserer Produkte und Dienstleistungen, legen wir hiermit unsere Qualitätspolitik fest.
            <br>
            Das QM-System stellt eine Beschreibung der von uns festgelegten Anforderungen dar. Seine Anwendung gewährleistet, dass alle Tätigkeiten, die Auswirkungen auf die Unternehmensleistung haben, geplant, gesteuert und überwacht werden, und dass vertraglich vereinbarte Anforderungen erfüllt werden.
        </p>
        {{-- Grafik --}}
        <div class="text-center">
            <img src="/assets/img/qualitaetspolitik.webp" alt="Qualitätspolitik" width="100%" style="max-width: 900px">
        </div>
        {{-- End grafik --}}
        <p>
            Durch diese Erklärung verpflichtet die Geschäftsführung alle Mitarbeiter/-innen und Anbieter ihre Tätigkeiten gemäß den Beschreibungen dieses QM-Systems auszuführen, um sicherzustellen, dass die Qualität aller Dienstleistungen unseres Unternehmens den internen und externen Anforderungen entspricht.

            Mit der Beurteilung der Ergebnisse, interner Audits und der Leistungsbewertung prüft die Geschäftsführung die Leistung und Wirksamkeit des QM-Systems.

            Wir stellen alle erforderlichen Mittel zur Erfüllung der Qualitätsziele und der Durchsetzung der Qualitätspolitik zur Verfügung.
        </p>
        <p>
            Wir verpflichten uns zur ständigen Verbesserung und Weiterentwicklung des QM-Systems.
            <br>
            Die stabile Qualität unserer Dienstleistungen ist eine der Grundlagen unserer erfolgreichen Geschäftstätigkeit. Qualität bedeutet für uns, die Ansprüche unserer Kunden und interessierten Parteien bestmöglich zu erfüllen.

            In diesem Sinne ist Qualität ein wichtiges Kriterium für unser tägliches Geschäft und bildet ein zuverlässiges Band zu unseren Kunden.
            <br>
            Qualitätsbewusst handeln heißt für uns auch, mit wertvollen Ressourcen effizient und schonend umzugehen. Alle Mitarbeiter/-innen haben die Pflicht und das Recht darauf hinzuwirken, dass Umstände, welche Ergebnisse der Unternehmensleistung beschränken, beseitigt werden.

            Die kontinuierliche Verbesserung des Unternehmens ist für uns deshalb mittel- und langfristig auch Voraussetzung für eine wirksame Senkung von Kosten und wichtiger Beitrag zur Schonung der Umwelt.
            <br>
            Eine störungsfreie Organisation und fortschrittlichste Methoden des Qualitätsmanagements bilden den dafür notwendigen Rahmen.
            <br>
            Alle Mitarbeiter/-innen sind verpflichtet, die in ihrem Verantwortungsbereich geltenden Regelungen anzuwenden, ihre Wirksamkeit ständig zu überwachen und den neuesten Kenntnissen und Erfordernissen anzupassen.
            <br>
            Dieses Qualitätsverständnis und Qualitätsbewusstsein, sowie die Einstellung aller Mitarbeiter/-innen zur Qualität sind Voraussetzung für die Zufriedenheit unserer Kunden und damit für den dauerhaften Erfolg unseres Unternehmens.
        </p>
    </div>
</section>


<!-- @include('contact-now') -->
@include('conversion-contact')
@endsection
