<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\App;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function init()
    {
        if (session('lang') !== null) {
            App::setLocale(session('lang'));
        } else {
            session()->put('lang', config('app.fallback_locale'));
        }
    }

    public static function set_lang($lang)
    {
        session()->put('lang', $lang);
        App::setLocale(session('lang'));
    }
}
