<?php
namespace Marketplex\Api\Model;

class OrderStatusEnum extends EnumAbstract {
    const UNSHIPPED           = "UNSHIPPED";
    const SHIPPED             = "SHIPPED";
    const PARTIALLY_SHIPPED   = "PARTIALLY_SHIPPED";
    const PENDING             = "PENDING";
    const PENDING_ACCEPTATION = "PENDING_ACCEPTATION";
    const CANCELLED           = "CANCELLED";
}
