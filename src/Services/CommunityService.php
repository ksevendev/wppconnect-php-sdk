<?php
namespace WppConnect\Services;

use WppConnect\WppConnect;

class CommunityService {
    private $client;

    public function __construct(WppConnect $sdk) {
        $this->client = $sdk->client();
    }

    /**
     * 
     * 
     */
    public function createCommunity($params = []) {
        $response = $this->client->post("/api/{session}/create-community", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function deactivateCommunity($params = []) {
        $response = $this->client->post("/api/{session}/deactivate-community", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function addCommunitySubgroup($params = []) {
        $response = $this->client->post("/api/{session}/add-community-subgroup", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function removeCommunitySubgroup($params = []) {
        $response = $this->client->post("/api/{session}/remove-community-subgroup", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function promoteCommunityParticipant($params = []) {
        $response = $this->client->post("/api/{session}/promote-community-participant", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function demoteCommunityParticipant($params = []) {
        $response = $this->client->post("/api/{session}/demote-community-participant", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function {id}($params = []) {
        $response = $this->client->get("/api/{session}/community-participants/{id}");
        return json_decode($response->getBody(), true);
    }

}
