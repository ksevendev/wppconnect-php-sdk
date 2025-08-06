<?php
namespace WppConnect;

use WppConnect\Services\MessageService;
use WppConnect\Services\SessionService;
use WppConnect\Services\ContactService;

class WppConnectClient {
    private WppConnect $sdk;

    public function __construct(string $baseUrl, string $token) {
        $this->sdk = new WppConnect($baseUrl, $token);
    }

    public function message(): MessageService {
        return new MessageService($this->sdk);
    }

    public function session(): SessionService {
        return new SessionService($this->sdk);
    }

    public function contact(): ContactService {
        return new ContactService($this->sdk);
    }
}