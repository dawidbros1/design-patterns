<?php

declare(strict_types=1);

namespace App\SmartApp;

class SmartAppMemento
{
   private float $version;

   public function __construct(float $version)
   {
      $this->version = $version;
   }

   public function getVersion()
   {
      return $this->version;
   }
}