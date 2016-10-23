<?php

use Marketplex\Api\Model\EnumAbstract;

namespace Marketplex\Api\Response;

class ProductUpdateResponseTypeEnum extends EnumAbstract {
    const INEXISTANT = "INEXISTANT";
    const UPDATED    = "UPDATED";
    const NOCHANGE   = "NOCHANGE";
    const INSERTED   = "INSERTED";
    const ERROR      = "ERROR";
}
