@extends('layout')

@section('title', isset($meta_title) ? $meta_title : "")
@section('description', isset($meta_description) ? $meta_description : "")

@section('head')
@if (isset($hreflang))
    {{-- LANG --}}
    {{-- <meta name="robots" content="index, follow"> --}}
    {!!$hreflang!!}
@endif
@endsection

@section('content')
@if(isset($img_src) && $img_src != '' && file_exists(public_path("/assets/img/landingpages/".$img_src)))  {{-- Landing Image --}}
    <section class="page-banner" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/landingpages/{{$img_src}}');">
        <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">@if (isset($h1)){!!$h1!!}@endif</h1>
    </section>
@else
    <section class="page-banner" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/bg-2.webp');">
        <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">@if(isset($h1)) {{$h1}} @endif</h1>
    </section>
@endif

<section class="container">
    @if ((isset($seo1) && $seo1 != "" ) || (isset($seo2) && $seo2 != "" ) ||(isset($submenu) && $submenu != "" ))
    <div class="container my-5">
        <div class="row align-items-center justify-content-center rounded-0 border shadow-lg p-5">
            <div class="col-12 col-lg-10 px-2 px-lg-5 center">
                @if (isset($seo1))
                    {!!$seo1!!}
                @endif

                @if (isset($seo2))
                    {!!$seo2!!}
                @endif
                
                <h2>{{ __("Über Irion") }}</h2>
                {{ __("career.about-irion") }}
                  
                    
                <h2>{{ __("career.distance-irion-h2") }}</h2>
                {!! __("career.distance-irion") !!}
                    
                @if(app()->getLocale() == "de")
                    <h2>Erfahre noch mehr über Irion</h2>
                        <ul>
                            <li>
                                <a href="/metalltechnik-jobs#fragenBewerbung">Fragen zur Bewerbung</a>
                            </li>
                        </ul>
                @endif
                
                @if(str_contains($h1, "Kauffrau") || str_contains($h1, "Ausbildung"))
                    <h2>{{ __("career.contact-h2") }}</h2>
                @else
                    <h2>{{ __("career.contact-h2-polite") }}</h2>                        
                @endif
                {{ __("career.contact") }}
                    

                <div class="container text-center mt-4">
                    <a class="social-icon" href="https://www.linkedin.com/in/schweißen/" target="_blank" rel="noopener noreferrer" aria-label="fb"><i class="bi bi-linkedin"></i></a>
                    <a class="social-icon" href="https://tinyurl.com/iriontiktok" target="_blank" rel="noopener noreferrer" aria-label="fb"><i class="bi bi-tiktok"></i></a>
                    <a class="social-icon" href="https://www.facebook.com/www.irion.de/" target="_blank" rel="noopener noreferrer" aria-label="fb"><i class="bi bi-facebook"></i></a>
                    <a class="social-icon" href="https://www.instagram.com/irion1926/" target="_blank" rel="noopener noreferrer" aria-label="insta"><i class="bi bi-instagram"></i></a>
                    <a class="social-icon" href="https://wa.me/4916096447514" target="_blank" rel="noopener noreferrer" aria-label="whatsapp"><i class="bi bi-whatsapp"></i></a>
                </div>
        </div>
    </div>
    @endif

</section>


@include('conversion-contact')

@if(isset($script))
{!!$script!!}
@endif

@endsection
