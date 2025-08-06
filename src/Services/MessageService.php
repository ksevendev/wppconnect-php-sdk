<?php
namespace WppConnect\Services;

use WppConnect\WppConnect;

class MessageService {
    private $client;

    public function __construct(WppConnect $sdk) {
        $this->client = $sdk->client();
    }

    public function sendMessage(string $phone, string $message) {
        $response = $this->client->post('/api/send-message', [
            'json' => [
                'phone' => $phone,
                'message' => $message,
            ]
        ]);

        return json_decode($response->getBody(), true);
    }
}