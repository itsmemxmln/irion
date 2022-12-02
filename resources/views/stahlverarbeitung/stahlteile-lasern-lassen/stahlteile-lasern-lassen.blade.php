@extends('layout')

@section('title', __("Stahlteile lasern lassen – Laserteile aus Stahl"))

@if (app()->getLocale() == "de")

@section('description','Stahlteile lasern lassen ✓ Stahlbleche ☆ Stahlplatten ☆ Edelstahl ☆ Schwarzblech ☆ Grobblech ☆
uvm. ➨ Industrie Laserteile aus Stahl!')
@else

@section('description','Our value network - a guarantee for your high-performance product! Competent consultation is the
very beginning of our cooperation. Tell us about your project and we will find a flexible and tailor-made solution to
your request.')
@endif



@section('content')
<section class="page-banner"
    style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/zuschnitt2.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">
        {{ __("Stahlteile lasern lassen") }}</h1>
</section>

<section class="container">
    <div class="container my-5">
        <div class="row align-items-center rounded-0 border shadow-lg ">
            <div class="col-lg-12 p-5 center">
                <p style="text-align:center">
                    Irion bietet hochwertige Industrie Laserteile aus Stahl.
                    <br><br>
                    Sie können Stahlteile lasern lassen, wie Stahlblech, Stahlplatten, Edelstahl, Schwarzblech,
                    Grobblech, Federstahl, Werkzeugstahl, Winkelstahl oder Elektroblech.
                    <br><br>
                    Wir lasern Stahl im Projektgeschäft ab 100 bis 500.000 Stück in konstant hoher Qualität. Die
                    mögliche Dicke beträgt 1 mm bis 25 mm. Die maximale Größe der Metallfläche beträgt 1,5 m x 3,0 m.
                </p>
                <strong>Beispiele</strong>
                <ul>
                    <li><a href="{{ url('stahlverarbeitung/stahlteile-lasern-lassen/stahlblech-zuschnitt')}}">Stahlblech Zuschnitt</a></li>
                    <li><a href="{{ url('stahlverarbeitung/stahlteile-lasern-lassen/stahlplatten-zuschnitt')}}">Stahlplatten Zuschnitt</a></li>
                    <li><a href="{{ url('stahlverarbeitung/stahlteile-lasern-lassen/edelstahl-zuschnitt')}}">Edelstahl Zuschnitt</a></li>
                    <li><a href="{{ url('stahlverarbeitung/stahlteile-lasern-lassen/schwarzblech-zuschnitt')}}">Schwarzblech Zuschnitt</a></li>
                    <li><a href="{{ url('stahlverarbeitung/stahlteile-lasern-lassen/grobblech-zuschnitt')}}">Grobblech Zuschnitt</a></li>
                    <li><a href="{{ url('stahlverarbeitung/stahlteile-lasern-lassen/federstahl-zuschnitt')}}">Federstahl Zuschnitt</a></li>
                    <li><a href="{{ url('stahlverarbeitung/stahlteile-lasern-lassen/werkzeugstahl-zuschnitt')}}">Werkzeugstahl Zuschnitt</a></li>
                    <li><a href="{{ url('stahlverarbeitung/stahlteile-lasern-lassen/winkelstahl-zuschnitt')}}">Winkelstahl Zuschnitt</a></li>
                    <li><a href="{{ url('stahlverarbeitung/stahlteile-lasern-lassen/elektroblech-zuschnitt')}}">Elektroblech Zuschnitt</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>




<!-- @include('contact-now') -->
@include('conversion-contact')
@endsection
