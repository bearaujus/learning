<?php

namespace App\Observers;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserObserver
{
    public function created(User $user)
    {
        Controller::set_lang($user->lang);
        $data = [
            'header' => __('register/validation.success_header'),
            'message' => __('register/validation.success_message'),
            'fusername' => __('register/validation.success_username'),
            'fpassword' => __('register/validation.success_password'),
            'footer' => __('register/validation.success_footer'),
            'username' => $user->username,
            'password' => session('tmp')
        ];
        session()->put('regs_log', $data);
        session()->forget('tmp');
    }
}
