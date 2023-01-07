<?php

declare(strict_types=1);

namespace App\Command\CoffeeMaker;

use App\Command\Command;
use App\WorkShop\CoffeeMaker;

class CoffeeMakerTurnOffCommand implements Command
{
   private CoffeeMaker $coffeeMaker;

   public function __construct(CoffeeMaker $coffeeMaker)
   {
      $this->coffeeMaker = $coffeeMaker;
   }

   public function execute()
   {
      $this->coffeeMaker->turnOn();
   }

   public function undo()
   {
      $this->coffeeMaker->turnOff();
   }
}