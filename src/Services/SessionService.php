<?php
namespace WppConnect\Services;

use WppConnect\WppConnect;

class SessionService {
    private $client;

    public function __construct(WppConnect $sdk) {
        $this->client = $sdk->client();
    }

    public function startSession(string $sessionName) {
        $response = $this->client->post('/api/start-session', [
            'json' => ['session' => $sessionName]
        ]);

        return json_decode($response->getBody(), true);
    }
}