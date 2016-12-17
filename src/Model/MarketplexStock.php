<?php

namespace Marketplex\Api\Model;

class MarketplexStock extends ModelAbstract {
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
     * @var int
     */
    public $quantity;
    
    /**
     * Quantity reserved by an order in either PENDING/UNSHIPPED/PARTIALLY_SHIPPED status
     * @var int
     */
    public $reserved_quantity;
}
