<?php
namespace Marketplex\Api;

use Exception;
use Marketplex\Api\Model\PriceList;
use Marketplex\Api\Model\Product\ProductAbstract;
use Marketplex\Api\Model\Stock;
use Marketplex\Api\Response\PaginatedResponse;

class ApiProducts extends ApiAbstract {
    const MAX_PRODUCTS = 1000;
    const MAX_STOCKS = 10000;
    const MAX_PRICES = 10000;
    
     /**
     * @param ProductAbstract[] $products
     */
    public function postProducts(array $products) {
        if(count($products) > self::MAX_PRODUCTS) throw new Exception("Can't post more than ".self::MAX_PRODUCTS." products at the same time");
        
        return $this->client->post("/products/add", $products);
    }
    
    /**
     * @param string[] $skus
     */
    public function removeProducts(array $skus) {
        if(count($skus) > self::MAX_PRODUCTS) throw new Exception("Can't remove more than ".self::MAX_PRODUCTS." products at the same time");
        
        return $this->client->post("/products/remove", $skus);
    }
    
    /**
     * 
     * @param Stock[] $stocks
     */
    public function postStocks(array $stocks) {
        if(count($stocks) > self::MAX_STOCKS) throw new Exception("Can't post more than ".self::MAX_STOCKS." stocks at the same time");
        
        return $this->client->post("/products/stocks", $stocks);
    }
    
    /**
     * 
     * @param PriceList[] $prices
     */
    public function postPrices(array $prices) {
        if(count($prices) > self::MAX_PRICES) throw new Exception("Can't post more than ".self::MAX_PRICES." prices at the same time");
        
        return $this->client->post("/products/prices", $prices);
    }
    
    /**
     * 
     * @return PaginatedResponse
     */
    public function getStocks($page = 1) {
        $data = $this->client->get("/products/stocks", [$page]);
        
        $resp = new PaginatedResponse($this->client);
        $resp->hydrate($data);
        return $resp;
    }

}
