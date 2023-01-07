<?php

declare(strict_types=1);

namespace App\Chef\EggCooker;

class HardBoiledEggCooker implements EggCooker
{
   public function cookEgg()
   {
      print_r("Gotuję jajka na twardo \n");
   }
}