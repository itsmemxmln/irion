<li class="nav-item mx-2"><a href="{{ url('en/') }}"
    class="fw-bold nav-link {{ Request::is('us') ? 'active' : '' }}" aria-current="page">Home</a>
</li>
<li class="nav-item mx-2"><a href="{{ url('en/competences') }}"
    class="fw-bold nav-link {{ Request::is('en/competences') ? 'active' : '' }}">Competences</a>
</li>


<!-- Schweißkonstruktionen START -->
<li class="nav-item mx-2 dropdown">
    <a class="nav-link fw-bold dropdown-toggle {{ Request::is(app()->getLocale().'/welding-fabrications*') ? 'active' : '' }}" href="/en/welding-fabrications" id="navbarDropdown"
        role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Welding Fabrications
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li>
            <a class="dropdown-item {{ Request::is(app()->getLocale().'/welding-fabrications') ? 'active' : '' }}"
                href="/en/welding-fabrications">Welding Fabrications</a>
        </li>
    
        <li>
            <hr class="dropdown-divider my-0">
        </li>
    
        <li>
            <hr class="dropdown-divider my-0">
        </li>
        <!-- SKID ANLAGENBAU START -->
        <li class="nav-item mx-2 dropdown">
            <a class="dropdown-item dropdown-toggle" href="/en/welding-fabrications/skid-construction"
                id="navbarDropdown1" role="button1" data-bs-toggle="dropdown1"
                aria-expanded="false">
                Skid construction
            </a>
            <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown1">
                <li><a class="dropdown-item {{ Request::is('/en/welding-fabrications/skid-construction/skid-automotive') ? 'active' : '' }}"
                        href="/en/welding-fabrications/skid-construction/skid-automotive">Skid Automotive
                    </a></li>
                <li><a class="dropdown-item {{ Request::is('/en/welding-fabrications/skid-construction/conveyor-systems-automotive') ? 'active' : '' }}"
                        href="/en/welding-fabrications/skid-construction/conveyor-systems-automotive">Conveyor Systems Automotive
                    </a></li>
                <li>
                    <a class="dropdown-item {{ Request::is('/en/welding-fabrications/skid-construction/special-load-carriers') ? 'active' : '' }}"
                        href="/en/welding-fabrications/skid-construction/special-load-carriers">Special load carriers</a>
                </li>
            </ul>
        </li>
        <!-- SKID ANLAGENBAU END -->
        <!-- Lastaufnahmemittel START -->
        <li class="nav-item mx-2 dropdown">
            <a class="dropdown-item dropdown-toggle"
                href="/en/welding-fabrications/lifting-equipment-manufacturer" id="navbarDropdown2"
                role="button2" data-bs-toggle="dropdown2" aria-expanded="false">
                Load handling attachment
            </a>
            <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown2">
                <li><a class="dropdown-item {{ Request::is('/en/welding-fabrications/lifting-equipment-manufacturer/heavy-duty-steel-pallets-manufacturers') ? 'active' : '' }}"
                        href="/en/welding-fabrications/lifting-equipment-manufacturer/heavy-duty-steel-pallets-manufacturers">Heavy duty steel pallets</a>
                </li>
    
                <li><a class="dropdown-item {{ Request::is('/en/welding-fabrications/lifting-equipment-manufacturer/industrial-metal-bins') ? 'active' : '' }}"
                        href="/en/welding-fabrications/lifting-equipment-manufacturer/industrial-metal-bins">Industrial bins</a>
                </li>
                <li>
                    <a class="dropdown-item {{ Request::is('/en/welding-fabrications/lifting-equipment-manufacturer/transport-bins') ? 'active' : '' }}"
                        href="/en/welding-fabrications/lifting-equipment-manufacturer/transport-bins">Transport bins</a>
                </li>
                <li><a class="dropdown-item {{ Request::is('/en/welding-fabrications/lifting-equipment-manufacturer/steel-cross-beams') ? 'active' : '' }}"
                        href="/en/welding-fabrications/lifting-equipment-manufacturer/steel-cross-beams">Steel cross beams</a>
                </li>
                <li><a class="dropdown-item {{ Request::is('/en/welding-fabrications/lifting-equipment-manufacturer/heavy-duty-stands') ? 'active' : '' }}"
                        href="/en/welding-fabrications/lifting-equipment-manufacturer/heavy-duty-stands">Heavy duty stands</a>
                </li>
                <li>
                    <a class="dropdown-item {{ Request::is('/en/welding-fabrications/lifting-equipment-manufacturer/post-pallets') ? 'active' : '' }}"
                        href="/en/welding-fabrications/lifting-equipment-manufacturer/post-pallets">Post pallets</a>
                </li>
                <li><a class="dropdown-item {{ Request::is('/en/welding-fabrications/lifting-equipment-manufacturer/metal-stacking-racks') ? 'active' : '' }}"
                        href="/en/welding-fabrications/lifting-equipment-manufacturer/metal-stacking-racks">Metal stacking racks</a>
                </li>
    
            </ul>
        </li>
        <!-- Lastaufnahmemittel END -->
        <!-- Maschinenbau START -->
        <li class="nav-item mx-2 dropdown">
            <a class="dropdown-item dropdown-toggle" href="/en/welding-fabrications/welded-steel-construction"
                id="navbarDropdown2" role="button2" data-bs-toggle="dropdown2"
                aria-expanded="false">
                Mechanical engineering
            </a>
            <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown2">
                <li><a class="dropdown-item {{ Request::is('/en/welding-fabrications/welded-steel-construction/scissor-lift-table-manufacturers') ? 'active' : '' }}"
                        href="/en/welding-fabrications/welded-steel-construction/scissor-lift-table-manufacturers">Scissor lift tables</a>
                </li>
                <li><a class="dropdown-item {{ Request::is('/en/welding-fabrications/welded-steel-construction/welded-racks') ? 'active' : '' }}"
                        href="/en/welding-fabrications/welded-steel-construction/welded-racks">Welded racks</a>
                </li>
                <li>
                    <a class="dropdown-item {{ Request::is('/en/welding-fabrications/welded-steel-construction/commercial-vehicle-bodies') ? 'active' : '' }}"
                        href="/en/welding-fabrications/welded-steel-construction/commercial-vehicle-bodies">Commercial vehicle bodies</a>
                </li>
                <li><a class="dropdown-item {{ Request::is('/en/welding-fabrications/welded-steel-construction/product-conveyor-system') ? 'active' : '' }}"
                        href="/en/welding-fabrications/welded-steel-construction/product-conveyor-system">Product conveyor system</a>
                </li>
            </ul>
        </li>
        <!-- Maschinenbau END -->
        <!-- Transportsysteme START -->
        <li class="nav-item mx-2 dropdown">
            <a class="dropdown-item dropdown-toggle"
                href="/en/welding-fabrications/transportation-systems" id="navbarDropdown2"
                role="button2" data-bs-toggle="dropdown2" aria-expanded="false">
                Transportation systems
            </a>
            <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown2">
                <li><a class="dropdown-item {{ Request::is('/en/welding-fabrications/transportation-systems/mobile-lifting-platforms') ? 'active' : '' }}"
                        href="/en/welding-fabrications/transportation-systems/mobile-lifting-platforms">Mobile lifting platforms</a>
                </li>
                <li><a class="dropdown-item {{ Request::is('/en/welding-fabrications/transportation-systems/heavy-duty-platform-trolley') ? 'active' : '' }}"
                        href="/en/welding-fabrications/transportation-systems/heavy-duty-platform-trolley">Heavy duty platform trolley
                    </a></li>
                <li>
                    <a class="dropdown-item {{ Request::is('/en/welding-fabrications/transportation-systems/electric-monorail') ? 'active' : '' }}"
                        href="/en/welding-fabrications/transportation-systems/electric-monorail">Electric monorail </a>
                </li>
                <li><a class="dropdown-item {{ Request::is('/en/welding-fabrications/transportation-systems/power-and-free-conveyors') ? 'active' : '' }}"
                        href="/en/welding-fabrications/transportation-systems/power-and-free-conveyors">Power and free conveyors
                    </a></li>
                <li><a class="dropdown-item {{ Request::is('/en/welding-fabrications/transportation-systems/chain-conveyor-parts') ? 'active' : '' }}"
                        href="/en/welding-fabrications/transportation-systems/chain-conveyor-parts">Chain conveyor</a>
                </li>
                <li>
                    <a class="dropdown-item {{ Request::is('/en/welding-fabrications/transportation-systems/underfloor-drag-chain-conveyor') ? 'active' : '' }}"
                        href="/en/welding-fabrications/transportation-systems/underfloor-drag-chain-conveyor">Underfloor drag chain conveyor</a>
                </li>
                <li><a class="dropdown-item {{ Request::is('/en/welding-fabrications/transportation-systems/automated-guided-vehicle-manufacturers') ? 'active' : '' }}"
                        href="/en/welding-fabrications/transportation-systems/automated-guided-vehicle-manufacturers">Automated guided vehicle
                    </a></li>
            </ul>
        </li>
        <!-- Transportsysteme END -->
        <li>
            <hr class="dropdown-divider my-0">
        </li>
        <!-- Ersatzteile und Zubehör START -->
        <li>
            <a class="dropdown-item {{ Request::is('/en/welding-fabrications/conveyor-accessories-spare-parts') ? 'active' : '' }}"
                href="/en/welding-fabrications/conveyor-accessories-spare-parts">Spare parts and accessories</a>
        </li>
        <!-- Ersatzteile und Zubehör END -->
    </ul>
    </li>
    <!-- Schweißkonstruktionen END -->


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