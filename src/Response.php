<?php

namespace Achrafbardan\KvkSdk;

use Psr\Http\Message\ResponseInterface;

class Response {
    public ResponseInterface $response;

    public function __construct(ResponseInterface $response) {
        $this->response = $response;
    }

    public function json(): array {
        return json_decode($this->response->getBody()->getContents(), true);
    }
}