<?php
namespace Marketplex\Api\Model;

class ShippingMethodEnum extends EnumAbstract {
    const STANDARD = "Standard";
    const EXPRESS = "Express";
    
    // Amazon Fulfillment Network (FBA - Fulfilled By Amazon)
    const AFN_STANDARD = "AFN Standard";
    const AFN_EXPRESS = "AFN Express";
}
