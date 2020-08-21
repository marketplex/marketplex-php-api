<?php

namespace Marketplex\Api\Model;

class PriceList extends ModelAbstract {
    public function __construct($sku, array $prices) {
        $this->sku = $sku;
        $this->prices = $prices;
    }
    
    /**
     *
     * @var string
     */
    public $sku;
   
    /**
     *
     * @var float[] Indexed by currency
     */
    public $prices;
}
