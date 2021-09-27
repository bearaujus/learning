<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        Controller::init();

        return view('login/index', [
            'title' => __('login/form.title')
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Controller::set_lang(auth()->user()->lang);
            return redirect()->intended('/');
        }
        Controller::init();
        return redirect('/login')->with('fail', __('login/validation.fail'));
    }

    public function logout(Request $request)
    {
        $last_lang = auth()->user()->lang;

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        Controller::set_lang($last_lang);
        return redirect('/login')->with('success', 'Logout Success');
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return $this->username;
    }
}
