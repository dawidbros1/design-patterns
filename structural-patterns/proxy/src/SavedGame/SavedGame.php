<?php

declare(strict_types=1);

namespace App\SavedGame;

interface SavedGame
{
   public function initialize();
   public function loadGame();
   public function getName();
}