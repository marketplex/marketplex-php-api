<?php

namespace Marketplex\Api;

class ApiAbstract {
    /**
     * @var Client
     */
    protected $client;
    
    public function __construct(Client $client) {
        $this->client = $client;
    }
}
