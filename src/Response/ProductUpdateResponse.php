<?php

use Marketplex\Api\Response\ProductUpdateResponseTypeEnum;

namespace Marketplex\Api\Response;

class ProductUpdateResponse {
    /**
     *
     * @var string SKU
     */
    public $sku;
    
    /**
     *
     * @var ProductUpdateResponseTypeEnum
     */
    public $type;
    
    /**
     * @var string 
     */
    public $message;
    
    public function __construct($sku, $type, $message = "") {
        $this->sku = $sku;
        $this->type = $type;
        $this->message = $message;
    }
}
