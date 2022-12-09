<li class="nav-item mx-2"><a href="{{ url('us/') }}"
    class="fw-bold nav-link {{ Request::is('us') ? 'active' : '' }}" aria-current="page">Home</a>
</li>
<li class="nav-item mx-2"><a href="{{ url('us/competences') }}"
    class="fw-bold nav-link {{ Request::is('us/competences') ? 'active' : '' }}">Competences</a>
</li>


<!-- Schweißkonstruktionen START -->
<li class="nav-item mx-2 dropdown">
    <a class="nav-link fw-bold dropdown-toggle {{ Request::is(app()->getLocale().'/welding-fabrications*') ? 'active' : '' }}" href="/us/welding-fabrications" id="navbarDropdown"
        role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Welding Fabrications
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li>
            <a class="dropdown-item {{ Request::is(app()->getLocale().'/welding-fabrications') ? 'active' : '' }}"
                href="/us/welding-fabrications">Welding Fabrications</a>
        </li>
    
        <li>
            <hr class="dropdown-divider my-0">
        </li>
    
        <li>
            <hr class="dropdown-divider my-0">
        </li>
        <!-- SKID ANLAGENBAU START -->
        <li class="nav-item mx-2 dropdown">
            <a class="dropdown-item dropdown-toggle" href="/us/welding-fabrications/skid-construction"
                id="navbarDropdown1" role="button1" data-bs-toggle="dropdown1"
                aria-expanded="false">
                Skid construction
            </a>
            <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown1">
                <li><a class="dropdown-item {{ Request::is('/us/welding-fabrications/skid-construction/skid-automotive') ? 'active' : '' }}"
                        href="/us/welding-fabrications/skid-construction/skid-automotive">Skid Automotive
                    </a></li>
                <li><a class="dropdown-item {{ Request::is('/us/welding-fabrications/skid-construction/conveyor-systems-automotive') ? 'active' : '' }}"
                        href="/us/welding-fabrications/skid-construction/conveyor-systems-automotive">Conveyor Systems Automotive
                    </a></li>
                <li>
                    <a class="dropdown-item {{ Request::is('/us/welding-fabrications/skid-construction/special-load-carriers') ? 'active' : '' }}"
                        href="/us/welding-fabrications/skid-construction/special-load-carriers">Special load carriers</a>
                </li>
            </ul>
        </li>
        <!-- SKID ANLAGENBAU END -->
        <!-- Lastaufnahmemittel START -->
        <li class="nav-item mx-2 dropdown">
            <a class="dropdown-item dropdown-toggle"
                href="/us/welding-fabrications/lifting-equipment-manufacturer" id="navbarDropdown2"
                role="button2" data-bs-toggle="dropdown2" aria-expanded="false">
                Load handling attachment
            </a>
            <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown2">
                <li><a class="dropdown-item {{ Request::is('/us/welding-fabrications/lifting-equipment-manufacturer/heavy-duty-steel-pallets-manufacturers') ? 'active' : '' }}"
                        href="/us/welding-fabrications/lifting-equipment-manufacturer/heavy-duty-steel-pallets-manufacturers">Heavy duty steel pallets</a>
                </li>
    
                <li><a class="dropdown-item {{ Request::is('/us/welding-fabrications/lifting-equipment-manufacturer/industrial-metal-bins') ? 'active' : '' }}"
                        href="/us/welding-fabrications/lifting-equipment-manufacturer/industrial-metal-bins">Industrial bins</a>
                </li>
                <li>
                    <a class="dropdown-item {{ Request::is('/us/welding-fabrications/lifting-equipment-manufacturer/transport-bins') ? 'active' : '' }}"
                        href="/us/welding-fabrications/lifting-equipment-manufacturer/transport-bins">Transport bins</a>
                </li>
                <li><a class="dropdown-item {{ Request::is('/us/welding-fabrications/lifting-equipment-manufacturer/steel-cross-beams') ? 'active' : '' }}"
                        href="/us/welding-fabrications/lifting-equipment-manufacturer/steel-cross-beams">Steel cross beams</a>
                </li>
                <li><a class="dropdown-item {{ Request::is('/us/welding-fabrications/lifting-equipment-manufacturer/heavy-duty-stands') ? 'active' : '' }}"
                        href="/us/welding-fabrications/lifting-equipment-manufacturer/heavy-duty-stands">Heavy duty stands</a>
                </li>
                <li>
                    <a class="dropdown-item {{ Request::is('/us/welding-fabrications/lifting-equipment-manufacturer/post-pallets') ? 'active' : '' }}"
                        href="/us/welding-fabrications/lifting-equipment-manufacturer/post-pallets">Post pallets</a>
                </li>
                <li><a class="dropdown-item {{ Request::is('/us/welding-fabrications/lifting-equipment-manufacturer/metal-stacking-racks') ? 'active' : '' }}"
                        href="/us/welding-fabrications/lifting-equipment-manufacturer/metal-stacking-racks">Metal stacking racks</a>
                </li>
    
            </ul>
        </li>
        <!-- Lastaufnahmemittel END -->
        <!-- Maschinenbau START -->
        <li class="nav-item mx-2 dropdown">
            <a class="dropdown-item dropdown-toggle" href="/us/welding-fabrications/welded-steel-construction"
                id="navbarDropdown2" role="button2" data-bs-toggle="dropdown2"
                aria-expanded="false">
                Mechanical engineering
            </a>
            <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown2">
                <li><a class="dropdown-item {{ Request::is('/us/welding-fabrications/welded-steel-construction/scissor-lift-table-manufacturers') ? 'active' : '' }}"
                        href="/us/welding-fabrications/welded-steel-construction/scissor-lift-table-manufacturers">Scissor lift tables</a>
                </li>
                <li><a class="dropdown-item {{ Request::is('/us/welding-fabrications/welded-steel-construction/welded-racks') ? 'active' : '' }}"
                        href="/us/welding-fabrications/welded-steel-construction/welded-racks">Welded racks</a>
                </li>
                <li>
                    <a class="dropdown-item {{ Request::is('/us/welding-fabrications/welded-steel-construction/commercial-vehicle-bodies') ? 'active' : '' }}"
                        href="/us/welding-fabrications/welded-steel-construction/commercial-vehicle-bodies">Commercial vehicle bodies</a>
                </li>
                <li><a class="dropdown-item {{ Request::is('/us/welding-fabrications/welded-steel-construction/product-conveyor-system') ? 'active' : '' }}"
                        href="/us/welding-fabrications/welded-steel-construction/product-conveyor-system">Product conveyor system</a>
                </li>
            </ul>
        </li>
        <!-- Maschinenbau END -->
        <!-- Transportsysteme START -->
        <li class="nav-item mx-2 dropdown">
            <a class="dropdown-item dropdown-toggle"
                href="/us/welding-fabrications/transportation-systems" id="navbarDropdown2"
                role="button2" data-bs-toggle="dropdown2" aria-expanded="false">
                Transportation systems
            </a>
            <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown2">
                <li><a class="dropdown-item {{ Request::is('/us/welding-fabrications/transportation-systems/mobile-lifting-platforms') ? 'active' : '' }}"
                        href="/us/welding-fabrications/transportation-systems/mobile-lifting-platforms">Mobile lifting platforms</a>
                </li>
                <li><a class="dropdown-item {{ Request::is('/us/welding-fabrications/transportation-systems/heavy-duty-platform-trolley') ? 'active' : '' }}"
                        href="/us/welding-fabrications/transportation-systems/heavy-duty-platform-trolley">Heavy duty platform trolley
                    </a></li>
                <li>
                    <a class="dropdown-item {{ Request::is('/us/welding-fabrications/transportation-systems/electric-monorail') ? 'active' : '' }}"
                        href="/us/welding-fabrications/transportation-systems/electric-monorail">Electric monorail </a>
                </li>
                <li><a class="dropdown-item {{ Request::is('/us/welding-fabrications/transportation-systems/power-and-free-conveyors') ? 'active' : '' }}"
                        href="/us/welding-fabrications/transportation-systems/power-and-free-conveyors">Power and free conveyors
                    </a></li>
                <li><a class="dropdown-item {{ Request::is('/us/welding-fabrications/transportation-systems/chain-conveyor-parts') ? 'active' : '' }}"
                        href="/us/welding-fabrications/transportation-systems/chain-conveyor-parts">Chain conveyor</a>
                </li>
                <li>
                    <a class="dropdown-item {{ Request::is('/us/welding-fabrications/transportation-systems/underfloor-drag-chain-conveyor') ? 'active' : '' }}"
                        href="/us/welding-fabrications/transportation-systems/underfloor-drag-chain-conveyor">Underfloor drag chain conveyor</a>
                </li>
                <li><a class="dropdown-item {{ Request::is('/us/welding-fabrications/transportation-systems/automated-guided-vehicle-manufacturers') ? 'active' : '' }}"
                        href="/us/welding-fabrications/transportation-systems/automated-guided-vehicle-manufacturers">Automated guided vehicle
                    </a></li>
            </ul>
        </li>
        <!-- Transportsysteme END -->
        <li>
            <hr class="dropdown-divider my-0">
        </li>
        <!-- Ersatzteile und Zubehör START -->
        <li>
            <a class="dropdown-item {{ Request::is('/us/welding-fabrications/conveyor-accessories-spare-parts') ? 'active' : '' }}"
                href="/us/welding-fabrications/conveyor-accessories-spare-parts">Spare parts and accessories</a>
        </li>
        <!-- Ersatzteile und Zubehör END -->
    </ul>
    </li>
    <!-- Schweißkonstruktionen END -->


<li class="nav-item mx-2"><a href="{{ url('us/company') }}"
    class="fw-bold nav-link {{ Request::is('us/company') ? 'active' : '' }}">Company</a></li>
<li class="nav-item mx-2"><a href="{{ url('us/certificates') }}"
    class="fw-bold nav-link {{ Request::is('us/certificates') ? 'active' : '' }}">Certificates</a>
</li>
<li class="nav-item mx-2"><a href="{{ url('us/management') }}"
    class="fw-bold nav-link {{ Request::is('us/management') ? 'active' : '' }}">Management</a>
</li>
<li class="nav-item mx-2"><a href="{{ url('us/career') }}"
    class="fw-bold nav-link {{ Request::is('us/career') ? 'active' : '' }}">Career</a></li>
<li class="nav-item mx-2"><a href="{{ url('us/contact') }}"
    class="fw-bold nav-link {{ Request::is('us/contact') ? 'active' : '' }}">Contact</a></li>