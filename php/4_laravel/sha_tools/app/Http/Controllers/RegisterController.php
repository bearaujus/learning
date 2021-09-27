<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index()
    {
        Controller::init();

        return view('login/register', [
            'title' => __('register/form.title')
        ]);
    }

    public function store(Request $request)
    {
        Controller::init();

        $request['username'] = strtolower($request['username']);
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'username' => ['required', 'unique:users,username'],
            'password' => ['required'],
            'lang' => ['required']
        ]);

        if ($validator->fails()) {
            return redirect('/register')->with('fail', __('register/validation.fail'));
        } else {
            $user = [
                'name' => $request['name'],
                'username' => $request['username'],
                'password' => bcrypt($request['password']),
                'lang' => $request['lang']
            ];
            session()->put('tmp', $request['password']);
            User::create($user);
            return (new LoginController)->authenticate($request);
        }
    }
}
