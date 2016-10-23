<?php

namespace Marketplex\Api\Model;

class Order extends ModelAbstract {
    /**
     * @var int
     */
    public $marketplexId;
    
    /**
     * @var OrderStatusEnum
     */
    public $status;
    
    /**
     * @var MarketplaceEnum
     */
    public $marketplace;
    
    /**
     * @var string
     */
    public $marketplaceId;
    
    /**
     * @var ShippingMethodEnum
     */
    public $shippingMethod;
    
    /**
     * Total amount paid by customer (includes everything from tax, insurance, shipping, gift wrap, etc..)
     * @var float
     */
    public $totalAmount;
    
    /**
     * @var string
     */
    public $currency;
    
    /**
     * @var string
     */
    public $buyeremail;
    
    /**
     * @var Address
     */
    public $billingAddress;
    
    /**
     * @var Address
     */
    public $shippingAddress;
    
    /**
     *
     * @var string
     */
    public $dateUpdate;
    
    /**
     *
     * @var string
     */
    public $datePurchase;
    
    /**
     *
     * @var string
     */
    public $datePayment;
    
    /**
     *
     * @var string
     */
    public $dateShipping;
    
    /**
     * @var string
     */
    public $trackingUrl;
    
    /**
     * @var string
     */
    public $carrier;
    
    /**
     * @var string
     */
    public $carrierService;
    
    /**
     *
     * @var OrderItem[]
     */
    public $items;
}
