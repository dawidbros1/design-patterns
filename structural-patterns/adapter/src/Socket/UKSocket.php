<?php

declare(strict_types=1);

namespace App\Socket;

use App\Device\UKInterface;

class UKSocket
{
   public function plugIn(UKInterface $device)
   {
      $device->on();
   }
}