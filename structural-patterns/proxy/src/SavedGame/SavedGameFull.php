<?php

declare(strict_types=1);

namespace App\SavedGame;

class SavedGameFull implements SavedGame
{
   private string $name;
   private string $gameData;

   public function initialize()
   {
      $this->name = "Save Game - " . rand(1, 10000);
      $this->gameData = $this->loadFromStorage();
   }

   public function loadGame()
   {
      print_r("Gra zostałą załadowana \n");
   }

   private function loadFromStorage()
   {
      usleep(500 * 1000);
      return "Informacje o grze \n";
   }

   public function getName()
   {
      return $this->name;
   }
}