<?php

declare(strict_types=1);

namespace App\Factory;

use App\Unit\Soldier;
use App\Unit\Tank;
use App\Unit\UnitType;

class RedFactory extends Factory
{
   public static function createInfantryUnit(string $type)
   {
      switch ($type) {
         case UnitType::SOLDIER:
            return new Soldier(30, 0, 4);
         default:
            print_r("ERROR - INVALID UNIT TYPE");
      }
   }
   public static function createMechanizedUnit(string $type)
   {
      switch ($type) {
         case UnitType::TANK:
            return new Tank(75, 0, 50);
         default:
            print_r("ERROR - INVALID UNIT TYPE");
      }
   }
}