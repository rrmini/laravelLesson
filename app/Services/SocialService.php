<?php declare(strict_types=1);

namespace App\Services;

use App\Contracts\Social;
use App\Models\User as Model;
use Laravel\Socialite\Contracts\User;

class SocialService implements Social
{

    public function saveUser(User $user, $provider): string
    {
        $currentUser = Model::where('email', $user->getEmail())->first();

        if($currentUser ){
            $currentUser->name = $user->getName();
            $currentUser->avatar = $user->getAvatar();
            $currentUser->save();

            \Auth::loginUsingId($currentUser->id);

            return route('account');
        }else {
            $currentUser = new Model; // наверное не лучшее решение ??

            $currentUser->name = !empty($user->getName()) ? $user->getName() : '';
            $currentUser->email = !empty($user->getEmail()) ? $user->getEmail() : '';
            $currentUser->password = '';
            $currentUser->avatar = !empty($user->getAvatar()) ? $user->getAvatar() : '';
            $currentUser->provider_id = !empty($user->getId()) ? $user->getId() : '';
            $currentUser->provider = $provider;

            $currentUser->save();

            \Auth::loginUsingId($currentUser->id);

            return route('account');
        }

        throw new \Exception("User not found");
    }
}
