@extends('layout')

@section('title', trans_fb("welding-fabrications.welded-steel-constr.scissor-lift-table-manufacturers.title"))

@if (app()->getLocale() == "de")
    @section('description','Scherenhubtische Hersteller ✓ 30 bis 5000 Stück ☆ Konstant hohe Qualität ☆ Verantwortungsbewusst
    ☆ Präzise ➨ Schwerlasthubtische aus Stahl!')
@elseif(app()->getLocale() == "en-US")
    @section('description','Our value network - a guarantee for your high-performance product! Competent consultation is the
    very beginning of our cooperation. Tell us about your project and we will find a flexible and tailor-made solution to
    your request.')
@else
    @section('description','Our value network - a guarantee for your high-performance product! Competent consultation is the
    very beginning of our cooperation. Tell us about your project and we will find a flexible and tailor-made solution to
    your request.')
@endif



@section('content')
<section class="page-banner"
    style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/zuschnitt2.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">
        {{ trans_fb("welding-fabrications.welded-steel-constr.scissor-lift-table-manufacturers.h1") }}</h1>
</section>

<section class="container">
    <div class="container my-5">
        <div class="row align-items-center rounded-0 border shadow-lg ">
            <div class="col-lg-12 p-5 center">
                <p style="text-align:center">
                    {!! trans_fb("welding-fabrications.welded-steel-constr.scissor-lift-table-manufacturers.seo") !!}
                </p>
            </div>
        </div>
    </div>
</section>


<!-- @include('contact-now') -->
@include('conversion-contact')
@endsection