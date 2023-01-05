<?php

declare(strict_types=1);

namespace App\Device;

class ContinentalDevide implements ContinentalInterface
{
   public function powerOn()
   {
      print_r("Music on ContinentalDevice\n");
   }
}