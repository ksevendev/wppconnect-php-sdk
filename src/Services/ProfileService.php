<?php
namespace WppConnect\Services;

use WppConnect\WppConnect;

class ProfileService {
    private $client;

    public function __construct(WppConnect $sdk) {
        $this->client = $sdk->client();
    }

    /**
     * 
     * 
     */
    public function setProfilePic($params = []) {
        $response = $this->client->post("/api/{session}/set-profile-pic", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function profileStatus($params = []) {
        $response = $this->client->post("/api/{session}/profile-status", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function changeUsername($params = []) {
        $response = $this->client->post("/api/{session}/change-username", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * Edit your bussiness profile
     */
    public function editBusinessProfile($params = []) {
        $response = $this->client->post("/api/{session}/edit-business-profile", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

}
