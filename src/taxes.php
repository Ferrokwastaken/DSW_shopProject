<?php
  namespace Dsw\Shop;

  interface Taxes {
    public function setTax($tax);
    public function calculatedCost($tax, $basePrice);
    //
  }
?>