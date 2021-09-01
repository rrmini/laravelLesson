<?php

namespace App\Http\Controllers;

use App\Contracts\Social;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function init (string $provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback (Social $social, string $provider)
    {
        return redirect($social->saveUser(
            Socialite::driver($provider)->user(), $provider
        ));
    }
}
