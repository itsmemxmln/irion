<footer class="pt-4 mb-md-3 pt-md-5 border-top">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 mb-3">
                <img class="" src="/assets/img/logo.png" alt="Irion Logo" style="max-height: 70px; max-width: 80%;">
                <p class="mt-4 footer-slogan">{{ __("Präzise Schweißgruppen") }} {{ __("ab 30 Stück") }} {{ __("in gleichbleibend hoher Qualität!") }}</p>
                <div class="d-flex">
                    <a href="{{ url("/us") }}" class="lang-btn en-US" style="margin-right: 15px">
                        <img src="{{ url('assets/img/flags/us.webp') }}" height="20px" alt="us american">
                    </a>
                    <a href="{{ url("/en") }}" class="lang-btn en" style="margin-right: 15px">
                        <img src="{{ url('assets/img/flags/en.webp') }}" height="20px" alt="english">
                    </a>
                    <a href="{{ url("/") }}" class="lang-btn de">
                        <img src="{{ url('assets/img/flags/de.webp') }}" height="20px" alt="german">
                    </a>
                </div>
                <hr class="d-xs-block d-none">
            </div>
            

            <div class="col-12 col-md-3 d-none d-md-block">
                <p class="h5">{{ __("Präzisionsfertigung") }}</p>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ url('en') }}#services">{{ __("Leistungen") }}</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ url('en') }}/{{ __("precision-manufacturing") }}">{{ __("Präzisionsfertigung") }}</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-3">
                <p class="h5">{{ __("Unternehmen") }}</p>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ url('en') }}/{{ __("unternehmen") }}">{{ __("Über Irion") }}</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ url('en') }}/{{ __("management") }}">{{ __("Über das Management") }}</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-3">
                <p class="h5">{{ __("Rechtliches") }}</p>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ url('en') }}/{{ __("impressum") }}">{{ __("Impressum") }}</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ url('en') }}/{{ __("datenschutz") }}">{{ __("Datenschutz") }}</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ url('en') }}/{{ __("agb") }}">{{ __("AGB") }}</a></li>
                </ul>
            </div>

        </div>
    </div>
</footer>
<footer class="footer mt-auto py-3">
    <div class="container text-center">
        <a class="social-icon" href="https://www.linkedin.com/in/schweißen/" target="_blank" rel="noopener noreferrer" aria-label="fb"><i class="bi bi-linkedin"></i></a>
        <a class="social-icon" href="https://tinyurl.com/iriontiktok" target="_blank" rel="noopener noreferrer" aria-label="fb"><i class="bi bi-tiktok"></i></a>
        <a class="social-icon" href="https://www.facebook.com/www.irion.de/" target="_blank" rel="noopener noreferrer" aria-label="fb"><i class="bi bi-facebook"></i></a>
        <a class="social-icon" href="https://www.instagram.com/irion1926/" target="_blank" rel="noopener noreferrer" aria-label="insta"><i class="bi bi-instagram"></i></a>
        <a class="social-icon" href="https://wa.me/4916096447514" target="_blank" rel="noopener noreferrer" aria-label="whatsapp"><i class="bi bi-whatsapp"></i></a>
        <br>
        <span class="text-muted">© {{ date('Y') }} Irion GmbH. {{ __("Alle Rechte vorbehalten") }}.</span>
    </div>
</footer>
