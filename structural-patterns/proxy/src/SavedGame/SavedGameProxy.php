<?php

declare(strict_types=1);

namespace App\SavedGame;

class SavedGameProxy implements SavedGame
{
   private string $name;
   private SavedGame $sg; // SavedGameFull

   public function initialize()
   {
      $this->name = "Save Game - " . rand(1, 10000);
   }

   public function loadGame()
   {
      $this->sg = new SavedGameFull();
      $this->sg->initialize();
      $this->sg->loadGame();
   }

   public function getName()
   {
      return $this->name;
   }
}