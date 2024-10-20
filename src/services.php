<?php
  namespace Dsw\Shop;

  class Services extends Elements {
    private $name;
    private $basePrice;
    private $tax = 0.07;

    function __construct($name, $basePrice)
    {
      $this->name = $name;
      $this->basePrice = $basePrice;
    }
     
    abstract public function toString();
  }
?>