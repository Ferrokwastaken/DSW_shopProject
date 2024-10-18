<?php
class Products {
  public $name;
  public $basePrice;
  public $tax;
  public $weight;
  public $volume;
  public $expiredDate;
  public $manufactor;

  public function __construct($name, $basePrice, $tax, $weight, $volume, $expiredDate, $manufactor)
  {
    $this->name = $name;
    $this->basePrice = $basePrice;
    $this->weight = $weight;
    $this->volume = $volume;
    $this->expiredDate = $expiredDate;
    $this->manufactor = $manufactor;
  }

  public function shippingCost($basePrice, $weight, $volume) : Float 
  {
    $costWeight = ($this->weight * 0.0002);
    $costVolume = floor($this->volume/1000);
    return (2 + $costWeight + $costWeight);
  }


  public function toString() {
    echo "Producto: $this->name, Marca: $this->manufactor, Precio: "  . "€, Coste Envío: " . $this->shippingCost($this->basePrice, $this->weight, $this->volume) . "€\n";
}
}