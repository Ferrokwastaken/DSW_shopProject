<?php

class Products extends Element {
  public $weight;
  public $volume;
  public $manufactor;

  public function __construct($name, $basePrice, $weight, $volume, $manufactor)
  {
    parent::__construct($name, $basePrice);
    $this->weight = $weight;
    $this->volume = $volume;
    $this->manufactor = $manufactor;
  }

  public function shippingCost() // ($basePrice, $weight, $volume) : Float
  {
    $costWeight = ($this->weight * 0.0002);
    $costVolume = floor($this->volume/1000);
    return round(2 + $costWeight + $costVolume, 2);
  }

  public function toString() {
    echo "Producto: $this->name, Marca: $this->manufactor, Precio: " . $this->getFinalPrice() . "€, Coste Envío: " . $this->shippingCost() . "€\n";
}
}
?>
