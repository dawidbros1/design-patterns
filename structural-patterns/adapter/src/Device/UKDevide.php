<?php

declare(strict_types=1);

namespace App\Device;

class UKDevide implements UKInterface
{
   public function on()
   {
      print_r("Music on UKDevice\n");
   }
}