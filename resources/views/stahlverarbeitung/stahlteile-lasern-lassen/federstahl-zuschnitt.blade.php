@extends('layout')

@section('title', __("Federstahl Zuschnitt nach Maß – Federstahl lasern lassen"))

@if (app()->getLocale() == "de")

@section('description','Federstahl Zuschnitt nach Maß ✓ 100 bis 500.000 Stück ☆ Dicke 1 mm bis 25 mm ☆ Größe 1,5 m x 3,0
m ➨ Federstahl lasern lassen!')
@else

@section('description','Our value network - a guarantee for your high-performance product! Competent consultation is the
very beginning of our cooperation. Tell us about your project and we will find a flexible and tailor-made solution to
your request.')
@endif



@section('content')
<section class="page-banner"
    style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/zuschnitt2.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">
        {{ __("Federstahl Zuschnitt") }}</h1>
</section>

<section class="container">
    <div class="container my-5">
        <div class="row align-items-center rounded-0 border shadow-lg ">
            <div class="col-lg-12 p-5 center">
                <p style="text-align:center">
                    Irion bietet einen hochwertigen Federstahl Zuschnitt nach Maß.
                    <br><br>
                    Nicht nur beim Laserzuschnitt von Federstählen gehen wir gerne auf Ihre individuellen Wünsche ein.
                    Sie können bei uns im Haus auch gleich schweißen, biegen, kanten und fräsen lassen.
                    <br><br>
                    Unsere Fertigung erfüllt die speziellen Anforderungen der Industrie mit konstant hohe Qualität,
                    Verantwortungsbewusstsein und Präzision.
                    <br><br>
                    Bei Irion können Sie Federstahl in großen Mengen lasern lassen. Wir arbeiten im Projektgeschäft ab
                    100 bis 500.000 Stück. Die mögliche Dicke beträgt 1 mm bis 25 mm. Die maximale Größe der
                    Metallfläche beträgt 1,5 m x 3,0 m.
                </p>
            </div>
        </div>
    </div>
</section>




<!-- @include('contact-now') -->
@include('conversion-contact')
@endsection