<?php

namespace Marketplex\Api\Model;

class Marketplace {
  /**
   * @var string
   */
  public $name;
  
  /**
   * 
   * @var bool
   */
  public $active;
  
  /**
   * 2-letters locale
   * @var string
   */
  public $locale;
  
  /**
   * @var string
   */
  public $currency;
  
  /**
   * @var MarketplaceConfiguration
   */
  public $configuration;
}
