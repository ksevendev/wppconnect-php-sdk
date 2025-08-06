<?php
namespace WppConnect\Services;

use WppConnect\WppConnect;

class AuthService {
    private $client;

    public function __construct(WppConnect $sdk) {
        $this->client = $sdk->client();
    }

    /**
     * 
     * 
     */
    public function generateToken($params = []) {
        $response = $this->client->post("/api/{session}/{secretkey}/generate-token", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function showAllSessions($params = []) {
        $response = $this->client->get("/api/{secretkey}/show-all-sessions");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function startAllSessions($params = []) {
        $response = $this->client->post("/api/{secretkey}/start-all", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function CheckConnectionState($params = []) {
        $response = $this->client->get("/api/{session}/check-connection-session");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function getQrCode($params = []) {
        $response = $this->client->get("/api/{session}/qrcode-session");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function startSession($params = []) {
        $response = $this->client->post("/api/{session}/start-session", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * This route logout and delete session data
     */
    public function logoutSession($params = []) {
        $response = $this->client->post("/api/{session}/logout-session", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function closeSession($params = []) {
        $response = $this->client->post("/api/{session}/close-session", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function closeSession($params = []) {
        $response = $this->client->get("/api/{session}/status-session");
        return json_decode($response->getBody(), true);
    }

}
