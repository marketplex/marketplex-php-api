<?php

namespace Marketplex\Api\Model;

class OrderItem extends ModelAbstract {
    /**
     * @var int
     */
    public $marketplexId;
    
    /**
     * @var string
     */
    public $sku;
    
    /**
     * @var int
     */
    public $quantity;
    
    /**
     * Item price including VAT, excluding shipping
     * @var float
     */
    public $amount;
    
    /**
     * Shipping price including VAT
     * @var float
     */
    public $shippingAmount;
}
