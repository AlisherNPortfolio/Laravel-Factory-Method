<?php

namespace App\FactoryMethod\SocialNetworks\Base;

use App\FactoryMethod\SocialNetworks\Contracts\ISocialNetworkConnector;

abstract class SocialNetworkPoster
{
    abstract public function getSocialNetwork(): ISocialNetworkConnector;

    public function post($content): void
    {
        $network = $this->getSocialNetwork();

        $network->logIn();
        $network->createPost($content);
        $network->logOut();
    }
}
