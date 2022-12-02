<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Irion GmbH')</title>
    <meta name="description" content="@yield('description', 'Irion GmbH')">
    <meta name="yandex-verification" content="1f2c8211bc23a48c" />
    <meta name="msvalidate.01" content="C35550252AAF3DA919CB1F567AEA30B3" />
    <meta name="facebook-domain-verification" content="b9lscbqsbvi0wj8kasqcyn6fwjf3ma" />
    @yield('head')
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('assets/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('assets/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ url('assets/img/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ url('assets/img/favicon/safari-pinned-tab.svg') }}" color="#0089dc">
    <meta name="apple-mobile-web-app-title" content="IRION">
    <meta name="application-name" content="IRION">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="{{ url('assets/fonts/fonts.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link type="text/css" href="{{ url('assets/vendor/animate-css/animate.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ url('assets/css/style.css') }}?V5" rel="stylesheet">
    <!-- Optionals -->
    <link type="text/css" rel="stylesheet" href="{{ url('assets/cookie-consent/cookie-consent.css') }}" />
</head>

<body>
    @if (session()->get('locale') == "en" && strpos(substr(Request::server('HTTP_ACCEPT_LANGUAGE'), 0, 5), "de") !==
    false)
    <div class="alert alert-secondary alert-dismissible fade show rounded-0 mb-0 text-center" role="alert">
        <img src="{{ url('assets/img/flags/de.webp') }}" height="19px" class="mx-1" alt="de"><strong>Unsere Webseite ist
            auch auf deutsch verfügbar!</strong> <a href="{{ url("/") }}" class="alert-link text-primary">Zur deutschen
            Version</a>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if (session()->get('locale') == "de" && strpos(substr(Request::server('HTTP_ACCEPT_LANGUAGE'), 0, 5), "en") !==
    false)
    <div class="alert alert-secondary alert-dismissible fade show rounded-0 mb-0 text-center" role="alert">
        <img src="{{ url('assets/img/flags/en.webp') }}" height="19px" class="mx-1" alt="en"><strong>Our website is also
            available in English!</strong> <a href="{{ url("/en") }}" class="alert-link text-primary">To the English
            version</a>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="d-flex text-center d-none d-lg-block">
        <a href="/">
            <img class="header-logo mt-3 mb-3" src="{{ url('assets/img/irion-logo.webp') }}"
                alt="{{ __("Schweißbaugruppen Hersteller Irion") }}">
        </a>
        {{-- <p style="font-size: 22px;" class="mb-3 text-primary">{{ __("Präzise Schweißgruppen") }}
        {{ __("ab 30 Stück") }} {{ __("in hoher Qualität zu attraktiven Preisen!") }}</p> --}}
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" aria-label="navigation">
        <div class="container-fluid">
            <a class="navbar-brand d-block d-lg-none" href="/">
                <img class="header-logo my-2" src="{{ url('assets/img/logo.webp') }}" alt="Irion Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation"
                aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav me-auto mb-lg-0 mx-auto">
                    @if (app()->getLocale() == "de")
                    <li class="nav-item mx-2"><a href="/"
                            class="fw-bold nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item mx-2 dropdown">
                        <a class="nav-link fw-bold dropdown-toggle {{ Request::is('kompetenzen') || Request::is('entwicklung') || Request::is('zuschnitt') || Request::is('zerspanung') || Request::is('schweissen') || Request::is('reinigung') || Request::is('waermebehandlung') || Request::is('oberflaeche') || Request::is('montage') ? 'active' : '' }}"
                            href="kompetenzen" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Kompetenzen
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item {{ Request::is('kompetenzen') ? 'active' : '' }}"
                                    href="/kompetenzen">Übersicht</a></li>
                            <li>
                                <hr class="dropdown-divider my-0">
                            </li>
                            <li><a class="dropdown-item {{ Request::is('entwicklung') ? 'active' : '' }}"
                                    href="/entwicklung">Entwicklung</a></li>
                            <li><a class="dropdown-item {{ Request::is('zuschnitt') ? 'active' : '' }}"
                                    href="/zuschnitt">Zuschnitt</a></li>
                            <li><a class="dropdown-item {{ Request::is('zerspanung') ? 'active' : '' }}"
                                    href="/zerspanung">Zerspanung</a></li>
                            <li><a class="dropdown-item {{ Request::is('schweissen') ? 'active' : '' }}"
                                    href="/schweissen">Schweißen</a></li>
                            <li><a class="dropdown-item {{ Request::is('reinigung') ? 'active' : '' }}"
                                    href="/reinigung">Reinigung</a></li>
                            <li><a class="dropdown-item {{ Request::is('waermebehandlung') ? 'active' : '' }}"
                                    href="/waermebehandlung">Wärmebehandlung</a></li>
                            <li><a class="dropdown-item {{ Request::is('oberflaeche') ? 'active' : '' }}"
                                    href="/oberflaeche">Oberfläche</a></li>
                            <li><a class="dropdown-item {{ Request::is('montage') ? 'active' : '' }}"
                                    href="/montage">Montage</a></li>
                        </ul>
                    </li>


                    <!-- Schweißkonstruktionen START -->
                    <li class="nav-item mx-2 dropdown">
                        <a class="nav-link fw-bold dropdown-toggle {{ Request::is('schweisskonstruktionen*') ? 'active' : '' }}" href="/schweisskonstruktionen" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Schweißkonstruktionen
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item {{ Request::is('schweisskonstruktionen') ? 'active' : '' }}"
                                    href="/schweisskonstruktionen">Schweißkonstruktionen</a>
                            </li>

                            <li>
                                <hr class="dropdown-divider my-0">
                            </li>


                            <li>
                                <hr class="dropdown-divider my-0">
                            </li>
                            <!-- SKID ANLAGENBAU START -->
                            <li class="nav-item mx-2 dropdown">
                                <a class="dropdown-item dropdown-toggle" href="/schweisskonstruktionen/skid-anlagenbau"
                                    id="navbarDropdown1" role="button1" data-bs-toggle="dropdown1"
                                    aria-expanded="false">
                                    Skid Anlagenbau
                                </a>
                                <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown1">
                                    <li><a class="dropdown-item {{ Request::is('/schweisskonstruktionen/skid-anlagenbau/skid-automobilindustrie') ? 'active' : '' }}"
                                            href="/schweisskonstruktionen/skid-anlagenbau/skid-automobilindustrie">Skid
                                            Automobilindustrie</a></li>
                                    <li><a class="dropdown-item {{ Request::is('/schweisskonstruktionen/skid-anlagenbau/foerdertechnik-automobilindustrie') ? 'active' : '' }}"
                                            href="/schweisskonstruktionen/skid-anlagenbau/foerdertechnik-automobilindustrie">Fördertechnik
                                            Automobilindustrie</a></li>
                                    <li>
                                        <a class="dropdown-item {{ Request::is('/schweisskonstruktionen/skid-anlagenbau/hersteller-sonderladungstraeger') ? 'active' : '' }}"
                                            href="/schweisskonstruktionen/skid-anlagenbau/hersteller-sonderladungstraeger">Sonderladungsträger</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- SKID ANLAGENBAU END -->
                            <!-- Lastaufnahmemittel START -->
                            <li class="nav-item mx-2 dropdown">
                                <a class="dropdown-item dropdown-toggle"
                                    href="/schweisskonstruktionen/lastaufnahmemittel-hersteller" id="navbarDropdown2"
                                    role="button2" data-bs-toggle="dropdown2" aria-expanded="false">
                                    Lastaufnahmemittel
                                </a>
                                <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown2">
                                    <li><a class="dropdown-item {{ Request::is('/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlastpaletten-stahl') ? 'active' : '' }}"
                                            href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlastpaletten-stahl">Schwerlastpaletten</a>
                                    </li>

                                    <li><a class="dropdown-item {{ Request::is('/schweisskonstruktionen/lastaufnahmemittel-hersteller/industriebehaelter-metall') ? 'active' : '' }}"
                                            href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/industriebehaelter-metall">Industriebehälter</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item {{ Request::is('/schweisskonstruktionen/lastaufnahmemittel-hersteller/transportbehaelter-metall') ? 'active' : '' }}"
                                            href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/transportbehaelter-metall">Transportbehälter</a>
                                    </li>
                                    <li><a class="dropdown-item {{ Request::is('/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlasttraversen') ? 'active' : '' }}"
                                            href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlasttraversen">Schwerlasttraversen</a>
                                    </li>
                                    <li><a class="dropdown-item {{ Request::is('/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlastboecke') ? 'active' : '' }}"
                                            href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlastboecke">Schwerlastböcke</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item {{ Request::is('/schweisskonstruktionen/lastaufnahmemittel-hersteller/rungengestelle-hersteller') ? 'active' : '' }}"
                                            href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/rungengestelle-hersteller">Rungengestelle</a>
                                    </li>
                                    <li><a class="dropdown-item {{ Request::is('/schweisskonstruktionen/lastaufnahmemittel-hersteller/stapelgestelle-hersteller') ? 'active' : '' }}"
                                            href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/stapelgestelle-hersteller">Stapelgestelle</a>
                                    </li>

                                </ul>
                            </li>
                            <!-- Lastaufnahmemittel END -->
                            <!-- Maschinenbau START -->
                            <li class="nav-item mx-2 dropdown">
                                <a class="dropdown-item dropdown-toggle" href="/schweisskonstruktionen/maschinenbau"
                                    id="navbarDropdown2" role="button2" data-bs-toggle="dropdown2"
                                    aria-expanded="false">
                                    Maschinenbau
                                </a>
                                <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown2">
                                    <li><a class="dropdown-item {{ Request::is('/schweisskonstruktionen/maschinenbau/scherenhubtische-hersteller') ? 'active' : '' }}"
                                            href="/schweisskonstruktionen/maschinenbau/scherenhubtische-hersteller">Scherenhubtische</a>
                                    </li>
                                    <li><a class="dropdown-item {{ Request::is('/schweisskonstruktionen/maschinenbau/schweissgestelle') ? 'active' : '' }}"
                                            href="/schweisskonstruktionen/maschinenbau/schweissgestelle">Schweißgestelle</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item {{ Request::is('/schweisskonstruktionen/maschinenbau/fahrzeugaufbauten-hersteller') ? 'active' : '' }}"
                                            href="/schweisskonstruktionen/maschinenbau/fahrzeugaufbauten-hersteller">Fahrzeugaufbauten</a>
                                    </li>
                                    <li><a class="dropdown-item {{ Request::is('/schweisskonstruktionen/maschinenbau/werkstuecktraegersysteme') ? 'active' : '' }}"
                                            href="/schweisskonstruktionen/maschinenbau/werkstuecktraegersysteme">Werkstückträgersysteme</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Maschinenbau END -->
                            <!-- Transportsysteme START -->
                            <li class="nav-item mx-2 dropdown">
                                <a class="dropdown-item dropdown-toggle"
                                    href="/schweisskonstruktionen/transportsysteme-produktion" id="navbarDropdown2"
                                    role="button2" data-bs-toggle="dropdown2" aria-expanded="false">
                                    Transportsysteme
                                </a>
                                <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown2">
                                    <li><a class="dropdown-item {{ Request::is('/schweisskonstruktionen/transportsysteme-produktion/buehnenwagen') ? 'active' : '' }}"
                                            href="/schweisskonstruktionen/transportsysteme-produktion/buehnenwagen">Bühnenwagen</a>
                                    </li>
                                    <li><a class="dropdown-item {{ Request::is('/schweisskonstruktionen/transportsysteme-produktion/schwerlast-plattformwagen') ? 'active' : '' }}"
                                            href="/schweisskonstruktionen/transportsysteme-produktion/schwerlast-plattformwagen">Schwerlast
                                            Plattformwagen</a></li>
                                    <li>
                                        <a class="dropdown-item {{ Request::is('/schweisskonstruktionen/transportsysteme-produktion/elektrohaengebahn-hersteller') ? 'active' : '' }}"
                                            href="/schweisskonstruktionen/transportsysteme-produktion/elektrohaengebahn-hersteller">Elektrohängebahn</a>
                                    </li>
                                    <li><a class="dropdown-item {{ Request::is('/schweisskonstruktionen/transportsysteme-produktion/power-and-free-foerderer') ? 'active' : '' }}"
                                            href="/schweisskonstruktionen/transportsysteme-produktion/power-and-free-foerderer">Power
                                            and Free Förderer</a></li>
                                    <li><a class="dropdown-item {{ Request::is('/schweisskonstruktionen/transportsysteme-produktion/kreiskettenfoerderer') ? 'active' : '' }}"
                                            href="/schweisskonstruktionen/transportsysteme-produktion/kreiskettenfoerderer">Kreiskettenförderer</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item {{ Request::is('/schweisskonstruktionen/transportsysteme-produktion/unterflurschleppkettenfoerderer') ? 'active' : '' }}"
                                            href="/schweisskonstruktionen/transportsysteme-produktion/unterflurschleppkettenfoerderer">Unterflurschleppkettenförderer</a>
                                    </li>
                                    <li><a class="dropdown-item {{ Request::is('/schweisskonstruktionen/transportsysteme-produktion/fahrerlose-transportsysteme-hersteller') ? 'active' : '' }}"
                                            href="/schweisskonstruktionen/transportsysteme-produktion/fahrerlose-transportsysteme-hersteller">Fahrerlose
                                            Transportsysteme</a></li>
                                </ul>
                            </li>
                            <!-- Transportsysteme END -->
                            <li>
                                <hr class="dropdown-divider my-0">
                            </li>
                            <!-- Ersatzteile und Zubehör START -->
                            <li>
                                <a class="dropdown-item {{ Request::is('schweisskonstruktionen/foerdertechnik-zubehoer-ersatzteile') ? 'active' : '' }}"
                                    href="/schweisskonstruktionen/foerdertechnik-zubehoer-ersatzteile">Ersatzteile und
                                    Zubehör</a>
                            </li>
                            <!-- Ersatzteile und Zubehör END -->
                        </ul>
                    </li>
                    <!-- Schweißkonstruktionen END -->
                    <!-- Schweißkonstruktionen START -->
                    <!-- Stahlverarbeitung START -->
                    <li class="nav-item mx-2 dropdown">
                        <a class="nav-link fw-bold dropdown-toggle {{ Request::is('stahlverarbeitung*') ? 'active' : '' }}" href="/stahlverarbeitung" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Stahlverarbeitung
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item {{ Request::is('stahlverarbeitung') ? 'active' : '' }}"
                                    href="/stahlverarbeitung">Stahlverarbeitung</a>
                            </li>


                            <!-- SKID ANLAGENBAU START -->
                            <li class="nav-item mx-2 dropdown">
                                <a class="dropdown-item dropdown-toggle" href="/stahlverarbeitung/stahlteile-lasern-lassen"
                                    id="navbarDropdown1" role="button1" data-bs-toggle="dropdown1"
                                    aria-expanded="false">
                                    Stahlteile lasern lassen
                                </a>
                                <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown1">
                                    <li><a class="dropdown-item {{ Request::is('/stahlverarbeitung/stahlteile-lasern-lassen/stahlblech-zuschnitt') ? 'active' : '' }}"
                                            href="/stahlverarbeitung/stahlteile-lasern-lassen/stahlblech-zuschnitt">Stahlblech Zuschnitt</a></li>
                                    <li><a class="dropdown-item {{ Request::is('/stahlverarbeitung/stahlteile-lasern-lassen/stahlplatten-zuschnitt') ? 'active' : '' }}"
                                            href="/stahlverarbeitung/stahlteile-lasern-lassen/stahlplatten-zuschnitt">Stahlplatten Zuschnitt</a></li>
                                    <li>
                                        <a class="dropdown-item {{ Request::is('/stahlverarbeitung/stahlteile-lasern-lassen/edelstahl-zuschnitt') ? 'active' : '' }}"
                                            href="/stahlverarbeitung/stahlteile-lasern-lassen/edelstahl-zuschnitt">Edelstahl Zuschnitt</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item {{ Request::is('/stahlverarbeitung/stahlteile-lasern-lassen/schwarzblech-zuschnitt') ? 'active' : '' }}"
                                            href="/stahlverarbeitung/stahlteile-lasern-lassen/schwarzblech-zuschnitt">Schwarzblech Zuschnitt</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item {{ Request::is('/stahlverarbeitung/stahlteile-lasern-lassen/grobblech-zuschnitt') ? 'active' : '' }}"
                                            href="/stahlverarbeitung/stahlteile-lasern-lassen/grobblech-zuschnitt">Grobblech Zuschnitt</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item {{ Request::is('/stahlverarbeitung/stahlteile-lasern-lassen/federstahl-zuschnitt') ? 'active' : '' }}"
                                            href="/stahlverarbeitung/stahlteile-lasern-lassen/federstahl-zuschnitt">Federstahl Zuschnitt</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item {{ Request::is('/stahlverarbeitung/stahlteile-lasern-lassen/werkzeugstahl-zuschnitt') ? 'active' : '' }}"
                                            href="/stahlverarbeitung/stahlteile-lasern-lassen/werkzeugstahl-zuschnitt">Werkzeugstahl Zuschnitt</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item {{ Request::is('/stahlverarbeitung/stahlteile-lasern-lassen/winkelstahl-zuschnitt') ? 'active' : '' }}"
                                            href="/stahlverarbeitung/stahlteile-lasern-lassen/winkelstahl-zuschnitt">Winkelstahl Zuschnitt</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item {{ Request::is('/stahlverarbeitung/stahlteile-lasern-lassen/elektroblech-zuschnitt') ? 'active' : '' }}"
                                            href="/stahlverarbeitung/stahlteile-lasern-lassen/elektroblech-zuschnitt">Elektroblech Zuschnitt</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- SKID ANLAGENBAU END -->
                            <!-- Lastaufnahmemittel START -->
                            <li class="nav-item mx-2 dropdown">
                                <a class="dropdown-item dropdown-toggle"
                                    href="/stahlverarbeitung/stahlbearbeitung" id="navbarDropdown2"
                                    role="button2" data-bs-toggle="dropdown2" aria-expanded="false">
                                    Stahlbearbeitung
                                </a>
                                <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown2">
                                    <li><a class="dropdown-item {{ Request::is('/stahlverarbeitung/stahlbearbeitung/stahl-schweissen-lassen') ? 'active' : '' }}"
                                            href="/stahlverarbeitung/stahlbearbeitung/stahl-schweissen-lassen">Stahl schweißen lassen</a>
                                    </li>

                                    <li><a class="dropdown-item {{ Request::is('/stahlverarbeitung/stahlbearbeitung/stahl-schneiden-lassen') ? 'active' : '' }}"
                                            href="/stahlverarbeitung/stahlbearbeitung/stahl-schneiden-lassen">Stahl schneiden lassen</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item {{ Request::is('/stahlverarbeitung/stahlbearbeitung/stahl-biegen-lassen') ? 'active' : '' }}"
                                            href="/stahlverarbeitung/stahlbearbeitung/stahl-biegen-lassen">Stahl biegen lassen</a>
                                    </li>
                                    <li><a class="dropdown-item {{ Request::is('/stahlverarbeitung/stahlbearbeitung/stahl-fraesen-lassen') ? 'active' : '' }}"
                                            href="/stahlverarbeitung/stahlbearbeitung/stahl-fraesen-lassen">Stahl fräsen lassen</a>
                                    </li>
                                    <li><a class="dropdown-item {{ Request::is('/stahlverarbeitung/stahlbearbeitung/stahl-kanten-lassen') ? 'active' : '' }}"
                                            href="/stahlverarbeitung/stahlbearbeitung/stahl-kanten-lassen">Stahl kanten lassen</a>
                                    </li>


                                </ul>
                            </li>
                            <!-- Lastaufnahmemittel END -->


                    </li>


                </ul>

                <li class="nav-item mx-2"><a href="/unternehmen"
                        class="fw-bold nav-link {{ Request::is('unternehmen') ? 'active' : '' }}">Unternehmen</a>
                </li>
                <li class="nav-item mx-2 dropdown">
                    <a class="nav-link fw-bold dropdown-toggle {{ Request::is('qualitaetspolitik') || Request::is('zertifikate') ? 'active' : '' }}"
                        href="kompetenzen" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Qualität
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item {{ Request::is('qualitaetspolitik') ? 'active' : '' }}" href="/qualitaetspolitik">Qualitätspolitik</a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ Request::is('zertifikate') ? 'active' : '' }}" href="/zertifikate">Zertifikate</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item mx-2"><a href="/management"
                        class="fw-bold nav-link {{ Request::is('management') ? 'active' : '' }}">Management</a></li>
                <li class="nav-item mx-2"><a href="/karriere"
                        class="fw-bold nav-link {{ Request::is('karriere') ? 'active' : '' }}">Karriere</a></li>
                <li class="nav-item mx-2"><a href="/kontakt"
                        class="fw-bold nav-link {{ Request::is('kontakt') ? 'active' : '' }}">Kontakt</a></li>
                @else
                <li class="nav-item mx-2"><a href="{{ url('en/') }}"
                        class="fw-bold nav-link {{ Request::is('en') ? 'active' : '' }}" aria-current="page">Home</a>
                </li>
                <li class="nav-item mx-2"><a href="{{ url('en/competences') }}"
                        class="fw-bold nav-link {{ Request::is('en/competences') ? 'active' : '' }}">Competences</a>
                </li>
                <li class="nav-item mx-2"><a href="{{ url('en/company') }}"
                        class="fw-bold nav-link {{ Request::is('en/company') ? 'active' : '' }}">Company</a></li>
                <li class="nav-item mx-2"><a href="{{ url('en/certificates') }}"
                        class="fw-bold nav-link {{ Request::is('en/certificates') ? 'active' : '' }}">Certificates</a>
                </li>
                <li class="nav-item mx-2"><a href="{{ url('en/management') }}"
                        class="fw-bold nav-link {{ Request::is('en/management') ? 'active' : '' }}">Management</a>
                </li>
                <li class="nav-item mx-2"><a href="{{ url('en/career') }}"
                        class="fw-bold nav-link {{ Request::is('en/career') ? 'active' : '' }}">Career</a></li>
                <li class="nav-item mx-2"><a href="{{ url('en/contact') }}"
                        class="fw-bold nav-link {{ Request::is('en/contact') ? 'active' : '' }}">Contact</a></li>
                @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="main-content">
        @yield('content')
        <div class="ssb-btns-right animate__animated animate__fadeInRight">
            <div class="ssb-dark">
                <a href="/{{ app()->getLocale() == "de" ? '' : 'en' }}" class="ssb-link" aria-label="Web">
                    <div class="ssb-btn">
                        <i class="bi bi-house-fill mx-2"></i> <span>{{ __("Startseite") }}</span>
                    </div>
                </a>
                <a href="mailto:info@irion.de" class="ssb-link" aria-label="Email">
                    <div class="ssb-btn">
                        <i class="bi bi-envelope-fill mx-2"></i> <span>info@irion.de</span>
                    </div>
                </a>
                <a href="tel:+4970531889950" class="ssb-link" aria-label="Tel">
                    <div class="ssb-btn">
                        <i class="bi bi-telephone-fill mx-2"></i> <span>+49 7053 / 188 995-0</span>
                    </div>
                </a>
                <a href="https://wa.me/4916096447514" target="_blank" rel="noopener noreferrer" class="ssb-link"
                    aria-label="WhatsApp">
                    <div class="ssb-btn">
                        <i class="bi bi-whatsapp mx-2"></i> <span>WhatsApp</span>
                    </div>
                </a>
                <a href="https://calendly.com/fleissinger" target="_blank" rel="noopener noreferrer" class="ssb-link"
                    aria-label="Termin">
                    <div class="ssb-btn">
                        <i class="bi bi-calendar-week mx-2"></i> <span>{{ __("Termin vereinbaren") }}</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    @include('footer')
    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ url('assets/cookie-consent/cookie-consent.js') }}"></script>
    <script>
    var cookieConsent = new CookieConsent({
        privacyPolicyUrl: "datenschutz"
    })
    </script>
    @if (request()->cookie('cookie-consent-tracking-allowed') === 'true')
    <!-- Google -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SQ5M0EBTFJ"></script>
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-57ZNGKQ');
    </script>

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-57ZNGKQ" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <script>
    if (cookieConsent.trackingAllowed()) {
        // console.log("Loaded analytics");
        // Google Analytics
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-SQ5M0EBTFJ');

        // LinkedIn
        _linkedin_partner_id = "4036801";
        window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
        window._linkedin_data_partner_ids.push(_linkedin_partner_id);
        (function(l) {
            if (!l) {
                window.lintrk = function(a, b) {
                    window.lintrk.q.push([a, b])
                };
                window.lintrk.q = []
            }
            var s = document.getElementsByTagName("script")[0];
            var b = document.createElement("script");
            b.type = "text/javascript";
            b.async = true;
            b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
            s.parentNode.insertBefore(b, s);
        })(window.lintrk);
    }
    </script>
    @endif
    <script>
    var TxtRotate = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 200) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtRotate.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

        var that = this;
        var delta = 120 - Math.random() * 100;

        if (this.isDeleting) {
            delta /= 2;
        }

        if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
        }

        setTimeout(function() {
            that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('txt-rotate');
        for (var i = 0; i < elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-rotate');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
                new TxtRotate(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
        document.body.appendChild(css);
    };
    </script>
</body>

</html>
