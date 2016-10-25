<?php

namespace Marketplex\Api\Response;

use JsonSerializable;
use Marketplex\Api\Client;
use Marketplex\Api\Model\ModelAbstract;

class PaginatedResponse implements JsonSerializable {
    /**
     *
     * @var int
     */
    public $page = 1;
    
    /**
     *
     * @var int
     */
    public $nbPages = 1;
    
    /**
     *
     * @var string
     */
    public $nextPage;

    /**
     *
     * @var ModelAbstract[]
     */
    public $results = [];
    
    
    public function jsonSerialize() {
        return [
            "page" => $this->page,
            "nbPages" => $this->nbPages,
            "nextPage" => $this->nextPage,
            "results" => $this->results,
        ];
    }
    
    public function hydrate($data) {
        foreach($data as $key=>$val) {
            $this->$key = $val;
        }
    }
    
    /**
     * @var Client
     */
    protected $client;
    
    public function __construct(Client $client = null) {
        $this->client = $client;
    }

    /**
     * @return ResponseAbstract
     */
    public function getNextPage() {
        if(!$this->nextPage) return null;
        $data = $this->client->call("GET", $this->nextPage);
        
        $resp = new PaginatedResponse($this->client);
        $resp->hydrate($data);
        return $resp;
    }
}
