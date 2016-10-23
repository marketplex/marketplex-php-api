<?php
namespace Marketplex\Api\Model;

class OrderStatusEnum extends EnumAbstract {
    const UNSHIPPED         = "UNISHIPPED";
    const SHIPPED           = "SHIPPED";
    const PARTIALLY_SHIPPED = "PARTIALLY_SHIPPED";
    const PENDING           = "PENDING";
    const CANCELLED         = "CANCELLED";
}
