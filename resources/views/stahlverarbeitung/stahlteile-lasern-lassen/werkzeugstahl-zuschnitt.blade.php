@extends('layout')

@section('title', trans_fb("steel-processing.laser-cut.tool-steel.title"))

@if (app()->getLocale() == "de")

@section('description','Werkzeugstahl Zuschnitt nach Maß ✓ 100 bis 500.000 Stück ☆ Dicke 1 mm bis 25 mm ☆ Größe 1,5 m x
3,0 m ➨ Werkzeugstahl lasern lassen!')
@elseif(app()->getLocale() == "en-US")

@section('description','Tool steel cut to size ✓ 100 to 500,000 pieces ☆ Thickness 0.04 to 0.98 inch ☆ Size 59 x 118 inch ➨ Top quality from Germany!')
@endif

@section('head')
<!-- Lang -->
<link rel="alternate" hreflang="de" href="https://irion.de/stahlverarbeitung/stahlteile-lasern-lassen/werkzeugstahl-zuschnitt" />
<link rel="alternate" hreflang="en-US" href="https://irion.de/us/steel-processing-company/laser-cut-steel-parts/tool-steel-cut-to-size" />
@endsection

@section('content')
<section class="page-banner"
    style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/zuschnitt2.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">
        {{ trans_fb("steel-processing.laser-cut.tool-steel.h1") }}</h1>
</section>

<section class="container">
    <div class="container my-5">
        <div class="row align-items-center rounded-0 border shadow-lg ">
            <div class="col-lg-12 p-5 center">
                <p style="text-align:center">
                    {!! trans_fb("steel-processing.laser-cut.tool-steel.seo") !!}
                </p>
            </div>
        </div>
    </div>
</section>




<!-- @include('contact-now') -->
@include('conversion-contact')
@endsection