<?php

declare(strict_types=1);

namespace App\WorkShop;

class Robot
{
   public function turnOn()
   {
      print_r("Robot został włączony\n");
   }

   public function cut()
   {
      print_r("Robot tnie\n");
   }

   public function drill()
   {
      print_r("Robot wierci\n");
   }

   public function turnOff()
   {
      print_r("Robot wyłączony\n");
   }
}