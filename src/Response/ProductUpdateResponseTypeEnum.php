<?php
namespace Marketplex\Api\Response;

use Marketplex\Api\Model\EnumAbstract;

class ProductUpdateResponseTypeEnum extends EnumAbstract {
    const INEXISTANT = "INEXISTANT";
    const UPDATED    = "UPDATED";
    const NOCHANGE   = "NOCHANGE";
    const INSERTED   = "INSERTED";
    const ERROR      = "ERROR";
}
