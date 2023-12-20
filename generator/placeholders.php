<?php
    $routesPrefix = 
    "<?php

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
    | contains the 'web' middleware group. Now create something great!
    |
    */
    
    ";
    $routesSuffix = 
    "
    Route::get('/impressum', function () {
        return view('imprint');
    });
    Route::get('/datenschutz', function () {
        return view('privacy');
    });
    Route::get('/agb', function () {
        return view('terms');
    });
    Route::get('/en/imprint', function () {
        return view('imprint');
    });
    Route::get('/en/privacy', function () {
        return view('privacy');
    });
    Route::get('/en/terms', function () {
        return view('terms');
    });
    Route::get('/us/imprint', function () {
        return view('imprint');
    });
    Route::get('/us/privacy', function () {
        return view('privacy');
    });
    Route::get('/us/terms', function () {
        return view('terms');
    });
    Route::post('/en/send', [ContactController::class, 'send']);
    Route::post('/us/send', [ContactController::class, 'send']);

    Route::post('/send', [ContactController::class, 'send']);

    Route::fallback(function (Request \$request) {
        return response()->view('/404')->setStatusCode(404);
    });



    Route::get('/kompetenzen', function(){ 
        return Redirect::to('/praezisionsfertigung', 301); 
    });
    Route::get('/entwicklung', function(){ 
        return Redirect::to('/praezisionsfertigung/mechanische-konstruktion', 301); 
    });
    Route::get('/zuschnitt', function(){ 
        return Redirect::to('/praezisionsfertigung/praezisionsschneiden', 301); 
    });
    Route::get('/zerspanung', function(){ 
        return Redirect::to('/praezisionsfertigung/praezisionszerspanung', 301); 
    });
    Route::get('/schweissen', function(){ 
        return Redirect::to('/praezisionsfertigung/praezisionsschweissen', 301); 
    });
    Route::get('/reinigung', function(){ 
        return Redirect::to('/praezisionsfertigung/industrielle-teilereinigung-dienstleistung', 301); 
    });
    Route::get('/waermebehandlung', function(){ 
        return Redirect::to('/praezisionsfertigung/industrielle-waermebehandlung', 301); 
    });
    Route::get('/oberflaeche', function(){ 
        return Redirect::to('/praezisionsfertigung/oberflaechenbeschichtung-stahl', 301); 
    });
    Route::get('/montage', function(){ 
        return Redirect::to('/praezisionsfertigung/baugruppenmontage-maschinenbau', 301); 
    });
    Route::get('/unternehmen', function(){ 
        return Redirect::to('/schweissunternehmen', 301); 
    });
    Route::get('/kontakt', function(){ 
        return Redirect::to('/schweissberatung', 301); 
    });
    Route::get('/zertifikate', function(){ 
        return Redirect::to('/schweissunternehmen/zertifikate', 301); 
    });
    Route::get('/qualitätspolitik', function(){ 
        return Redirect::to('/schweissunternehmen/qualitätspolitik', 301); 
    });

    Route::get('/en/competences', function(){ 
        return Redirect::to('/en/precision-manufacturing', 301); 
    });
    Route::get('/en/contact', function(){ 
        return Redirect::to('/en/welding-consulting', 301); 
    });
    Route::get('/en/company', function(){ 
        return Redirect::to('/industrial-welding-services', 301); 
    });
    ";