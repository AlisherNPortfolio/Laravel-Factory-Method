<?php

namespace App\FactoryMethod\SocialNetworks\Contracts;

interface ISocialNetworkConnector
{
    public function logIn(): void;

    public function logOut(): void;

    public function createPost(string $content): void;
}
