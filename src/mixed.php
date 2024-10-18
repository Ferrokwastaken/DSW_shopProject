<?php
  namespace Dsw\Shop;

  class MixedShop extends Events implements MixedServices {
    function __construct($name, $basePrice, $eventExecutionDate)
    {
      parent::__construct($name, $basePrice, $eventExecutionDate);
    }

    function registerSessions($numberSessions): int
    {
      return 0;
    }

    function reduceDurations($numberSessions): int
    {
      return 0;
    }
  }
?>