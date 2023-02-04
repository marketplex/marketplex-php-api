<?php

namespace Marketplex\Api\Model\Product;

class Book extends ProductAbstract {
  const BINDING_HARDCOVER = "Hardcover"; // Couverture rigide (Cartonné, relié)
  const BINDING_SOFTCOVER = "Softcover"; // Couverture souple (Broché, poche)
  const BINDING_NONE = "None"; // Pas de couverture
  
  public function getCategory() {
    return new Category(Category::BOOK);
  }

  /**
   * @var string
   */
  public $publisher;

  /**
   * @var int
   */
  public $publishYear;

  /**
   * @var string
   */
  public $author;

  /**
   * @var string
   */
  public $binding;
}
