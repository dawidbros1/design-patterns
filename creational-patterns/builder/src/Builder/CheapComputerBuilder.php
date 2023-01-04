<?php

declare(strict_types=1);

namespace App\Builder;

use App\Component\Cpu;
use App\Component\GraphicsCard;
use App\Component\Ram;
use App\Component\Storage;

class CheapComputerBuilder extends ComputerBuilder
{
   public function __construct()
   {
      $this->setCpu(new Cpu('Intel Pentium'));
      $this->setRam(new Ram('4GB DDR4'));
      $this->setStorage(new Storage('500GB HDD', ''));
      $this->setGraphicsCard(new GraphicsCard('GeForce GTX 1050'));
      $this->setDescription("Wygląda na tani");
   }
}