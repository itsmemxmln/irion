@extends('layout')

@section('title', isset($meta_title) ? $meta_title : "")
@section('description', isset($meta_description) ? $meta_description : "")

@section('head')
@if (isset($hreflang))
    {{-- LANG --}}
    {!!$hreflang!!}
@endif
@endsection


@section('content')
<section id="landing">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item landing-carousel-item active">
                <img src="{{ url('assets/img') . "/" .  __("schweissbaugruppen-hersteller") . ".webp" }}" class="d-block w-100 landing-carousel-img" alt="{{ __("schweissbaugruppen-hersteller") }}">
                <div class="container">
                    <div class="carousel-caption text-center text-md-end animate__animated animate__fadeInRight">
                        <h1 class="h1 fw-bold" style="font-size: 1.9rem;">@if (isset($h1)){!!$h1!!}@endif</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="services" class="container my-5">
    <div class="col-md-9 mx-auto mb-5">
        <h2 class="text-center text-primary">{{ __("Zertifizierter Schweißfachbetrieb") }}</h2>
        <p class="text-center px-md-5">@if (isset($seo1)){!!$seo1!!}@endif</p>
    </div>
    <div class="mt-4">
        <div class="row justify-content-center row-cols-1 row-cols-md-3 g-4">
            <div class="col animate__fadeInUp">
                <div class="card h-100">
                    <div class="card-carousel">
                        <div id="carousel1Indicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carousel1Indicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carousel1Indicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carousel1Indicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carousel1Indicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="card-carousel-img" src="assets/img/home/foerdertechnik/0.webp" class="d-block w-100" alt="Fördertechnik">
                                </div>
                                <div class="carousel-item">
                                    <img class="card-carousel-img" src="assets/img/home/foerdertechnik/1.webp" class="d-block w-100" alt="Fördertechnik">
                                </div>
                                <div class="carousel-item">
                                    <img class="card-carousel-img" src="assets/img/home/foerdertechnik/2.webp" class="d-block w-100" alt="Fördertechnik">
                                </div>
                                <div class="carousel-item">
                                    <img class="card-carousel-img" src="assets/img/home/foerdertechnik/3.webp" class="d-block w-100" alt="Fördertechnik">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel1Indicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel1Indicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <h2 class="h5 card-header">{{ __("Fördertechnik") }}</h2>
                    <div class="card-body">
                        <ul>
                            <li>{{ __("Bis zu 200 Bauteile pro Stück") }}</li>
                            <li>{{ __("Mechanische, elektrische und pneumatische Komponenten") }}</li>
                            <li>{{ __("Projektmanagement in enger Abstimmung mit Gesamtprojektleitung") }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col animate__fadeInUp">
                <div class="card h-100">
                    <div class="card-carousel">
                        <div id="carousel2Indicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carousel2Indicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carousel2Indicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carousel2Indicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carousel2Indicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carousel2Indicators" data-bs-slide-to="4" aria-label="Slide 7"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="card-carousel-img" src="assets/img/home/ladungstraeger/0.webp" class="d-block w-100" alt="Ladungsträger">
                                </div>
                                <div class="carousel-item">
                                    <img class="card-carousel-img" src="assets/img/home/ladungstraeger/1.webp" class="d-block w-100" alt="Ladungsträger">
                                </div>
                                <div class="carousel-item">
                                    <img class="card-carousel-img" src="assets/img/home/ladungstraeger/2.webp" class="d-block w-100" alt="Ladungsträger">
                                </div>
                                <div class="carousel-item">
                                    <img class="card-carousel-img" src="assets/img/home/ladungstraeger/3.webp" class="d-block w-100" alt="Ladungsträger">
                                </div>
                                <div class="carousel-item">
                                    <img class="card-carousel-img" src="assets/img/home/ladungstraeger/4.webp" class="d-block w-100" alt="Ladungsträger">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel2Indicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel2Indicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <h2 class="h5 card-header">{{ __("Ladungsträger") }}</h2>
                    <div class="card-body">
                        <ul>
                            <li>{{ __("Parallele Entwicklung/ Simultaneous Engineering") }}</li>
                            <li>{{ __("Abbildung aller Teilevarianten und Hinzufügen neuer Teilevarianten") }}</li>
                            <li>{{ __("Robotergeeignete Be- und/oder Entladung") }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col animate__fadeInUp">
                <div class="card h-100">
                    <div class="card-carousel">
                        <div id="carousel3Indicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carousel3Indicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carousel3Indicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carousel3Indicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carousel3Indicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="card-carousel-img" src="assets/img/home/skids/5.webp" class="d-block w-100" alt="Skids">
                                </div>
                                <div class="carousel-item">
                                    <img class="card-carousel-img" src="assets/img/home/skids/0.webp" class="d-block w-100" alt="Skids">
                                </div>
                                <div class="carousel-item">
                                    <img class="card-carousel-img" src="assets/img/home/skids/3.webp" class="d-block w-100" alt="Skids">
                                </div>
                                <div class="carousel-item">
                                    <img class="card-carousel-img" src="assets/img/home/skids/4.webp" class="d-block w-100" alt="Skids">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel3Indicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel3Indicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <h2 class="h5 card-header">{{ __("Skids") }}</h2>
                    <div class="card-body">
                        <ul>
                            <li>{{ __("Für Anforderungen in Rohbau- und Lackstraßen") }}</li>
                            <li>{{ __("Größe >> 4 m; Genauigkeit +/- 0,1 mm") }}</li>
                            <li>{{ __("Berücksichtigung metallurgischer Aspekte") }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col animate__fadeInUp">
                <div class="card h-100">
                    <div class="card-carousel">
                        <div id="carousel4Indicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carousel4Indicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carousel4Indicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carousel4Indicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carousel4Indicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="card-carousel-img" src="assets/img/home/maschinen/0.webp" class="d-block w-100" alt="Maschinen-, Anlagen- und Stahlbau">
                                </div>
                                <div class="carousel-item">
                                    <img class="card-carousel-img" src="assets/img/home/maschinen/1.webp" class="d-block w-100" alt="Maschinen-, Anlagen- und Stahlbau">
                                </div>
                                <div class="carousel-item">
                                    <img class="card-carousel-img" src="assets/img/home/maschinen/2.webp" class="d-block w-100" alt="Maschinen-, Anlagen- und Stahlbau">
                                </div>
                                <div class="carousel-item">
                                    <img class="card-carousel-img" src="assets/img/home/maschinen/3.webp" class="d-block w-100" alt="Maschinen-, Anlagen- und Stahlbau">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel4Indicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel4Indicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <h2 class="h5 card-header">{{ __("Maschinen-, Anlagen- und Stahlbau") }}</h2>
                    <div class="card-body">
                        <ul>
                            <li>{{ __("Breites Spektrum an Produkten und Formen") }}</li>
                            <li>{{ __("Präzise Maschinenbauteile – +/- 0,01 mm") }}</li>
                            <li>{{ __("Diverse Materialien") }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col animate__fadeInUp">
                <div class="card h-100">
                    <div class="card-carousel">
                        <div id="carousel5Indicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carousel5Indicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carousel5Indicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carousel5Indicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carousel5Indicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carousel5Indicators" data-bs-slide-to="4" aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carousel5Indicators" data-bs-slide-to="5" aria-label="Slide 4"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="card-carousel-img" src="assets/img/home/schweissbaugruppen/1.webp" class="d-block w-100" alt="Präzise Schweißbaugruppen">
                                </div>
                                <div class="carousel-item">
                                    <img class="card-carousel-img" src="assets/img/home/schweissbaugruppen/2.webp" class="d-block w-100" alt="Präzise Schweißbaugruppen">
                                </div>
                                <div class="carousel-item">
                                    <img class="card-carousel-img" src="assets/img/home/schweissbaugruppen/3.webp" class="d-block w-100" alt="Präzise Schweißbaugruppen">
                                </div>
                                <div class="carousel-item">
                                    <img class="card-carousel-img" src="assets/img/home/schweissbaugruppen/4.webp" class="d-block w-100" alt="Präzise Schweißbaugruppen">
                                </div>
                                <div class="carousel-item">
                                    <img class="card-carousel-img" src="assets/img/home/schweissbaugruppen/5.webp" class="d-block w-100" alt="Präzise Schweißbaugruppen">
                                </div>
                                   <div class="carousel-item">
                                    <img class="card-carousel-img" src="assets/img/home/schweissbaugruppen/6.webp" class="d-block w-100" alt="Präzise Schweißbaugruppen">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel5Indicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel5Indicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <h2 class="h5 card-header">{{ __("Präzise Schweißbaugruppen") }}</h2>
                    <div class="card-body">
                        <ul>
                            <li>{{ __("Sonstige Schweißbaugruppen mit erforderlicher Genauigkeit") }}</li>
                            <li>{{ __("Passgenauigkeit für effiziente Montage auf der Baustelle") }}</li>
                            <li>{{ __("Größe ca. 10 x 2 m") }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="my-5 text-center">
    <a href="{{ __("/praezisionsfertigung") }}" class="btn btn-dark btn-lg px-4 me-md-2 fw-bold rounded-0">{{ __("Unsere Kompetenzen")}}</a>
</div>

<!-- @include('contact-now') -->
@include('conversion-contact')
@include('counter')

<div class="px-4 py-5 my-5 text-center">
    <span class="display-5 fw-bold"><span class="txt-rotate" data-period="2000" data-rotate='[ "{{ __("Präzise Schweißgruppen") }}", "{{ __("ab 30 Stück") }}", "{{ __("in gleichbleibend hoher Qualität!") }}" ]'></span></span>
</div>

<section class="bg-light">
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-12 col-sm-8 col-lg-6 animate__animated animate__fadeInRight">
                <img src="assets/img/bg-4.webp" class="d-block mx-lg-auto img-fluid" alt="Kompetenzen, CNC, Schweißbaugruppen" width="100%" loading="lazy">
            </div>
            <div class="col-lg-6 animate__animated animate__fadeInLeft">
                <h2 class="display-5 fw-bold lh-1 mb-3">{{ __("Wir können mehr!")}}</h2>
                <p class="lead" align="justify">{{ __("Wir arbeiten ständig an der Verschiebung technologischer Grenzen. Bei uns gibt es kein 0815. Wir verbinden Wissen mit Können. Wir schaffen Mehrwerte, die uns von anderen Anbietern unterscheiden und für Sie der Grund sein könnte, unser Kunde werden zu wollen.")}}</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="{{ __("/praezisionsfertigung") }}" class="btn btn-dark btn-lg px-4 me-md-2 rounded-0">{{ __("Präzisionsfertigung")}}</a>
                    <a href="{{ __("/schweissberatung") }}" class="btn btn-outline-secondary btn-lg px-4 rounded-0">{{ __("Kontakt aufnehmen")}}</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
