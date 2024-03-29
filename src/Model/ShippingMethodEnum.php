<?php
namespace Marketplex\Api\Model;

class ShippingMethodEnum extends EnumAbstract {
    const STANDARD = "Standard";
    const EXPRESS = "Express";
    const TRACKED = "Tracked";
    const REGISTERED = "Registered";
        
    // Amazon Fulfillment Network (FBA - Fulfilled By Amazon)
    const AFN_STANDARD = "AFN Standard";
    const AFN_EXPRESS = "AFN Express";
    
    // Amazon Merchant Fullfillment (FBM - Fullfilled By Merchant)
    const SECOND_DAY        = "SecondDay";
    const SAME_DAY          = "SameDay";
    const NEXT_DAY          = "NextDay";
    
    // PICKUP DELIVERY
    const MONDIAL_RELAY = "Mondial Relay";
    
    // Prepaid methods (Rakuten)
    const PREPAID_MONDIALRELAY = "Mondial Relay Prepaid";
    const PREPAID_SOCOLISSIMO = "SO Colissimo Prepaid";
    const PREPAID_CHRONOPOST = "Chronopost Prepaid";
}
