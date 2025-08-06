<?php
namespace WppConnect\Services;

use WppConnect\WppConnect;

class LabelsService {
    private $client;

    public function __construct(WppConnect $sdk) {
        $this->client = $sdk->client();
    }

    /**
     * 
     * 
     */
    public function addNewLabel($params = []) {
        $response = $this->client->post("/api/{session}/add-new-label", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function addOrRemoveLabel($params = []) {
        $response = $this->client->post("/api/{session}/add-or-remove-label", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function getAllLabels($params = []) {
        $response = $this->client->get("/api/{session}/get-all-labels");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function deleteAllLabels($params = []) {
        $response = $this->client->put("/api/{session}/delete-all-labels", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function {id}($params = []) {
        $response = $this->client->put("/api/{session}/delete-label/{id}", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

}
