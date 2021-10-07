<?php

namespace App\FactoryMethod\SocialNetworks;

use App\FactoryMethod\SocialNetworks\Base\SocialNetworkPoster;
use App\FactoryMethod\SocialNetworks\Connectors\LinkedInConnector;
use App\FactoryMethod\SocialNetworks\Contracts\ISocialNetworkConnector;

class LinkedInPoster extends SocialNetworkPoster
{
    private $email;

    private $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getSocialNetwork(): ISocialNetworkConnector
    {
        return new LinkedInConnector($this->email, $this->password);
    }
}
