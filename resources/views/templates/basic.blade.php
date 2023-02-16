@extends('layout')

@section('title', isset($meta_title) ? $meta_title : "")
@section('description', isset($meta_description) ? $meta_description : "")

@section('head')
@if (isset($hreflang))
    {{-- LANG --}}
    {!!$hreflang!!}
@endif

@endsection

@section('content')
<section class="page-banner"
    style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ url('') }}/assets/img/zuschnitt2.webp');">
    <h1 class="text-center text-white fw-bold animate__animated animate__zoomIn">
        @if (isset($h1))
            {{$h1}}
        @endif
</section>

<section class="container">
    <div class="container my-5">
        <div class="row align-items-center rounded-0 border shadow-lg ">
            <div class="col-lg-12 p-5 center">
                <p style="text-align:center">
                    @if (isset($seo1))
                        {!!$seo1!!}
                    @endif                    
                </p>      

                @if (isset($submenu))
                    {!!$submenu!!}
                @endif
            </div>
        </div>
    </div>
</section>


@if (isset($seo2) && $seo2 != null)
<section class="container">
    <div class="container my-5">
        <div class="row align-items-center rounded-0 border shadow-lg ">
            <div class="col-lg-12 p-5 center">
                <p style="text-align:center">
                    {!!$seo2!!}
                </p>
            </div>
        </div>
    </div>
</section>
@endif 

<!-- @include('contact-now') -->
@include('conversion-contact')
@endsection
