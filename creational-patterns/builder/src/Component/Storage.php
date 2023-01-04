<?php

declare(strict_types=1);

namespace App\Component;

class Storage
{
   private $hddCapacity;
   private $ssdCapacity;

   public function __construct(string $hddCapacity, string $ssdCapacity)
   {
      $this->hddCapacity = $hddCapacity;
      $this->ssdCapacity = $ssdCapacity;
   }

   public function getHddCapacity(): string
   {
      return $this->hddCapacity;
   }

   public function getSsdCapacity(): string
   {
      return $this->ssdCapacity;
   }
}