<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Get browser lang
        // $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        // $browser_lang = substr($browser_lang, 0, 2);

    
        $prefix = $request->route()->getPrefix();
    
        if ($prefix == "/") {
            app()->setLocale("de");
            session()->put('locale', "de");
        }
        else if ($prefix == "/en") {
            app()->setLocale("en");
            session()->put('locale', "en");
        }
        else if ($prefix == "/us") {
            app()->setLocale("en-US");
            session()->put('locale', "en-US");
        }
        else {
            app()->setLocale("de");
            session()->put('locale', "de");
        }


        return $next($request);
    }
}
