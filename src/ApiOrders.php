<?php
namespace Marketplex\Api;

use DateTime;
use Exception;
use Marketplex\Api\Model\Order;
use Marketplex\Api\Model\OrderShipment;
use Marketplex\Api\Response\OrderUpdateResponse;
use Marketplex\Api\Response\PaginatedResponse;

class ApiOrders extends ApiAbstract {
    const MAX_ORDERS = 100;
    
    /**
     * @param OrderShipment[] $shipments
     * @return OrderUpdateResponse[]
     */
    public function postOrderShipments(array $shipments) {
        if(count($shipments) > self::MAX_ORDERS) throw new Exception("Can't post more than ".self::MAX_ORDERS." order shipments at the same time");
        
        return $this->client->post("/orders/ship", $shipments);
    }
    
    /**
     * Retourne les commandes modifiées après la date $after 
     * @param DateTime $after 
     * @param DateTime $notafter
     * @param int $page
     * @return PaginatedResponse
     */
    public function findOrdersUpdatedAfter(DateTime $after) {
        $data = $this->client->get("/orders/find", [
            "updatedAfter" => $after->format(DateTime::ISO8601)
        ]);
        
        $resp = new PaginatedResponse($this->client);
        $resp->hydrate($data);
        return $resp;
    }
    
    /**
     * 
     * @param int $orderid
     * @return Order
     */
    public function getOrder($orderid) {
        $order = new Order();
        return $order;
    }
}
