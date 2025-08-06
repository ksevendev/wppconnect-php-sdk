<?php
namespace WppConnect\Services;

use WppConnect\WppConnect;

class GroupService {
    private $client;

    public function __construct(WppConnect $sdk) {
        $this->client = $sdk->client();
    }

    /**
     * Deprecated in favor of 
     * 
     */
    public function allGroups($params = []) {
        $response = $this->client->get("/api/{session}/all-groups");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function {groupId}($params = []) {
        $response = $this->client->get("/api/{session}/group-members/{groupId}");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function {wid}($params = []) {
        $response = $this->client->get("/api/{session}/common-groups/{wid}");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function {groupId}($params = []) {
        $response = $this->client->get("/api/{session}/group-admins/{groupId}");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function {groupId}($params = []) {
        $response = $this->client->get("/api/{session}/group-invite-link/{groupId}");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function {groupId}($params = []) {
        $response = $this->client->get("/api/{session}/group-revoke-link/{groupId}");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function {groupId}($params = []) {
        $response = $this->client->get("/api/{session}/group-members-ids/{groupId}");
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function createGroup($params = []) {
        $response = $this->client->post("/api/{session}/create-group", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function leaveGroup($params = []) {
        $response = $this->client->post("/api/{session}/leave-group", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function joinCode($params = []) {
        $response = $this->client->post("/api/{session}/join-code", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function addParticipantGroup($params = []) {
        $response = $this->client->post("/api/{session}/add-participant-group", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function removeParticipantGroup($params = []) {
        $response = $this->client->post("/api/{session}/remove-participant-group", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function promoteParticipantGroup($params = []) {
        $response = $this->client->post("/api/{session}/promote-participant-group", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function demoteParticipantGroup($params = []) {
        $response = $this->client->post("/api/{session}/demote-participant-group", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function groupInfoFromInviteLink($params = []) {
        $response = $this->client->post("/api/{session}/group-info-from-invite-link", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function groupDescription($params = []) {
        $response = $this->client->post("/api/{session}/group-description", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function groupProperty($params = []) {
        $response = $this->client->post("/api/{session}/group-property", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function groupSubject($params = []) {
        $response = $this->client->post("/api/{session}/group-subject", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function messagesAdminsOnly($params = []) {
        $response = $this->client->post("/api/{session}/messages-admins-only", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function groupPic($params = []) {
        $response = $this->client->post("/api/{session}/group-pic", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * 
     * 
     */
    public function changePrivacyGroup($params = []) {
        $response = $this->client->post("/api/{session}/change-privacy-group", [
            'json' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

}
