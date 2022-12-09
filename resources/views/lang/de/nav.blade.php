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