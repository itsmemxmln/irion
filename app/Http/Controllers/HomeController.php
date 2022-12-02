<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    public function de()
    {
        $locale = "de";
        App::setLocale($locale);
        session()->put('locale', $locale);
        Session::put('locale', $locale);

        return view('home');
    }

    public function en()
    {
        $locale = "en";
        App::setLocale($locale);
        session()->put('locale', $locale);
        Session::put('locale', $locale);

        return view('home');
    }

    public function us()
    {
        $locale = "en-US";
        App::setLocale($locale);
        session()->put('locale', $locale);
        Session::put('locale', $locale);

        return view('home');
    }
}
