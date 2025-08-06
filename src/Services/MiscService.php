<?php
namespace WppConnect\Services;

use WppConnect\WppConnect;

class MiscService {
    private $client;

    public function __construct(WppConnect $sdk) {
        $this->client = $sdk->client();
    }

    /**
     * 
     * 
     */
    public function {messageId}($params = []) {
        $response = $this->client->get("/api/{session}/get-platform-from-message/{messageId}");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function clearSessionData($params = []) {
        $response = $this->client->post("/api/{session}/{secretkey}/clear-session-data", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function subscribePresence($params = []) {
        $response = $this->client->post("/api/{session}/subscribe-presence", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function allBroadcastList($params = []) {
        $response = $this->client->get("/api/{session}/all-broadcast-list");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function rejectCall($params = []) {
        $response = $this->client->post("/api/{session}/reject-call", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function {phone}($params = []) {
        $response = $this->client->get("/api/{session}/check-number-status/{phone}");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function blocklist($params = []) {
        $response = $this->client->get("/api/{session}/blocklist");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function blockContact($params = []) {
        $response = $this->client->post("/api/{session}/block-contact", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function unblockContact($params = []) {
        $response = $this->client->post("/api/{session}/unblock-contact", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function getBatteryLevel($params = []) {
        $response = $this->client->get("/api/{session}/get-battery-level");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function hostDevice($params = []) {
        $response = $this->client->get("/api/{session}/host-device");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function getPhoneNumber($params = []) {
        $response = $this->client->get("/api/{session}/get-phone-number");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * Please, open the router in your browser, in swagger this not run
     */
    public function backupSessions($params = []) {
        $response = $this->client->get("/api/{secretkey}/backup-sessions");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function restoreSessions($params = []) {
        $response = $this->client->post("/api/{secretkey}/restore-sessions", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function takeScreenshot($params = []) {
        $response = $this->client->get("/api/{session}/take-screenshot");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * Change limits of whatsapp web. Types value: maxMediaSize, maxFileSize, maxShare, statusVideoMaxDuration, unlimitedPin;
     */
    public function setLimit($params = []) {
        $response = $this->client->post("/api/{session}/set-limit", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * You can point your Chatwoot to this route so that it can perform functions.
     */
    public function chatwoot($params = []) {
        $response = $this->client->post("/api/{session}/chatwoot", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * This endpoint can be used to check the health status of the API. It returns a response with a status code indicating the API
     */
    public function healthz($params = []) {
        $response = $this->client->get("/healthz");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * This endpoint is used to force the API into an unhealthy state. It can be useful for testing error handling or simulating service disruptions.
     */
    public function unhealthy($params = []) {
        $response = $this->client->get("/unhealthy");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * This endpoint can be used to check the status of API metrics. It returns a response with the collected metrics.
     */
    public function metrics($params = []) {
        $response = $this->client->get("/metrics");
        return json_decode($response->getBody(), true);
    }

}
