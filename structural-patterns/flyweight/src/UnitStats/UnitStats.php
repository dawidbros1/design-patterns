<?php

declare(strict_types=1);

namespace App\UnitStats;

class UnitStats
{
   protected $maxHp;
   protected $speed;
   protected $dmg;
   protected $cost;

   public function __construct(int $maxHp, int $speed, int $dmg, int $cost)
   {
      $this->maxHp = $maxHp;
      $this->speed = $speed;
      $this->dmg = $dmg;
      $this->cost = $cost;
   }

   public function getMaxHp()
   {
      return $this->maxHp;
   }

   public function getSpeed()
   {
      return $this->speed;
   }

   public function getDmg()
   {
      return $this->dmg;
   }

   public function getCost()
   {
      return $this->cost;
   }
}