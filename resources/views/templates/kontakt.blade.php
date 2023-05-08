@extends('layout')

@section('title', isset($meta_title) ? $meta_title : "")
@section('description', isset($meta_description) ? $meta_description : "")

@section('head')
@if (isset($hreflang))
    {{-- LANG --}}
    {!!$hreflang!!}
@endif
@endsection

@section('content')
<section class="page-banner" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3)), url('{{ url('') }}/assets/img/home/oberflaechen/2.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">@if(isset($h1)) {{$h1}} @endif</h1>
</section>
<section id="contact-form" class="container mt-5">
    <div class="row justify-content-center">
        @if(isset($seo1)) 
        <div class="col-12 col-md-8 col-lg-7">
            <p style="text-align: center">
                {!!$seo1!!} 
            </p>
        </div>
        @endif
        <div class="col-lg-6 p-5 animate__animated animate__fadeInLeft">
            <span class="span-h2">{{ __("Treten Sie mit uns in Kontakt") }}</span>
            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <h4 class="alert-heading"><i class="fa fa-check" aria-hidden="true"></i> Error!</h4>
                <ul class="errors">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if(session()->has('success'))
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </symbol>
                <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                </symbol>
                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </symbol>
              </svg>
            <div class="alert alert-success d-flex align-items-center alert-dismissible rounded-0" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                {{ __("Ihre Nachricht wurde erfolgreich versandt!")}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <form action="send" method="POST" role="form" class="row">
                {{ @csrf_field() }}
                <input name="ts" type="hidden" value="{{ time() }}">
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="{{ __("Vorname") }}" value="{{ old('firstname') }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="{{ __("Nachname") }}" value="{{ old('lastname') }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <input type="phone" class="form-control" id="phone" name="phone" placeholder="{{ __("Telefonnummer") }}" value="{{ old('phone') }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="{{ __("E-Mail Adresse") }}" value="{{ old('email') }}" required>
                </div>
                <div class="col-12">
                    <textarea class="form-control mb-3" id="message" name="message" rows="5" placeholder="{{ __("Ihre Nachricht") }}">{{ old('message') }}</textarea>
                </div>
                <div class="col mb-3 form-group">
                    <label for="pro">{{ __("Schreiben Sie das Wort 'Mensch' in das nachfolgende Feld.") }}</label>
                    <input style="max-width: 350px;" type="text" name="pro" class="form-control rounded-0 @error('pro') is-invalid @enderror" id="pro" placeholder="{{ __("Spamschutz") }}" value="{{ old('pro') }}" required aria-label="Input">
                </div>
                <div class="col-12 mb-3">
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="legal_checkbox" name="legal_checkbox" required>
                        <label class="form-check-label" for="legal_checkbox">
                        @if (session()->get('locale') == "de")
                        Ich akzeptiere die <a href="{{ url(__("datenschutz")) }}" target="_blank">Datenschutzerklärung</a> und stimme der Speicherung und Verarbeitung der übermittelten Daten zu.
                        @else
                        I accept the <a href="privacy" target="_blank">privacy policy</a> and agree to the storage and processing of the submitted data.
                        @endif
                        </label>
                    </div>
                    <button type="submit" class="btn btn-dark rounded-0">{{ __("Abschicken") }}</button>
                </div>
            </form>
        </div>
        <div class="col-lg-6 p-5 animate__animated animate__fadeInRight">
            <h3 class="h4">{{ __("Ihr Ansprechpartner") }}</h3>
            <div class="row mb-4 animate__animated animate__fadeInUp">
                <div class="col-auto">
                    <img src="{{ url('assets/img/fleissinger.webp') }}" alt="Fleissinger" class="bd-placeholder-img rounded-circle mb-3 my-2" width="140" height="140">
                </div>
               <div class="col">
                    <p class="h5">Dipl.-Ing. (FH) Bernd Fleissinger</p>
                    <p>{{ __("Geschäftsführer")}}</p>
                    <div class="mgmt-contact-data">
                        <p><i class="bi bi-envelope"></i> <a href="mailto:bfleissinger@irion.de"> bfleissinger@irion.de</a> </p>
                        <p><i class="bi bi-telephone"></i> <a href="tel:+49705318899524"> +49 7053 188 995 24</a> </p>
                        <p><i class="bi bi-phone"></i> <a href="tel:+4916096447514">+49 160 9644 7514</a></p>
                        <p><i class="bi bi-whatsapp"></i> <a href="https://wa.me/4916096447514">WhatsApp</a></p>
                       <!--  <p><i class="bi bi-phone"></i> +49 160 9644 7514</p> -->
                    </div>
                    <p><a class="btn btn-outline-secondary rounded-0" href="/vcard/fleissinger-vcard.vcf">{{ __("Visitenkarte")}} »</a> <a class="btn btn-outline-secondary rounded-0" target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/schwei%C3%9Fen" aria-label="linkedin"><i class="bi bi-linkedin"></i></a></p>
                    <a class="btn btn-outline-secondary rounded-0" href="https://calendly.com/fleissinger" target="_blank" rel="noopener noreferrer"><i class="bi bi-calendar-week"></i> {{ __("Termin vereinbaren") }}</a>
               </div>
            </div>
            <p class="h4">IRION GmbH</p>
            <i class="bi bi-geo-alt"></i> Station Teinach 21, 75385 Bad Teinach<br>
        </div>
    </div>
</section>
@endsection
