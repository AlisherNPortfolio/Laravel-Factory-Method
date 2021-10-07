<?php

namespace App\FactoryMethod\SocialNetworks\Connectors;

use App\FactoryMethod\SocialNetworks\Contracts\ISocialNetworkConnector;

class FacebookConnector implements ISocialNetworkConnector
{
    private $login;

    private $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function logIn(): void
    {
        // Facebook-ka login

        echo "$this->login foydalanuvchi facebook-ka kirdi";
    }

    public function logOut(): void
    {
        // Facebook-dan chiqib ketish

        echo "$this->login foydalanuvchi facebook-dan chiqib ketdi";
    }

    public function createPost(string $content): void
    {
        // Facebook-da post qoldirish

        echo "$this->login foydalanuvchi facebook-da post qoldirdi";
    }
}
