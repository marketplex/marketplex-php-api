<?php
namespace Marketplex\Api;

use Exception;
use Marketplex\Api\Model\Product;
use Marketplex\Api\Model\Stock;

class ApiProducts extends ApiAbstract {
    const MAX_PRODUCTS = 1000;
    const MAX_STOCKS = 10000;
    
     /**
     * @param Product[] $products
     */
    public function postProducts(array $products) {
        if(count($products) > self::MAX_PRODUCTS) throw new Exception("Can't post more than ".self::MAX_PRODUCTS." products at the same time");
        
        return $this->client->post("/products/add", $products);
    }
    
    /**
     * 
     * @param Stock[] $stocks
     */
    public function postStocks(array $stocks) {
        if(count($stocks) > self::MAX_STOCKS) throw new Exception("Can't post more than ".self::MAX_STOCKS." stocks at the same time");
        
        return $this->client->post("/products/stocks", $stocks);
    }

}
