@extends('layout')

@section('title', __("Stahl schweißen lassen – Schweißbetrieb aus Deutschland"))

@if (app()->getLocale() == "de")

@section('description','Stahl schweißen lassen ✓ 30 bis 5000 Stück ☆ Konstant hohe Qualität ☆ Verantwortungsbewusst ☆
Präzise ➨ Schweißbetrieb aus Deutschland!')
@else

@section('description','Our value network - a guarantee for your high-performance product! Competent consultation is the
very beginning of our cooperation. Tell us about your project and we will find a flexible and tailor-made solution to
your request.')
@endif



@section('content')
<section class="page-banner"
    style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/zuschnitt2.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">
        {{ __("Stahl schweißen lassen") }}</h1>
</section>

<section class="container">
    <div class="container my-5">
        <div class="row align-items-center rounded-0 border shadow-lg ">
            <div class="col-lg-12 p-5 center">
                <p style="text-align:center">

                    Irion gibt es bereits seit 1926. Wir sind ein erfahrener Schweißbetrieb aus Deutschland, genauer
                    gesagt aus dem Schwarzwald. Unser Sitz ist Bad Teinach, das liegt in der Nähe von Städten wie
                    Stuttgart, Pforzheim und Tübingen.
                    <br><br>
                    Bei uns können Sie Stahl schweißen lassen ab 30 bis 5000 Stück. Wir handeln verantwortungsbewusst
                    und legen wert auf präzises Arbeiten und konstant hohe Qualität!

                </p>
            </div>
        </div>
    </div>
</section>




<!-- @include('contact-now') -->
@include('conversion-contact')
@endsection