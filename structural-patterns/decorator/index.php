<?php

declare(strict_types=1);

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/../../Utils/debug.php";

use App\Terrain\Plain;
use App\Terrain\Hill;
use App\Terrain\Terrain;
use App\Decorator\SwampDecorator;
use App\Decorator\ForestDecorator;

// Mamy grę stategiczną i chcemy wygenerować tam mapę

class Main
{
    private Terrain $terrain;

    public function run()
    {
        self::generateMap();
    }

    private static function generateMap()
    {
        $plain = new Plain();
        $hill = new Hill();
        $swampHill = new SwampDecorator(new Hill());
        $swampForestPlain = new SwampDecorator(new ForestDecorator(new Plain()));

        $plain->show();
        $hill->show();
        $swampHill->show();
        $swampForestPlain->show();

        // dump($swampHill->fuelCost());
        // $terrain1 = new ForestHill();
        // $terrain1 = new ForestHill();
    }
}

(new Main())->run();