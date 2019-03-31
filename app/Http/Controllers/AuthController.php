<?php

namespace App\Http\Controllers;

use Socialite;
use Illuminate\Routing\Controller;

class AuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('wechat')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('wechat')->user();
        dd($user);
        // $user->token;
    }
}
