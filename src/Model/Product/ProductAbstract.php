<?php

namespace Marketplex\Api\Model\Product;

use Marketplex\Api\Model\ModelAbstract;

abstract class ProductAbstract extends ModelAbstract {
    const CONDITION_NEW = 1;
    const CONDITION_USED_LIKE_NEW = 2;
    const CONDITION_USED_VERY_GOOD = 3;
    const CONDITION_USED_GOOD = 4;
    const CONDITION_USED_ACCEPTABLE = 5;
    
    const IDENTIFIER_ASIN = 'ASIN';
    const IDENTIFIER_UPC = 'UPC';
    const IDENTIFIER_EAN = 'EAN';
    const IDENTIFIER_ISBN = 'ISBN';
    
    const LOCALE_ALL = "all";
    const LOCALE_FR = "fr";
    const LOCALE_EN = "en";
    const LOCALE_DE = "de";
    const LOCALE_IT = "it";
    const LOCALE_ES = "es";
    const LOCALE_NL = "nl";
    
    const CURRENCY_EUR = "EUR";
    const CURRENCY_GBP = "GBP";
    const CURRENCY_USD = "USD";
    const CURRENCY_CAD = "CAD";
    
    const IMAGE_MAIN = "image_main";
    const IMAGE_OFFER = "image_offer";
    const IMAGE_IMAGE1 = "image1";
    const IMAGE_IMAGE2 = "image2";
    const IMAGE_IMAGE3 = "image3";
    const IMAGE_IMAGE4 = "image4";
    const IMAGE_IMAGE5 = "image5";
    const IMAGE_IMAGE6 = "image6";
    
    public function __construct($sku) {
        $this->sku = $sku;
        $this->category = $this->getCategory();
    }
    
    /**
     * @return Category
     */
    abstract public function getCategory();
    
    /**
     * @var string
     */
    protected $category;
    
    /**
     *
     * @var string
     */
    public $sku;
    
    /**
     *
     * @var int
     */
    public $condition;
    
    /**
     *
     * @var float
     */
    public $quantity;
    
    /**
     * @var float[] Indexed by currency
     */
    public $prices = [];
    
    /**
     * @var string[] Indexed by identifier
     */
    public $identifiers = [];
    
    /**
     *
     * @var string[] Indexed by locale
     */
    public $titles = [];
    
    /**
     *
     * @var string[] Indexed by locale
     */
    public $comments = [];
    
    /**
     *
     * @var string[] Indexed by image type
     */
    public $images = [];
}
