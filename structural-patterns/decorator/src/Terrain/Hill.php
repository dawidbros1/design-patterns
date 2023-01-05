<?php

declare(strict_types=1);

namespace App\Terrain;

class Hill extends Terrain
{
   public function __construct()
   {
      parent::__construct("Wzgórze", 30);
   }
}