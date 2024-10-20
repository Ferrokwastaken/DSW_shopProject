<?php
class perishableProducts extends Products {
    private $expiredDate;

    public function __construct($name, $basePrice, $manufactor, $weight, $volume, $expiredDate) {
        parent::__construct($name, $basePrice, $manufactor, $weight, $volume);
        $this->expiredDate = new DateTime($expiredDate);
    }

    public function calculatedDiscount() {
        $today = new DateTime();
        $interval = $today->diff($this->expiredDate)->days;

        if ($interval <= 10) {
            return 0.25; 
        } elseif ($interval <= 30) {
            return 0.10; 
        }
        return 0;
    }

    public function getFinalPrice() {
        $discount = $this->calculatedDiscount();
        $finalPrice = parent::getFinalPrice();
        return round($finalPrice * (1 - $discount), 2);
    }

    public function toString() {
        $expired = (new DateTime() > $this->expiredDate) ? "Caducado" : "Válido";
        echo "Producto Perecedero: $this->name, Marca: $this->manufactor, Precio: " . $this->getFinalPrice() . "€, Envío: " . $this->shippingCost() . "€, Estado: $expired\n";
    }
}
?>
