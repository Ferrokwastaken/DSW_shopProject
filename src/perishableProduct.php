<?php
class perishableProducts extends Products {
    private $ExpiredDate;

    public function __construct($name, $basePrice, $manufactor, $weight, $volume, $ExpiredDate) {
        parent::__construct($name, $basePrice, $manufactor, $weight, $volume);
        $this->ExpiredDate = new DateTime($ExpiredDate);
    }

    public function calculatedDiscount() {
        $today = new DateTime();
        $interval = $today->diff($this->ExpiredDate)->days;

        if ($interval <= 10) {
            return 0.25; // 25% de descuento
        } elseif ($interval <= 30) {
            return 0.10; // 10% de descuento
        }
        return 0;
    }

    public function getFinalPrice() {
        $discount = $this->calculatedDiscount();
        $finalPrice = parent::getFinalPrice();
        return round($finalPrice * (1 - $discount), 2);
    }

    public function toString() {
        $expired = (new DateTime() > $this->ExpiredDate) ? "Caducado" : "Válido";
        echo "Producto Perecedero: $this->name, Marca: $this->manufactor, Precio: " . $this->getFinalPrice() . "€, Envío: " . $this->shippingCost() . "€, Estado: $expired\n";
    }
}
