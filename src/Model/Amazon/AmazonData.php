<?php

namespace Marketplex\Api\Model\Amazon;

use Marketplex\Api\Model\Amazon\ProductData\ProductDataAbstract;
use Marketplex\Api\Model\ModelAbstract;

class AmazonData extends ModelAbstract {
    /**
     * @var ProductDataAbstract
     */
    public $product_data = null;
    
    public $Brand;
    public $Designer;
    public $Description;
    public $Manufacturer;
    public $RecommendedBrowseNode;
}
