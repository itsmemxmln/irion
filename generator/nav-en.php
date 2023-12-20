
                    <li class="nav-item mx-2"><a href="/en"
                    class="fw-bold nav-link {{ Request::is('en') ? 'active' : '' }}" aria-current="page">Homepage</a>
                    </li><li class="nav-item mx-2 dropdown"><a class="nav-link fw-bold dropdown-toggle {{ Request::is('en/precision-manufacturing') || Request::is('en/precision-manufacturing/*') ? 'active' : '' }}"
                                        href="/en/precision-manufacturing" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Precision manufacturing
                                    </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item {{ Request::is('en/precision-manufacturing') ? 'active' : '' }}"
                                href="/en/precision-manufacturing">Overview</a></li>
                        <li>
                            <hr class="dropdown-divider my-0">
                        </li>
                                <li><a class="dropdown-item {{ Request::is('en/precision-manufacturing/cad-engineering') ? 'active' : '' }}"
                                    href="/en/precision-manufacturing/cad-engineering">CAD engineering</a></li>
                                <li><a class="dropdown-item {{ Request::is('en/precision-manufacturing/automated-welding') ? 'active' : '' }}"
                                    href="/en/precision-manufacturing/automated-welding">Automated welding</a></li>
                                <li><a class="dropdown-item {{ Request::is('en/precision-manufacturing/metal-cutting-industry') ? 'active' : '' }}"
                                    href="/en/precision-manufacturing/metal-cutting-industry">Metal cutting industry</a></li>
                                <li><a class="dropdown-item {{ Request::is('en/precision-manufacturing/precision-machining-services ') ? 'active' : '' }}"
                                    href="/en/precision-manufacturing/precision-machining-services ">Precision machining services</a></li>
                                <li><a class="dropdown-item {{ Request::is('en/precision-manufacturing/precision-welding-services ') ? 'active' : '' }}"
                                    href="/en/precision-manufacturing/precision-welding-services ">Precision welding services</a></li>
                                <li><a class="dropdown-item {{ Request::is('en/precision-manufacturing/industrial-parts-cleaning-service') ? 'active' : '' }}"
                                    href="/en/precision-manufacturing/industrial-parts-cleaning-service">Industrial parts cleaning service</a></li>
                                <li><a class="dropdown-item {{ Request::is('en/precision-manufacturing/steel-hardening-service') ? 'active' : '' }}"
                                    href="/en/precision-manufacturing/steel-hardening-service">Steel hardening service</a></li>
                                <li><a class="dropdown-item {{ Request::is('en/precision-manufacturing/metal-surface-treatment') ? 'active' : '' }}"
                                    href="/en/precision-manufacturing/metal-surface-treatment">Metal surface treatment</a></li>
                                <li><a class="dropdown-item {{ Request::is('en/precision-manufacturing/plastic-dip-coating-for-metal') ? 'active' : '' }}"
                                    href="/en/precision-manufacturing/plastic-dip-coating-for-metal">Plastic dip coating for metal</a></li>
                                <li><a class="dropdown-item {{ Request::is('en/precision-manufacturing/module-assembly') ? 'active' : '' }}"
                                    href="/en/precision-manufacturing/module-assembly">Module assembly</a></li></ul></li><li class="nav-item mx-2 dropdown"><a class="nav-link fw-bold dropdown-toggle {{ Request::is('en/welded-construction ') || Request::is('en/welded-construction /*') ? 'active' : '' }}"
                                        href="/en/welded-construction " id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Welded construction
                                    </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item {{ Request::is('en/welded-construction ') ? 'active' : '' }}"
                                href="/en/welded-construction ">Overview</a></li>
                        <li>
                            <hr class="dropdown-divider my-0">
                        </li>
                                    <li class="nav-item mx-2 dropdown">
                                        <a class="dropdown-item dropdown-toggle  {{ Request::is('en/welded-construction/skid-system') || Request::is('en/welded-construction/skid-system/*') ? 'active' : '' }}" href="/en/welded-construction/skid-system"
                                            id="navbarDropdown1" role="button1" data-bs-toggle="dropdown1"
                                            aria-expanded="false">
                                            Skid system
                                        </a>
                                        <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown1">
                                    
                                        <li><a class="dropdown-item {{ Request::is('en/welded-construction/skid-system/skid-automotive') ? 'active' : '' }}"
                                                href="/en/welded-construction/skid-system/skid-automotive">
                                                Skid Automotive</a></li>
                                        <li><a class="dropdown-item {{ Request::is('en/welded-construction/skid-system/conveyor-technology') ? 'active' : '' }}"
                                                href="/en/welded-construction/skid-system/conveyor-technology">
                                                Conveyor technology automotive</a></li>
                                        <li><a class="dropdown-item {{ Request::is('en/welded-construction/skid-system/special-load-carriers') ? 'active' : '' }}"
                                                href="/en/welded-construction/skid-system/special-load-carriers">
                                                Special load carriers</a></li></ul>
                                        </li>
                                    <li class="nav-item mx-2 dropdown">
                                        <a class="dropdown-item dropdown-toggle  {{ Request::is('en/welded-construction/manufactured-lifting-equipment') || Request::is('en/welded-construction/manufactured-lifting-equipment/*') ? 'active' : '' }}" href="/en/welded-construction/manufactured-lifting-equipment"
                                            id="navbarDropdown1" role="button1" data-bs-toggle="dropdown1"
                                            aria-expanded="false">
                                            Manufactured lifting equipment
                                        </a>
                                        <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown1">
                                    
                                        <li><a class="dropdown-item {{ Request::is('en/welded-construction/manufactured-lifting-equipment/steel-pallets-manufacturers') ? 'active' : '' }}"
                                                href="/en/welded-construction/manufactured-lifting-equipment/steel-pallets-manufacturers">
                                                Steel pallets manufacturers</a></li>
                                        <li><a class="dropdown-item {{ Request::is('en/welded-construction/manufactured-lifting-equipment/industrial-container ') ? 'active' : '' }}"
                                                href="/en/welded-construction/manufactured-lifting-equipment/industrial-container ">
                                                Industrial container</a></li>
                                        <li><a class="dropdown-item {{ Request::is('en/welded-construction/manufactured-lifting-equipment/transport-bins') ? 'active' : '' }}"
                                                href="/en/welded-construction/manufactured-lifting-equipment/transport-bins">
                                                Transport bins</a></li>
                                        <li><a class="dropdown-item {{ Request::is('en/welded-construction/manufactured-lifting-equipment/steel-cross-beams') ? 'active' : '' }}"
                                                href="/en/welded-construction/manufactured-lifting-equipment/steel-cross-beams">
                                                Steel cross beams</a></li>
                                        <li><a class="dropdown-item {{ Request::is('en/welded-construction/manufactured-lifting-equipment/heavy-duty-steel-trestles ') ? 'active' : '' }}"
                                                href="/en/welded-construction/manufactured-lifting-equipment/heavy-duty-steel-trestles ">
                                                Heavy duty steel trestles</a></li>
                                        <li><a class="dropdown-item {{ Request::is('en/welded-construction/manufactured-lifting-equipment/pallet-stillages') ? 'active' : '' }}"
                                                href="/en/welded-construction/manufactured-lifting-equipment/pallet-stillages">
                                                Pallet stillages</a></li>
                                        <li><a class="dropdown-item {{ Request::is('en/welded-construction/manufactured-lifting-equipment/metal-stacking-racks') ? 'active' : '' }}"
                                                href="/en/welded-construction/manufactured-lifting-equipment/metal-stacking-racks">
                                                Metal stacking racks</a></li></ul>
                                        </li>
                                    <li class="nav-item mx-2 dropdown">
                                        <a class="dropdown-item dropdown-toggle  {{ Request::is('en/welded-construction/welding-mechanical-engineering') || Request::is('en/welded-construction/welding-mechanical-engineering/*') ? 'active' : '' }}" href="/en/welded-construction/welding-mechanical-engineering"
                                            id="navbarDropdown1" role="button1" data-bs-toggle="dropdown1"
                                            aria-expanded="false">
                                            Welding mechanical engineering
                                        </a>
                                        <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown1">
                                    
                                        <li><a class="dropdown-item {{ Request::is('en/welded-construction/welding-mechanical-engineering/lifting-platform') ? 'active' : '' }}"
                                                href="/en/welded-construction/welding-mechanical-engineering/lifting-platform">
                                                Lifting platform</a></li>
                                        <li><a class="dropdown-item {{ Request::is('en/welded-construction/welding-mechanical-engineering/steel-frame-construction') ? 'active' : '' }}"
                                                href="/en/welded-construction/welding-mechanical-engineering/steel-frame-construction">
                                                Steel frame construction</a></li>
                                        <li><a class="dropdown-item {{ Request::is('en/welded-construction/welding-mechanical-engineering/truck-bodies-manufacturers ') ? 'active' : '' }}"
                                                href="/en/welded-construction/welding-mechanical-engineering/truck-bodies-manufacturers ">
                                                Truck bodies manufacturers</a></li>
                                        <li><a class="dropdown-item {{ Request::is('en/welded-construction/welding-mechanical-engineering/product-conveyor-system') ? 'active' : '' }}"
                                                href="/en/welded-construction/welding-mechanical-engineering/product-conveyor-system">
                                                Product conveyor system</a></li></ul>
                                        </li>
                                    <li class="nav-item mx-2 dropdown">
                                        <a class="dropdown-item dropdown-toggle  {{ Request::is('en/welded-construction/transportation-systems') || Request::is('en/welded-construction/transportation-systems/*') ? 'active' : '' }}" href="/en/welded-construction/transportation-systems"
                                            id="navbarDropdown1" role="button1" data-bs-toggle="dropdown1"
                                            aria-expanded="false">
                                            Transportation systems
                                        </a>
                                        <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown1">
                                    
                                        <li><a class="dropdown-item {{ Request::is('en/welded-construction/transportation-systems/mobile-lifting-platforms') ? 'active' : '' }}"
                                                href="/en/welded-construction/transportation-systems/mobile-lifting-platforms">
                                                Mobile lifting platforms</a></li>
                                        <li><a class="dropdown-item {{ Request::is('en/welded-construction/transportation-systems/heavy-duty-platform-truck') ? 'active' : '' }}"
                                                href="/en/welded-construction/transportation-systems/heavy-duty-platform-truck">
                                                Heavy duty platform truck</a></li>
                                        <li><a class="dropdown-item {{ Request::is('en/welded-construction/transportation-systems/ems-system') ? 'active' : '' }}"
                                                href="/en/welded-construction/transportation-systems/ems-system">
                                                EMS system</a></li>
                                        <li><a class="dropdown-item {{ Request::is('en/welded-construction/transportation-systems/power-and-free-conveyors') ? 'active' : '' }}"
                                                href="/en/welded-construction/transportation-systems/power-and-free-conveyors">
                                                Power and free conveyors</a></li>
                                        <li><a class="dropdown-item {{ Request::is('en/welded-construction/transportation-systems/chain-conveyor-parts') ? 'active' : '' }}"
                                                href="/en/welded-construction/transportation-systems/chain-conveyor-parts">
                                                Chain conveyor parts</a></li>
                                        <li><a class="dropdown-item {{ Request::is('en/welded-construction/transportation-systems//underfloor-drag-chain-conveyor') ? 'active' : '' }}"
                                                href="/en/welded-construction/transportation-systems//underfloor-drag-chain-conveyor">
                                                Underfloor drag chain conveyor</a></li>
                                        <li><a class="dropdown-item {{ Request::is('en/welded-construction/transportation-systems/driverless-transport-systems') ? 'active' : '' }}"
                                                href="/en/welded-construction/transportation-systems/driverless-transport-systems">
                                                Driverless transport systems</a></li></ul>
                                        </li>
                                <li><a class="dropdown-item {{ Request::is('en/welded-construction/conveyor-components') ? 'active' : '' }}"
                                    href="/en/welded-construction/conveyor-components">Conveyor components</a></li></ul></li><li class="nav-item mx-2 dropdown"><a class="nav-link fw-bold dropdown-toggle {{ Request::is('en/steel-processing-company') || Request::is('en/steel-processing-company/*') ? 'active' : '' }}"
                                        href="/en/steel-processing-company" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Steel processing
                                    </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item {{ Request::is('en/steel-processing-company') ? 'active' : '' }}"
                                href="/en/steel-processing-company">Overview</a></li>
                        <li>
                            <hr class="dropdown-divider my-0">
                        </li>
                                    <li class="nav-item mx-2 dropdown">
                                        <a class="dropdown-item dropdown-toggle  {{ Request::is('en/steel-processing-company/laser-cutting-service') || Request::is('en/steel-processing-company/laser-cutting-service/*') ? 'active' : '' }}" href="/en/steel-processing-company/laser-cutting-service"
                                            id="navbarDropdown1" role="button1" data-bs-toggle="dropdown1"
                                            aria-expanded="false">
                                            Laser cutting service
                                        </a>
                                        <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown1">
                                    
                                        <li><a class="dropdown-item {{ Request::is('en/steel-processing-company/laser-cutting-service/sheet-metal-cutting') ? 'active' : '' }}"
                                                href="/en/steel-processing-company/laser-cutting-service/sheet-metal-cutting">
                                                Sheet metal cutting</a></li>
                                        <li><a class="dropdown-item {{ Request::is('en/steel-processing-company/laser-cutting-service/steel-plate-cut-to-size') ? 'active' : '' }}"
                                                href="/en/steel-processing-company/laser-cutting-service/steel-plate-cut-to-size">
                                                Steel plate cut to size</a></li>
                                        <li><a class="dropdown-item {{ Request::is('en/steel-processing-company/laser-cutting-service/stainless-steel-cutting') ? 'active' : '' }}"
                                                href="/en/steel-processing-company/laser-cutting-service/stainless-steel-cutting">
                                                Stainless steel cutting</a></li>
                                        <li><a class="dropdown-item {{ Request::is('en/steel-processing-company/laser-cutting-service/black-metal-sheet-cut-to-size') ? 'active' : '' }}"
                                                href="/en/steel-processing-company/laser-cutting-service/black-metal-sheet-cut-to-size">
                                                Black sheet metal cutting</a></li>
                                        <li><a class="dropdown-item {{ Request::is('en/steel-processing-company/laser-cutting-service/cutting-thick-sheet-metal') ? 'active' : '' }}"
                                                href="/en/steel-processing-company/laser-cutting-service/cutting-thick-sheet-metal">
                                                Thick sheet metal cutting</a></li>
                                        <li><a class="dropdown-item {{ Request::is('en/steel-processing-company/laser-cutting-service/spring-steel-cut-to-size') ? 'active' : '' }}"
                                                href="/en/steel-processing-company/laser-cutting-service/spring-steel-cut-to-size">
                                                Spring steel cutting</a></li>
                                        <li><a class="dropdown-item {{ Request::is('en/steel-processing-company/laser-cutting-service/tool-steel-cut-to-size') ? 'active' : '' }}"
                                                href="/en/steel-processing-company/laser-cutting-service/tool-steel-cut-to-size">
                                                Tool steel cutting</a></li>
                                        <li><a class="dropdown-item {{ Request::is('en/steel-processing-company/laser-cutting-service/steel-angle-cut-to-size') ? 'active' : '' }}"
                                                href="/en/steel-processing-company/laser-cutting-service/steel-angle-cut-to-size">
                                                Steel angle cut to size</a></li>
                                        <li><a class="dropdown-item {{ Request::is('en/steel-processing-company/laser-cutting-service/electrical-steel-cutting') ? 'active' : '' }}"
                                                href="/en/steel-processing-company/laser-cutting-service/electrical-steel-cutting">
                                                Electrical steel cutting</a></li></ul>
                                        </li>
                                    <li class="nav-item mx-2 dropdown">
                                        <a class="dropdown-item dropdown-toggle  {{ Request::is('en/steel-processing-company/steel-machining') || Request::is('en/steel-processing-company/steel-machining/*') ? 'active' : '' }}" href="/en/steel-processing-company/steel-machining"
                                            id="navbarDropdown1" role="button1" data-bs-toggle="dropdown1"
                                            aria-expanded="false">
                                            Steel machining
                                        </a>
                                        <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown1">
                                    
                                        <li><a class="dropdown-item {{ Request::is('en/steel-processing-company/steel-machining/welding-manufacturer') ? 'active' : '' }}"
                                                href="/en/steel-processing-company/steel-machining/welding-manufacturer">
                                                Welding manufacturer</a></li>
                                        <li><a class="dropdown-item {{ Request::is('en/steel-processing-company/steel-machining/laser-cutting-company') ? 'active' : '' }}"
                                                href="/en/steel-processing-company/steel-machining/laser-cutting-company">
                                                Laser cutting company</a></li>
                                        <li><a class="dropdown-item {{ Request::is('en/steel-processing-company/steel-machining/steel-bending-company') ? 'active' : '' }}"
                                                href="/en/steel-processing-company/steel-machining/steel-bending-company">
                                                Steel bending company</a></li>
                                        <li><a class="dropdown-item {{ Request::is('en/steel-processing-company/steel-machining/steel-milling') ? 'active' : '' }}"
                                                href="/en/steel-processing-company/steel-machining/steel-milling">
                                                Steel milling</a></li>
                                        <li><a class="dropdown-item {{ Request::is('en/steel-processing-company/steel-machining/press-brake-tooling') ? 'active' : '' }}"
                                                href="/en/steel-processing-company/steel-machining/press-brake-tooling">
                                                Press brake tooling</a></li></ul>
                                        </li></ul></li><li class="nav-item mx-2 dropdown"><a class="nav-link fw-bold dropdown-toggle {{ Request::is('en#') || Request::is('en#/*') ? 'active' : '' }}"
                                        href="/en#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Career
                                    </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item {{ Request::is('en/welding-jobs-in-germany-for-english-speakers-bad-teinach-black-forest') ? 'active' : '' }}"
                                    href="/en/welding-jobs-in-germany-for-english-speakers-bad-teinach-black-forest">Welder</a></li></ul></li><li class="nav-item mx-2 dropdown"><a class="nav-link fw-bold dropdown-toggle {{ Request::is('en/industrial-welding-services') || Request::is('en/industrial-welding-services/*') ? 'active' : '' }}"
                                        href="/en/industrial-welding-services" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Company
                                    </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item {{ Request::is('en/industrial-welding-services') ? 'active' : '' }}"
                                href="/en/industrial-welding-services">Overview</a></li>
                        <li>
                            <hr class="dropdown-divider my-0">
                        </li>
                                <li><a class="dropdown-item {{ Request::is('en/management') ? 'active' : '' }}"
                                    href="/en/management">Management</a></li>
                                    <li class="nav-item mx-2 dropdown">
                                        <a class="dropdown-item dropdown-toggle  {{ Request::is('en#') || Request::is('en#/*') ? 'active' : '' }}" href="/en#"
                                            id="navbarDropdown1" role="button1" data-bs-toggle="dropdown1"
                                            aria-expanded="false">
                                            Sites
                                        </a>
                                        <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown1">
                                    
                                        <li><a class="dropdown-item {{ Request::is('en/sites/welding-company-germany') ? 'active' : '' }}"
                                                href="/en/sites/welding-company-germany">
                                                Germany</a></li>
                                        <li><a class="dropdown-item {{ Request::is('en/sites/welding-abroad') ? 'active' : '' }}"
                                                href="/en/sites/welding-abroad">
                                                Bosnia</a></li></ul>
                                        </li>
                                <li><a class="dropdown-item {{ Request::is('en/welding-consulting') ? 'active' : '' }}"
                                    href="/en/welding-consulting">Contact</a></li></ul></li>