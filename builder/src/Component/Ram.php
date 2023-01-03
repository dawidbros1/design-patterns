<?php

declare(strict_types=1);

namespace App\Component;

class Ram
{
   private $capacity;

   public function __construct(string $capacity)
   {
      $this->capacity = $capacity;
   }

   public function getCapacity(): string
   {
      return $this->capacity;
   }
}