<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    // Example to grab info from an API
    public function getApi()
    {
        // Example on how to retrieve API informations
        $client = new Client();

        // Saving URL of the API
        $url = 'https://api.magicthegathering.io/v1/cards';

        // Make a request to the API (using GET method)
        $response = $client->request('GET', $url);

        $responseBody = json_decode($response->getBody());

        dd($responseBody);
    }

    // How to create/make an API : 
    public function getFlowers()
    {
        // Return all flowers method
        $flowers = Flower::all();
        return $flowers->toJson(JSON_PRETTY_PRINT);
    }
}
