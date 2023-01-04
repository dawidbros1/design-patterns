<?php

declare(strict_types=1);

namespace App\Factory;

abstract class Factory
{
   abstract public static function createInfantryUnit(string $type);
   abstract public static function createMechanizedUnit(string $type);
}