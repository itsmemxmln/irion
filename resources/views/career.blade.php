@extends('layout')

@section('title', __("Ihre Karriere bei der Irion GmbH"))

@if (app()->getLocale() == "de")
    @section('description','Wir arbeiten mit Leidenschaft an der Sache. Leidenschaft ist unser Antrieb und die Wurzel für Innovationen. Wir lieben was wir tun und bilden deshalb unsere Mitarbeiter selbst aus. Im technischen Detail liegt oft der Schlüssel zum Erfolg – wir meistern es und setzen es um.')
@else
    @section('description','Are you looking for a new challenge? We offer many opportunities for novices as well as experts. With us, you have an opportunity to work on interesting tasks and find solutions autonomously. We help developing potentials.')
@endif

@section('head')
<meta name="robots" content="noindex, follow">
<!-- Lang -->
<link rel="alternate" hreflang="x-default" href="https://irion.de/en/career" />
<link rel="alternate" hreflang="de" href="https://irion.de/karriere" />
<link rel="alternate" hreflang="en" href="https://irion.de/en/career" />
<link rel="alternate" hreflang="en-US" href="https://irion.de/us/career" />
@endsection

@section('content')
<section class="page-banner" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/bg-2.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">{{ __("Karriere") }}</h1>
</section>

<section class="container my-5">
    <h2 class="h4">{{ __("Wir stellen ein (Voll-/Teilzeit)") }}</h2>
    <ul>
        <li>ZerspanungsmechanikerIn CNC/CADCAM - <strong>(auch Auszubildende)</strong> (m/w/d)</li>
        <li>FacharbeiterIn für Metalltechnik - <strong>(auch Auszubildende)</strong> (m/w/d)</li>
        <li>IndustriemechanikerIn – <strong>(auch Auszubildende)</strong> (m/w/d)</li>
        <li>Konstrukteur / Projektkoordinator (m/w/d)</li>
        <li>TechnikerIn Arbeitsvorbereitung (m/w/d)</li>
        <li>Bürofachkraft (m/w/d)</li>
        <li>ProjektleiterIn Stahl/Maschinenbau (m/w/d)</li>
        <li>LKW FahrerIn (m/w/d)</li>
        <li>SchutzgasschweißerIn (WIG/MIG/MAG) (m/w/d)</li>
        <li>LackiererIn (m/w/d)</li>
    </ul>
    <p>{{ __("Bitte senden Sie Ihre aussagekräftigen Bewerbungsunterlagen an: info@irion.de oder besuchen Sie uns doch kurzfristig persönlich.") }}</p>
</section>

<section class="container my-5">
    <div class="row pb-0 pe-lg-0 align-items-center rounded-0 border shadow-lg">
        <div class="col-lg-7 p-5">
            <h2 class="display-5 fw-bold lh-1">{{ __("Kommen Sie in unser Team!") }}</h2>
            <p class="lead">{{ __("Suchen Sie eine neue Herausforderung? Wir bieten viele Möglichkeiten für Einsteigende und Spezialist/innen. Bei uns gibt es die Möglichkeit, an interessanten Aufgaben mitzuarbeiten und eigenverantwortlich zu Lösungen zu kommen. Wir helfen Potentiale zu entwickeln.") }}</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                <a href="{{ __("kontakt") }}" class="btn btn-dark btn-lg px-4 me-md-2 fw-bold rounded-0">{{ __("Jetzt bewerben") }}</a>
            </div>
        </div>
        <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg d-none d-lg-block">
            <img class="rounded-lg-3" src="{{ url("assets/img/platzhalter.webp") }}" alt="" width="100%">
        </div>
    </div>
</section>
@include('conversion-contact')
@endsection
