<?php

namespace App\Services\API;

use GuzzleHttp\Exception\GuzzleException;

class ProductServiceAPI
{
    public static function getProducts()
    {
        $url = 'produtos';

        $response = self::httpRequestAPI(config('app.url_api'), $url, 'GET', [], []);

        $response = json_decode($response->getBody()->getContents());

        $products = $response->data;

        return $products;
    }

    private static function httpRequestAPI($base_uri, $uri, $method, array $data = [], array $headers = [])
    {
        $client = new \GuzzleHttp\Client(['base_uri' => $base_uri]);

        try {
            $response = $client->request($method, $uri, [
                'headers' => $headers,
                'json' => $data
            ]);
        } catch (GuzzleException $e) {
            return null;
        }

        return $response;
    }
}
