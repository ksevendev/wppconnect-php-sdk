<?php
namespace WppConnect\Services;

use WppConnect\WppConnect;

class MessagesService {
    private $client;

    public function __construct(WppConnect $sdk) {
        $this->client = $sdk->client();
    }

    /**
     * 
     * 
     */
    public function getMediaByMessage($params = []) {
        $response = $this->client->get("/api/{session}/get-media-by-message/{messageId}");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function downloadMediabyMessage($params = []) {
        $response = $this->client->post("/api/{session}/download-media", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function sendMessage($params = []) {
        $response = $this->client->post("/api/{session}/send-message", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function editMessage($params = []) {
        $response = $this->client->post("/api/{session}/edit-message", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function sendImage($params = []) {
        $response = $this->client->post("/api/{session}/send-image", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function sendSticker($params = []) {
        $response = $this->client->post("/api/{session}/send-sticker", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function sendStickerGif($params = []) {
        $response = $this->client->post("/api/{session}/send-sticker-gif", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function sendReply($params = []) {
        $response = $this->client->post("/api/{session}/send-reply", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function sendFile($params = []) {
        $response = $this->client->post("/api/{session}/send-file", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function sendFileBase64($params = []) {
        $response = $this->client->post("/api/{session}/send-file-base64", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function sendVoice($params = []) {
        $response = $this->client->post("/api/{session}/send-voice", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function sendVoiceBase64($params = []) {
        $response = $this->client->post("/api/{session}/send-voice-base64", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function sendStatus($params = []) {
        $response = $this->client->post("/api/{session}/send-status", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function sendLinkPreview($params = []) {
        $response = $this->client->post("/api/{session}/send-link-preview", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function sendLocation($params = []) {
        $response = $this->client->post("/api/{session}/send-location", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function sendMentioned($params = []) {
        $response = $this->client->post("/api/{session}/send-mentioned", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function sendButtons($params = []) {
        $response = $this->client->post("/api/{session}/send-buttons", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function sendListMessage($params = []) {
        $response = $this->client->post("/api/{session}/send-list-message", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function sendOrderMessage($params = []) {
        $response = $this->client->post("/api/{session}/send-order-message", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function sendPollMessage($params = []) {
        $response = $this->client->post("/api/{session}/send-poll-message", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function unreadMessages($params = []) {
        $response = $this->client->get("/api/{session}/unread-messages");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function {phone}($params = []) {
        $response = $this->client->get("/api/{session}/get-messages/{phone}");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function deleteMessage($params = []) {
        $response = $this->client->post("/api/{session}/delete-message", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function reactMessage($params = []) {
        $response = $this->client->post("/api/{session}/react-message", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function forwardMessages($params = []) {
        $response = $this->client->post("/api/{session}/forward-messages", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function markUnseen($params = []) {
        $response = $this->client->post("/api/{session}/mark-unseen", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function contactVcard($params = []) {
        $response = $this->client->post("/api/{session}/contact-vcard", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function temporaryMessages($params = []) {
        $response = $this->client->post("/api/{session}/temporary-messages", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function starMessage($params = []) {
        $response = $this->client->post("/api/{session}/star-message", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function {id}($params = []) {
        $response = $this->client->get("/api/{session}/reactions/{id}");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function {id}($params = []) {
        $response = $this->client->get("/api/{session}/votes/{id}");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function sendLinkCatalog($params = []) {
        $response = $this->client->post("/api/{session}/send-link-catalog", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

}
