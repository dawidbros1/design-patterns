<?php

declare(strict_types=1);

namespace App\CoffeeMachine\State;

use App\CoffeeMachine\CoffeeMachine;

class CupFullState implements State
{
   public function insertTheCoin(CoffeeMachine $coffeeMachine)
   {
      print_r("Zabierz kubek \n");
   }

   public function pushTheButton(CoffeeMachine $coffeeMachine)
   {
      print_r("Zabierz najpierw kubek \n");
   }

   public function takeTheCup(CoffeeMachine $coffeeMachine)
   {
      print_r("Zabrano kubek \n");
      $coffeeMachine->state = new NoCoinState();
   }

   public function returnTheCoin(CoffeeMachine $coffeeMachine)
   {
      print_r("Za póżno \n");
   }
}