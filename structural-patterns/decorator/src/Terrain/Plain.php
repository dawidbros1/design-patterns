<?php

declare(strict_types=1);

namespace App\Terrain;

class Plain extends Terrain
{
   public function __construct()
   {
      parent::__construct("Równina", 13);
   }
}