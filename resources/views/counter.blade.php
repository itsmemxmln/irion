<section class="irion-counter row text-white">
    <div class="col-md-3">
        <div class="counter-element">
            <div class="d-block text-center text-white">
                <p class="scroll-counter text-center" data-counter-time="2000" data-count="1000" data-presentation={{__("1.000+")}}>0</p>
                <p class="lead">{{ __("Tonnen Stahl") }}<br>{{ __("pro Jahr") }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="counter-element">
            <div class="d-block text-center text-white">
                <p class="scroll-counter text-center" data-counter-time="2000" data-count="{{ date('Y')-1926 }}" data-presentation="{{ date('Y')-1926 }}">0</p>
                <p class="lead">{{ __("Jahre") }}<br>{{ __("Erfahrung") }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="counter-element">
            <div class="d-block text-center text-white">
                <p class="scroll-counter" data-counter-time="2000" data-count="5000000" data-presentation="{{__("5.000.000")}}">0</p>
                <p class="lead">{{ __("Schweißnähte mit in Summe 200.000 m Länge Schweißnaht") }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="counter-element">
            <div class="d-block text-center text-white">
                <p class="scroll-counter" data-counter-time="2000" data-count={{__("weldingWirePerYear")}} data-presentation={{__("2.000")}}>0</p>
                <p class="lead">{{ __("km Schweißdraht pro Jahr") }} <br>({{ __("entspricht 12 Tonnen Schweißdraht") }})</p>
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('assets/js/counter.js') }}"></script>
