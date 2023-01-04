<?php

declare(strict_types=1);

namespace App\UnitStats;

abstract class UnitStatsRepository
{
   private static $archerUnitStats = null;

   private static $tankUnitStats = null;

   private static $soldierUnitStats = null;

   public static function getArcherStats()
   {
      if (self::$archerUnitStats == null) {
         self::$archerUnitStats = new UnitStats(100, 25, 10, 250);
      }

      return self::$archerUnitStats;
   }

   public static function getTankStats(): ? UnitStats
   {
      if (self::$tankUnitStats == null) {
         self::$tankUnitStats = new UnitStats(1000, 250, 5, 10000);
      }

      return self::$tankUnitStats;
   }

   public static function getSoldierStats(): ? UnitStats
   {
      if (self::$soldierUnitStats == null) {
         self::$soldierUnitStats = new UnitStats(125, 25, 75, 25);
      }

      return self::$soldierUnitStats;
   }
}