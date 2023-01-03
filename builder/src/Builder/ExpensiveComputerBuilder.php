<?php

declare(strict_types=1);

namespace App\Builder;

use App\Component\Cpu;
use App\Component\GraphicsCard;
use App\Component\Ram;
use App\Component\Storage;

class ExpensiveComputerBuilder extends ComputerBuilder
{
   public function __construct()
   {
      $this->setCpu(new Cpu('Intel Core i9'));
      $this->setRam(new Ram('32GB DDR4'));
      $this->setStorage(new Storage('2TB HDD', '1TB SSD'));
      $this->setGraphicsCard(new GraphicsCard('GeForce RTX 3080'));
      $this->setDescription("Ale drogie cacuszko");
   }
}