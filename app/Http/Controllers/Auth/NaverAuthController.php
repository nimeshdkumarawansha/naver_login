<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class NaverAuthController extends Controller
{
    public function redirectToNaver()
    {
        return Socialite::driver('naver')->redirect();
    }

    public function handleNaverCallback()
    {
        $naverUser = Socialite::driver('naver')->user();
        // $naverUser->token;
        // $naverUser->getId();
        // Handle user creation/login here
    }
}
