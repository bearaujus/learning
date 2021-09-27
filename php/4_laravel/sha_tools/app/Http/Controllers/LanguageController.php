<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LanguageController extends Controller
{

    public function switch($lang, $url)
    {
        if (!in_array($lang, config('app.list_lang'))) {
            abort(404);
        }
        if (Auth::check()) {
            $user = User::find(Auth::user()->id);
            $user->lang = $lang;
            $user->save();
        }
        session()->put('lang', $lang);
        return redirect('/' . $url);
    }
}
