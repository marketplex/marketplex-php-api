<?php
namespace Marketplex\Api\Model\Amazon\ProductData;

use JsonSerializable;

abstract class ProductDataAbstract implements JsonSerializable {
    public abstract function getName();
    
    public function jsonSerialize() {
        $data = [];
        $data['ProductCategory'] = $this->getName();
        
        foreach($this as $key=>$val) {
            $data[$key] = $val;
        }
        
        return $data;
    }
}
