<?php
  namespace Dsw\Shop;
  //NOT IN USE

  interface Taxes {
    public function setTax($tax);
    public function calculatedCost($tax, $basePrice);
  }
?>