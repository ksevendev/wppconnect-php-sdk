<?php
namespace WppConnect\Services;

use WppConnect\WppConnect;

class StatusstoriesService {
    private $client;

    public function __construct(WppConnect $sdk) {
        $this->client = $sdk->client();
    }

    /**
     * 
     * 
     */
    public function sendTextStorie($params = []) {
        $response = $this->client->post("/api/{session}/send-text-storie", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function sendImageStorie($params = []) {
        $response = $this->client->post("/api/{session}/send-image-storie", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function sendVideoStorie($params = []) {
        $response = $this->client->post("/api/{session}/send-video-storie", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

}
