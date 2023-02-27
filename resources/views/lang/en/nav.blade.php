
                <li class="nav-item mx-2"><a href="/en"
                    class="fw-bold nav-link {{ Request::is('en') ? 'active' : '' }}" aria-current="page">Homepage</a>
                    </li><li class="nav-item mx-2 dropdown"><a class="nav-link fw-bold dropdown-toggle {{ Request::is('en/competences') || Request::is('en/competences/*') ? 'active' : '' }}"
                                            href="/en/competences" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Competences
                                        </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item {{ Request::is('en/competences') ? 'active' : '' }}"
                                    href="/en/competences">Overview</a></li>
                            <li>
                                <hr class="dropdown-divider my-0">
                            </li></ul></li>
                    <li class="nav-item mx-2"><a href="/en/company"
                    class="fw-bold nav-link {{ Request::is('en/company') ? 'active' : '' }}" aria-current="page">Company</a>
                    </li>
                    <li class="nav-item mx-2"><a href="/en/management"
                    class="fw-bold nav-link {{ Request::is('en/management') ? 'active' : '' }}" aria-current="page">Management</a>
                    </li>
                    <li class="nav-item mx-2"><a href="/en/contact"
                    class="fw-bold nav-link {{ Request::is('en/contact') ? 'active' : '' }}" aria-current="page">Contact</a>
                    </li>