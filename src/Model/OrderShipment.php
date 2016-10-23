<?php
namespace Marketplex\Api\Model;

use DateTime;

class OrderShipment extends ModelAbstract
{
    const CARRIER_LA_POSTE = "La Poste";
    const CARRIER_CHRONOPOST = "Chronopost";
    const CARRIER_COLISSIMO = "Colissimo";
    const CARRIER_DHL_FRANCE = "DHL France";
    const CARRIER_GLS = "GLS";
    const CARRIER_COLIS_PRIVÉ = "Colis Privé";
    const CARRIER_DPD = "DPD";
    const CARRIER_MONDIAL_RELAY = "Mondial Relay";
    const CARRIER_TNT = "TNT";
    const CARRIER_UPS = "UPS";
    const CARRIER_FEDEX = "Fedex";
    const CARRIER_TATEX = "Tatex";
    const CARRIER_FRANCE_EXPRESS = "France Express";
    const CARRIER_KIALA = "Kiala";
    const CARRIER_EXAPAQ = "Exapaq";
    const CARRIER_BPOST = "Bpost";
    const CARRIER_ROYAL_MAIL = "Royal Mail";
    const CARRIER_CORREOS = "Correos";
    const CARRIER_CIBLEX = "Ciblex";
    
    /**
     * Marketplex Order ID
     * @var int
     */
    public $orderId;
    
    /**
     * Carrier company that deliver the shipment
     * @var string
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