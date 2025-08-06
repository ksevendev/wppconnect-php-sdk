<?php
namespace WppConnect\Services;

use WppConnect\WppConnect;

class Catalog&BussinessService {
    private $client;

    public function __construct(WppConnect $sdk) {
        $this->client = $sdk->client();
    }

    /**
     * 
     * 
     */
    public function getProducts($params = []) {
        $response = $this->client->get("/api/{session}/get-products");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function getProductById($params = []) {
        $response = $this->client->get("/api/{session}/get-product-by-id");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function addProduct($params = []) {
        $response = $this->client->post("/api/{session}/add-product", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function editProduct($params = []) {
        $response = $this->client->post("/api/{session}/edit-product", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function delProducts($params = []) {
        $response = $this->client->post("/api/{session}/del-products", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function changeProductImage($params = []) {
        $response = $this->client->post("/api/{session}/change-product-image", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function addProductImage($params = []) {
        $response = $this->client->post("/api/{session}/add-product-image", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function removeProductImage($params = []) {
        $response = $this->client->post("/api/{session}/remove-product-image", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function getCollections($params = []) {
        $response = $this->client->get("/api/{session}/get-collections");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function createCollection($params = []) {
        $response = $this->client->post("/api/{session}/create-collection", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function editCollection($params = []) {
        $response = $this->client->post("/api/{session}/edit-collection", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function delCollection($params = []) {
        $response = $this->client->post("/api/{session}/del-collection", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function setProductVisibility($params = []) {
        $response = $this->client->post("/api/{session}/set-product-visibility", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function setCartEnabled($params = []) {
        $response = $this->client->post("/api/{session}/set-cart-enabled", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function getBusinessProfilesProducts($params = []) {
        $response = $this->client->get("/api/{session}/get-business-profiles-products");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function {messageId}($params = []) {
        $response = $this->client->get("/api/{session}/get-order-by-messageId/{messageId}");
        return json_decode($response->getBody(), true);
    }

}
