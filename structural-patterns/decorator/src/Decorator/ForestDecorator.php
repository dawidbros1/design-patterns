<?php

declare(strict_types=1);

namespace App\Decorator;

use App\Terrain\Terrain;

class ForestDecorator extends TerrainDecorator
{
   public function __construct(Terrain $terrain)
   {
      parent::__construct($terrain);
   }

   #Override
   public function fuelCost(): int
   {
      return $this->terrain->fuelCost() + 5;
   }

   public function getDescription(): string
   {
      return "Zalesiałe " . strtolower($this->terrain->getDescription());
   }
}