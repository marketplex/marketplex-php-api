<?php

namespace Marketplex\Api\Model;

class CarrierEnum extends EnumAbstract {
    const LA_POSTE = "La Poste";
    const CHRONOPOST = "Chronopost";
    const COLISSIMO = "Colissimo";
    const DHL_FRANCE = "DHL France";
    const GLS = "GLS";
    const COLIS_PRIVE = "Colis Privé";
    const DPD = "DPD";
    const MONDIAL_RELAY = "Mondial Relay";
    const TNT = "TNT";
    const UPS = "UPS";
    const FEDEX = "Fedex";
    const TATEX = "Tatex";
    const FRANCE_EXPRESS = "France Express";
    const KIALA = "Kiala";
    const EXAPAQ = "Exapaq";
    const BPOST = "Bpost";
    const ROYAL_MAIL = "Royal Mail";
    const CORREOS = "Correos";
    const CIBLEX = "Ciblex";
    
    // Custom values authorized
    public function __construct($name) {
        $this->value = $name;
    }
}
