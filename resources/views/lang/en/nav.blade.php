<li class="nav-item mx-2"><a href="{{ url('en/') }}"
    class="fw-bold nav-link {{ Request::is('us') ? 'active' : '' }}" aria-current="page">Home</a>
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