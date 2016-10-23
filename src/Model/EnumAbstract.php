<?php
namespace Marketplex\Api\Model;

use InvalidArgumentException;
use JsonSerializable;
use ReflectionClass;

abstract class EnumAbstract implements JsonSerializable{
    public static function getAll() {
        $oClass = new ReflectionClass(get_called_class());
        return array_values($oClass->getConstants());
    }
    
    protected $value;
    
    public function __construct($value) {
        $value = (string)$value;
        if(!in_array($value, self::getAll())) throw new InvalidArgumentException("Inexistant ".get_called_class()." {$value}");
        $this->value = $value;
    }
    
    public function __toString() {
        return $this->value;
    }
    
    public function jsonSerialize() {
        return $this->value;
    }
}
