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

    public function getFlower($id)
    {
        $flower = Flower::find($id);
        if ($flower)
            return $flower->toJson(JSON_PRETTY_PRINT);
        else
            return response(json_encode(['error' => 'Flower not found.']), 404);
    }

    public function getType($type)
    {
        $flowers = Flower::where('type', $type)->get();
        return $flowers->toJson(JSON_PRETTY_PRINT);
    }

    public function getLimit($num)
    {
        $flowers = Flower::take($num)->get();
        return $flowers->toJson(JSON_PRETTY_PRINT);
    }
}
