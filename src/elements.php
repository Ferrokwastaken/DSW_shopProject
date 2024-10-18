<?php
abstract class Element {
    protected $name;
    protected $basePrice;
    protected static $tax = 0.07; // Prueba de rama en casa

    public function __construct($name, $basePrice) {
        $this->name = $name;
        $this->basePrice = $basePrice;
    }

    public static function modifyTax($newTax) {
        self::$tax = $newTax;
    }

    public function getFinalPrice() {
        return ($this->basePrice * $this->tax);
    }

    abstract public function tostring();
}
