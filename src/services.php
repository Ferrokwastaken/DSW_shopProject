<?php
  namespace Dsw\Shop;

  class Services implements Taxes {
    private $name;
    private $basePrice;
    private $tax;

    function __construct($name, $basePrice, $tax)
    {
      $this->name = $name;
      $this->basePrice = $basePrice;
      $this->tax = $tax;
    }

    function setTax($tax) {
      if ($tax > 0) {
        $this->tax = $tax;
      }
    }

    function calculatedCost($tax, $basePrice) {
      //Code...
    }
  }
?>