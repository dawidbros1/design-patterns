<?php

declare(strict_types=1);

namespace App\SmartApp;

class SmartApp
{
   private float $version;

   public function changeVersion(float $version)
   {
      $this->version = $version;
      print_r("Nowa wersja to: " . $version . "\n");
   }

   public function save(): SmartAppMemento
   {
      return new SmartAppMemento($this->version);
   }

   public function load(SmartAppMemento $smartAppMemento)
   {
      $this->version = $smartAppMemento->getVersion();
   }
}