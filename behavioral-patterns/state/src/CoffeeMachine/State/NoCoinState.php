<?php

declare(strict_types=1);

namespace App\CoffeeMachine\State;

use App\CoffeeMachine\CoffeeMachine;

class NoCoinState implements State
{
   public function insertTheCoin(CoffeeMachine $coffeeMachine)
   {
      print_r("Moneta została wrzucona \n");
      $coffeeMachine->state = new CoinInsertedState();
   }

   public function pushTheButton(CoffeeMachine $coffeeMachine)
   {
      print_r("Najpierw wrzuć monetę \n");
   }

   public function takeTheCup(CoffeeMachine $coffeeMachine)
   {
      print_r("Najpierw wrzuć monetę \n");
   }

   public function returnTheCoin(CoffeeMachine $coffeeMachine)
   {
      print_r("Wrzuć monetę\n");
   }
}