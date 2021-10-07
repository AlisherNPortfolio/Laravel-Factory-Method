<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SocialNetworkService;
use Illuminate\Support\Str;

class SocialNetworkController extends Controller
{
    private $service;

    public function __construct(SocialNetworkService $service)
    {
        $this->service = $service;
    }

    public function createPost(Request $request)
    {
        // request validatsiya qilinadi

        $network = $request->input('network');
        $content = $request->input('content');

        $network = "\App\FactoryMethod\SocialNetworks\\" . Str::ucfirst($network) . "Poster";

        $config = config("socials.$network");

        $this->service->postOnSocial(
            new $network(
                $config['login'],
                $config['password']
            ),
            $content
        );
    }
}
