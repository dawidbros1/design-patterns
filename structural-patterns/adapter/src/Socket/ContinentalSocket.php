<?php

declare(strict_types=1);

namespace App\Socket;

use App\Device\ContinentalInterface;

class ContinentalSocket
{
   public function plugIn(ContinentalInterface $device)
   {
      $device->powerOn();
   }
}