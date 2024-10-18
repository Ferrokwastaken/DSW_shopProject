<?php
  namespace Dsw\Shop;

  class Sessions extends Services implements MixedServices {
    private $numberSessions;

    function __construct($name, $basePrice, $numberSessions)
    {
      parent::__construct($name, $basePrice);
      $this->numberSessions = $numberSessions;
    }

    function registerSessions($numberSessions) : int
    {
      //Code...
      return 0;
    }

    function reduceDurations($numberSessions): int
    {
      //Code...
      return 0;
    }
  }
?>