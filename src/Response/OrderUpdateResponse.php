<?php

namespace Marketplex\Api\Response;

class OrderUpdateResponse {
    /**
     *
     * @var int Marketplex order ID
     */
    public $orderid;
    
    /**
     *
     * @var UpdateResponseTypeEnum
     */
    public $type;
    
    /**
     * @var string 
     */
    public $message;
    
    public function __construct($orderid, $type, $message = "") {
        $this->orderid = $orderid;
        $this->type = $type;
        $this->message = $message;
    }
}
