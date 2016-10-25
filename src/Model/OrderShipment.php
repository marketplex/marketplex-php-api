<?php
namespace Marketplex\Api\Model;

use DateTime;

class OrderShipment extends ModelAbstract
{   
    /**
     * Marketplex Order ID
     * @var int
     */
    public $orderId;
    
    /**
     * Carrier company that deliver the shipment
     * @var CarrierEnum
     */
    public $carrier;
    
    /**
     * Name of the delivery service used to deliver the shipment
     * @var string
     */
    public $carrierService;
    
    /**
     * Tracking number for the shipment
     * For Kiala, you need to specify "tracking_number/seller_id" as tracking number
     * @var string
     */
    public $trackingNumber;
    
    /**
     * Not needed if carrier is chosen in the list
     * @var string
     */
    public $trackingUrl;
    
    /**
     * @var \DateTime;
     */
    public $shippingDate;
    
    public function __construct() {
        $this->shippingDate = new DateTime();
    }



}