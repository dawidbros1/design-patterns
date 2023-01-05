<?php

declare(strict_types=1);

namespace App\Decorator;

use App\Terrain\Terrain;

abstract class TerrainDecorator extends Terrain
{
   protected Terrain $terrain;
   public function __construct(Terrain $terrain)
   {
      parent::__construct($terrain->getDescription(), 0);
      $this->terrain = $terrain;
   }
}