<?php

declare(strict_types=1);

namespace App\Command\Robot;

use App\Command\Command;
use App\WorkShop\Robot;

class RobotTurnOffCommand implements Command
{
   private Robot $robot;

   public function __construct(Robot $robot)
   {
      $this->robot = $robot;
   }

   public function execute()
   {
      $this->robot->turnOff();
   }

   public function undo()
   {
      $this->robot->turnOn();
   }
}