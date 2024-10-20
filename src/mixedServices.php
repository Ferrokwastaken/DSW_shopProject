<?php
  namespace Dsw\Shop;
  //NOT IN USE

  interface MixedServices {
    public function registerSessions($numberSessions): int;
    public function reduceDurations($numberSessions): int;
  }
?>