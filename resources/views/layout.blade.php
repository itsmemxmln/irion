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
    @if (session()->get('locale') == "de" && strpos(substr(Request::server('HTTP_ACCEPT_LANGUAGE'), 0, 8), "en-US") !==
    false)
    <div class="alert alert-secondary alert-dismissible fade show rounded-0 mb-0 text-center" role="alert">
        <img src="{{ url('assets/img/flags/us.webp') }}" height="19px" class="mx-1" alt="en"><strong>Our website is also
            available in English!</strong> <a href="{{ url("/us") }}" class="alert-link text-primary">To the English
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
                    @include('lang.'.app()->getLocale().'.nav')                    
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
    @include('lang.'.app()->getLocale().'.footer') 
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


        // SET LANGUAGE BUTTON LINKS
        let btns = document.getElementsByClassName("lang-btn");
        let listBtn = Array.prototype.slice.call(btns);
            listBtn.forEach(element => {element.style.display = "none";})

        let links = document.getElementsByTagName("link");
        let list = Array.prototype.slice.call(links);
            list.forEach(element => {
                if (element.href != null){
                    if (['de', 'en', 'en-US'].indexOf(element.hreflang) != -1){
                        let btn = document.getElementsByClassName("lang-btn " + element.hreflang)[0];
                        btn.style.display = "block";
                        btn.setAttribute('href', element.href)
                    }
                }
            });
    };

    
    </script>
</body>

</html>
