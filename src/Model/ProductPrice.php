<?php
namespace Marketplex\Api\Model;

class ProductPrice {
    public $price;
    public $min_price;
    public $max_price;
    
    public function __construct($price, $min_price = null, $max_price = null) {
        $this->price = $price;
        $this->max_price = $max_price;
        $this->min_price = $min_price;
    }
}
