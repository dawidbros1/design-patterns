<?php

declare(strict_types=1);

namespace App\Adapter;

use App\Device\ContinentalInterface;
use App\Device\Device;
use App\Device\UKDevide;

class UKToContinentalAdapter implements ContinentalInterface
{
   private UKDevide $device;

   public function __construct(UKDevide $device)
   {
      $this->device = $device;
   }

   public function powerOn()
   {
      $this->device->on();
   }
}