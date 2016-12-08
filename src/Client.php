<?php

namespace Marketplex\Api;

use Exception;
use JsonSerializable;
use stdClass;

class Client {
    protected $appkey;
    protected $secretkey;
    protected $serviceHost;
    
    /**
     * @param string $appkey Your API key giving you access to the Marketplex API
     * @param string $secretkey Your private secret key for security
     */
    public function __construct($appkey, $secretkey, $serviceHost = "api.marketplex.fr") {
        $this->appkey = $appkey;
        $this->secretkey = $secretkey;
        $this->serviceHost = $serviceHost;
    }
    
    /**
     * 
     * @return ApiOrders
     */
    public function getOrdersApi() {
        return new ApiOrders($this);
    }
    
    /**
     * 
     * @return ApiProducts
     */
    public function getProductsApi() {
        return new ApiProducts($this);
    }
    
    /**
     * @param string $uri
     * @param JsonSerializable $data
     * @return stdClass
     */
    public function post($uri, $data) {
        return $this->call("POST", $uri, json_encode($data));
    }
    
    /**
     * @param string $uri
     * @param JsonSerializable $data
     * @return stdClass
     */
    public function put($uri, $data) {
        return $this->call("PUT", $uri, json_encode($data));
    }
    
    /**
     * @param string $uri
     * @param string[] $params
     * @return stdClass
     */
    public function get($uri, $params = []) {
        if(count($params)) $uri .= "?".http_build_query($params);
        return $this->call("GET", $uri);
    }
    
    /**
     * 
     * @param string $method
     * @param string $uri
     * @param string $data
     * @return stdClass
     * @throws Exception
     */
    public function call($method, $uri, $data = null) {
        $timestamp = time();
        $signature = hash_hmac("sha256", $timestamp.$method.$uri.$data, $this->secretkey);
        
        $ctx = stream_context_create([
            "http" => [
                "method" => $method,
                "header" => [
                    "X-AppKey: {$this->appkey}",
                    "X-Timestamp: {$timestamp}",
                    "X-Signature: {$signature}",
                    "Content-type: application/json"
                ],
                "ignore_errors" => true,
                "content" => $data
            ]
        ]);
                    
        $result = file_get_contents('https://'.$this->serviceHost.$uri, false, $ctx);
        $response = @json_decode($result);
        
        if(!$response) throw new Exception("Can't decode response from Marketplex API:\n\n{$result}", 1001);
        if(!isset($response->status)) throw new Exception("Bad response from Marketplex API", 1002);
        if($response->status == "error") throw new Exception("Marketplex API Error: {$response->message}", 1003);
        return $response->response;
    }
}
