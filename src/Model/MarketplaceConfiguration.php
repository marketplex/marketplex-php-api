<?php

namespace Marketplex\Api\Model;

class MarketplaceConfiguration {
  /**
   * Amount to add to product prices for this marketplace
   * @var float
   */
  public $priceAdd = 0;
  
  /**
   * Multiplier to apply to product prices for this marketplace
   * @var float
   */
  public $priceMultiplier = 1;
  
  /**
   * Smallest product price that can be published on this marketplace
   * Price  of products cheaper than this will be raised to the specified value
   * @var float
   */
  public $priceFloor = 0;
}
