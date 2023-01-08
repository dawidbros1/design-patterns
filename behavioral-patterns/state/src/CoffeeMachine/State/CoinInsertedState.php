<?php

declare(strict_types=1);

namespace App\CoffeeMachine\State;

use App\CoffeeMachine\CoffeeMachine;

class CoinInsertedState implements State
{
   public function insertTheCoin(CoffeeMachine $coffeeMachine)
   {
      print_r("Wciśnij przycisk \n");
   }

   public function pushTheButton(CoffeeMachine $coffeeMachine)
   {
      print_r("Nalewam kawę \n");
      $coffeeMachine->state = new CupFullState();
   }

   public function takeTheCup(CoffeeMachine $coffeeMachine)
   {
      print_r("Wciśnij guzik \n");
   }

   public function returnTheCoin(CoffeeMachine $coffeeMachine)
   {
      print_r("Zwracam monetę \n");
      $coffeeMachine->state = new NoCoinState();
   }
}