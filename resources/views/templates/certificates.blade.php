@extends('layout')

@section('title', isset($meta_title) ? $meta_title : "")
@section('description', isset($meta_description) ? $meta_description : "")

@section('head')
@if (isset($hreflang))
    {{-- LANG --}}
    {!!$hreflang!!}
@endif
    <meta name="robots" content="noindex, follow">
@endsection

@section('content')
<section class="page-banner" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/bg-2.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">
        @if (isset($h1))
            {!!$h1!!}
        @endif
    </h1>
</section>
<section class="container">
    <h2 class="h2 mt-5 text-center">{{ __("Unser Wertschöpfungsnetzwerk")}}<br>- {{ __("die Garantie für Ihr Hochleistungsprodukt")}}!</h2>
    <div id="certificates" class="row justify-content-center mt-5">
        <div class="col-md-12 col-md-9 col-lg-7 animate__animated animate__fadeIn">
            <p style="text-align:center">
                @if (isset($seo1))
                    {!!$seo1!!}
                @endif                    
            </p>    
        </div>
            <div class="card col-md-3 col-6 mb-5 animate__animated animate__fadeIn">
                <a class="btn btn-primary btn-lg rounded-0" target="_blank" href="{{ url('assets/certificates/'.$img_src.'.pdf') }}">
                    <i class="bi bi-eye"></i>
                    <img src="{{ url('assets/certificates/'.$img_src) }}" class="card-img-top cert-preview" alt="{{$img_alt}}" title="{{$img_title}}">
                </a>
            </div>
        
    </div>
    <div class="text-center animate__animated animate__fadeInUp">
        <img src="{{ url('assets/certificates/iso-9001.png') }}" alt="TüV ISO 9001" height="250px" width="250px">
    </div>
</section>

<!-- @include('contact-now') -->
@include('conversion-contact')
@endsection
