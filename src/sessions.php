<?php
  namespace Dsw\Shop;

  class Sessions extends Services {
    private $totalSessions;
    private $remainingSessiones;

    function __construct($name, $basePrice, $totalSessions)
    {
      parent::__construct($name, $basePrice);
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
      echo "Sesión: $this->name, Precio por sesión: " . round($this->basePrice / $this->totalSessions, 2) . "€, Sesiones restantes: $this->remainingSessiones\n<br>";
  }
  }
?>