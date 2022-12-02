@extends('layout')

@section('title', __("Scherenhubtische Hersteller – Schwerlasthubtische"))

@if (app()->getLocale() == "de")

@section('description','Scherenhubtische Hersteller ✓ 30 bis 5000 Stück ☆ Konstant hohe Qualität ☆ Verantwortungsbewusst
☆ Präzise ➨ Schwerlasthubtische aus Stahl!')
@else

@section('description','Our value network - a guarantee for your high-performance product! Competent consultation is the
very beginning of our cooperation. Tell us about your project and we will find a flexible and tailor-made solution to
your request.')
@endif



@section('content')
<section class="page-banner"
    style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/zuschnitt2.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">
        {{ __("Scherenhubtische Hersteller") }}</h1>
</section>

<section class="container">
    <div class="container my-5">
        <div class="row align-items-center rounded-0 border shadow-lg ">
            <div class="col-lg-12 p-5 center">
                <p style="text-align:center">

                    Irion ist ein Hersteller für hochwertige Scherenhubtische aus Stahl.
                    Unsere Hubtische erfüllen die speziellen Anforderungen der Industrie wie unterschiedliche
                    Gewichtsklassen wie 1.000 kg, 2.000 kg oder mehr als auch fahrbare Varianten.
                    <br><br>
                    Unser zertifizierter Schweißfachbetrieb fertigt maßgeschneiderte Schwerlasthubtische von 30 bis 5000
                    Stück. Wir stehen für konstant hohe Qualität, Verantwortungsbewusstsein und Präzision.

                </p>
            </div>
        </div>
    </div>
</section>


<!-- @include('contact-now') -->
@include('conversion-contact')
@endsection