<?php
  namespace Dsw\Shop;

  interface MixedServices {
    public function registerSessions($numberSessions): int;
    public function reduceDurations($numberSessions): int;
  }
?>