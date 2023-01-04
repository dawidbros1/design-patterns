<?php

declare(strict_types=1);

namespace App\Unit;

use App\UnitStats\UnitStats;
use App\UnitStats\UnitStatsRepository;

class Soldier extends Unit
{
   public function __construct(int $x, int $y)
   {
      $this->stats = UnitStatsRepository::getSoldierStats();
      parent::__construct($x, $y, $this->stats->getMaxHp());
   }
}