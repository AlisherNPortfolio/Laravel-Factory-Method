<?php

namespace App\FactoryMethod\SocialNetworks;

use App\FactoryMethod\SocialNetworks\Base\SocialNetworkPoster;
use App\FactoryMethod\SocialNetworks\Connectors\FacebookConnector;
use App\FactoryMethod\SocialNetworks\Contracts\ISocialNetworkConnector;

class FacebookPoster extends SocialNetworkPoster
{
    private $login;

    private $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): ISocialNetworkConnector
    {
        return new FacebookConnector($this->login, $this->password);
    }
}
