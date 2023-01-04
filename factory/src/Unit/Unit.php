<?php

declare(strict_types=1);

namespace App\Unit;

abstract class Unit
{
   protected int $hp;

   protected int $exp;

   protected int $dmg;

   public function __construct(int $hp, int $exp, int $dmg)
   {
      $this->hp = $hp;
      $this->exp = $exp;
      $this->dmg = $dmg;

      dump($this);
   }

   public function getHp()
   {
      return $this->hp;
   }

   public function getExp()
   {
      return $this->exp;
   }

   public function getDmg()
   {
      return $this->dmg;
   }
}