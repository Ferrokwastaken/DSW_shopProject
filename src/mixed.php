<?php
  namespace Dsw\Shop;

  use DateTime;

  class MixedServices extends Events {
    private $totalSessions;
    private $remainingSessiones;

    function __construct($name, $basePrice, $eventExecutionDate, $totalSessions)
    {
      parent::__construct($name, $basePrice, $eventExecutionDate);
      $this->totalSessions = $totalSessions;
      $this->remainingSessiones = $totalSessions;
    }

    public function ConsumingSession() {
      if ($this->remainingSessiones > 0) {
        $this->remainingSessiones--;
    } else {
        echo "No quedan sesiones disponibles.\n";
    }
    }

    public function toString() {
      parent::toString();
      echo "Sesiones restantes: $this->remainingSessiones de $this->totalSessions\n";
    }

    public function isSaleable() {
      $today = new DateTime();
        return ($this->remainingSessiones > 0 && $today <= new DateTime($this->eventExecutionDate));
    }
  }
?>