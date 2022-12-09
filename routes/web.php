<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' => '/'], function () {

    // App::setLocale("de");

    Route::get('/', [HomeController::class, 'de']);

    Route::get('/kompetenzen', function () {
        return view('competences');
    });

    Route::get('/unternehmen', function () {
        return view('company');
    });

    Route::get('/zertifikate', function () {
        return view('quality.certificates');
    });

    Route::get('/qualitaetspolitik', function () {
        return view('quality.quality-policy');
    });

    Route::get('/management', function () {
        return view('management');
    });

    Route::get('/karriere', function () {
        return view('career');
    });

    Route::get('/kontakt', function () {
        return view('contact');
    });

    Route::get('/impressum', function () {
        return view('imprint');
    });
    Route::get('/datenschutz', function () {
        return view('privacy');
    });
    Route::get('/agb', function () {
        return view('terms');
    });


    Route::get('/entwicklung', function () {
        return view('leistungen.entwicklung');
    });
    Route::get('/zuschnitt', function () {
        return view('leistungen.zuschnitt');
    });
    Route::get('/zerspanung', function () {
        return view('leistungen.zerspanung');
    });
    Route::get('/schweissen', function () {
        return view('leistungen.schweissen');
    });
    Route::get('/reinigung', function () {
        return view('leistungen.reinigung');
    });
    Route::get('/waermebehandlung', function () {
        return view('leistungen.waermebehandlung');
    });
    Route::get('/oberflaeche', function () {
        return view('leistungen.oberflaeche');
    });
    Route::get('/montage', function () {
        return view('leistungen.montage');
    });

    /* NEU */


    Route::get('/schweisskonstruktionen', function () {
        return view('schweisskonstruktionen.schweisskonstruktionen');
    });
    Route::get('/schweisskonstruktionen/foerdertechnik-zubehoer-ersatzteile', function () {
        return view('schweisskonstruktionen.ersatzteile-und-zubehoer.foerdertechnik-zubehoer-ersatzteile');
    });
    Route::get('/schweisskonstruktionen/transportsysteme-produktion', function () {
        return view('schweisskonstruktionen.transportsysteme.transportsysteme-produktion');
    });
    Route::get('/schweisskonstruktionen/transportsysteme-produktion/buehnenwagen', function () {
        return view('schweisskonstruktionen.transportsysteme.buehnenwagen');
    });
    Route::get('/schweisskonstruktionen/transportsysteme-produktion/schwerlast-plattformwagen', function () {
        return view('schweisskonstruktionen.transportsysteme.schwerlast-plattformwagen');
    });
    Route::get('/schweisskonstruktionen/transportsysteme-produktion/elektrohaengebahn-hersteller', function () {
        return view('schweisskonstruktionen.transportsysteme.elektrohaengebahn-hersteller');
    });
    Route::get('/schweisskonstruktionen/transportsysteme-produktion/power-and-free-foerderer', function () {
        return view('schweisskonstruktionen.transportsysteme.power-and-free-foerderer');
    });
    Route::get('/schweisskonstruktionen/transportsysteme-produktion/kreiskettenfoerderer', function () {
        return view('schweisskonstruktionen.transportsysteme.kreiskettenfoerderer');
    });
    Route::get('/schweisskonstruktionen/transportsysteme-produktion/unterflurschleppkettenfoerderer', function () {
        return view('schweisskonstruktionen.transportsysteme.unterflurschleppkettenfoerderer');
    });
    Route::get('/schweisskonstruktionen/transportsysteme-produktion/fahrerlose-transportsysteme-hersteller', function () {
        return view('schweisskonstruktionen.transportsysteme.fahrerlose-transportsysteme-hersteller');
    });
    Route::get('/schweisskonstruktionen/maschinenbau', function () {
        return view('schweisskonstruktionen.maschinenbau.maschinenbau');
    });
    Route::get('/schweisskonstruktionen/maschinenbau/scherenhubtische-hersteller', function () {
        return view('schweisskonstruktionen.maschinenbau.scherenhubtische-hersteller');
    });
    Route::get('/schweisskonstruktionen/maschinenbau/schweissgestelle', function () {
        return view('schweisskonstruktionen.maschinenbau.schweissgestelle');
    });
    Route::get('/schweisskonstruktionen/maschinenbau/fahrzeugaufbauten-hersteller', function () {
        return view('schweisskonstruktionen.maschinenbau.fahrzeugaufbauten-hersteller');
    });
    Route::get('/schweisskonstruktionen/maschinenbau/werkstuecktraegersysteme', function () {
        return view('schweisskonstruktionen.maschinenbau.werkstuecktraegersysteme');
    });

    Route::get('/schweisskonstruktionen/skid-anlagenbau', function () {
        return view('schweisskonstruktionen.skid-anlagenbau.skid-anlagenbau');
    });
    Route::get('/schweisskonstruktionen/skid-anlagenbau/skid-automobilindustrie', function () {
        return view('schweisskonstruktionen.skid-anlagenbau.skid-automobilindustrie');
    });
    Route::get('/schweisskonstruktionen/skid-anlagenbau/foerdertechnik-automobilindustrie', function () {
        return view('schweisskonstruktionen.skid-anlagenbau.foerdertechnik-automobilindustrie');
    });
    Route::get('/schweisskonstruktionen/skid-anlagenbau/hersteller-sonderladungstraeger', function () {
        return view('schweisskonstruktionen.skid-anlagenbau.hersteller-sonderladungstraeger');
    });


    Route::get('/schweisskonstruktionen/lastaufnahmemittel-hersteller', function () {
        return view('schweisskonstruktionen.lastaufnahmemittel-hersteller.lastaufnahmemittel-hersteller');
    });
    Route::get('/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlastpaletten-stahl', function () {
        return view('schweisskonstruktionen.lastaufnahmemittel-hersteller.schwerlastpaletten-stahl');
    });
    Route::get('/schweisskonstruktionen/lastaufnahmemittel-hersteller/industriebehaelter-metall', function () {
        return view('schweisskonstruktionen.lastaufnahmemittel-hersteller.industriebehaelter-metall');
    });
    Route::get('/schweisskonstruktionen/lastaufnahmemittel-hersteller/transportbehaelter-metall', function () {
        return view('schweisskonstruktionen.lastaufnahmemittel-hersteller.transportbehaelter-metall');
    });
    Route::get('/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlasttraversen', function () {
        return view('schweisskonstruktionen.lastaufnahmemittel-hersteller.schwerlasttraversen');
    });
    Route::get('/schweisskonstruktionen/lastaufnahmemittel-hersteller/schwerlastboecke', function () {
        return view('schweisskonstruktionen.lastaufnahmemittel-hersteller.schwerlastboecke');
    });
    Route::get('/schweisskonstruktionen/lastaufnahmemittel-hersteller/rungengestelle-hersteller', function () {
        return view('schweisskonstruktionen.lastaufnahmemittel-hersteller.rungengestelle-hersteller');
    });
    Route::get('/schweisskonstruktionen/lastaufnahmemittel-hersteller/stapelgestelle-hersteller', function () {
        return view('schweisskonstruktionen.lastaufnahmemittel-hersteller.stapelgestelle-hersteller');
    });




    // Stahlverarbeitung
    Route::get('stahlverarbeitung', function () {
        return view('stahlverarbeitung.stahlverarbeitung');
    });
    Route::get('stahlverarbeitung/stahlteile-lasern-lassen', function () {
        return view('stahlverarbeitung.stahlteile-lasern-lassen.stahlteile-lasern-lassen');
    });
    Route::get('stahlverarbeitung/stahlteile-lasern-lassen/stahlblech-zuschnitt', function () {
        return view('stahlverarbeitung.stahlteile-lasern-lassen.stahlblech-zuschnitt');
    });
    Route::get('stahlverarbeitung/stahlteile-lasern-lassen/stahlplatten-zuschnitt', function () {
        return view('stahlverarbeitung.stahlteile-lasern-lassen.stahlplatten-zuschnitt');
    });
    Route::get('stahlverarbeitung/stahlteile-lasern-lassen/edelstahl-zuschnitt', function () {
        return view('stahlverarbeitung.stahlteile-lasern-lassen.edelstahl-zuschnitt');
    });
    Route::get('stahlverarbeitung/stahlteile-lasern-lassen/schwarzblech-zuschnitt', function () {
        return view('stahlverarbeitung.stahlteile-lasern-lassen.schwarzblech-zuschnitt');
    });
    Route::get('stahlverarbeitung/stahlteile-lasern-lassen/grobblech-zuschnitt', function () {
        return view('stahlverarbeitung.stahlteile-lasern-lassen.grobblech-zuschnitt');
    });
    Route::get('stahlverarbeitung/stahlteile-lasern-lassen/federstahl-zuschnitt', function () {
        return view('stahlverarbeitung.stahlteile-lasern-lassen.federstahl-zuschnitt');
    });
    Route::get('stahlverarbeitung/stahlteile-lasern-lassen/werkzeugstahl-zuschnitt', function () {
        return view('stahlverarbeitung.stahlteile-lasern-lassen.werkzeugstahl-zuschnitt');
    });
    Route::get('stahlverarbeitung/stahlteile-lasern-lassen/elektroblech-zuschnitt', function () {
        return view('stahlverarbeitung.stahlteile-lasern-lassen.elektroblech-zuschnitt');
    });
    Route::get('stahlverarbeitung/stahlteile-lasern-lassen/winkelstahl-zuschnitt', function () {
        return view('stahlverarbeitung.stahlteile-lasern-lassen.winkelstahl-zuschnitt');
    });
    Route::get('stahlverarbeitung/stahlteile-lasern-lassen/elektroblech-zuschnitt', function () {
        return view('stahlverarbeitung.stahlteile-lasern-lassen.elektroblech-zuschnitt');
    });


    Route::get('stahlverarbeitung/stahlbearbeitung', function () {
        return view('stahlverarbeitung.stahlbearbeitung.stahlbearbeitung');
    });
    Route::get('stahlverarbeitung/stahlbearbeitung/stahl-schweissen-lassen', function () {
        return view('stahlverarbeitung.stahlbearbeitung.stahl-schweissen-lassen');
    });
    Route::get('stahlverarbeitung/stahlbearbeitung/stahl-schneiden-lassen', function () {
        return view('stahlverarbeitung.stahlbearbeitung.stahl-schneiden-lassen');
    });
    Route::get('stahlverarbeitung/stahlbearbeitung/stahl-biegen-lassen', function () {
        return view('stahlverarbeitung.stahlbearbeitung.stahl-biegen-lassen');
    });
    Route::get('stahlverarbeitung/stahlbearbeitung/stahl-fraesen-lassen', function () {
        return view('stahlverarbeitung.stahlbearbeitung.stahl-fraesen-lassen');
    });
    Route::get('stahlverarbeitung/stahlbearbeitung/stahl-kanten-lassen', function () {
        return view('stahlverarbeitung.stahlbearbeitung.stahl-kanten-lassen');
    });



});



$langs = [
    'en', 'us'
];


foreach ($langs as $lang) {
    Route::group(['prefix' => $lang], function () use ($lang) {

        // App::setLocale("en");

        Route::get('/', [HomeController::class, $lang]);

        Route::get('/competences', function () {
            return view('competences');
        });

        Route::get('/company', function () {
            return view('company');
        });

        Route::get('/certificates', function () {
            return view('quality.certificates');
        });

        Route::get('/management', function () {
            return view('management');
        });

        Route::get('/career', function () {
            return view('career');
        });

        Route::get('/contact', function () {
            return view('contact');
        });

        Route::get('/imprint', function () {
            return view('imprint');
        });
        Route::get('/privacy', function () {
            return view('privacy');
        });
        Route::get('/terms', function () {
            return view('terms');
        });

        Route::post("/$lang/send", [ContactController::class, 'send']);


        // schweisskonstruktionen
        Route::get('/welding-fabrications', function () {
            return view('schweisskonstruktionen.schweisskonstruktionen');
        });

        Route::get('/welding-fabrications/conveyor-accessories-spare-parts', function () {
            return view('schweisskonstruktionen.ersatzteile-und-zubehoer.foerdertechnik-zubehoer-ersatzteile');
        });

        Route::get('/welding-fabrications/transportation-systems', function () {
            return view('schweisskonstruktionen.transportsysteme.transportsysteme-produktion');
        });
        Route::get('/welding-fabrications/transportation-systems/mobile-lifting-platforms', function () {
            return view('schweisskonstruktionen.transportsysteme.buehnenwagen');
        });
        Route::get('/welding-fabrications/transportation-systems/heavy-duty-platform-trolley', function () {
            return view('schweisskonstruktionen.transportsysteme.schwerlast-plattformwagen');
        });
        Route::get('/welding-fabrications/transportation-systems/electric-monorail', function () {
            return view('schweisskonstruktionen.transportsysteme.elektrohaengebahn-hersteller');
        });
        Route::get('/welding-fabrications/transportation-systems/power-and-free-conveyors', function () {
            return view('schweisskonstruktionen.transportsysteme.power-and-free-foerderer');
        });
        Route::get('/welding-fabrications/transportation-systems/chain-conveyor-parts', function () {
            return view('schweisskonstruktionen.transportsysteme.kreiskettenfoerderer');
        });
        Route::get('/welding-fabrications/transportation-systems/underfloor-drag-chain-conveyor', function () {
            return view('schweisskonstruktionen.transportsysteme.unterflurschleppkettenfoerderer');
        });
        Route::get('/welding-fabrications/transportation-systems/automated-guided-vehicle-manufacturers', function () {
            return view('schweisskonstruktionen.transportsysteme.fahrerlose-transportsysteme-hersteller');
        });

        Route::get('/welding-fabrications/welded-steel-construction', function () {
            return view('schweisskonstruktionen.maschinenbau.maschinenbau');
        });
        Route::get('/welding-fabrications/welded-steel-construction/scissor-lift-table-manufacturers', function () {
            return view('schweisskonstruktionen.maschinenbau.scherenhubtische-hersteller');
        });
        Route::get('/welding-fabrications/welded-steel-construction/welded-racks', function () {
            return view('schweisskonstruktionen.maschinenbau.schweissgestelle');
        });
        Route::get('/welding-fabrications/welded-steel-construction/commercial-vehicle-bodies', function () {
            return view('schweisskonstruktionen.maschinenbau.fahrzeugaufbauten-hersteller');
        });
        Route::get('/welding-fabrications/welded-steel-construction/product-conveyor-system', function () {
            return view('schweisskonstruktionen.maschinenbau.werkstuecktraegersysteme');
        });
    
        Route::get('/welding-fabrications/skid-construction', function () {
            return view('schweisskonstruktionen.skid-anlagenbau.skid-anlagenbau');
        });
        Route::get('/welding-fabrications/skid-construction/skid-automotive', function () {
            return view('schweisskonstruktionen.skid-anlagenbau.skid-automobilindustrie');
        });
        Route::get('/welding-fabrications/skid-construction/conveyor-systems-automotive', function () {
            return view('schweisskonstruktionen.skid-anlagenbau.foerdertechnik-automobilindustrie');
        });
        Route::get('/welding-fabrications/skid-construction/special-load-carriers', function () {
            return view('schweisskonstruktionen.skid-anlagenbau.hersteller-sonderladungstraeger');
        });
    
    
        Route::get('/welding-fabrications/lifting-equipment-manufacturer', function () {
            return view('schweisskonstruktionen.lastaufnahmemittel-hersteller.lastaufnahmemittel-hersteller');
        });
        Route::get('/welding-fabrications/lifting-equipment-manufacturer/heavy-duty-steel-pallets-manufacturers', function () {
            return view('schweisskonstruktionen.lastaufnahmemittel-hersteller.schwerlastpaletten-stahl');
        });
        Route::get('/welding-fabrications/lifting-equipment-manufacturer/industrial-metal-bins', function () {
            return view('schweisskonstruktionen.lastaufnahmemittel-hersteller.industriebehaelter-metall');
        });
        Route::get('/welding-fabrications/lifting-equipment-manufacturer/transport-bins', function () {
            return view('schweisskonstruktionen.lastaufnahmemittel-hersteller.transportbehaelter-metall');
        });
        Route::get('/welding-fabrications/lifting-equipment-manufacturer/steel-cross-beams', function () {
            return view('schweisskonstruktionen.lastaufnahmemittel-hersteller.schwerlasttraversen');
        });
        Route::get('/welding-fabrications/lifting-equipment-manufacturer/heavy-duty-stands', function () {
            return view('schweisskonstruktionen.lastaufnahmemittel-hersteller.schwerlastboecke');
        });
        Route::get('/welding-fabrications/lifting-equipment-manufacturer/post-pallets', function () {
            return view('schweisskonstruktionen.lastaufnahmemittel-hersteller.rungengestelle-hersteller');
        });
        Route::get('/welding-fabrications/lifting-equipment-manufacturer/metal-stacking-racks', function () {
            return view('schweisskonstruktionen.lastaufnahmemittel-hersteller.stapelgestelle-hersteller');
        });












    });
}

Route::post('/send', [ContactController::class, 'send']);

Route::fallback(function (Request $request) {
    return view("/404");
});
