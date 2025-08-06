<?php
namespace WppConnect\Services;

use WppConnect\WppConnect;

class ContactService {
    private $client;

    public function __construct(WppConnect $sdk) {
        $this->client = $sdk->client();
    }

    public function getAllContacts(string $session) {
        $response = $this->client->get("/api/{$session}/all-contacts");
        return json_decode($response->getBody(), true);
    }
}