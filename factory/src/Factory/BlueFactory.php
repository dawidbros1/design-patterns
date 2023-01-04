<?php

declare(strict_types=1);

namespace App\Factory;

use App\Unit\Soldier;
use App\Unit\Tank;
use App\Unit\UnitType;

class BlueFactory extends Factory
{
   public static function createInfantryUnit(string $type)
   {
      switch ($type) {
         case UnitType::SOLDIER:
            return new Soldier(25, 0, 5);
         default:
            print_r("ERROR - INVALID UNIT TYPE");
      }
   }
   public static function createMechanizedUnit(string $type)
   {
      switch ($type) {
         case UnitType::TANK:
            return new Tank(100, 0, 25);
         default:
            print_r("ERROR - INVALID UNIT TYPE");
      }
   }
}