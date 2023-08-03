<?php

namespace Marketplex\Api\Model\Product;

use DateTime;

class Movie extends ProductAbstract {   
  public function getCategory() {
    return new Category(Category::MOVIE);
  }
  
  /**
   * @var MovieTypeEnum
   */
  public $discType;
  
  /**
   * @var MovieRegionEnum
   */
  public $region;
  
  /**
   * @var string
   */
  public $studio;
  
  /**
   * @var string
   */
  public $director;
  
  /**
   * @var string
   */
  public $format;
  
  /**
   * @var string
   */
  public $edition;
  
  /**
   * @var DateTime
   */
  public $releaseDate;
  
  /**
   * @var DateTime
   */
  public $theatreDate;
}
