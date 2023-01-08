<?php

declare(strict_types=1);

namespace App\CoffeeMachine\State;

use App\CoffeeMachine\CoffeeMachine;

interface State
{
   public function insertTheCoin(CoffeeMachine $coffeeMachine);
   public function pushTheButton(CoffeeMachine $coffeeMachine);
   public function takeTheCup(CoffeeMachine $coffeeMachine);
   public function returnTheCoin(CoffeeMachine $coffeeMachine);
}