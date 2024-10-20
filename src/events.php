<?php
  namespace Dsw\Shop;

  use DateTime;

  class Events extends Services {
    private $eventExecutionDate;

    function __construct($name, $basePrice, $eventExecutionDate)
    {
      parent::__construct($name, $basePrice);
      $this->eventExecutionDate = new DateTime($eventExecutionDate);
    }

    public function getFinalPrice() {
      $today = new DateTime();
      $difference = $today->diff($this->eventExecutionDate)->days;

      if ($difference <= 1) {
          return round($this->basePrice * 1.50, 2); 
      } elseif ($difference <= 7) {
          return round($this->basePrice * 1.20, 2); 
      }

      return parent::getFinalPrice();
  }

    public function toString() {
      $state= (new DateTime() > $this->eventExecutionDate) ? "Ya ocurrió" : "Próximo";
        echo "Evento: $this->name, Precio: " . $this->getFinalPrice() . "€, Estado: $state\n<br>";
    }
  }
?>