<?php
  namespace Dsw\Shop;

  abstract class Services extends Elements {
    function __construct($name, $basePrice)
    {
      parent::__construct($name, $basePrice);
    }

    abstract public function toString();
  }
?>