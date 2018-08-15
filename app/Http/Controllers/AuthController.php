<?php

namespace App\Http\Controllers;

use Socialite;
use Illuminate\Routing\Controller;

class AuthController extends Controller
{
    /**
     * Redirect the user to the WeChat authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('wechat')->redirect();
    }

    /**
     * Obtain the user information from WeChat.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('wechat')->user();
        dd($user);
        // $user->token;
    }
}