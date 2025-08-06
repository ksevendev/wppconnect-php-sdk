<?php
namespace WppConnect\Services;

use WppConnect\WppConnect;

class ContactService {
    private $client;

    public function __construct(WppConnect $sdk) {
        $this->client = $sdk->client();
    }

    /**
     * 
     * 
     */
    public function {phone}($params = []) {
        $response = $this->client->get("/api/{session}/profile-pic/{phone}");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function {phone}($params = []) {
        $response = $this->client->get("/api/{session}/profile-status/{phone}");
        return json_decode($response->getBody(), true);
    }

}
