@extends('layout')

@section('title', __("Management"))

@if (app()->getLocale() == "de")
    @section('description', 'Wir arbeiten mit Leidenschaft an der Sache. Leidenschaft ist unser Antrieb und die Wurzel für Innovationen. Wir lieben was wir tun und bilden deshalb unsere Mitarbeiter selbst aus. Im technischen Detail liegt oft der Schlüssel zum Erfolg – wir meistern es und setzen es um.')
@else
    @section('description','We always work with passion. Passion is our drive and the cause for innovation. We love what we do and therefore train our employees ourselves. The key to success often lies in technical detail - we master and implement it.')
@endif


@section('head')
<meta name="robots" content="noindex, follow">
<!-- Lang -->
<link rel="alternate" hreflang="x-default" href="https://irion.de/en/management" />
<link rel="alternate" hreflang="de" href="https://irion.de/management" />
<link rel="alternate" hreflang="en" href="https://irion.de/en/management" />
<link rel="alternate" hreflang="en-US" href="https://irion.de/us/management" />
@endsection


@section('content')
<section class="page-banner" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3)), url('{{ url('') }}/assets/img/about-company.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">Management</h1>
</section>
<section class="my-5 container">
    <div class="row text-center">
        <div class="col-lg-4 mb-3 animate__animated animate__fadeInLeft">
            <img src="{{ url('assets/img/hahn.webp') }}" alt="Hahn" class="bd-placeholder-img rounded-circle mb-3" width="190" height="190">
            <p class="h5">Dipl.-Ing. (FH) Eberhardt Hahn</p>
            <small>{{ __("Geschäftsführer")}}</small>
            <div class="mgmt-contact-data">
                <p><i class="bi bi-envelope"></i> ehahn@irion.de</p>
                <p><i class="bi bi-telephone"></i> +49 7053 188 995 0</p>
                <p><i class="bi bi-phone"></i> +49 160 9644 7514</p>
                <p><i class="bi bi-geo-alt"></i> Station Teinach 21, 75385 Bad Teinach</p>
                <p><i class="bi bi-printer"></i> Fax: +49 7053 188 995 29</p>
            </div>
            <p><a class="btn btn-outline-secondary rounded-0" href="vcard/hahn-vcard.vcf">{{ __("Visitenkarte") }} »</a></p>
        </div>
        <div class="col-lg-4 mb-3 animate__animated animate__fadeInUp">
            <img src="{{ url('assets/img/fleissinger.webp') }}" alt="Fleissinger" class="bd-placeholder-img rounded-circle mb-3" width="190" height="190">
            <p class="h5">Dipl.-Ing. (FH) Bernd Fleissinger</p>
            <small>{{ __("Geschäftsführer")}}</small>
            <div class="mgmt-contact-data">
                <p><i class="bi bi-envelope"></i> bfleissinger@irion.de</p>
                <p><i class="bi bi-telephone"></i> +49 7053 188 995 24</p>
                <p><i class="bi bi-phone"></i> +49 160 9644 7514</p>
                <p><i class="bi bi-geo-alt"></i> Station Teinach 21, 75385 Bad Teinach</p>
                <p><i class="bi bi-printer"></i> Fax: +49 7053 188 995 29</p>
            </div>
            <p>
                <a class="btn btn-outline-secondary rounded-0" href="vcard/fleissinger-vcard.vcf">{{ __("Visitenkarte")}} »</a>
                <a class="btn btn-outline-secondary rounded-0" target="_blank" rel="noopener noreferrer" aria-label="wa" href="https://wa.me/4916096447514"><i class="bi bi-whatsapp"></i></a>
                <a class="btn btn-outline-secondary rounded-0" target="_blank" rel="noopener noreferrer" aria-label="linkedin" href="https://www.linkedin.com/in/schwei%C3%9Fen"><i class="bi bi-linkedin"></i></a>
            </p>
            <a class="btn btn-outline-secondary rounded-0" href="https://calendly.com/fleissinger" target="_blank" rel="noopener noreferrer"><i class="bi bi-calendar-week"></i> {{ __("Termin vereinbaren") }}</a>
        </div>
        <div class="col-lg-4 mb-3 animate__animated animate__fadeInRight">
            <img src="{{ url('assets/img/tschirk.webp') }}" alt="Fleissinger" class="bd-placeholder-img rounded-circle mb-3" width="190" height="190">
            <p class="h5">Dipl.-Ing. (FH) Stefan Tschirk</p>
            <small>{{ __("Geschäftsführer")}}</small>
            <div class="mgmt-contact-data">
                <p><i class="bi bi-envelope"></i> stschirk@irion.de</p>
                <p><i class="bi bi-telephone"></i> +49 7053 188 995 0</p>
                <p><i class="bi bi-phone"></i> +49 160 9644 7464</p>
                <p><i class="bi bi-geo-alt"></i> Station Teinach 21, 75385 Bad Teinach</p>
                <p><i class="bi bi-printer"></i> Fax: +49 7053 188 995 29</p>
            </div>
            <p>
                <a class="btn btn-outline-secondary rounded-0" href="vcard/tschirk-vcard.vcf">{{ __("Visitenkarte")}} »</a>
                <a class="btn btn-outline-secondary rounded-0" target="_blank" rel="noopener noreferrer" aria-label="linkedin" href="https://www.linkedin.com/in/stefan-tschirk-53b5bb34/"><i class="bi bi-linkedin"></i></a>
            </p>
        </div>
    </div>
</section>
<section class="container">
    <hr class="featurette-divider my-5">
    <div class="row featurette">
        <div class="col-md-7 animate__animated animate__fadeInLeft">
            <h2 class="featurette-heading">{{ __("Grundstein Nr. 1") }}: <span class="text-muted">{{ __("Feurige Leidenschaft") }}</span></h2>
            <p class="lead" align="justify">
                {{ __("Wir arbeiten mit Leidenschaft an der Sache. Leidenschaft ist unser Antrieb und die Wurzel für Innovationen. Wir lieben was wir tun und bilden deshalb unsere Mitarbeiter selbst aus. Im technischen Detail liegt oft der Schlüssel zum Erfolg – wir meistern es und setzen es um. Zeitliche Ansprüche im Projektgeschäft sind für uns kein Problem – wir können maximal flexibel agieren!") }}
            </p>
        </div>
        <div class="col-md-5 animate__animated animate__fadeInRight">
            <img src="{{ url('') }}/assets/img/management-2.webp" alt="partner" width="100%">
        </div>
    </div>
    <hr class="featurette-divider my-5">
    <div class="row featurette">
        <div class="col-md-7 order-md-2 animate__animated animate__fadeInLeft">
            <h2 class="featurette-heading">{{ __("Grundstein Nr. 2") }}: <span class="text-muted">{{ __("Unbestechliche Qualität") }}</span></h2>
            <p class="lead" align="justify">
                {{ __("Wir haben den Anspruch die Besten zu sein und was wir machen, machen wir außergewöhnlich gut. Unser Quality Management ist mehr als nur ein Werkzeug und jeder von uns trägt dazu bei, dass aus Erzeugnissen Qualitätserzeugnisse werden.") }}
            </p>
        </div>
        <div class="col-md-5 order-md-1 animate__animated animate__fadeInRight">
            <img src="{{ url('') }}/assets/img/management-4.webp" alt="partner" width="100%">
        </div>
    </div>
    <hr class="featurette-divider my-5">
    <div class="row featurette">
        <div class="col-md-7 animate__animated animate__fadeInRight">
            <h2 class="featurette-heading">{{ __("Grundstein Nr. 3") }}: <span class="text-muted">{{ __("Partnerschaft") }}</span></h2>
            <p class="lead" align="justify">
                {{ __("Was wir zusagen, halten wir ein. Wir übernehmen Verantwortung für unser Handeln zum Wohle des Unternehmens und unserer Partner. Wir lernen voneinander und unterschiedlichen Ansichten begegnen wir mit Respekt und suchen gemeinsam nach optimalen Lösungen. So entstehen langjährige Kundenpartnerschaften und Lieferantennetzwerke, um auch das nahezu Unmögliche zu ermöglichen.") }}
            </p>
        </div>
        <div class="col-md-5 animate__animated animate__fadeInLeft">
            <img src="{{ url('') }}/assets/img/management-1.webp" alt="partner" width="100%">
        </div>
    </div>
    <hr class="featurette-divider my-5">
    <div class="row featurette">
        <div class="col-md-7 order-md-2 animate__animated animate__fadeInLeft">
            <h2 class="featurette-heading">{{ __("Grundstein Nr. 4") }}: <span class="text-muted">{{ __("Nachhaltigkeit") }}</span></h2>
            <p class="lead" align="justify">
                {{ __("Wir übernehmen gesellschaftliche Verantwortung und wollen die Bedürfnisbefriedigung zukünftiger Generationen nicht gefährden. Wir setzen uns ambitionierte Ziele und messen unseren Erfolg. Ständig optimieren wir unsere Produktions- und Logistikprozesse, um daraus resultierende Umweltbelastungen zu reduzieren und den Ressourcenverbrauch maximal zu verringern beziehungsweise Verschwendung zu vermeiden. Umweltgerechtes Handeln ist unser Beitrag zur Zukunftssicherung.") }}
            </p>
        </div>
        <div class="col-md-5 order-md-1 animate__animated animate__fadeInRight">
            <img src="{{ url('') }}/assets/img/management-3.webp" alt="partner" width="100%">
        </div>
    </div>
</section>

<hr class="my-5">

<!-- @include('contact-now') -->
@include('conversion-contact')

@endsection
