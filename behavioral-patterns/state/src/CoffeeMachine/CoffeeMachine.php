<?php

declare(strict_types=1);

namespace App\CoffeeMachine;

use App\CoffeeMachine\State\NoCoinState;
use App\CoffeeMachine\State\State;

class CoffeeMachine
{
   public State $state;

   public function __construct()
   {
      $this->state = new NoCoinState();
   }

   public function insertTheCoin()
   {
      $this->state->insertTheCoin($this);
   }

   public function pushTheButton()
   {
      $this->state->pushTheButton($this);
   }

   public function takeTheCup()
   {
      $this->state->takeTheCup($this);
   }

   public function returnTheCoin()
   {
      $this->state->returnTheCoin($this);
   }
}