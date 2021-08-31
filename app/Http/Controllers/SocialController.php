<?php

namespace App\Http\Controllers;

use App\Contracts\Social;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function init (string $social)
    {
        return Socialite::driver($social)->redirect();
    }

    public function callback (Social $social, string $driver)
    {
        return redirect($social->saveUser(
            Socialite::driver($driver)->user()
        ));
    }
}
