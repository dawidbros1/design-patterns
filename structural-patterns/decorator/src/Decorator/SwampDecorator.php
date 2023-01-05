<?php

declare(strict_types=1);

namespace App\Decorator;

use App\Terrain\Terrain;

class SwampDecorator extends TerrainDecorator
{
   public function __construct(Terrain $terrain)
   {
      parent::__construct($terrain);
   }

   #Override
   public function fuelCost(): int
   {
      return $this->terrain->fuelCost() + 15;
   }

   #Override
   public function getDescription(): string
   {
      return "Bagniste " . strtolower($this->terrain->getDescription());
   }
}