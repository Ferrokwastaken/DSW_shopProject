<?php
  namespace Dsw\Shop;

  class NormalService extends Services {
    function __construct($name, $basePrice)
    {
      parent::__construct($name, $basePrice);
    }

    public function toString() {
      echo "Servicio Normal: $this->name, Precio: " . $this->getFinalPrice() . "€\n<br>";
    }
  }
?>