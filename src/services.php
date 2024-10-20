<?php
  namespace Dsw\Shop;

  use Element;

  class Services extends Element {

    function __construct($name, $basePrice)
    {
      parent::__construct($name, $basePrice);
    }
     
    public function toString() {
      echo 'Nombre del servicio: ' . $this->name . ' precio: ' . $this->getFinalPrice() . '€ \n';
    }
  }
?>