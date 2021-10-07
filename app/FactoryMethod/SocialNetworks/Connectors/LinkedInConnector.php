<?php

namespace App\FactoryMethod\SocialNetworks\Connectors;

use App\FactoryMethod\SocialNetworks\Contracts\ISocialNetworkConnector;

class LinkedInConnector implements ISocialNetworkConnector
{
    private $email;

    private $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function logIn(): void
    {
        // LinkedIn-ga kirish
        echo "$this->email foydalanuvchi LinkedIn-ga kirdi";
    }

    public function logOut(): void
    {
        // LinkedIn-dan chiqish
        echo "$this->email foydalanuvchi LinkedIn-dan chiqdi";
    }

    public function createPost(string $content): void
    {
        // LinkedIn-da post qoldirish
        echo "$this->email foydalanuvchi LinkedIn-ga post qoldirdi";
    }
}
