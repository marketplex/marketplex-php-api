<?php

namespace Marketplex\Api\Model;

class Stock extends ModelAbstract {
    public function __construct($sku, $quantity) {
        $this->sku = $sku;
        $this->quantity = $quantity;
    }
    
    /**
     *
     * @var string
     */
    public $sku;
   
    /**
     *
     * @var float
     */
    public $quantity;
}
