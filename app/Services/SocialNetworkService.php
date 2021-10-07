<?php

namespace App\Services;

use App\FactoryMethod\SocialNetworks\Base\SocialNetworkPoster;

class SocialNetworkService
{
    public function postOnSocial(SocialNetworkPoster $poster, $content)
    {
        $poster->post($content);
    }
}
