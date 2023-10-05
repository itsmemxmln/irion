@extends('layout')

@section('title', isset($meta_title) ? $meta_title : "")
@section('description', isset($meta_description) ? $meta_description : "")

@section('head')
@if (isset($hreflang))
    {{-- LANG --}}
    {{-- <meta name="robots" content="index, follow"> --}}
    {!!$hreflang!!}
@endif
@endsection

@section('content')
@if(isset($img_src) && $img_src != '' && file_exists(public_path("/assets/img/landingpages/".$img_src)))  {{-- Landing Image --}}
    <section class="page-banner" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/landingpages/{{$img_src}}');">
        <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">@if (isset($h1)){!!$h1!!}@endif</h1>
    </section>
@else
    <section class="page-banner" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/bg-2.webp');">
        <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">@if(isset($h1)) {{$h1}} @endif</h1>
    </section>
@endif

<section class="container">
    @if ((isset($seo1) && $seo1 != "" ) || (isset($submenu) && $submenu != "" ))
    <div class="container my-5">
        <div class="row align-items-center justify-content-center rounded-0 border shadow-lg p-5">
            <div class="col-12 col-lg-10 px-2 px-lg-5 center">
                <p style="text-align:center">
                    Suchen Sie einen Job im Bereich Metalltechnik? Hier finden Sie die aktuellen Stellenangebote bei Irion in Bad Teinach / Calw Stammheim im Nordschwarzwald für verschiedene Bereiche. Bitte wählen Sie die Stellen aus für weitere Details.
                </p>
            </div>

            <div class="col-12 col-lg-8 px-2 px-lg-5 center">
                <h2 class="mt-4">Aktuelle Stellenangebote in Bad Teinach / Calw Stammheim im Nordschwarzwald</h2>
                @if (isset($submenu))
                    {!!$submenu!!}
                @endif

                <h2 class="mt-4" id="fragenBewerbung">Fragen zur Bewerbung</h2>
                    <div class="accordion" id="accordionExample">
                        {{-- ITEM --}}
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Wie kann ich mich bewerben?
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Bewerben Sie sich gerne per E-Mail oder WhatsApp. Nachricht an Bernd Fleissinger. Keine Unterlagen nötig. (<a href="#contact">Kontaktdaten</a>)
                                </div>
                            </div>
                        </div>
                        {{-- ITEM --}}
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                                    Kann ich mich auch initiativ bewerben?
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Ja, wir freuen uns immer über Ihre Initiativ-Bewerbung an Bernd Fleissinger. (<a href="#contact">Kontaktdaten</a>)
                                </div>
                            </div>
                        </div>
                        {{-- ITEM --}}
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                                    Wie läuft der Bewerbungsprozess ab?
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Folgende Möglichkeiten gibt es
                                    <ul>
                                        <li>15 min Kennenlernen per Video, Telefon, Chat oder auch vor Ort</li>
                                        <li>1 Stunde Betriebsführung</li>
                                        <li>Wir stellen Ihnen an einem Schnuppertag die Firma vor</li>
                                    </ul>	
                                </div>
                            </div>
                        </div>
                        {{-- ITEM --}}
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
                                    Welche Bewerbungsunterlagen brauche ich?
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Keine, einfach unkompliziert melden. Sollten Sie uns dennoch gerne Ihre Unterlagen senden wollen, freuen wir uns natürlich.
                                </div>
                            </div>
                        </div>
                        {{-- ITEM --}}
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFive">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseOne">
                                    Wann kann ich mit einer Antwort rechnen?
                                </button>
                            </h3>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Bitte melden Sie sich, wenn Sie innerhalb von drei Tagen nichts von uns hören.
                                </div>
                            </div>
                        </div>
                        {{-- ITEM --}}
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingSix">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseOne">
                                    Wie läuft ein Kennenlerngespräch ab?
                                </button>
                            </h3>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Im ersten Schritt erzählen wir über Irion und freuen uns auch Sie persönlich kennenzulernen, indem Sie uns schildern, welche Dinge Sie in Ihrem schulischen oder beruflichen Werdegang begeistert haben.
                                </div>
                            </div>
                        </div>
                        {{-- ITEM --}}
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingSeven">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseOne">
                                    Wer sind die Chefs?
                                </button>
                            </h3>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Die Chefs (Bernd Fleissinger, Stefan Tschirk) sind zwei junge Österreicher, die eine offene Kommunikation leben und Team-Mitglieder fordern und fördern.
                                </div>
                            </div>
                        </div>
                        {{-- ITEM --}}
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingEight">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseOne">
                                    Wer sind meine Kollegen?
                                </button>
                            </h3>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Unser 50-köpfiges Team ist eine bunte Mischung aus jungen und erfahrenen Teamplayern, teils aus der Region, teils mit internationalen Wurzeln.
                                </div>
                            </div>
                        </div>
                        {{-- ITEM --}}
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingNine">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseOne">
                                    Wie sieht mein Arbeitsplatz aus?
                                </button>
                            </h3>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Je nach Interessen und Fachrichtung spielt sich das Geschehen z. B. an CNC-Maschinen, Robotern oder verschiedensten High-Tech-Maschinen ab. Abwechslung ist auf jeden Fall geboten. Einzige Voraussetzung dafür ist persönliches Interesse an neuen Aufgaben und Technologien.
                                </div>
                            </div>
                        </div>
                        {{-- ITEM --}}
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTen">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="true" aria-controls="collapseOne">
                                    Wie sind die Arbeitszeiten?
                                </button>
                            </h3>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Generell sind die Arbeitszeiten flexibel darstellbar. Der Großteil der Mannschaft ist von 06:30 bis 15:00 Uhr im Betrieb. Spätaufsteher finden in der Spätschicht ihren Platz (von 15:00 bis 24:00 Uhr). Am Freitag geht es zu Mittag in den Feierabend (Spätschicht 13:00 bis 18:00 Uhr). Manche Kollegen erarbeiten sich am Samstag ein Zusatzeinkommen auf freiwilliger Basis.
                                </div>
                            </div>
                        </div>
                        {{-- ITEM --}}
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingEleven">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="true" aria-controls="collapseOne">
                                    Ist der Job in der Nähe?
                                </button>
                            </h3>
                            <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Wir bieten eine Anbindung an die Kulturbahn „Hermann Hesse Bahn“ (Pforzheim-Horb) mit direkten Verbindungen nach Calw, Wildberg, Nagold, Bad Liebenzell, Pforzheim, Hirsau, Eutingen, Horb. (Einsparung von bis 500€ möglich durch den Wegfall eines eigenen Fahrzeugs)                    
                                    <ul>
                                        <li>72213 Altensteig: Auto 23 min | Bahn 30 Min | Rad 1 h 04 min</li>
                                        <li>75378 Bad Liebenzell: Auto 22 min | Bahn 22 Min | Rad 46 min</li>
                                        <li>71034 Böblingen: Auto 29 min | Bahn 43 Min | Rad 1 h 21 min</li>
                                        <li>75365 Calw: Auto 7 min | Bahn 7 Min | Rad 17 min</li>
                                        <li>71083 Herrenberg: Auto 23 min | Bahn 31 Min | Rad 1 h 04 min</li>
                                        <li>71063 Sindelfingen: Auto 29 min | Bahn 43 Min | Rad 1 h 24 min</li>
                                        <li>72218 Wildberg: Auto 10 min | Bahn 12 Min | Rad 30 min</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <h2 class="mt-4">Wir freuen uns darauf, Sie kennenzulernen!</h2>
                    Der direkte Ansprechpartner für Fragen rund um die Stellenausschreibungen ist Herr Bernd Fleissinger.

            </div>
        </div>
    </div>
    @endif


    {{-- <div class="container my-5 border shadow-lg p-5">
        <h2 class="h4">{{ __("Wir stellen ein (Voll-/Teilzeit)") }}</h2>
        <ul>
            <li>ZerspanungsmechanikerIn CNC/CADCAM - <strong>Ausbildung</strong> (m/w/d)</li>
            <li>FacharbeiterIn für Metalltechnik - <strong>Ausbildung</strong> (m/w/d)</li>
            <li>IndustriemechanikerIn – <strong>Ausbildung</strong> (m/w/d)</li>
            <li>ZerspanungsmechanikerIn CNC/CADCAM (m/w/d)</li>
            <li>FacharbeiterIn für Metalltechnik (m/w/d)</li>
            <li>IndustriemechanikerIn (m/w/d)</li>
            <li>Konstrukteur / Projektkoordinator (m/w/d)</li>
            <li>TechnikerIn Arbeitsvorbereitung (m/w/d)</li>
            <li>Bürofachkraft (m/w/d)</li>
            <li>ProjektleiterIn Stahl/Maschinenbau (m/w/d)</li>
            <li>LKW FahrerIn (m/w/d)</li>
            <li>SchutzgasschweißerIn (WIG/MIG/MAG) (m/w/d)</li>
            <li>LackiererIn (m/w/d)</li>
        </ul>
        <p>{{ __("Bitte senden Sie Ihre aussagekräftigen Bewerbungsunterlagen an: info@irion.de oder besuchen Sie uns doch kurzfristig persönlich.") }}</p>
    </div> --}}


    {{-- @if (isset($seo2) && $seo2 != '')
        <div class="container my-5">
            <div class="row align-items-center rounded-0 border shadow-lg ">
                <div class="col-lg-12 p-5 center">
                    <p>
                        {!!$seo2!!}
                    </p>
                </div>
            </div>
        </div>
    @endif --}}
</section>

{{-- <section class="container my-5">
    <div class="row pb-0 pe-lg-0 align-items-center rounded-0 border shadow-lg">
        <div class="col-lg-7 p-5">
            <h2 class="display-5 fw-bold lh-1">{{ __("Kommen Sie in unser Team!") }}</h2>
            <p class="lead">{{ __("Suchen Sie eine neue Herausforderung? Wir bieten viele Möglichkeiten für Einsteigende und Spezialist/innen. Bei uns gibt es die Möglichkeit, an interessanten Aufgaben mitzuarbeiten und eigenverantwortlich zu Lösungen zu kommen. Wir helfen Potentiale zu entwickeln.") }}</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                <a href="{{ __("schweissberatung") }}" class="btn btn-dark btn-lg px-4 me-md-2 fw-bold rounded-0">{{ __("Jetzt bewerben") }}</a>
            </div>
        </div>
        <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg d-none d-lg-block">
            <img class="rounded-lg-3" src="{{ url("assets/img/platzhalter.webp") }}" alt="" width="100%">
        </div>
    </div>
</section> --}}
@include('conversion-contact')
@endsection
