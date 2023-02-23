
                <li class="nav-item mx-2"><a href="/"
                class="fw-bold nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page">Startseite</a>
                </li><li class="nav-item mx-2 dropdown"><a class="nav-link fw-bold dropdown-toggle {{ Request::is('praezisionsfertigung') || Request::is('praezisionsfertigung/*') ? 'active' : '' }}"
                                        href="/praezisionsfertigung" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Präzisionsfertigung 
                                    </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item {{ Request::is('praezisionsfertigung') ? 'active' : '' }}"
                                href="/praezisionsfertigung">Übersicht</a></li>
                        <li>
                            <hr class="dropdown-divider my-0">
                        </li>
                            <li><a class="dropdown-item {{ Request::is('praezisionsfertigung/mechanische-konstruktion') ? 'active' : '' }}"
                                href="/praezisionsfertigung/mechanische-konstruktion">Mechanische Konstruktion </a></li>
                            <li><a class="dropdown-item {{ Request::is('praezisionsfertigung/roboterschweissen') ? 'active' : '' }}"
                                href="/praezisionsfertigung/roboterschweissen">Roboterschweißen </a></li>
                            <li><a class="dropdown-item {{ Request::is('praezisionsfertigung/praezisionsschneiden') ? 'active' : '' }}"
                                href="/praezisionsfertigung/praezisionsschneiden">Präzisionsschneiden </a></li>
                            <li><a class="dropdown-item {{ Request::is('praezisionsfertigung/praezisionszerspanung') ? 'active' : '' }}"
                                href="/praezisionsfertigung/praezisionszerspanung">Präzisionszerspanung </a></li>
                            <li><a class="dropdown-item {{ Request::is('praezisionsfertigung/praezisionsschweissen') ? 'active' : '' }}"
                                href="/praezisionsfertigung/praezisionsschweissen">Präzisionsschweißen </a></li>
                            <li><a class="dropdown-item {{ Request::is('praezisionsfertigung/industrielle-teilereinigung-dienstleistung') ? 'active' : '' }}"
                                href="/praezisionsfertigung/industrielle-teilereinigung-dienstleistung">Industrielle Teilereinigung </a></li>
                            <li><a class="dropdown-item {{ Request::is('praezisionsfertigung/industrielle-waermebehandlung') ? 'active' : '' }}"
                                href="/praezisionsfertigung/industrielle-waermebehandlung">Industrielle Wärmebehandlung </a></li>
                            <li><a class="dropdown-item {{ Request::is('praezisionsfertigung/oberflaechenbeschichtung-stahl') ? 'active' : '' }}"
                                href="/praezisionsfertigung/oberflaechenbeschichtung-stahl">Oberflächenbeschichtung </a></li>
                            <li><a class="dropdown-item {{ Request::is('praezisionsfertigung/pvc-tauchbeschichtung') ? 'active' : '' }}"
                                href="/praezisionsfertigung/pvc-tauchbeschichtung">PVC Tauchbeschichtung </a></li>
                            <li><a class="dropdown-item {{ Request::is('praezisionsfertigung/baugruppenmontage-maschinenbau') ? 'active' : '' }}"
                                href="/praezisionsfertigung/baugruppenmontage-maschinenbau">Baugruppenmontage </a></li></ul></li><li class="nav-item mx-2 dropdown"><a class="nav-link fw-bold dropdown-toggle {{ Request::is('schweisskonstruktionen') || Request::is('schweisskonstruktionen/*') ? 'active' : '' }}"
                                        href="/schweisskonstruktionen" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Schweißkonstruktionen
                                    </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item {{ Request::is('schweisskonstruktionen') ? 'active' : '' }}"
                                href="/schweisskonstruktionen">Übersicht</a></li>
                        <li>
                            <hr class="dropdown-divider my-0">
                        </li>
                            <li class="nav-item mx-2 dropdown">
                                <a class="dropdown-item dropdown-toggle  {{ Request::is('schweisskonstruktionen/skid-anlagenbau') || Request::is('schweisskonstruktionen/skid-anlagenbau/*') ? 'active' : '' }}" href="/schweisskonstruktionen/skid-anlagenbau"
                                    id="navbarDropdown1" role="button1" data-bs-toggle="dropdown1"
                                    aria-expanded="false">
                                    Skid Anlagenbau
                                </a>
                                <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown1">
                            
                                <li><a class="dropdown-item {{ Request::is('schweisskonstruktionen/skid-anlagenbau/skid-automobilindustrie') ? 'active' : '' }}"
                                        href="/schweisskonstruktionen/skid-anlagenbau/skid-automobilindustrie">
                                        Skid Automobilindustrie</a></li>
                                <li><a class="dropdown-item {{ Request::is('schweisskonstruktionen/skid-anlagenbau/foerdertechnik-automobilindustrie') ? 'active' : '' }}"
                                        href="/schweisskonstruktionen/skid-anlagenbau/foerdertechnik-automobilindustrie">
                                        Fördertechnik Automobilindustrie</a></li>
                                <li><a class="dropdown-item {{ Request::is('schweisskonstruktionen/skid-anlagenbau/hersteller-sonderladungstraeger') ? 'active' : '' }}"
                                        href="/schweisskonstruktionen/skid-anlagenbau/hersteller-sonderladungstraeger">
                                        Sonderladungsträger</a></li></ul>
                                    </li>
                            <li class="nav-item mx-2 dropdown">
                                <a class="dropdown-item dropdown-toggle  {{ Request::is('schweisskonstruktionen/lastaufnahmemittel-hersteller') || Request::is('schweisskonstruktionen/lastaufnahmemittel-hersteller/*') ? 'active' : '' }}" href="/schweisskonstruktionen/lastaufnahmemittel-hersteller"
                                    id="navbarDropdown1" role="button1" data-bs-toggle="dropdown1"
                                    aria-expanded="false">
                                    Lastaufnahmemittel
                                </a>
                                <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown1">
                            
                                <li><a class="dropdown-item {{ Request::is('schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlastpaletten-stahl') ? 'active' : '' }}"
                                        href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlastpaletten-stahl">
                                        Schwerlastpaletten</a></li>
                                <li><a class="dropdown-item {{ Request::is('schweisskonstruktionen/lastaufnahmemittel-hersteller/industriebehaelter-metall') ? 'active' : '' }}"
                                        href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/industriebehaelter-metall">
                                        Industriebehälter</a></li>
                                <li><a class="dropdown-item {{ Request::is('schweisskonstruktionen/lastaufnahmemittel-hersteller/transportbehaelter-metall') ? 'active' : '' }}"
                                        href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/transportbehaelter-metall">
                                        Transportbehälter</a></li>
                                <li><a class="dropdown-item {{ Request::is('schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlasttraversen') ? 'active' : '' }}"
                                        href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlasttraversen">
                                        Schwerlasttraversen</a></li>
                                <li><a class="dropdown-item {{ Request::is('schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlastboecke') ? 'active' : '' }}"
                                        href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlastboecke">
                                        Schwerlastböcke</a></li>
                                <li><a class="dropdown-item {{ Request::is('schweisskonstruktionen/lastaufnahmemittel-hersteller/rungengestelle-hersteller') ? 'active' : '' }}"
                                        href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/rungengestelle-hersteller">
                                        Rungengestelle</a></li>
                                <li><a class="dropdown-item {{ Request::is('schweisskonstruktionen/lastaufnahmemittel-hersteller/stapelgestelle-hersteller') ? 'active' : '' }}"
                                        href="/schweisskonstruktionen/lastaufnahmemittel-hersteller/stapelgestelle-hersteller">
                                        Stapelgestelle</a></li></ul>
                                    </li>
                            <li class="nav-item mx-2 dropdown">
                                <a class="dropdown-item dropdown-toggle  {{ Request::is('schweisskonstruktionen/maschinenbau') || Request::is('schweisskonstruktionen/maschinenbau/*') ? 'active' : '' }}" href="/schweisskonstruktionen/maschinenbau"
                                    id="navbarDropdown1" role="button1" data-bs-toggle="dropdown1"
                                    aria-expanded="false">
                                    Maschinenbau
                                </a>
                                <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown1">
                            
                                <li><a class="dropdown-item {{ Request::is('schweisskonstruktionen/maschinenbau/scherenhubtische-hersteller') ? 'active' : '' }}"
                                        href="/schweisskonstruktionen/maschinenbau/scherenhubtische-hersteller">
                                        Scherenhubtische</a></li>
                                <li><a class="dropdown-item {{ Request::is('schweisskonstruktionen/maschinenbau/schweissgestelle') ? 'active' : '' }}"
                                        href="/schweisskonstruktionen/maschinenbau/schweissgestelle">
                                        Schweißgestelle</a></li>
                                <li><a class="dropdown-item {{ Request::is('schweisskonstruktionen/maschinenbau/fahrzeugaufbauten-hersteller') ? 'active' : '' }}"
                                        href="/schweisskonstruktionen/maschinenbau/fahrzeugaufbauten-hersteller">
                                        Fahrzeugaufbauten</a></li>
                                <li><a class="dropdown-item {{ Request::is('schweisskonstruktionen/maschinenbau/werkstuecktraegersysteme') ? 'active' : '' }}"
                                        href="/schweisskonstruktionen/maschinenbau/werkstuecktraegersysteme">
                                        Werkstückträgersysteme</a></li></ul>
                                    </li>
                            <li class="nav-item mx-2 dropdown">
                                <a class="dropdown-item dropdown-toggle  {{ Request::is('schweisskonstruktionen/transportsysteme-produktion') || Request::is('schweisskonstruktionen/transportsysteme-produktion/*') ? 'active' : '' }}" href="/schweisskonstruktionen/transportsysteme-produktion"
                                    id="navbarDropdown1" role="button1" data-bs-toggle="dropdown1"
                                    aria-expanded="false">
                                    Transportsysteme
                                </a>
                                <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown1">
                            
                                <li><a class="dropdown-item {{ Request::is('schweisskonstruktionen/transportsysteme-produktion/buehnenwagen') ? 'active' : '' }}"
                                        href="/schweisskonstruktionen/transportsysteme-produktion/buehnenwagen">
                                        Bühnenwagen</a></li>
                                <li><a class="dropdown-item {{ Request::is('schweisskonstruktionen/transportsysteme-produktion/schwerlast-plattformwagen') ? 'active' : '' }}"
                                        href="/schweisskonstruktionen/transportsysteme-produktion/schwerlast-plattformwagen">
                                        Schwerlast Plattformwagen</a></li>
                                <li><a class="dropdown-item {{ Request::is('schweisskonstruktionen/transportsysteme-produktion/elektrohaengebahn-hersteller') ? 'active' : '' }}"
                                        href="/schweisskonstruktionen/transportsysteme-produktion/elektrohaengebahn-hersteller">
                                        Elektrohängebahn</a></li>
                                <li><a class="dropdown-item {{ Request::is('schweisskonstruktionen/transportsysteme-produktion/power-and-free-foerderer') ? 'active' : '' }}"
                                        href="/schweisskonstruktionen/transportsysteme-produktion/power-and-free-foerderer">
                                        Power and Free Förderer</a></li>
                                <li><a class="dropdown-item {{ Request::is('schweisskonstruktionen/transportsysteme-produktion/kreiskettenfoerderer') ? 'active' : '' }}"
                                        href="/schweisskonstruktionen/transportsysteme-produktion/kreiskettenfoerderer">
                                        Kreiskettenförderer</a></li>
                                <li><a class="dropdown-item {{ Request::is('schweisskonstruktionen/transportsysteme-produktion/unterflurschleppkettenfoerderer') ? 'active' : '' }}"
                                        href="/schweisskonstruktionen/transportsysteme-produktion/unterflurschleppkettenfoerderer">
                                        Unterflurschleppkettenförderer</a></li>
                                <li><a class="dropdown-item {{ Request::is('schweisskonstruktionen/transportsysteme-produktion/fahrerlose-transportsysteme-hersteller') ? 'active' : '' }}"
                                        href="/schweisskonstruktionen/transportsysteme-produktion/fahrerlose-transportsysteme-hersteller">
                                        Fahrerlose Transportsysteme</a></li></ul>
                                    </li>
                            <li><a class="dropdown-item {{ Request::is('schweisskonstruktionen/foerdertechnik-zubehoer-ersatzteile') ? 'active' : '' }}"
                                href="/schweisskonstruktionen/foerdertechnik-zubehoer-ersatzteile">Ersatzteile und Zubehör</a></li></ul></li><li class="nav-item mx-2 dropdown"><a class="nav-link fw-bold dropdown-toggle {{ Request::is('stahlverarbeitung') || Request::is('stahlverarbeitung/*') ? 'active' : '' }}"
                                        href="/stahlverarbeitung" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Stahlverarbeitung
                                    </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item {{ Request::is('stahlverarbeitung') ? 'active' : '' }}"
                                href="/stahlverarbeitung">Übersicht</a></li>
                        <li>
                            <hr class="dropdown-divider my-0">
                        </li>
                            <li class="nav-item mx-2 dropdown">
                                <a class="dropdown-item dropdown-toggle  {{ Request::is('stahlverarbeitung/stahlteile-lasern-lassen') || Request::is('stahlverarbeitung/stahlteile-lasern-lassen/*') ? 'active' : '' }}" href="/stahlverarbeitung/stahlteile-lasern-lassen"
                                    id="navbarDropdown1" role="button1" data-bs-toggle="dropdown1"
                                    aria-expanded="false">
                                    Stahlteile lasern lassen
                                </a>
                                <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown1">
                            
                                <li><a class="dropdown-item {{ Request::is('stahlverarbeitung/stahlteile-lasern-lassen/stahlblech-zuschnitt') ? 'active' : '' }}"
                                        href="/stahlverarbeitung/stahlteile-lasern-lassen/stahlblech-zuschnitt">
                                        Stahlblech Zuschnitt</a></li>
                                <li><a class="dropdown-item {{ Request::is('stahlverarbeitung/stahlteile-lasern-lassen/stahlplatten-zuschnitt') ? 'active' : '' }}"
                                        href="/stahlverarbeitung/stahlteile-lasern-lassen/stahlplatten-zuschnitt">
                                        Stahlplatten Zuschnitt</a></li>
                                <li><a class="dropdown-item {{ Request::is('stahlverarbeitung/stahlteile-lasern-lassen/edelstahl-zuschnitt') ? 'active' : '' }}"
                                        href="/stahlverarbeitung/stahlteile-lasern-lassen/edelstahl-zuschnitt">
                                        Edelstahl Zuschnitt</a></li>
                                <li><a class="dropdown-item {{ Request::is('stahlverarbeitung/stahlteile-lasern-lassen/schwarzblech-zuschnitt') ? 'active' : '' }}"
                                        href="/stahlverarbeitung/stahlteile-lasern-lassen/schwarzblech-zuschnitt">
                                        Schwarzblech Zuschnitt</a></li>
                                <li><a class="dropdown-item {{ Request::is('stahlverarbeitung/stahlteile-lasern-lassen/grobblech-zuschnitt') ? 'active' : '' }}"
                                        href="/stahlverarbeitung/stahlteile-lasern-lassen/grobblech-zuschnitt">
                                        Grobblech Zuschnitt</a></li>
                                <li><a class="dropdown-item {{ Request::is('stahlverarbeitung/stahlteile-lasern-lassen/federstahl-zuschnitt') ? 'active' : '' }}"
                                        href="/stahlverarbeitung/stahlteile-lasern-lassen/federstahl-zuschnitt">
                                        Federstahl Zuschnitt</a></li>
                                <li><a class="dropdown-item {{ Request::is('stahlverarbeitung/stahlteile-lasern-lassen/werkzeugstahl-zuschnitt') ? 'active' : '' }}"
                                        href="/stahlverarbeitung/stahlteile-lasern-lassen/werkzeugstahl-zuschnitt">
                                        Werkzeugstahl Zuschnitt</a></li>
                                <li><a class="dropdown-item {{ Request::is('stahlverarbeitung/stahlteile-lasern-lassen/winkelstahl-zuschnitt') ? 'active' : '' }}"
                                        href="/stahlverarbeitung/stahlteile-lasern-lassen/winkelstahl-zuschnitt">
                                        Winkelstahl Zuschnitt</a></li>
                                <li><a class="dropdown-item {{ Request::is('stahlverarbeitung/stahlteile-lasern-lassen/elektroblech-zuschnitt') ? 'active' : '' }}"
                                        href="/stahlverarbeitung/stahlteile-lasern-lassen/elektroblech-zuschnitt">
                                        Elektroblech Zuschnitt</a></li></ul>
                                    </li>
                            <li class="nav-item mx-2 dropdown">
                                <a class="dropdown-item dropdown-toggle  {{ Request::is('stahlverarbeitung/stahlbearbeitung') || Request::is('stahlverarbeitung/stahlbearbeitung/*') ? 'active' : '' }}" href="/stahlverarbeitung/stahlbearbeitung"
                                    id="navbarDropdown1" role="button1" data-bs-toggle="dropdown1"
                                    aria-expanded="false">
                                    Stahlbearbeitung
                                </a>
                                <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown1">
                            
                                <li><a class="dropdown-item {{ Request::is('stahlverarbeitung/stahlbearbeitung/stahl-schweissen-lassen') ? 'active' : '' }}"
                                        href="/stahlverarbeitung/stahlbearbeitung/stahl-schweissen-lassen">
                                        Stahl schweißen lassen</a></li>
                                <li><a class="dropdown-item {{ Request::is('stahlverarbeitung/stahlbearbeitung/stahl-schneiden-lassen') ? 'active' : '' }}"
                                        href="/stahlverarbeitung/stahlbearbeitung/stahl-schneiden-lassen">
                                        Stahl schneiden lassen</a></li>
                                <li><a class="dropdown-item {{ Request::is('stahlverarbeitung/stahlbearbeitung/stahl-biegen-lassen') ? 'active' : '' }}"
                                        href="/stahlverarbeitung/stahlbearbeitung/stahl-biegen-lassen">
                                        Stahl biegen lassen</a></li>
                                <li><a class="dropdown-item {{ Request::is('stahlverarbeitung/stahlbearbeitung/stahl-fraesen-lassen') ? 'active' : '' }}"
                                        href="/stahlverarbeitung/stahlbearbeitung/stahl-fraesen-lassen">
                                        Stahl fräsen lassen</a></li>
                                <li><a class="dropdown-item {{ Request::is('stahlverarbeitung/stahlbearbeitung/stahl-kanten-lassen') ? 'active' : '' }}"
                                        href="/stahlverarbeitung/stahlbearbeitung/stahl-kanten-lassen">
                                        Stahl kanten lassen</a></li></ul>
                                    </li></ul></li>
                <li class="nav-item mx-2"><a href="/schweissunternehmen"
                class="fw-bold nav-link {{ Request::is('schweissunternehmen') ? 'active' : '' }}" aria-current="page">Unternehmen</a>
                </li><li class="nav-item mx-2 dropdown"><a class="nav-link fw-bold dropdown-toggle {{ Request::is('#') || Request::is('#/*') ? 'active' : '' }}"
                                        href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Qualität
                                    </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="nav-item mx-2 dropdown">
                                <a class="dropdown-item dropdown-toggle  {{ Request::is('schweissunternehmen/zertifikate') || Request::is('schweissunternehmen/zertifikate/*') ? 'active' : '' }}" href="/schweissunternehmen/zertifikate"
                                    id="navbarDropdown1" role="button1" data-bs-toggle="dropdown1"
                                    aria-expanded="false">
                                    Zertifikate
                                </a>
                                <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown1">
                            
                                <li><a class="dropdown-item {{ Request::is('schweissunternehmen/en-1090-zertifizierte-betriebe') ? 'active' : '' }}"
                                        href="/schweissunternehmen/en-1090-zertifizierte-betriebe">
                                        DIN EN 1090-2:2018 EXC3 nach EN 1090-2</a></li>
                                <li><a class="dropdown-item {{ Request::is('schweissunternehmen/konstante-schweissqualitaet') ? 'active' : '' }}"
                                        href="/schweissunternehmen/konstante-schweissqualitaet">
                                        DIN EN ISO 3834-2:2021</a></li>
                                <li><a class="dropdown-item {{ Request::is('schweissunternehmen/qualitaetssicherung-schweissen') ? 'active' : '' }}"
                                        href="/schweissunternehmen/qualitaetssicherung-schweissen">
                                        ISO 9001:2015</a></li></ul>
                                    </li>
                            <li><a class="dropdown-item {{ Request::is('schweissunternehmen/qualitaetspolitik') ? 'active' : '' }}"
                                href="/schweissunternehmen/qualitaetspolitik">Qualitätspolitik</a></li></ul></li>
                <li class="nav-item mx-2"><a href="/management"
                class="fw-bold nav-link {{ Request::is('management') ? 'active' : '' }}" aria-current="page">Management</a>
                </li>
                <li class="nav-item mx-2"><a href="/karriere"
                class="fw-bold nav-link {{ Request::is('karriere') ? 'active' : '' }}" aria-current="page">Karriere</a>
                </li>
                <li class="nav-item mx-2"><a href="/schweissberatung"
                class="fw-bold nav-link {{ Request::is('schweissberatung') ? 'active' : '' }}" aria-current="page">Kontakt</a>
                </li>