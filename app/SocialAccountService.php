<?php

namespace App;


class SocialAccountService
{
    public function createOrGetUser($providerUser, $provider)
    {
        $userSoc = $providerUser->user();
        $account = SocialProvider::whereProvider($provider)
            ->whereProviderUserId($userSoc->getId())
            ->first();

        if ($account) {
            return $account->user;
        } else {

            $account = new SocialProvider([
                'provider_user_id' => $userSoc->getId(),
                'provider' => 'facebook'
            ]);

            $user = User::whereEmail($userSoc->getEmail())->first();

            if (!$user) {

                $user = User::create([
                    'email' => $userSoc->getEmail(),
                    'name' => $userSoc->getName(),
                ]);
            }

            $account->user()->associate($user);
            $account->save();

            return $user;

        }

    }
}