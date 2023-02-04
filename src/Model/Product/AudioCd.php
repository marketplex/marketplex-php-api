<?php

namespace Marketplex\Api\Model\Product;

class AudioCd extends ProductAbstract {
  public function getCategory() {
    return new Category(Category::AUDIO_CD);
  }

  /**
   * @var string
   */
  public $artist;
  
  /**
   * @var string
   */
  public $label;
}
