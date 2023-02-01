@extends('layout')

@section('title', __("steel-processing.steel-machining.brake-forming.title"))

@if (app()->getLocale() == "de")

@section('description','Stahl kanten lassen ✓ 100 bis 500.000 Stück ☆ Konstant hohe Qualität ☆ Verantwortungsbewusst ☆
Präzise ➨ Kantbetrieb aus Deutschland!')
@elseif(app()->getLocale() == "en-US")

@section('description','Press brake metal forming ✓ 100 to 500,000 pieces ☆ Consistently high quality ☆ Responsible ☆ Precise ➨ From Germany since 1926')
@endif

@section('head')
<!-- Lang -->
<link rel="alternate" hreflang="de" href="https://irion.de/stahlverarbeitung/stahlbearbeitung/stahl-kanten-lassen" />
<link rel="alternate" hreflang="en-US" href="https://irion.de/us/steel-processing-company/steel-machining/press-brake-metal-forming" />
@endsection

@section('content')
<section class="page-banner"
    style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/zuschnitt2.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">
        {{ __("steel-processing.steel-machining.brake-forming.h1") }}</h1>
</section>

<section class="container">
    <div class="container my-5">
        <div class="row align-items-center rounded-0 border shadow-lg ">
            <div class="col-lg-12 p-5 center">
                <p style="text-align:center">
                    {!! __("steel-processing.steel-machining.brake-forming.seo") !!}
                    
                </p>
            </div>
        </div>
    </div>
</section>




<!-- @include('contact-now') -->
@include('conversion-contact')
@endsection