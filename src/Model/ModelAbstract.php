<?php

namespace Marketplex\Api\Model;

use JsonSerializable;

abstract class ModelAbstract implements JsonSerializable {
    public function jsonSerialize() {
        $data = [];
        foreach($this as $key=>$val) {
            if($val instanceof \DateTime) {
                $data[$key] = $val->format(DateTime::ISO8601);
            } else {
                $data[$key] = $val;
            }
        }
        return $data;
    }
}
