<?php
  namespace Dsw\Shop;

  class Events extends Services {
    private $eventExecutionDate;

    function __construct($name, $basePrice, $eventExecutionDate)
    {
      parent::__construct($name, $basePrice);
      $this->eventExecutionDate = $eventExecutionDate;
    }

    function eventHeld($eventExecutionDate) : bool {
      //Implement code...
      return true;
    }

    function daysUntilEvent($eventExecutionDate) : int {
      //Implement code...
      return 0;
    }
  }
?>