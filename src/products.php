<?php

use Dsw\Shop\Taxes;

class Products implements Taxes {
  public $name;
  public $basePrice;
  public $tax = 0.07;
  public $weight;
  public $volume;
  public $expiredDate;
  public $manufactor;

  public function __construct($name, $basePrice, $tax, $weight, $volume, $expiredDate, $manufactor)
  {
    $this->name = $name;
    $this->basePrice = $basePrice;
    $this->tax = $tax;
    $this->weight = $weight;
    $this->volume = $volume;
    $this->expiredDate = $expiredDate;
    $this->manufactor = $manufactor;
  }

  public function shippingCost() // ($basePrice, $weight, $volume) : Float
  {
    $costWeight = ($this->weight * 0.0002);
    $costVolume = floor($this->volume/1000);
    return (2 + $costWeight + $costVolume);
  }

  public function setTax($tax)
  {
    $this->tax = $tax;
  }

  public function calculatedCost()
  {
    return ($this->basePrice * $this->tax);
  }
  public function toString() {
    echo "Producto: $this->name, Marca: $this->manufactor, Precio: " . $this->calculatedCost() . "€, Coste Envío: " . $this->shippingCost($this->basePrice, $this->weight, $this->volume) . "€\n";
}
}