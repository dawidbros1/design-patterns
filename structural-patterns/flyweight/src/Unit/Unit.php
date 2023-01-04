<?php

declare(strict_types=1);

namespace App\Unit;

use App\UnitStats\UnitStats;

abstract class Unit
{
   protected int $hp;
   protected int $x, $y;
   protected UnitStats $stats;

   public function __construct(int $x, int $y, int $hp)
   {
      $this->x = $x;
      $this->y = $y;
      $this->hp = $hp;
   }

   public function getStats()
   {
      return $this->stats;
   }

   public function getHp()
   {
      return $this->hp;
   }

   public function setHp($hp)
   {
      $this->hp = $hp;
   }

   public function getX()
   {
      return $this->x;
   }

   public function setX($x)
   {
      $this->x = $x;
   }

   public function getY()
   {
      return $this->y;
   }

   public function setY($y)
   {
      $this->y = $y;
   }
}