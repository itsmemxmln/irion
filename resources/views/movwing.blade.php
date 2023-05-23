@extends('layout')

@section('title', 'MovWing')
@section('extra', 'robots')
@section('extra_content', 'noindex')
@section('description', isset($meta_description) ? $meta_description : "")

@section('head')
@if (isset($hreflang))
{{-- LANG --}}
{!!$hreflang!!}
@endif
@endsection

@section('content')
<section class="page-banner"
    style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3)), url('{{ url('') }}/assets/img/about-company.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">MovWing</h1>
</section>
<section class="container mt-5">
    <span class="span-h2 text-center w-100 d-inline-block">Studie zum „echten aktiven Sitzen beim Arbeiten“ verbunden
        mit der Fragestellung:</span>
    <p class="span-h2 text-center w-100 d-inline-block">Wie lange muss ein Mitarbeiter auf dem Bürostuhl „MovWing“
        bewegt sitzen um mindestens die gleiche Bewegung des Beckens wie bei einem Spaziergang von einem Kilometer Länge
        zu erreichen?</p>
        <p class="span-h2 text-center w-100 d-inline-block">Stand: 27.04.2023</p>
    <hr>
    
    <div class="my-5 text-center">
        <a href="/assets/movWing/studie_movwig.pdf" class="btn btn-dark btn-lg px-4 me-md-2 fw-bold rounded-0">Jetzt PDF
            Herunterladen</a>
    </div>
    <div class="row">
        <div class="col-md-6 p-md-5">

            <div class="mb-3">

                <p align="justify">Um diese Fragestellung zu beantworten wird in dieser Arbeit das Becken als
                    maßgebendes Bewegungselement des menschlichen Körpers zugrunde gelegt. Dies deshalb, da die Bewegung
                    des Beckens sowohl das Rückgrat als auch die Beine stützt und lagert und somit die
                    Verbindungselemente (Gelenke, Bandscheiben…) bei einer Bewegung des Beckens relativ zueinander
                    verschwenkt.</p>
                <p align="justify">Beim Sitzen ruht nun das Becken mit dem Sitzbein und den Oberschenkeln auf der Stuhl
                    Sitzfläche. Daher übernimmt das Becken die Bewegungen der Stuhlsitzfläche und bewegt sich synchron
                    mit dieser mit.</p>
                <p align="justify">Es ist nur in einem sehr begrenzten Maß möglich das Becken z.B. durch das Umlagern
                    des Körpergewichts auf einem „starren“ Stuhl entgegen der Stuhlfläche zu bewegen.</p>
                <p align="justify">Um nun eine wissenschaftlich basierte Basis den Messungen zugrunde zu legen wurde der
                    Artikel „Ganganalyse beim Gehen und Laufen“ des Instituts für Biomechanik, ETH Zürich bzw. der
                    Schulthess Klinik Zürich zugrunde gelegt um hierbei zunächst einen Vergleichswert zu erreichen.
                    Dieser Artikel stammt von renommierten Instituten und wurde von uns als fundierter Wissensstand
                    übernommen.</p>

            </div>
        </div>

        <div class="col-md-6 p-md-5">
            <div class="mb-5">


                <p align="justify">In diesem Fachartikel wurden unter anderem die Bewegungen der unteren Extremitäten
                    beim Gehen bzw. beim Laufen aufgezeigt.</p>
                <p align="justify">In diesem Artikel wird beschrieben, dass für das Sitzen besonders die Bewegung des
                    Beckens von Bedeutung ist. Da nun das Becken, wie bereits erwähnt, sozusagen mit der Sitzfläche
                    ortsfest „verbunden“ ist, wird die Bewegung des Beckens direkt von der Sitz- Mechanik beeinflusst.
                    Dies geschieht optimaler Weise nicht durch eine Gewichtsverlagerung des Menschen– bei einer
                    Gewichtsverlagerung würde sich auch der Oberkörper und mit ihm der Kopf bewegen – sondern wird
                    durch die durch die
                    2
                    Bauchmuskeln erreicht. Die Bauchmuskeln können durch den oben liegenden
                    Drehpunkt des MovWing das Becken vor und zurück bzw. seitlich Links - rechts
                    verschieben. Des Weiteren können dieses aber auch ein Drehen des Beckens
                    um die Hochachse indizieren. So kann sich das Becken und mit ihm die unteren
                    Extremitäten bewegen ohne dass der Oberkörper und mit ihm der Kopf eine
                    wesentliche Lageänderung erfährt.</p>
                <p align="justify">So konnte durch direktes Messen der Bewegung der Stuhlsitzfläche mittels eines 9 Achs
                    Sensors der Fa. Witmotion welcher mit der Sitzfläche starr verschraubt wurde die Bewegung der
                    Sitzfläche exakt aufgezeichnet werden.</p>
            </div>

        </div>
       
        <div class="col-md-12 p-md-12">
        <img src="assets/movWing/movWing.webp" class="d-block mx-lg-auto img-fluid" alt="Kompetenzen, CNC, Schweißbaugruppen" width="50%" loading="lazy">

        </div>
        <div class="col-md-12 p-md-12">
            <div class="mb-12">
                <p align="center"><b>Bild 1:</b> Anordnung des 9 Achs Sensors am Stuhl</p>
            </div>

        </div>
        <div class="col-md-12 p-md-12">
            <div class="mb-12">
                <p align="center">Um den ganzen Artikel zu lesen, laden Sie die PDF-Datei <a href="/assets/movWing/studie_movwig.pdf">hier</a> herunter.</p>
            </div>

        </div>
    </div>
 
    
    <div class="my-5 text-center">
        <a href="/assets/movWing/studie_movwig.pdf" class="btn btn-dark btn-lg px-4 me-md-2 fw-bold rounded-0">Jetzt PDF
            Herunterladen</a>
    </div>
</section>

<!-- @include('contact-now') -->
@include('conversion-contact')
@endsection