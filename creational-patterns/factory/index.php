<?php

declare(strict_types=1);

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/../../Utils/debug.php";

use App\Unit\UnitType;
use App\Factory\BlueFactory;
use App\Factory\RedFactory;

class Main
{
    public function run()
    {
        $blueTank = BlueFactory::createMechanizedUnit(UnitType::TANK);
        $blueSoldier = BlueFactory::createInfantryUnit(UnitType::SOLDIER);

        $redTank = RedFactory::createMechanizedUnit(UnitType::TANK);
        $redSoldier = RedFactory::createInfantryUnit(UnitType::SOLDIER);
    }
}

(new Main())->run();