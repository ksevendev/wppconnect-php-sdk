<?php
namespace WppConnect\Services;

use WppConnect\WppConnect;

class ChatService {
    private $client;

    public function __construct(WppConnect $sdk) {
        $this->client = $sdk->client();
    }

    /**
     * Deprecated in favor of 
     * This body is not required. Not sent body to get all chats or filter.
     */
    public function allChats($params = []) {
        $response = $this->client->get("/api/{session}/all-chats");
        return json_decode($response->getBody(), true);
    }

    /**
     * Retrieve a list of chats
     * This body is not required. Not sent body to get all chats or filter.
     */
    public function listChats($params = []) {
        $response = $this->client->post("/api/{session}/list-chats", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * Retrieves all archived chats.
     */
    public function allChatsArchived($params = []) {
        $response = $this->client->get("/api/{session}/all-chats-archived");
        return json_decode($response->getBody(), true);
    }

    /**
     * Deprecated in favor of list-chats
     * 
     */
    public function allChatsWithMessages($params = []) {
        $response = $this->client->get("/api/{session}/all-chats-with-messages");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function {phone}($params = []) {
        $response = $this->client->get("/api/{session}/all-messages-in-chat/{phone}");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function allNewMessages($params = []) {
        $response = $this->client->get("/api/{session}/all-new-messages");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function allUnreadMessages($params = []) {
        $response = $this->client->get("/api/{session}/all-unread-messages");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function {phone}($params = []) {
        $response = $this->client->get("/api/{session}/chat-by-id/{phone}");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function {messageId}($params = []) {
        $response = $this->client->get("/api/{session}/message-by-id/{messageId}");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function {phone}($params = []) {
        $response = $this->client->get("/api/{session}/chat-is-online/{phone}");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function {phone}($params = []) {
        $response = $this->client->get("/api/{session}/last-seen/{phone}");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function {type}($params = []) {
        $response = $this->client->get("/api/{session}/list-mutes/{type}");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function {phone}($params = []) {
        $response = $this->client->get("/api/{session}/load-messages-in-chat/{phone}");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function archiveChat($params = []) {
        $response = $this->client->post("/api/{session}/archive-chat", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function archiveAllChats($params = []) {
        $response = $this->client->post("/api/{session}/archive-all-chats", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function clearChat($params = []) {
        $response = $this->client->post("/api/{session}/clear-chat", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function clearAllChats($params = []) {
        $response = $this->client->post("/api/{session}/clear-all-chats", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function deleteChat($params = []) {
        $response = $this->client->post("/api/{session}/delete-chat", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function deleteAllChats($params = []) {
        $response = $this->client->post("/api/{session}/delete-all-chats", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function pinChat($params = []) {
        $response = $this->client->post("/api/{session}/pin-chat", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function sendMute($params = []) {
        $response = $this->client->post("/api/{session}/send-mute", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function sendSeen($params = []) {
        $response = $this->client->post("/api/{session}/send-seen", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function chatState($params = []) {
        $response = $this->client->post("/api/{session}/chat-state", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function typing($params = []) {
        $response = $this->client->post("/api/{session}/typing", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function recording($params = []) {
        $response = $this->client->post("/api/{session}/recording", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function {phone}($params = []) {
        $response = $this->client->get("/api/{session}/contact/{phone}");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function {phone}($params = []) {
        $response = $this->client->get("/api/{session}/profile/{phone}");
        return json_decode($response->getBody(), true);
    }

}
