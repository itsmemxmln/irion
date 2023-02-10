@extends('layout')

@section('title', __("Roboterschweißen – Automatisiertes Schweißen bei Irion"))

@if (app()->getLocale() == "de")
    @section('description','Roboterschweißen bei Irion ✓ High-Tech-Robotern mit bis zu 9 interpolierenden Achsen ☆ Made in Germany ➨ Irion Qualität seit 1926 ')
@else
    @section('description','Our value network - a guarantee for your high-performance product! Competent consultation is the very beginning of our cooperation. Tell us about your project and we will find a flexible and tailor-made solution to your request.')
@endif



@section('content')
<section class="page-banner" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/home/skids/3.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">{{ __("Roboterschweißen") }}</h1>
</section>
<section class="container">
    <h2 class="h2 my-5 text-center">{{ __("Unser Wertschöpfungsnetzwerk")}}<br>- {{ __("die Garantie für Ihr Hochleistungsprodukt")}}!</h2>
    <div>
        <p>
            Bei IRION schweißen wir stückzahlenintensive Schweißbaugruppen durch automatisiertes Schweißen.
            Roboterschweißen erfolgt bei uns durch die Verwendung von High-Tech-Robotern mit bis zu 9 interpolierenden Achsen.
        </p>
        <p>
            Verwendung finden beim Roboterschweißen:
            <ul>
                <li>6 Achs Schweißroboter</li>
                <li>7 Achs Schweißroboter</li>
                <li>8 Achs Schweißroboter</li>
                <li>9 Achs Schweißroboter</li>
            </ul>
        </p>
        <p>
            Made in Germany und gleichzeitig konkurrenzfähig. Dies wird möglich durch die computergesteuerte offline Robotersimulation unseres geschulten und hochmotivierten Personals. 
        </p>
    </div>
</section>


<!-- @include('contact-now') -->
@include('conversion-contact')
@endsection
