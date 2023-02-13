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
        return view('/404');
    });

    ";