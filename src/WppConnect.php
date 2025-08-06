<?php
namespace WppConnect;

use GuzzleHttp\Client;

class WppConnect {
    private Client $client;

    public function __construct(string $baseUrl, string $token) {
        $this->client = new Client([
            'base_uri' => rtrim($baseUrl, '/'),
            'headers' => [
                'Authorization' => "Bearer {$token}",
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ],
        ]);
    }

    public function client(): Client {
        return $this->client;
    }
}