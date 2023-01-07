<?php

declare(strict_types=1);

namespace App\Chef\EggCooker;

class SoftBoiledEggCooker implements EggCooker
{
   public function cookEgg()
   {
      print_r("Gotuję jajka na miękko \n");
   }
}