<?php
namespace Marketplex\Api\Model\Amazon\ProductData;

class Books extends ProductDataAbstract {
    public $Author;
    public $Binding;
    public $Edition;
    public $Language;
    
    public function getName() {
        return "Books";
    }
}
