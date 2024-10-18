<?php
  namespace Dsw\Shop;

  class Services implements Taxes {
    private $name;
    private $basePrice;
    private $tax = 0.07;

    function __construct($name, $basePrice)
    {
      $this->name = $name;
      $this->basePrice = $basePrice;
    }

    function setTax($tax) {
      if ($tax > 0) {
        $this->tax = $tax;
      }
    }

    function calculatedCost($tax, $basePrice) {
      return $this->basePrice * $this->tax;
    }

    public function __toString()
    {
      return "Nombre del servicio: " . $this->name . " precio: " . $this->calculatedCost($this->tax, $this->basePrice);
    }
  }
?>